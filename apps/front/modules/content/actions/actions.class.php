<?php

/**
 * page actions.
 *
 * @package    khas
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class contentActions extends sfActions
{

	  public function preExecute()
	  {
	     
	  }

	  public function executeBroshure(sfWebRequest $request)
	  {
			$this->setLayout("broshure");
	  }
	  
}