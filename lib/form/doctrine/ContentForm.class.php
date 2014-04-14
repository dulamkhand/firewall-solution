<?php

/**
 * Content form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContentForm extends BaseContentForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['type']);
    
    	# WIDGETS
      $this->widgetSchema['title']       = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['title_en']       = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['image']       = new sfWidgetFormInputFile(array(), array());
    	$this->widgetSchema['body']        = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>270));
    	$this->widgetSchema['body_en']        = new sfWidgetFormFCKEditor(array('width'=>700, 'height'=>270));

    	# VALIDATORS
    	$this->validatorSchema['title']       = new sfValidatorString(array(), array());
    	$this->validatorSchema['title_en']       = new sfValidatorString(array(), array());
    	$this->validatorSchema['body']        = new sfValidatorPass();
    	$this->validatorSchema['body_en']        = new sfValidatorPass();
    	$this->validatorSchema['image']       = new sfValidatorFile(
                                                  array('required' => false,
                                                      'path'       => sfConfig::get("sf_upload_dir")."/c",
                                                      'max_size'   => 209715200,
                                                      'mime_types' =>  array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif',)),
                                                  array(
                                                      'max_size'   => 'Файлын х�?мж�?�? хамгийн ихд�?�? 8MB байна',
                                                      'mime_types' => 'Дараах өргөтгөлт�?й файлууд зөвшөөрөгдөнө: jpg, png, gif'));


      $this->widgetSchema->setHelp('image', '300x300px - png | gif | jpg');
  }

}