<?php

/**
 * PollOption form.
 *
 * @package    icoke
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PollOptionForm extends BasePollOptionForm
{
  public function configure()
  {
      $this->disableCSRFProtection();
      
      unset($this['id'], $this['number'], $this['text_ru']);
      
    	# WIDGETS
    	$this->widgetSchema['text']    = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));
    	$this->widgetSchema['text_en']    = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));
    	$this->widgetSchema['sort']    = new sfWidgetFormInputText(array(), array('style'=>'width:50px;', 'value'=>1));
    	$this->widgetSchema['poll_id'] = new sfWidgetFormInputHidden(array(), array('value'=>$this->getOption('poll_id')));
    	  	
      	# VALIDATORS
    	$this->validatorSchema['text']    = new sfValidatorString(array(), array());
    	$this->validatorSchema['text_en']    = new sfValidatorString(array(), array());
    	$this->validatorSchema['sort']    = new sfValidatorInteger(array('required'=>false), array('invalid'=>'blah'));
    	$this->validatorSchema['poll_id'] = new sfValidatorPass();
  }

}