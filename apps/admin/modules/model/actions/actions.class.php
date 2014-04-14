<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class modelActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {	
    		$this->forward404Unless($this->productId = $productId = $request->getParameter('productId'));
    		$params = array();
    		$params['productId'] = $productId;
				if($request->getParameter('s')) $params['modelKeyword'] = $request->getParameter('s');
				$this->pager = GlobalTable::getPager('ProductModel', $params);
    }
  
    public function executeNew(sfWebRequest $request)
    {
    		$this->forward404Unless($this->product = $product = Doctrine::getTable('Product')->find($request->getParameter('productId')));
        $this->form = new ProductModelForm (null, array('productId'=>$product->getId()));
    }
  
    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
    
        $this->form = new ProductModelForm (null, array('productId'=>$request->getParameter('product_model[product_id]')));
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('new');
    }
  
    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($model = Doctrine::getTable('ProductModel')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
    		$this->forward404Unless($this->product = $product = Doctrine::getTable('Product')->find($model->getProductId()));
        $this->form = new ProductModelForm ($model, array('productId'=>$model->getProductId()));
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($model = Doctrine::getTable('ProductModel')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductModelForm ($model);
    
        $this->processForm($request, $this->form, array('productId'=>$model->getProductId()));
    
        $this->setTemplate('edit');
    }
  
    public function executeDelete(sfWebRequest $request)
    {
        $this->forward404Unless($model = Doctrine::getTable('ProductModel')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $model->delete();
          $this->getUser()->setFlash('success', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'model/index');
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $model = $form->save();
          $model->setUpdatedAt(date('Y-m-d'));
          $model->save();
          
          $this->getUser()->setFlash('success', 'Амжилттай хадгалагдлаа.', true);
          $this->redirect($request->getReferer() ? $request->getReferer() : 'model/index');
        }
    }

}