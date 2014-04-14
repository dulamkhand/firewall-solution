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
    
  public function executeNews(sfWebRequest $request)
  {
      $this->pager = Doctrine::getTable('Content')->getPager(array(), $request->getParameter('page'));

      return sfView::SUCCESS;
  }

  
  public function executeNewsShow(sfWebRequest $request)
  {
      $this->forward404Unless($news = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object page does not exist (%s).', $request->getParameter('id')));

      $this->news = $news;
      
      $this->getResponse()->setSlot('color', '#fff');

      return sfView::SUCCESS;
  }
  
  public function executeProducts(sfWebRequest $request)
  {
  }
  
  public function executeProductsSortby(sfWebRequest $request)
  {
      $q = Doctrine::getTable('Product')->createQuery();
      if($request->getParameter('cid')) $q->where('category_id = ?', $request->getParameter('cid'));
      $q->orderBy($request->getParameter('sortby').' asc');
      $products = $q->execute();
      
      echo $this->getPartial("content/products", array('products'=>$products, 'action'=>'productShow'));
      return sfView::NONE;
  }
  
  public function executeServiceSortby(sfWebRequest $request)
  {
      $q = Doctrine::getTable('Product')->createQuery();
      $q->where('has_leasing = 1');
      if($request->getParameter('cid')) $q->where('category_id = ?', $request->getParameter('cid'));
      $q->orderBy($request->getParameter('sortby').' asc');
      $products = $q->execute();
      
      echo $this->getPartial("content/products", array('products'=>$products, 'action'=>'serviceShow'));
      return sfView::NONE;
  }
  
  
  public function executeProductShow(sfWebRequest $request)
  {
      $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
      $this->p = $product;
      
      // META
      $this->getResponse()->setTitle($product.' ~ '.sfConfig::get('app_meta_title'));
      $this->getResponse()->addMeta('description', sfConfig::get('app_meta_description').$product->getSummaryCulture());
      $this->getResponse()->addMeta('keywords', sfConfig::get('app_meta_keywords').$product->getKeywords());
     
      $this->form = $this->processOrder($request, $product);
  }  
  
  
  public function executeService(sfWebRequest $request)
  {
  }
  
  public function executeServiceShow(sfWebRequest $request)
  {
      $this->forward404Unless($product = Doctrine::getTable('Product')->find(array($request->getParameter('id'))), sprintf('Object product does not exist (%s).', $request->getParameter('id')));
      $this->p = $product;
      
      // META
      $this->getResponse()->setTitle($product.' ~ '.sfConfig::get('app_meta_title'));
      $this->getResponse()->addMeta('description', sfConfig::get('app_meta_description').$product->getSummaryCulture());
      $this->getResponse()->addMeta('keywords', sfConfig::get('app_meta_keywords').$product->getKeywords());
      
      $this->form = $this->processOrder($request, $product);
      
      // 
      
  }
  
  
  
  
  public function executePollVote(sfWebRequest $request)
  {
      $this->setLayout(false);

      if($request->isMethod(sfRequest::POST))
      {
          if($poll = Doctrine_Core::getTable('Poll')->find($request->getParameter('pollId')))
          {
              $options = $request->getParameter('options');
              if($option = Doctrine_Core::getTable('PollOption')->find($options[0]))
              {
                  $option->setNumber($option->getNumber()+1);
                  $option->save();
                  $this->getUser()->setAttribute('isVoted', true);
              }
          }
      }
      
      $array = $poll->getVotes();
      echo join('<br clear="all"/><br clear="all"/>', $array);

      return sfView::NONE;
  }
  
  public function executeCalc(sfWebRequest $request)
  {
      $this->setLayout(false);
      $days = floor(strtotime($request->getParameter('to')) - strtotime($request->getParameter('from'))) / (60*60*24);
      
      $cost = doubleval($request->getParameter('cost'));
      $costDay = floor($cost/28);
      $costWeek = floor($cost/4);
      $costArray = array();
      $costArray[1] = $costDay;
      $costArray[2] = $costDay*2;
      $costArray[3] = $costDay*3;
      $costArray[4] = $costWeek;
      $costArray[5] = $costWeek;
      $costArray[6] = $costWeek;
      $costArray[7] = $costWeek;
      $costArray[8] = $costWeek + $costDay;
      $costArray[9] = $costWeek + $costDay*2;
      $costArray[10] = $costWeek + $costDay*3;
      $costArray[11] = $costWeek + $costDay*4;
      $costArray[12] = $costWeek + $costDay*4;
      $costArray[13] = $costWeek + $costDay*4;
      $costArray[14] = $costWeek*2;
      $costArray[15] = $costWeek*2 + $costDay;
      $costArray[16] = $costWeek*2 + $costDay*2;
      $costArray[17] = $costWeek*2 + $costDay*3;
      $costArray[18] = $costWeek*2 + $costDay*4;
      $costArray[19] = $costWeek*2 + $costDay*4;
      $costArray[20] = $costWeek*2 + $costDay*4;
      $costArray[21] = $costWeek*3;
      $costArray[22] = $costWeek*3 + $costDay;
      $costArray[23] = $costWeek*3 + $costDay*2;
      $costArray[24] = $costWeek*3 + $costDay*3;
      $costArray[25] = $costWeek*3 + $costDay*4;
      $costArray[26] = $costWeek*3 + $costDay*4;
      $costArray[27] = $costWeek*3 + $costDay*4;
      $costArray[28] = $cost;
      $costArray[29] = $cost;
      $costArray[30] = $cost + $costDay;
      $costArray[31] = $cost + $costDay*2;
      
      echo '<span style="color:#333;font-family:roboto condensed;font-size:16px;">TOTAL</span> '.number_format($costArray[$days], null, null, ".").' ₮';
      return sfView::NONE;
  }

  public function processOrder(sfWebRequest $request, Product $product) {
      $form = new ProductOrderForm(null, array('productId'=>$product->getId()));
      if ($request->isMethod(sfRequest::POST)) 
      {
          $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
          if ($form->isValid())
          {
            $order = $form->save();

            // send mail
            $mailBody = $this->getPartial("content/mailOrder", array('order'=>$order, 'product'=>$product));
            $message = $this->getMailer()->compose(array('handaa.1224@gmail.com'), array('handaa.1224@gmail.com'=>'www.simpedilmongolia.mn'), 'www.simpedilmongolia.mn', $mailBody);
            $message->setContentType("text/html");
            $this->getMailer()->send($message);
            
            $this->getUser()->setFlash('flash', __('Email successfully sent.'), true);
            $this->redirect('content/productShow?id='.$product->getId().'&cid='.$product->getCategoryId());
          }
      }
      return $form;
  }
  
  
}