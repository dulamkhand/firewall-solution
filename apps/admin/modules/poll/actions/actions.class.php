<?php

/**
 * poll actions.
 *
 * @package    khas
 * @subpackage poll
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class pollActions extends sfActions
{
  public function preExecute()
  {
  }
  
  public function executeIndex(sfWebRequest $request)
  {
    $this->polls = Doctrine::getTable('Poll')->createQuery()->execute();
  }
  
  
  public function executeActivate(sfWebRequest $request)
  {
    $a = $request->getParameter('a');
    $this->forward404Unless(in_array($a, array(0, 1)));
    $this->forward404Unless($poll = Doctrine_Core::getTable('Poll')->find(array($request->getParameter('id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('id')));
    
    $poll->setIsActive($a);
    $poll->save();

    $this->redirect('poll/index');
  }
  
  
  
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PollForm();
  }

  public function executeOptionNew(sfWebRequest $request)
  {
    $this->forward404Unless($this->poll = $poll = Doctrine_Core::getTable('Poll')->find(array($request->getParameter('poll_id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('poll_id')));
    $this->form = new PollOptionForm(null, array('poll_id'=>$poll->getId()));
  }

  
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PollForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
  
  public function executeOptionCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $values = $request->getParameter('poll_option');
    
    $this->forward404Unless($this->poll = $poll = Doctrine_Core::getTable('Poll')->find(array($values['poll_id'])), sprintf('Object poll does not exist (%s).', $request->getParameter('poll_id')));

    $this->form = new PollOptionForm(null, array('poll_id'=>$poll->getId()));

    $this->processOptionForm($request, $this->form);

    $this->setTemplate('optionNew');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($poll = Doctrine_Core::getTable('Poll')->find(array($request->getParameter('id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('id')));
    $this->form = new PollForm($poll);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($poll = Doctrine_Core::getTable('Poll')->find(array($request->getParameter('id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('id')));
    $this->form = new PollForm($poll);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $this->forward404Unless($poll = Doctrine_Core::getTable('Poll')->find(array($request->getParameter('id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('id')));
    try {
      $poll->delete();  
    }catch (Exception $e){}

    $this->redirect('poll/index');
  }
  
  public function executeOptionDelete(sfWebRequest $request)
  {
    $this->forward404Unless($option = Doctrine_Core::getTable('PollOption')->find(array($request->getParameter('id'))), sprintf('Object poll does not exist (%s).', $request->getParameter('id')));
    $pollId = $option->getPollId();
    try {
      $option->delete();  
    }catch (Exception $e){}

    $this->redirect('poll/optionNew?poll_id='.$pollId);
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $poll = $form->save();
      
      $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);

      $this->redirect('poll/optionNew?poll_id='.$poll->getId());
    }

  }
  
  
  protected function processOptionForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pollOption = $form->save();
      
      $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);

      $this->redirect('poll/optionNew?poll_id='.$pollOption->getPollId());
    }

  }

}