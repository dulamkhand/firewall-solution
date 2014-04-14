<?php

/**
 * Page form.
 *
 * @package    zzz
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['title_ru'],$this['content_ru'],$this['on_home']);
    
    	# WIDGETS
    	$choices = array('aboutus'=>'Бидний тухай', 'gypsum'=>'Гипсон хавтан');
      $this->widgetSchema['type']       = new sfWidgetFormChoice(array('choices'=>$choices), array('style'=>'width:400px;'));
      $this->widgetSchema['title']      = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['image']      = new sfWidgetFormInputFile(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['title_en']   = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
    	$this->widgetSchema['content']    = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>270));
    	$this->widgetSchema['content_en'] = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>270));    	
      
    	# VALIDATORS
    	$this->validatorSchema['type']    = new sfValidatorPass();
    	$this->validatorSchema['title']   = new sfValidatorString(array(), array());
    	$this->validatorSchema['title_en']= new sfValidatorString(array(), array());
    	$this->validatorSchema['content'] = new sfValidatorPass();
    	$this->validatorSchema['content_en']  = new sfValidatorPass();
    	$this->validatorSchema['image']   = new sfValidatorFile($this->getFileAttrs('page'), $this->getFileOpts());
  }

}