<?php

/**
 * Content form base class.
 *
 * @method Content getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormInputText(),
      'title_en'     => new sfWidgetFormInputText(),
      'image'        => new sfWidgetFormInputText(),
      'body'         => new sfWidgetFormTextarea(),
      'body_en'      => new sfWidgetFormTextarea(),
      'is_active'    => new sfWidgetFormInputCheckbox(),
      'is_featuired' => new sfWidgetFormInputCheckbox(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_en'     => new sfValidatorString(array('max_length' => 255)),
      'image'        => new sfValidatorString(array('max_length' => 255)),
      'body'         => new sfValidatorString(array('required' => false)),
      'body_en'      => new sfValidatorString(),
      'is_active'    => new sfValidatorBoolean(),
      'is_featuired' => new sfValidatorBoolean(),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Content';
  }

}
