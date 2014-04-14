<?php

class ContentTable extends Doctrine_Table
{

  public function fetchall($params = array())
  {
      $q = Doctrine_Query::create()
          ->select('*')
          ->from('Content')
          ->orderBy('created_at DESC');

          // KEYWORD
          if(isset($params['keyword']) && $params['keyword'])
            $q->andWhere('title LIKE ? OR body LIKE ?', array('%'.$params['keyword'].'%', '%'.$params['keyword'].'%'));

          // LIMIT
          $limit = isset($params['limit']) ? $params['limit'] : 100;
          $q->limit($limit);
  
      return $q->execute();
  }


  public function fetcharray($params = array())
  {
      $q = Doctrine_Query::create()
          ->select('p.id, p.title, p.image, p.body, p.created_at')
          ->from('Content p')
          ->orderBy('p.created_at DESC');

          // KEYWORD
          if(isset($params['keyword']) && $params['keyword'])
            $q->andWhere('p.title LIKE ? OR p.body LIKE ?', array('%'.$params['keyword'].'%', '%'.$params['keyword'].'%'));

          // LIMIT
          $limit = isset($params['limit']) ? $params['limit'] : 100;
          $q->limit($limit);
  
      return $q->fetchArray();
  }
  
  
  public function getPager($params = array(), $page=1)
  {
      $q = Doctrine_Query::create()
          ->select('*')
          ->from('Content')
          ->orderBy('created_at DESC');

          // KEYWORD
          if(isset($params['keyword']) && $params['keyword'])
            $q->andWhere('title LIKE ? OR body LIKE ?', array('%'.$params['keyword'].'%', '%'.$params['keyword'].'%'));

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