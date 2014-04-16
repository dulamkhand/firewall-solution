<?php

/**
 * gallery actions.
 *
 * @package    grand
 * @subpackage gallery
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends sfActions
{
  
  public function executeIndex(sfWebRequest $request)
  {
      $this->pager = Doctrine::getTable('Image')->getPager(array(), $request->getParameter('page',1));
  }

  public function executeNew(sfWebRequest $request)
  {
      $this->form = new ImageForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ImageForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImageForm($gallery);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new ImageForm($gallery);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gallery = Doctrine_Core::getTable('Image')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $gallery->delete();
    
    $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);

    $this->redirect('gallery/index');
  }


  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        $gallery = $form->save();
        
        GlobalLib::createThumbs($gallery->getFilename(), 'g', array(120), false);
        
        $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
  
        $this->redirect('gallery/new');
    }

  }
  

}