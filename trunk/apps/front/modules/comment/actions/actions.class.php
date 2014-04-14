<?php

/**
 * page actions.
 *
 * @package    khas
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class commentActions extends sfActions
{
  public function preExecute()
  {
      ProjectConfiguration::getApplicationConfiguration('front', 'dev', true)->loadHelpers('I18N');
  }
  
  public function executeSave(sfWebRequest $request)
  {
    $errorString = __('Error occured. Please try again later.');
    
    if($request->isMethod(sfRequest::POST))
    {
        $objectType = $request->getParameter('commentObjectType');
        $objectId = $request->getParameter('commentObjectId');        
        $name = $request->getParameter('commentName');
        $text = strip_tags($request->getParameter('commentBody'));
        $ipAddress = $request->getRemoteAddress();

        if($text)
        {
            if($text == __("Enter your comment.")) $errorString = __("Enter your comment.");
            else {
              if(!Doctrine::getTable('Comment')->fetchone($ipAddress, $objectType, $objectId, $text))
              {
                $comment = new Comment();
                $comment->setObjectType($objectType);
                $comment->setObjectId($objectId);
                $comment->setCreatedAt(date("Y-m-d H:i:s"));
                $comment->setIpAddress($ipAddress);
                $comment->setName($name);
                $text = mb_convert_encoding(utf8_decode($text), 'UTF-8', 'windows-1251');
                $comment->setText($text);
                $comment->save();
    
                return $this->renderPartial('comment/list', array('comment'=>$comment));

              } else $errorString = __("Duplicated comment.");

            }

        } else $errorString = __("Enter your comment.");
    }

    $str = <<<EOF
             <script type="text/javascript">
               $('#commentError').html("{$errorString}");
             </script>
EOF;
    return $this->renderText($str);
  }
  
  

  public function executeDelete(sfWebRequest $request)
  {
    $comment = Doctrine::getTable('Comment')->find($request->getParameter('commentId'));
    
    if($comment 
       && ($this->getUser()->getId() == $comment->getCreatedBy()) // comment writer
       // TODO: && () // comment owner
      )
    {
      try {
        $comment->delete();
      }catch (Exception $e){}
    }
    return sfView::NONE;
  }

}