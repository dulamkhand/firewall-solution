<?php

/**
 * spec actions.
 *
 * @package    vogue
 * @subpackage spec
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class specActions extends sfActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$params = array();
		if($request->getParameter('s')) $params['specKeyword'] = $request->getParameter('s');
		$this->pager = GlobalTable::getPager('Spec', $params);
	}

	public function executeNew(sfWebRequest $request)
	{
		$this->form = new SpecForm();
	}

	public function executeCreate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST));

		$this->form = new SpecForm();

		$this->processForm($request, $this->form);

		$this->setTemplate('new');
	}

	public function executeEdit(sfWebRequest $request)
	{
		$this->forward404Unless($spec = Doctrine_Core::getTable('Spec')->find(array($request->getParameter('id'))), sprintf('Object spec does not exist (%s).', $request->getParameter('id')));
		$this->form = new SpecForm($spec);
	}

	public function executeUpdate(sfWebRequest $request)
	{
		$this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
		$this->forward404Unless($spec = Doctrine_Core::getTable('Spec')->find(array($request->getParameter('id'))), sprintf('Object spec does not exist (%s).', $request->getParameter('id')));
		$this->form = new SpecForm($spec);

		$this->processForm($request, $this->form);

		$this->setTemplate('edit');
	}

	public function executeDelete(sfWebRequest $request)
	{
		$this->forward404Unless($spec = Doctrine_Core::getTable('Spec')->find(array($request->getParameter('id'))), sprintf('Object spec does not exist (%s).', $request->getParameter('id')));
		$spec->delete();

		$this->getUser()->setFlash('success', 'Амжилттай устлаа.', true);

		$this->redirect('spec/index');
	}

	protected function processForm(sfWebRequest $request, sfForm $form)
	{
		$form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
		if ($form->isValid())
		{
			$spec = $form->save();

			//GlobalLib::createThumbs($spec->getFilename(), 'b', array(780), false);

			$this->getUser()->setFlash('success', 'Амжилттай хадгалагдлаа.', true);
			$this->redirect('spec/index');
		}
	}

}