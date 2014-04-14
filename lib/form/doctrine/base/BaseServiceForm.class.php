<?php

/**
 * Service form base class.
 *
 * @method Service getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'title_en'   => new sfWidgetFormInputText(),
      'image'      => new sfWidgetFormInputText(),
      'summary'    => new sfWidgetFormInputText(),
      'summary_en' => new sfWidgetFormInputText(),
      'body'       => new sfWidgetFormTextarea(),
      'body_en'    => new sfWidgetFormTextarea(),
      'color'      => new sfWidgetFormInputText(),
      'sort'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'title_en'   => new sfValidatorString(array('max_length' => 255)),
      'image'      => new sfValidatorString(array('max_length' => 255)),
      'summary'    => new sfValidatorString(array('max_length' => 255)),
      'summary_en' => new sfValidatorString(array('max_length' => 255)),
      'body'       => new sfValidatorString(),
      'body_en'    => new sfValidatorString(),
      'color'      => new sfValidatorString(array('max_length' => 255)),
      'sort'       => new sfValidatorInteger(),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('service[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Service';
  }

}
