<?php include_partial('content/category', array('isRent'=>1));?>


<div class="left" style="width:730px;margin:0;">
    <div class="left" style="width:400px;">
        <?php include_partial('content/productImage', array('p'=>$p));?>
        
        <div class="box-product-show" style="margin:0 0 10px 0;padding:10px;text-align:justify;width:380px;">
            <?php include_partial('content/productSpec', array('p'=>$p));?>
        </div>        
    </div><!--left-->
        
    <div class="left" style="width:320px;margin:0 0 10px 10px;">
        <div class="box-product-show" style="width:300px;margin:0 0 10px 0">
            <?php include_partial('content/productCalc', array('p'=>$p));?>
        </div>
        
  			<?php include_partial('content/order', array('form'=>$form, 'product'=>$p));?>
        
        <br clear="all">
        <?php if($p->getVideo()):?>
            <iframe style="margin:0 0 10px 0;" width="320" height="235" src="<?php echo $p->getVideo()?>" frameborder="0" allowfullscreen></iframe>            
        <?php endif?>
        
        <?php include_partial('content/productBody', array('p'=>$p));?>
        
    </div><!-- right-->
    
    <br clear="all">
    <br clear="all">
</div>
