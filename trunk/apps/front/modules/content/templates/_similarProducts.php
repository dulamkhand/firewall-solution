
    <!--similar producst-->
    <?php $rss = Doctrine::getTable('Product')->createQuery()
                ->where('category_id=?', $product->getCategoryId())
                ->andWhere('id<>?', $product->getId())
                ->execute();?>

    <?php foreach ($rss as $product):?>
        <div class="box-product" style="margin:5px 0 0 10px;width:200px;height:80px;overflow:hidden;">
            <a href="<?php echo url_for('content/productShow?i='.$i.'&cid='.$product->getCategoryId().'&id='.$product->getId())?>">
                <?php echo image_tag('/u/p/'.$product->getImage(), array('style'=>'max-width:120px;max-height:140px;'))?>
            </a>
            <div class="title-code">
                <?php if($product->getCode()):?>
                    <div class="code"><?php echo __('code')?> : <?php echo $product->getCode()?></div>
                <?php endif?>
                <?php //echo $product?>
            </div>
            <div class="detail">
                <a href="<?php echo url_for('content/productShow?i='.$i.'&cid='.$product->getCategoryId().'&id='.$product->getId())?>" style="line-height:11px;">
                    <?php echo image_tag('i/detail.png', array('width'=>14,'align'=>'absmiddle'))?>
                    <?php echo __('Product detail')?>
                </a>
            </div>
        </div>
    <?php endforeach?>
