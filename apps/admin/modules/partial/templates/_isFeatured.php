<?php if($rs->getIsFeatured()==1):?>
    <a href="<?php echo url_for($module.'/isFeatured?id='.$rs->getId().'&cmd=0') ?>" class="action">Онцлох биш болгох</a> | 
<?php else:?>
    <a href="<?php echo url_for($module.'/isFeatured?id='.$rs->getId().'&cmd=1') ?>" class="action">Онцлох болгох</a> | 
<?php endif;?>