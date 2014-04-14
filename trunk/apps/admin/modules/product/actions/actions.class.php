<?php

/**
 * page actions.
 *
 * @package    barilga
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productActions extends sfActions
{

    public function executeIndex(sfWebRequest $request)
    {
    		$params = array();
				if($request->getParameter('s')) $params['productKeyword'] = $request->getParameter('s');
				$this->pager = GlobalTable::getPager('Product', $params);
    }
    
    
    
    
    
    public function executeIsActive(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('Product')->find($request->getParameter('id')));
        $this->forward404Unless(in_array($cmd = $request->getParameter('cmd'), array(0,1)));
        $content->setIsActive($cmd);
        $content->save();
        $this->getUser()->setFlash('flash', 'Successfully saved.', true);
        $this->redirect($request->getReferer() ? $request->getReferer() : 'content/index');
    }
    
    public function executeIsFeatured(sfWebRequest $request)
    {
        $this->forward404Unless($content = Doctrine::getTable('Product')->find($request->getParameter('id')));
        $this->forward404Unless(in_array($cmd = $request->getParameter('cmd'), array(0,1)));
        $content->setIsFeatured($cmd);
        $content->save();
        $this->getUser()->setFlash('flash', 'Successfully saved.', true);
        $this->redirect($request->getReferer() ? $request->getReferer() : 'content/index');
    }
    
    
    
    
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = new ProductForm();
    }
    
    
  
    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
    
        $this->form = new ProductForm();
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('new');
    }
  
    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);
    }
  
    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        $this->form = new ProductForm($product);
    
        $this->processForm($request, $this->form);
    
        $this->setTemplate('edit');
    }
  
    public function executeDelete(sfWebRequest $request)
    {
        $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        try {
          $product->delete();
          $this->getUser()->setFlash('success', 'Амжилттай устлаа.', true);
        }catch (Exception $e){}
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'product/index');
    }
    
    
    public function executeDeleteImage(sfWebRequest $request)
    {
        $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));
        
        switch ($request->getParameter('p')) {
        	case 1: $product->setImage(""); break;
        	default: break;
        }
        $product->save();        
        
        $this->getUser()->setFlash('success', 'Амжилттай хадгалагдлаа.', true);
        
        $this->redirect($request->getReferer() ? $request->getReferer() : 'product/index');
    }
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $product = $form->save();
          $product->setUpdatedAt(date('Y-m-d'));
          $product->save();
          
          // images
          if($product->getImage() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage()))
		          GlobalLib::createThumbs($product->getImage(), 'p', array(162), false);
          if($product->getImage1() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage1()))
		          GlobalLib::createThumbs($product->getImage1(), 'p', array(162), false);
          if($product->getImage2() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage2()))
		          GlobalLib::createThumbs($product->getImage2(), 'p', array(162), false);
          if($product->getImage3() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage3()))
		          GlobalLib::createThumbs($product->getImage3(), 'p', array(162), false);
          if($product->getImage4() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage4()))
		          GlobalLib::createThumbs($product->getImage4(), 'p', array(162), false);
          if($product->getImage5() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage5()))
		          GlobalLib::createThumbs($product->getImage5(), 'p', array(162), false);
          if($product->getImage6() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage6()))
		          GlobalLib::createThumbs($product->getImage6(), 'p', array(162), false);
          if($product->getImage7() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage7()))
		          GlobalLib::createThumbs($product->getImage7(), 'p', array(162), false);
        	if($product->getImage8() && !file_exists(sfConfig::get('sf_upload_dir').'/p/t162-'.$product->getImage8()))
		          GlobalLib::createThumbs($product->getImage8(), 'p', array(162), false);
          
          $this->getUser()->setFlash('success', 'Амжилттай хадгалагдлаа.', true);
          $this->redirect($request->getReferer() ? $request->getReferer() : 'product/index');
        }
    }

}