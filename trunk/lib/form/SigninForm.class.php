<?php

/**
 * User form.
 *
 * @package    zzz
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SigninForm extends BaseUserForm
{
  protected $_object;
  
  public function getObject1()
  {
      return $this->_object;
  }
  
  public function configure()
  {
      ProjectConfiguration::getApplicationConfiguration('front', 'dev', true)->loadHelpers('I18N');

      unset($this['id'],$this['username'],$this['avator'],
            $this['lastname'],$this['firstname'],$this['birthday'],$this['position'],$this['profession'],$this['phone'],
            $this['gender'],$this['registery_number'],$this['address'],$this['city'],$this['activation_code'],
            $this['created_at'],$this['updated_at'],$this['logged_at'], $this['is_active'],$this['id_admin']);
      
      // WIDGETS
      $this->widgetSchema['email']        = new sfWidgetFormInputText(array(), array('size'=>30));
      $this->widgetSchema['password']     = new sfWidgetFormInputPassword(array(), array('size'=>30));
      
      // VALIDATORS
      $this->validatorSchema['email']    = new sfValidatorCallback(array('required'=>true, 'callback' => array($this, 'validateEmail')), array('required'=>__('Required.')));
      $this->validatorSchema['password'] = new sfValidatorCallback(array('required'=>true, 'callback' => array($this, 'validatePassword')), array('required'=>__('Required.')));
      
      // LABELS
      $this->widgetSchema->setLabel('email', __('Email'));
      $this->widgetSchema->setLabel('password', __('Password'));
  }
  
  
  public function validateEmail($validator, $value)
  {
    $user = Doctrine::getTable('User')->findByEmail($value);
    if (!$user)
    {
      
      throw new sfValidatorError($validator, __('Email could not found.'));
    }
    $this->_object = $user;

    return $value;
  }

  public function validatePassword($validator, $value)
  {
    if($user = $this->_object)
    {
      if($user->getPassword() != md5($value))
      //if($user->getPassword() != ($value))
      {
        throw new sfValidatorError($validator, __('Invalid password.'));
      }
    }
    return $value;
  }


}