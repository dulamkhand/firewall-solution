<?php

/**
 * ProductOrder form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductOrderForm extends BaseProductOrderForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['category_id']);
    
      sfProjectConfiguration::getActive()->loadHelpers(array('I18N'));

    	# WIDGETS
      $this->widgetSchema['organization'] = new sfWidgetFormInputText(array(), array('class'=>'field', 'id'=>'order_organization', 'style'=>'width:259px;'));
      $this->widgetSchema['position']   = new sfWidgetFormInputText(array(), array('class'=>'field', 'id'=>'order_position'));
      $this->widgetSchema['product_id'] = new sfWidgetFormInputHidden(array(), array('value'=>$this->getOption('productId')));
      $this->widgetSchema['name']       = new sfWidgetFormInputText(array(), array('class'=>'field', 'id'=>'order_name'));
      $this->widgetSchema['email']      = new sfWidgetFormInputText(array(), array('class'=>'field', 'id'=>'order_email'));
      $this->widgetSchema['phone']      = new sfWidgetFormInputText(array(), array('class'=>'field', 'id'=>'order_phone'));
    	$this->widgetSchema['message']    = new sfWidgetFormTextarea(array(), array('class'=>'field', 'style'=>'width:259px;height:80px;', 'id'=>'order_message'));

    	# VALIDATORS
    	$required = __('Required');
    	$this->validatorSchema['organization'] = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['position'] = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['name']    = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['email']   = new sfValidatorEmail(array('required'=>$required), array('invalid'=>__('Invalid Email')));
    	$this->validatorSchema['phone']   = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['message'] = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['product_id'] = new sfValidatorPass();
    	
    	#DEFAULTS
    	$this->widgetSchema->setDefault('organization', __('Organization').' *');
    	$this->widgetSchema->setDefault('product_id', $this->getOption('productId'));
    	$this->widgetSchema->setDefault('position', __('Position').' *');
    	$this->widgetSchema->setDefault('name', __('Your name'));
    	$this->widgetSchema->setDefault('email', __('Email').' *');
      $this->widgetSchema->setDefault('phone', __('Phone'));
      $this->widgetSchema->setDefault('message', __('Message').' *');
  }

}
