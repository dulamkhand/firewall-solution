<?php

/**
 * Poll form.
 *
 * @package    icoke
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PollForm extends BasePollForm
{
  public function configure()
  {
      $this->disableCSRFProtection();
      
      unset($this['id'],$this['created_at'], $this['question_ru']);
    
    	# WIDGETS
    	$this->widgetSchema['question']    = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));
    	$this->widgetSchema['question_en']    = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));    	
    	$this->widgetSchema['sort']   		 = new sfWidgetFormInputText(array(), array('style'=>'width:50px;'));
    	  	
      	# VALIDATORS
    	$this->validatorSchema['question']  = new sfValidatorString(array(), array());
    	$this->validatorSchema['question_en']  = new sfValidatorString(array(), array());
    	$this->validatorSchema['sort']  	  = new sfValidatorInteger(array('required'=>false), array());
  }


}