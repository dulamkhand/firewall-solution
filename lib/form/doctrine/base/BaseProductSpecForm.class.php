<?php

/**
 * ProductSpec form base class.
 *
 * @method ProductSpec getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductSpecForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'product_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'model_id'   => new sfWidgetFormInputText(),
      'spec_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Spec'), 'add_empty' => false)),
      'sort'       => new sfWidgetFormInputText(),
      'body'       => new sfWidgetFormTextarea(),
      'body_en'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'product_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'model_id'   => new sfValidatorInteger(),
      'spec_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Spec'))),
      'sort'       => new sfValidatorInteger(),
      'body'       => new sfValidatorString(array('max_length' => 2000)),
      'body_en'    => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_spec[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductSpec';
  }

}
