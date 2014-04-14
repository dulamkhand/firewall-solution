<?php

class PasswordForm extends BaseUserForm
{
  public function configure()
  {
    sfForm::disableCSRFProtection();
    sfForm::disableLocalCSRFProtection();
                
    unset($this['id'],$this['email'],$this['username'],$this['password'],$this['firstname'],$this['initial'],$this['fullname'], $this['lastname'], 
            $this['avator'],$this['path'], $this['filename'],$this['gender'],$this['birth_date'],
            $this['mobile'],$this['phone'],$this['post'],$this['web'],$this['ip_address'], $this['level'],
            $this['country_id'],$this['province_id'],$this['unit_id'],$this['registery_id'], $this['personal_id'],
            $this['created_at'], $this['updated_at'], $this['logged_at'],$this['is_subscribed'],$this['is_active'],$this['code'], $this['organization_id'], $this['organization_name'], $this['is_org']);
    
    $this->widgetSchema['current_password'] = new sfWidgetFormInputPassword(array(), array('id'=>'current_password', 'size'=>20, "class"=>"text_field", 'autocomplete'=>'off'));
    $this->widgetSchema['new_password']     = new sfWidgetFormInputPassword(array(), array('id'=>'new_password', 'size'=>20, "class"=>"text_field", 'autocomplete'=>'off'));
    $this->widgetSchema['confirm_password'] = new sfWidgetFormInputPassword(array(), array('id'=>'confirm_password', 'size'=>20, "class"=>"text_field", 'autocomplete'=>'off'));

    $object = $this->getObject();
    $this->validatorSchema['current_password']     = new sfValidatorCallback(array('required' => true, 'callback' => array($this, 'validateCurrentPassword'), 'arguments'=>array('old_password'=>$object->getPassword())));
    $this->validatorSchema['new_password']         = new sfValidatorString();
    $this->validatorSchema['confirm_password']     = new sfValidatorString();
    
    $this->widgetSchema->setLabels(array('current_password' => 'Одоогийн нууц үг *'));
    $this->widgetSchema->setLabels(array('new_password'     => 'Шинэ нууц үг *'));
    $this->widgetSchema->setLabels(array('confirm_password' => 'Шинэ нууц үгээ давтах *'));
    
    $this->getWidgetSchema()->getFormFormatter()->setHelpFormat('%help%');
    
    $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('confirm_password', sfValidatorSchemaCompare::EQUAL, 'new_password', array(), array('invalid' => '&darr;&nbsp; Тохирохгүй байна &nbsp;&darr;')));
  }
  
  public function validateCurrentPassword($validator, $value, $arguments)
  {    
    if ($arguments['old_password'] != md5($value))
    {
      throw new sfValidatorError($validator, 'Invalid.');
    }

    return $value;
  }

}