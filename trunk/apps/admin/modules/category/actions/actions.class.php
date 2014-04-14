<?php

/**
 * category actions.
 *
 * @package    zzz
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  function preExecute() {
  }

  public function executeList(sfWebRequest $request) {

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProductCategoryForm();
    $this->setTemplate('edit');
  }


  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProductCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($category = Doctrine::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductCategoryForm($category, array());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($category = Doctrine::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProductCategoryForm($category, array());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->forward404Unless($category = Doctrine::getTable('ProductCategory')->find(array($request->getParameter('id'))), sprintf('Object category does not exist (%s).', $request->getParameter('id')));

    // TODO: cannot delete non empty category
    $category->delete();

    $this->getUser()->setFlash('flash', 'Successfully deleted.', true);
    $this->redirect('category/list');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $category = $form->save();
      $this->getUser()->setFlash('flash', 'Successfully saved.', true);
      $this->redirect('category/list');
    }
  }


}