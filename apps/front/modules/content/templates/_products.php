<?php $act = $sf_request->getParameter('action') == "service" ? "service" : "product"?>

<?php $j=0; foreach ($products as $product):?>
    <div class="box-product" style="<?php if(++$j==4) {echo 'margin-right:0'; $j=0;}?>">
        <a href="<?php echo url_for('content/'.$act.'Show?cid='.$product->getCategoryId().'&id='.$product->getId())?>" class="img">
            <?php echo image_tag('/u/p/t162-'.$product->getImage(), array())?>
        </a>
        <a href="<?php echo url_for('content/'.$act.'Show?cid='.$product->getCategoryId().'&id='.$product->getId())?>" class="cover">
            <div class="code">
                <?php if($product->getCode()) echo __('Cod').'.'?> <?php echo $product->getCode()?>
            </div>
            <div class="name"><?php echo $product?></div>
            <div class="detail">
                <?php echo image_tag('i/detail.png', array('width'=>14,'align'=>'absmiddle'))?>
                <?php echo __('Product detail')?>
            </div>
        </a>
    </div>
<?php endforeach?>