<?php

/**
 * ProductCategory form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductCategoryForm extends BaseProductCategoryForm
{
	  public function configure()
	  {
	  		$choices = GlobalTable::doFetchSelection('ProductCategory', 'name',  array('parentId'=>'0', 'orderBy'=>'sort DESC, name ASC'));
	  		$choices[0] = ' -- ';
	  		$this->widgetSchema['parent_id']  = new sfWidgetFormChoice(array('choices'=>$choices), array('style'=>''));
	  		$this->widgetSchema['name']       = new sfWidgetFormInputText(array(), array('style'=>''));
	      $this->widgetSchema['name_en']    = new sfWidgetFormInputText(array(), array('style'=>''));
	      $this->widgetSchema['has_leasing']= new sfWidgetFormInputCheckbox(array(), array('value'=>1));
	      
	      # VALIDATORS
      	$this->validatorSchema['name']    = new sfValidatorString(array(), array());
      	$this->validatorSchema['name_en'] = new sfValidatorString(array(), array());
      	$this->validatorSchema['sort']    = new sfValidatorPass();
      	$this->validatorSchema['has_leasing'] = new sfValidatorPass();
      	
      	$this->widgetSchema->setHelp('has_leasing', 'Түрээс-д харуулах эсэх');
      	$this->widgetSchema->setLabel('has_leasing', 'Rent');
	  }
}
