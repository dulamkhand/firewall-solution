<?php

/**
 * PollOption form base class.
 *
 * @method PollOption getObject() Returns the current form's model object
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePollOptionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'poll_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Poll'), 'add_empty' => false)),
      'text'    => new sfWidgetFormTextarea(),
      'text_en' => new sfWidgetFormTextarea(),
      'text_ru' => new sfWidgetFormTextarea(),
      'number'  => new sfWidgetFormInputText(),
      'sort'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'poll_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Poll'))),
      'text'    => new sfValidatorString(),
      'text_en' => new sfValidatorString(),
      'text_ru' => new sfValidatorString(),
      'number'  => new sfValidatorInteger(),
      'sort'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('poll_option[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PollOption';
  }

}
