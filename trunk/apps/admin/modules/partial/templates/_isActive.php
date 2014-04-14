<?php if($rs->getIsActive()==1):?>
  <a href="<?php echo url_for($module.'/activate?id='.$rs->getId().'&cmd=0') ?>" class="action">Идэвхигүй болгох</a>
<?php else:?>
  <a href="<?php echo url_for($module.'/activate?id='.$rs->getId().'&cmd=1') ?>" class="action">Идэвхижүүлэх</a>
<?php endif;?>
<br clear="all">