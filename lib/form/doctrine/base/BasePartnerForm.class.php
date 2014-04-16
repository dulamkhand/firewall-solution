<?php

/**
 * Partner form base class.
 *
 * @method Partner getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePartnerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'name_en'    => new sfWidgetFormInputText(),
      'name_ru'    => new sfWidgetFormInputText(),
      'image'      => new sfWidgetFormInputText(),
      'address'    => new sfWidgetFormTextarea(),
      'address_en' => new sfWidgetFormInputText(),
      'address_ru' => new sfWidgetFormInputText(),
      'phone'      => new sfWidgetFormInputText(),
      'web'        => new sfWidgetFormInputText(),
      'lat'        => new sfWidgetFormInputText(),
      'lng'        => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'name_en'    => new sfValidatorString(array('max_length' => 255)),
      'name_ru'    => new sfValidatorString(array('max_length' => 255)),
      'image'      => new sfValidatorString(array('max_length' => 255)),
      'address'    => new sfValidatorString(),
      'address_en' => new sfValidatorString(array('max_length' => 255)),
      'address_ru' => new sfValidatorString(array('max_length' => 255)),
      'phone'      => new sfValidatorString(array('max_length' => 255)),
      'web'        => new sfValidatorString(array('max_length' => 255)),
      'lat'        => new sfValidatorString(array('max_length' => 255)),
      'lng'        => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('partner[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Partner';
  }

}
