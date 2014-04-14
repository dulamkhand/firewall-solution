<?php

/**
 * Feedback form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FeedbackForm extends BaseFeedbackForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at']);
    
    	# WIDGETS
      $this->widgetSchema['organization'] = new sfWidgetFormInputText(array(), array('class'=>'field'));
      $this->widgetSchema['name']       = new sfWidgetFormInputText(array(), array('class'=>'field'));
      $this->widgetSchema['email']      = new sfWidgetFormInputText(array(), array('class'=>'field'));
      $this->widgetSchema['phone']      = new sfWidgetFormInputText(array(), array('class'=>'field'));
    	$this->widgetSchema['message']    = new sfWidgetFormTextarea(array(), array('class'=>'field', 'style'=>'height:80px;'));


    	# VALIDATORS
    	$required = __('Required');
    	$this->validatorSchema['organization'] = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['name']    = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['email']   = new sfValidatorEmail(array('required'=>$required), array('invalid'=>__('Invalid Email')));
    	$this->validatorSchema['phone']   = new sfValidatorString(array('required'=>$required), array());
    	$this->validatorSchema['message'] = new sfValidatorString(array('required'=>$required), array());
    	
    	
    	#DEFAULTS
    	$this->widgetSchema->setDefault('organization', __('Organization'));
    	$this->widgetSchema->setDefault('name', __('Your name'));
    	$this->widgetSchema->setDefault('email', __('Email'));
      $this->widgetSchema->setDefault('phone', __('Phone'));
      $this->widgetSchema->setDefault('message', __('About product'));
  }

}