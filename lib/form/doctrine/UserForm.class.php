<?php

/**
 * User form.
 *
 * @package    zzz
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UserForm extends BaseUserForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['updated_at'],$this['logged_at'],$this['is_active'],$this['is_admin'],
            $this['username'],$this['fullname'],$this['mobile'],$this['firstname'],$this['lastname'],$this['activation_code']);

      
      // WIDGETS
      $this->widgetSchema['email']        = new sfWidgetFormInputText(array(), array('size'=>40));
      $this->widgetSchema['password']     = new sfWidgetFormInputPassword(array(), array('size'=>40));
      

      // VALIDATORS
      $required = 'Утга оруулна уу.';
      $this->validatorSchema['email']       = new sfValidatorEmail(array(), array('required'=>$required, 'invalid'=>'Зөв и-мэйл хаяг оруулна уу.'));
      $this->validatorSchema['password']    = new sfValidatorPass();
      

      // LABELS      
      $this->widgetSchema->setLabel('email', 'Имэйл');
      $this->widgetSchema->setLabel('password', 'Нууц үг');
  }
  


}