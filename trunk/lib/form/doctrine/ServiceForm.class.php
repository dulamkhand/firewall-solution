<?php

/**
 * Service form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiceForm extends BaseServiceForm
{
  public function configure()
  {
    
      unset($this['id'],$this['created_at'],$this['title_ru'],$this['summary_ru'],$this['body_ru']);
    
    	# WIDGETS      
      $this->widgetSchema['title']       = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['title_en']    = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      
      $this->widgetSchema['image']       = new sfWidgetFormInputFile(array(), array());
      $this->widgetSchema['summary']     = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:120px;'));
      $this->widgetSchema['summary_en']  = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:120px;'));
      
    	$this->widgetSchema['body']        = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>250));
    	$this->widgetSchema['body_en']     = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>250));
    	
    	
    	$this->widgetSchema['color']       = new sfWidgetFormInputText(array(), array('style'=>'width:100px;'));
    	$this->widgetSchema['sort']        = new sfWidgetFormInputText(array(), array('style'=>'width:100px;'));
    	
    	# VALIDATORS
    	$this->validatorSchema['title']       = new sfValidatorString(array(), array());
    	$this->validatorSchema['title_en']    = new sfValidatorString(array(), array());
    	$this->validatorSchema['summary']     = new sfValidatorPass();
    	$this->validatorSchema['summary_en']  = new sfValidatorPass();
    	$this->validatorSchema['body']        = new sfValidatorPass();
    	$this->validatorSchema['body_en']     = new sfValidatorPass();
    	$this->validatorSchema['color']       = new sfValidatorPass();
    	$this->validatorSchema['sort']        = new sfValidatorPass();
    	$this->validatorSchema['image']       = new sfValidatorFile($this->getFileAttrs('s'), $this->getFileOpts());

      $this->widgetSchema->setHelp('image', '300x300px - png | gif | jpg');
      $this->widgetSchema->setHelp('color', 'Color Code - <a href="http://www.pagetutor.com/common/bgcolors1536.png">http://www.pagetutor.com/common/bgcolors1536.png</a>');
    	
  }
}
