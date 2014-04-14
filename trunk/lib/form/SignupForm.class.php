<?php

/**
 * User form.
 *
 * @package    zzz
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SignupForm extends BaseUserForm
{
  protected $_object;
  
  public function getObject1()
  {
    return $this->_object;
  }
  
  public function configure()
  {
      unset($this['id'],$this['username'],$this['initial'],$this['fullname'], $this['lastname'], 
            $this['avator'],$this['path'], $this['filename'],$this['gender'],$this['birth_date'],
            $this['mobile'],$this['phone'],$this['post'],$this['web'],
            $this['country_id'],$this['province_id'],$this['unit_id'],
            $this['registery_id'], $this['personal_id'],$this['ip_address'], $this['level'],
            $this['created_at'], $this['updated_at'], $this['logged_at'],$this['is_subscribed'],$this['is_active'],$this['code'], $this['organization_id'], $this['organization_name'], $this['is_org']
              );

            
      // WIDGETS
      $this->widgetSchema['firstname']    = new sfWidgetFormInputText(array(), array('class'=>'gray'));
      $this->widgetSchema['email']        = new sfWidgetFormInputText(array(), array('class'=>'gray'));
      $this->widgetSchema['password']     = new sfWidgetFormInputPassword(array(), array('class'=>'gray'));
      

      // VALIDATORS
      $this->validatorSchema['email']     = new sfValidatorAnd(
        array(
          new sfValidatorEmail(array(), array('invalid'=>'Буруу и-мэйл хаяг оруулсан байна.')),
          new sfValidatorCallback(array('callback' => array($this, 'validateUniqueEmail')), array()),
        ),
        array('halt_on_error' => false),
        array('invalid'=>'Ийм и-мэйл хаяг өмнө нь бүртгэгдсэн байна.', 'required'=>'Та и-мэйл хаягаа оруулна уу.')
      );
      $this->validatorSchema['firstname'] = new sfValidatorString(array(), array('required'=>'Нэрээ оруулна уу.'));
      $this->validatorSchema['password']  = new sfValidatorString(array(), array('required'=>'Нууц үгээ оруулна уу.'));
      
      // LABELS
      $this->widgetSchema->setLabel('password', 'Нууц үг *');
      $this->widgetSchema->setLabel('email', 'И-мэйл *');
      $this->widgetSchema->setLabel('firstname', 'Нэр *');
      
      $this->widgetSchema->setNameFormat('register[%s]');
  }
  
  public function validateUniqueEmail($validator, $value)
  {
    $user = Doctrine::getTable('User')->findByEmail($value);
    if ($user)
    {
      throw new sfValidatorError($validator, 'Ийм и-мэйл хаяг өмнө нь бүртгэгдсэн байна.');
    }
    return $value;
  }


}