<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productSpecActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
    		$this->forward404Unless($this->product = $product = Doctrine::getTable('Product')->find($request->getParameter('productId')));
    }
  
    public function executeSave(sfWebRequest $request)
    {
    		$this->forward404Unless($this->product = $product = Doctrine::getTable('Product')->find($request->getParameter('productId')));

        if ($request->isMethod(sfRequest::POST))
        {
	          // delete old specs
	          Doctrine::getTable('ProductSpec')->createQuery()->delete()->where('product_id =?', $product->getId())->execute();
	        	// models
	        	$models = GlobalTable::doFetchArray('ProductModel', array('productId'=>$product->getId()));
	        	// save specs
	          $specIds = $request->getParameter('spec_checks');
	          foreach ($specIds as $specId) {
	          		if(sizeof($models)) {
			          		foreach ($models as $model) {
			          				$modelId = $model['id'];
				          			$ps = new ProductSpec();
					          		$ps->setProductId($product->getId());
					          		$ps->setModelId($modelId);
					          		$ps->setSpecId($specId);
					          		$ps->setBody($request->getParameter('spec_'.$specId.'_'.$modelId));
					          		$ps->setBodyEn($request->getParameter('spec_'.$specId.'_'.$modelId));
					          		$ps->save();
			          		}
	          		} else {
	          				$ps = new ProductSpec();
			          		$ps->setProductId($product->getId());
			          		$ps->setSpecId($specId);
			          		$ps->setBody($request->getParameter('spec_'.$specId.'_0'));
			          		$ps->setBodyEn($request->getParameter('spec_'.$specId.'_0'));
			          		$ps->save();
	          		}
	          }
	          $product->setColor($request->getParameter('color'));
          	$product->save();
	          $this->getUser()->setFlash('flash', 'Амжилттай хадгалагдлаа.', true);
        }
        $this->redirect('productSpec/index?productId='.$product->getId());
    }

}