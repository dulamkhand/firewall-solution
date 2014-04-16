<?php

/**
 * user actions.
 *
 * @package    zzz
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  public function preExecute()
  {
    
  }  

  
  // LOGIN
  public function executeLogin(sfWebRequest $request)
  {
    $form = new LoginForm();

    if ($request->isMethod(sfRequest::POST))
    {
      $form->bind($request->getParameter($form->getName()));


      //checking user login action
      if ($form->isValid())
      {
        $admin = $form->getObject1();
        $this->getUser()->signIn($admin);
        $this->getUser()->setFlash('flash', 'Амжилттай нэвтэрлээ.', true);
        $this->redirect("@homepage");
      }
    }

    $this->form = $form;
  }


  public function executeLogout(sfWebRequest $request)
  {
    $this->getUser()->signOut();
    $this->getUser()->setFlash('flash', 'Холболт амжилттай тасарлаа.', true);
    $this->redirect('@login');
  }
  
  

  public function executeList(sfWebRequest $request)
  {
      $this->users = Doctrine::getTable('User')->createQuery('a')->select('*')->execute();
  }


  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UserForm();
    $this->setTemplate('edit');
  }

  
  public function executeCreate(sfWebRequest $request)
  {
      $this->forward404Unless($request->isMethod(sfRequest::POST));
  
      $this->form = new UserForm();
  
      $this->processForm($request, $this->form);
  
      $this->setTemplate('edit');
  }

  public function executeEdit(sfWebRequest $request)
  {
      $this->forward404Unless($user = Doctrine::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
      $this->form = new UserForm($user, array());
  }


  public function executeUpdate(sfWebRequest $request)
  {
      $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
      $this->forward404Unless($user = Doctrine::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
      $this->form = new UserForm($user, array());
  
      $this->processForm($request, $this->form);
  
      $this->setTemplate('edit');
  }
  


  public function executeDelete(sfWebRequest $request)
  {
      $this->forward404Unless($user = Doctrine::getTable('User')->find(array($request->getParameter('id'))), sprintf('Object user does not exist (%s).', $request->getParameter('id')));
  
      try {
        $user->delete();
        $this->getUser()->setFlash('flash', 'Амжилттай устлаа.', true);
      }catch (Exception  $e){}
  
      $this->redirect('user/list');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
          $isNew = $form->getObject()->isNew();
          $user = $form->save();
          
          if($form->getValue('password')) $user->setPassword(md5($form->getValue('password')));
    
          $date = date('Y-m-d H:i:s');
          $user->setUpdatedAt($date);
          if($isNew) $user->setCreatedAt($date);
          $user->save();
    
          $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
    
          $this->redirect('user/list');
      }
  }



}