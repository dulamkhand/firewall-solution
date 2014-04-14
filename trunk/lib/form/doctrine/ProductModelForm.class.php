<?php

/**
 * ProductModel form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductModelForm extends BaseProductModelForm
{
  public function configure()
  {
  		unset($this['id']);
    
    	# WIDGETS
      $this->widgetSchema['product_id'] = new sfWidgetFormInputHidden(array(), array('value'=>$this->getOption('productId')));
      $this->widgetSchema['name']       = new sfWidgetFormInputText(array(), array('style'=>''));
      $this->widgetSchema['name_en']    = new sfWidgetFormInputText(array(), array('style'=>''));
			$this->setDefault('product_id', $this->getOption('productId'));
    	
    	# VALIDATORS
    	$this->validatorSchema['name']    = new sfValidatorString(array(), array());
    	$this->validatorSchema['name_en'] = new sfValidatorString(array(), array());
    	$this->validatorSchema['product_id'] = new sfValidatorInteger();
  }
}
