<?php

class BannerTable extends Doctrine_Table
{
  public function getPager($page=1)
  {
      $q = Doctrine_Query::create()
           ->select('*')
           ->from('Banner')
           ->orderBy('sort DESC, created_at DESC');

      $pager = new sfDoctrinePager('Banner', sfConfig::get('app_pager', 30));
      $pager->setPage($page);
      $pager->setQuery($q);
      $pager->init();
      
      return $pager;
  }


  public function fetchall()
  {
      $q = Doctrine_Query::create()
         ->select('*')
         ->from('Banner b')
         ->orderBy('sort DESC, created_at DESC');
      return $q->fetchArray();
  }


}