<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class serviceActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
        $this->pager = Doctrine::getTable('Service')->getPager(array(), $request->getParameter('page',1));
    }
    
  
    public function executeNew(sfWebRequest $request)
    {
        $this->form = new ServiceForm();
    }
  
    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
    
        $this->form = new ServiceForm();
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('new');
    }
  
    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($service = Doctrine::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ServiceForm($service);
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($service = Doctrine::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ServiceForm($service);
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('edit');
    }
  
    public function executeDelete(sfWebRequest $request)
    {
        $this->forward404Unless($service = Doctrine::getTable('Service')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $service->delete();
          $this->getUser()->setFlash('success', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'service/index');
    }
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $service = $form->save();
          $this->getUser()->setFlash('success', 'Амжилттай хадгалагдлаа.', true);
          $this->redirect($request->getReferer() ? $request->getReferer() : 'service/index');
        }
    }

}