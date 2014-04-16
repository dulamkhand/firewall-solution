<?php

/**
 * Image form base class.
 *
 * @method Image getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'title'          => new sfWidgetFormInputText(),
      'title_en'       => new sfWidgetFormInputText(),
      'title_ru'       => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'description_en' => new sfWidgetFormTextarea(),
      'description_ru' => new sfWidgetFormTextarea(),
      'filename'       => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 255)),
      'title_en'       => new sfValidatorString(array('max_length' => 255)),
      'title_ru'       => new sfValidatorString(array('max_length' => 255)),
      'description'    => new sfValidatorString(),
      'description_en' => new sfValidatorString(),
      'description_ru' => new sfValidatorString(),
      'filename'       => new sfValidatorString(array('max_length' => 255)),
      'created_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Image';
  }

}
