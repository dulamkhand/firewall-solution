<?php

class myUser extends sfBasicSecurityUser
{
    public function signIn($admin)
    {
      $this->setAuthenticated(true);
      $this->addCredential('admin-simpedil');
      
      $this->setAttribute('user_id', $admin->getId());
      $this->setAttribute('email', $admin->getEmail());
    }
  
    public function signOut()
    {
      $this->clearCredentials();
      $this->setAuthenticated(false);
    }
  
    public function getId()
    {
      return $this->getAttribute('user_id', 0);
    }

    public function getUsername()
    {
      return $this->getAttribute('username', '');
    }
    
    public function getInstance()
    {
      return Doctrine::getTable('User')->find($this->getId());
    }

}