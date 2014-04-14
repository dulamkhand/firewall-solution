<?php

/**
 * page actions.
 *
 * @package    khas
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class mainActions extends sfActions
{

    public function preExecute()
    {
        ProjectConfiguration::getApplicationConfiguration('front', 'dev', true)->loadHelpers('I18N');
    }
    

    public function executeIndex(sfWebRequest $request)
    {
    }
    
    public function executeGypsum() {
				$this->page = Doctrine::getTable('Page')->findOneBy('type', 'gypsum');
	  }
  
    public function executeAbout(sfWebRequest $request)
    {
        $this->page = Doctrine::getTable('Page')->findOneBy('type', 'aboutus');
    }

    public function executeContact(sfWebRequest $request)
    {
        $form = new FeedbackForm();
        if ($request->isMethod('POST')) 
        {
            $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
            if ($form->isValid())
            {
              $feedback = $form->save();

              // send mail
              $mailBody = $this->getPartial("main/mail", array('feedback'=>$feedback));
              $message = $this->getMailer()->compose(array($feedback->getEmail()), array('info@icon.mn'=>'www.icon.mn'), 'www.icon.mn :: бүтээгдэхүүн захиалга, санал хүсэлт', $mailBody);
              $message->setContentType("text/html");
              $this->getMailer()->send($message);
              
              $this->getUser()->setFlash('success', __('Successfully sent.'), true);
              $this->redirect('@homepage');
            }
        }
        
        $this->form = $form;
    }

    
    public function executeCulture(sfWebRequest $request)
    {
        $culture = in_array($request->getParameter('l'), array('en','mn')) ? $request->getParameter('l') : 'mn';
        $this->getUser()->setCulture($culture);
        $this->getResponse()->setCookie('culture', $culture);
        
        $this->redirect($request->getReferer() ? $request->getReferer() : '@homepage');
    }
    
    public function executeDefault(sfWebRequest $request)
    {    
        $this->setTemplate("default");
        $this->setLayout("layout");
        
        return sfView::SUCCESS;
    }


}