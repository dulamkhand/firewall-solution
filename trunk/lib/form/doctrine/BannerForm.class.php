<?php

/**
 * Banner form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BannerForm extends BaseBannerForm
{
  public function configure()
  {
      unset($this['id'],$this['created_at']);
    
    	# WIDGETS
    	$this->widgetSchema['filename']    = new sfWidgetFormInputFile(array(), array());
      $this->widgetSchema['sort']        = new sfWidgetFormInputText(array(), array('style'=>'width:50px;'));

    	# VALIDATORS
    	$this->validatorSchema['sort']     = new sfValidatorPass();
    	$this->validatorSchema['filename'] = new sfValidatorFile($this->getFileAttrs('b'), $this->getFileOpts());

      $this->widgetSchema->setHelp('filename', '970px × 280px - png | gif | jpg');
  }


}