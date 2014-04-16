<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
        $this->pager = Doctrine::getTable('Page')->getPager(array('type'=>$request->getParameter('type')), 
                $request->getParameter('page',1));
    }
    
  
    public function executeNew(sfWebRequest $request)
    {
        $this->form = new PageForm();
    }
  
    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
    
        $this->form = new PageForm();
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('new');
    }
  
    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($page = Doctrine::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new PageForm($page);
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($page = Doctrine::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new PageForm($page);
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('edit');
    }
  
    /*public function executeDelete(sfWebRequest $request)
    {
        $this->forward404Unless($page = Doctrine::getTable('Page')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $page->delete();
          $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'page/index');
    }*/
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $page = $form->save();
          
          if($page->getImage() && !file_exists(sfConfig::get('sf_upload_dir').'/page/t350-'.$page->getImage()))
		          GlobalLib::createThumbs($page->getImage(), 'page', array(350), false);
          
          $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
          $this->redirect($request->getReferer() ? $request->getReferer() : 'page/index?type='.$page->getType());
        }
    }

}