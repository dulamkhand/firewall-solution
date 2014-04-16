<?php

/**
 * Product form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at'],$this['color'],$this['is_featured']);
    
    	# WIDGETS
      $this->widgetSchema['title']     = new sfWidgetFormInputText(array(), array('style'=>''));
      $this->widgetSchema['title_en']  = new sfWidgetFormInputText(array(), array('style'=>''));
      $this->widgetSchema['code']      = new sfWidgetFormInputText(array(), array('style'=>'width:100px'));
      $this->widgetSchema['body']         = new sfWidgetFormFCKEditor(array('width'=>650, 'height'=>270));
    	$this->widgetSchema['body_en']      = new sfWidgetFormFCKEditor(array('width'=>650, 'height'=>270));
    	$this->widgetSchema['summary']      = new sfWidgetFormTextarea(array(), array('style'=>'width:300px'));
    	$this->widgetSchema['summary_en']   = new sfWidgetFormTextarea(array(), array('style'=>'width:300px'));
    	//$this->widgetSchema['color']      	= new sfWidgetFormInputText(array(), array('style'=>'width:100px'));
    	$this->widgetSchema['rental_cost']  = new sfWidgetFormInputText(array(), array('style'=>'width:100px'));

      $this->widgetSchema['image']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image1']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image2']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image3']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image4']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image5']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image6']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image7']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['image8']       = new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
      $this->widgetSchema['pdf']       		= new sfWidgetFormInputFile(array(), array('style'=>'width:100px;'));
    	$this->widgetSchema['video']      	= new sfWidgetFormTextarea(array(), array('style'=>'width:450px;height:60px;'));
    	$this->widgetSchema['keywords']     = new sfWidgetFormTextarea(array(), array('style'=>'width:650px;height:60px;'));
    	$this->widgetSchema['has_leasing']  = new sfWidgetFormInputCheckbox(array(), array('value'=>1));
    	

    	# VALIDATORS
    	$this->validatorSchema['category_id'] = new sfValidatorInteger(array(), array());
    	$this->validatorSchema['title']       = new sfValidatorString(array(), array());
    	$this->validatorSchema['title_en']    = new sfValidatorString(array(), array());
    	$this->validatorSchema['code']    		= new sfValidatorPass();
    	$this->validatorSchema['summary']     = new sfValidatorPass();
    	$this->validatorSchema['summary_en']  = new sfValidatorPass();
    	$this->validatorSchema['body']        = new sfValidatorPass();
    	$this->validatorSchema['body_en']     = new sfValidatorPass();
    	
    	$this->validatorSchema['image']        = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image1']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image2']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image3']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image4']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image5']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image6']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image7']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['image8']       = new sfValidatorFile($this->getFileAttrs('p'), $this->getFileOpts());
    	$this->validatorSchema['pdf']       	 = new sfValidatorFile($this->getFileAttrs('p', false, 20, array('application/pdf','application/pdfx','application/x-pdf','xls/application/vnd.ms-excel','application/msword','application/vnd.ms-powerpoint','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')), $this->getFileOpts('20MB', 'pdf, docx, doc, xlsx, xls, pptx, ppt'));
			$this->validatorSchema['video']        = new sfValidatorPass();
			$this->validatorSchema['keywords']     = new sfValidatorPass();
			$this->validatorSchema['has_leasing']  = new sfValidatorPass();
			//$this->validatorSchema['color']  			 = new sfValidatorPass();
			$this->validatorSchema['rental_cost']  = new sfValidatorInteger(array('required'=>false));

			$this->widgetSchema->setHelp('has_leasing', 'Түрээс-д харуулах эсэх');    	
      $this->widgetSchema->setHelp('image', 'Үндсэн зураг');
      $this->widgetSchema->setHelp('image1', '400x400px - png | gif | jpg');
      $this->widgetSchema->setHelp('rental_cost', '₮/сараар');      
      $this->widgetSchema->setHelp('pdf', 'max 20MB - pdf | pdfx | doc | docx | xls | xlsx | ppt | pttx');      
      $this->widgetSchema->setHelp('video', '<br/>Зурагт үзүүлснээр хэмжээг сонгож embedcode-г оруулна -->');
      
      $this->widgetSchema->setLabel('has_leasing', 'Rent');
  }

}