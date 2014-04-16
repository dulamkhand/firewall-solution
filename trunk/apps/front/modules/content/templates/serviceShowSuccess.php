<?php include_partial('content/category', array('isRent'=>1));?>


<div class="left" style="width:730px;margin:0;">
    <div class="left" style="width:400px;">
        <?php include_partial('content/productImage', array('p'=>$p));?>
        
        <br clear="all">
        <?php if($p->getVideo()) echo html_entity_decode($p->getVideo())?> 
    </div><!--left-->
        
    <div class="left" style="width:320px;margin:0 0 10px 10px;">
        <div class="box-product-show" style="width:300px;margin:0 0 10px 0">
            <?php include_partial('content/productCalc', array('p'=>$p));?>
        </div>        
        
  			<?php include_partial('content/order', array('form'=>$form, 'product'=>$p, 'act'=>'service'));?>        
  			
  			<div class="box-product-show" style="margin:0 0 10px 0;padding:10px;text-align:justify;width:300px;">
            <?php include_partial('content/productSpec', array('p'=>$p));?>
        </div>
        
        <?php include_partial('content/productBody', array('p'=>$p));?>
        
    </div><!-- right-->
    
    <br clear="all">
    <br clear="all">
</div>
