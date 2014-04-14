<?php if($p->getBodyCulture() || $p->getPdf()):?>
  <div class="box-product-show" style="margin:0;padding:10px;text-align:justify;">
      <?php if($p->getPdf())  echo link_to(image_tag('i/'.GlobalLib::get3FileExtension($p->getPdf()).'.png', array()), 
                sfConfig::get('app_host').'u/p/'.$p->getPdf(),
                array('target'=>'_blank', 'style'=>'float:right;margin:5px 5px 0 5px;z-index:100;'))?>
  		<?php echo GlobalLib::clearOutput($p->getBodyCulture())?>
  </div>
<?php endif?>