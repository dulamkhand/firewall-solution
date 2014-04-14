<?php

class PageTable extends Doctrine_Table
{
  public function fetchall($params = array())
  {
      $q = Doctrine_Query::create()
          ->select('*')
          ->from('Page')
          ->orderBy('created_at DESC');

          // KEYWORD
          if(isset($params['keyword']) && $params['keyword'])
            $q->andWhere('title LIKE ? OR content LIKE ?', array('%'.$params['keyword'].'%', '%'.$params['keyword'].'%'));

          // LIMIT
          $limit = isset($params['limit']) ? $params['limit'] : 100;
          $q->limit($limit);
  
      return $q->execute();
  }


  
  public function getPager($params = array(), $page=1)
  {
      $q = Doctrine_Query::create()
          ->select('*')
          ->from('Page')
          ->orderBy('created_at DESC');

          // KEYWORD
          if(isset($params['keyword']) && $params['keyword'])
            $q->andWhere('title LIKE ? OR content LIKE ?', array('%'.$params['keyword'].'%', '%'.$params['keyword'].'%'));

          // LIMIT
          $limit = isset($params['limit']) ? $params['limit'] : 100;
          $q->limit($limit);
              
      $pager = new sfDoctrinePager('Content', sfConfig::get('app_pager', 30));
      $pager->setPage($page);
      $pager->setQuery($q);
      $pager->init();
      
      return $pager;
  }
  

}