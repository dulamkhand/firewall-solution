<?php

/**
 * banner actions.
 *
 * @package    vogue
 * @subpackage banner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bannerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
  	$params = array();
		if($request->getParameter('s')) $params['bannerKeyword'] = $request->getParameter('s');
		$this->banners = GlobalTable::doExecute('Banner', $params);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BannerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BannerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($banner = Doctrine_Core::getTable('Banner')->find(array($request->getParameter('id'))), sprintf('Object banner does not exist (%s).', $request->getParameter('id')));
    $this->form = new BannerForm($banner);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($banner = Doctrine_Core::getTable('Banner')->find(array($request->getParameter('id'))), sprintf('Object banner does not exist (%s).', $request->getParameter('id')));
    $this->form = new BannerForm($banner);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->forward404Unless($banner = Doctrine_Core::getTable('Banner')->find(array($request->getParameter('id'))), sprintf('Object banner does not exist (%s).', $request->getParameter('id')));
    $banner->delete();
    $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);

    $this->redirect('banner/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $banner = $form->save();

      if($banner->getFilename() && !file_exists(sfConfig::get('sf_upload_dir').'/b/t970-'.$banner->getFilename()))
          GlobalLib::createThumbs($banner->getFilename(), 'b', array(970), false);

      $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
      $this->redirect('banner/index');
    }
  }

}