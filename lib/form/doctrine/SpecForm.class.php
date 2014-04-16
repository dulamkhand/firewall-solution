<?php

/**
 * Spec form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SpecForm extends BaseSpecForm
{
	public function configure()
	{
		$this->widgetSchema['name']       = new sfWidgetFormInputText(array(), array('style'=>''));
		$this->widgetSchema['name_en']    = new sfWidgetFormInputText(array(), array('style'=>''));
		
		$this->validatorSchema['name']    = new sfValidatorString(array(), array());
		$this->validatorSchema['name_en'] = new sfValidatorString(array(), array());
		
		$this->widgetSchema->setLabel('name', 'Нэр');
		$this->widgetSchema->setLabel('name_en', 'Name');
		$this->widgetSchema->setLabel('sort', 'Дэс дараалал');
		
		$this->widgetSchema->setHelp('sort', 'Тоо оруулна уу. Тухайн тоогоор буурахаар эрэмбэлэгдэж харагдана.');
	}
}
