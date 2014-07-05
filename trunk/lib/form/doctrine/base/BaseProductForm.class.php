<?php

/**
 * Product form base class.
 *
 * @method Product getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'title'       => new sfWidgetFormInputText(),
      'title_en'    => new sfWidgetFormInputText(),
      'code'        => new sfWidgetFormInputText(),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ProductCategory'), 'add_empty' => false)),
      'summary'     => new sfWidgetFormInputText(),
      'summary_en'  => new sfWidgetFormInputText(),
      'image'       => new sfWidgetFormInputText(),
      'image1'      => new sfWidgetFormInputText(),
      'image2'      => new sfWidgetFormInputText(),
      'image3'      => new sfWidgetFormInputText(),
      'image4'      => new sfWidgetFormInputText(),
      'image5'      => new sfWidgetFormInputText(),
      'image6'      => new sfWidgetFormInputText(),
      'image7'      => new sfWidgetFormInputText(),
      'image8'      => new sfWidgetFormInputText(),
      'body'        => new sfWidgetFormTextarea(),
      'body_en'     => new sfWidgetFormTextarea(),
      'pdf'         => new sfWidgetFormInputText(),
      'video'       => new sfWidgetFormInputText(),
      'color'       => new sfWidgetFormInputText(),
      'keywords'    => new sfWidgetFormInputText(),
      'has_leasing' => new sfWidgetFormInputText(),
      'rental_cost' => new sfWidgetFormInputText(),
      'sort'        => new sfWidgetFormInputText(),
      'is_featured' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title_en'    => new sfValidatorString(array('max_length' => 255)),
      'code'        => new sfValidatorString(array('max_length' => 20)),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ProductCategory'))),
      'summary'     => new sfValidatorString(array('max_length' => 255)),
      'summary_en'  => new sfValidatorString(array('max_length' => 255)),
      'image'       => new sfValidatorString(array('max_length' => 255)),
      'image1'      => new sfValidatorString(array('max_length' => 255)),
      'image2'      => new sfValidatorString(array('max_length' => 255)),
      'image3'      => new sfValidatorString(array('max_length' => 255)),
      'image4'      => new sfValidatorString(array('max_length' => 255)),
      'image5'      => new sfValidatorString(array('max_length' => 255)),
      'image6'      => new sfValidatorString(array('max_length' => 255)),
      'image7'      => new sfValidatorString(array('max_length' => 255)),
      'image8'      => new sfValidatorString(array('max_length' => 255)),
      'body'        => new sfValidatorString(array('required' => false)),
      'body_en'     => new sfValidatorString(),
      'pdf'         => new sfValidatorString(array('max_length' => 255)),
      'video'       => new sfValidatorString(array('max_length' => 255)),
      'color'       => new sfValidatorString(array('max_length' => 10)),
      'keywords'    => new sfValidatorString(array('max_length' => 255)),
      'has_leasing' => new sfValidatorInteger(),
      'rental_cost' => new sfValidatorNumber(),
      'sort'        => new sfValidatorInteger(),
      'is_featured' => new sfValidatorInteger(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

}
