<div class="boxhome" style="width:440px;margin:0 0 10px 15px;padding:0;height:772px;">
    <?php include_partial("content/newsLast", array());?>
    <br clear="all">
</div>


<div class="boxhome" style="width:515px;margin:0 0 10px 15px;padding:0;">
		<?php $products = Doctrine::getTable('Product')->createQuery()->where('is_featured=1')->execute()?>
		<?php $j=0; foreach ($products as $product):?>
        <div class="box-product" style="margin:0 1px 0px 0;<?php if(++$j==3) {echo 'margin-right:0'; $j=0;}?>;width:171px;height:243px;">
            <a href="<?php echo url_for('content/productShow?cid='.$product->getCategoryId().'&id='.$product->getId())?>" class="img">
                <?php echo image_tag('/u/p/t162-'.$product->getImage(), array('style'=>'max-width:156px;'))?>
            </a>
            <a href="<?php echo url_for('content/productShow?cid='.$product->getCategoryId().'&id='.$product->getId())?>" class="cover">
		            <div class="code">
                    <?php if($product->getCode()) echo __('cod.')?> <?php echo $product->getCode()?>
		            </div>
		            <div class="name"><?php echo $product?></div>
		            <div class="detail" style="width:152px;">
                    <?php echo image_tag('i/detail.png', array('width'=>14,'align'=>'absmiddle'))?>
                    <?php echo __('Product detail')?>
		            </div>
            </a>
        </div>
    <?php endforeach?>
</div>

<div class="boxhome" style="width:515px;margin:0 0 10px 15px;padding:0;">
		<div class="fb-like-box" 
				data-href="https://www.facebook.com/firewallsolution" data-width="515" 
				data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" 
				data-show-border="false">
		</div>
		<!--<div class="fb-follow" data-href="https://www.facebook.com/firewallsolution" data-width="309" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>-->
</div>

<br clear="all">