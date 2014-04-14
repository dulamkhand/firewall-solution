<?php

/**
 * Image form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ImageForm extends BaseImageForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['title_ru'],$this['description_ru']);
    
    	# WIDGETS
      $this->widgetSchema['title']       = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
      $this->widgetSchema['title_en']       = new sfWidgetFormInputText(array(), array('style'=>'width:400px;'));
    	$this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));
    	$this->widgetSchema['description_en'] = new sfWidgetFormTextarea(array(), array('style'=>'width:400px;height:100px;'));
    	$this->widgetSchema['filename']    = new sfWidgetFormInputFile(array(), array());


    	# VALIDATORS
    	$this->validatorSchema['title']    = new sfValidatorPass();
    	$this->validatorSchema['title_en']    = new sfValidatorPass();
    	$this->validatorSchema['description'] = new sfValidatorPass();
    	$this->validatorSchema['description_en'] = new sfValidatorPass();
    	$this->validatorSchema['filename'] = new sfValidatorFile(
                                                  array('required' => false,
                                                      'path'       => sfConfig::get("sf_upload_dir")."/g",
                                                      'max_size'   => 209715200,
                                                      'mime_types' =>  array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif',)),
                                                  array(
                                                      'max_size'   => 'Файлын хэмжээ хамгийн ихдээ 8MB байна',
                                                      'mime_types' => 'Дараах өргөтгөлтэй файлууд зөвшөөрөгдөнө: jpg, png, gif'));


      $this->widgetSchema->setHelp('image', 'png | gif | jpg');
  }

}
