<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
    		$params = array();
				if($request->getParameter('s')) $params['newsKeyword'] = $request->getParameter('s');
				$this->pager = GlobalTable::getPager('Content', $params);
    }
    
    
    public function executeFeedback(sfWebRequest $request)
    {
    		$params = array();
				if($request->getParameter('s')) $params['orderKeyword'] = $request->getParameter('s');
				$this->pager = GlobalTable::getPager('ProductOrder', $params);
    }
    
    public function executeFdelete(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('ProductOrder')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $content->delete();
          $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect('content/feedback');
    }
    
  
    public function executeNew(sfWebRequest $request)
    {
        $this->form = new ContentForm();
    }
  
    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
    
        $this->form = new ContentForm();
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('new');
    }
  
    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ContentForm($content);
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ContentForm($content);
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('edit');
    }
  
    public function executeDelete(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $content->delete();
          $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'content/index');
    }
    
    
    public function executeDeleteImage(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));

        $content->setImage("");
        $content->save();

        $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'content/index');
    }
    
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $content = $form->save();
          $content->setCreatedAt(date('Y-m-d H:i:s'));
          $content->save();

          $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
          $this->redirect($request->getReferer() ? $request->getReferer() : 'content/index');
        }
    }

}