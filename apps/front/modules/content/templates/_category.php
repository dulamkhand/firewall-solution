<?php use_javascript('/addons/ui/jquery-ui.min.js');?>
<?php //use_stylesheet('/addons/ui/jquery-ui.css');?>
<?php $act = in_array($sf_request->getParameter('action'), array("service", "serviceShow")) ? "service" : "products"?>
<?php $catId = $sf_params->get('cid')?>

<!--CATEGORIES-->
<div class="left" style="width:230px;margin:0 9px 5px 15px;background:#fff;box-shadow:0 3px 3px rgba(0, 0, 0, 0.3);">
    <div style="position:absolute;top:0;left:0;background:#FE0000;width:210px;padding:10px;">
        <h4 style="margin:0 0 0 17px;"><?php echo __('Products')?></h4>
    </div>
    <br clear="all">
    <div style="padding:25px 5px 0px 5px;">
        <?php $map_subcats = array()?>
        <?php $map_subcatsids = array()?>
        <?php $q = Doctrine::getTable('ProductCategory')->createQuery()->where('parent_id <> 0');
              		if(isset($isRent) && $isRent) $q->andWhere('has_leasing = 1');
                  $q->orderBy('sort DESC, name ASC');
        			$subcats = $q->execute();?>
        <?php foreach ($subcats as $subcat) {
            $list_subcats = isset($map_subcats[$subcat->getParentId()]) ? $map_subcats[$subcat->getParentId()] : array();
            $list_subcats[] = $subcat;
            $map_subcats[$subcat->getParentId()] = $list_subcats;
            
            $list_subcatsids = isset($map_subcatsids[$subcat->getParentId()]) ? $map_subcatsids[$subcat->getParentId()] : array();
            $list_subcatsids[] = $subcat->getId();
            $map_subcatsids[$subcat->getParentId()] = $list_subcatsids;
        }?>

        

        <?php $q = Doctrine::getTable('ProductCategory')->createQuery()
                    ->where('parent_id = 0 OR parent_id is null');
                    if(isset($isRent) && $isRent) $q->andWhere('has_leasing = 1');
                    $q->orderBy('sort DESC, name ASC');
        			$cats = $q->execute();?>
        <?php foreach ($cats as $cat): ?>
            <div class="main-category">
            		<h3 style="padding:5px 3px;cursor:pointer;" onmouseover="toggleSubcategory(<?php echo $cat->getId()?>);"><?php echo $cat?></h3>
		            <?php if(isset($map_subcats[$cat->getId()])):?>
		                <ul class="product-category" style="display:<?php echo ($catId == $cat->getId() || in_array($catId, $map_subcatsids[$cat->getId()])) ? "block" : "none"?>;" id="subcat<?php echo $cat->getId()?>">
		                    <?php foreach ($map_subcats[$cat->getId()] as $subcat):?>
		                        <li><a href="<?php echo url_for('content/'.$act.'?cid='.$subcat->getId())?>" class="<?php if($sf_params->get('cid') == $subcat->getId()) echo 'current'?>">
		                                <?php echo $subcat?>
		                        </a></li>
		                    <?php endforeach?>
		                </ul>
		            <?php endif?>
            </div>
        <?php endforeach?>
    </div><!--accordion-->    
    <h3 style="background:rgba(34, 178, 2, 0.6);width:213px;margin:0 3px 10px 3px;padding:0 6px;">
    		<a href="<?php echo url_for('main/gypsum')?>" style="text-decoration:none;">
    		        <?php echo __('Gypsum board')?>
    		</a>    
    </h3>
</div>


<script type="text/javascript">
function toggleSubcategory(id) {
		$('.product-category').hide();
  	$('#subcat' + id).slideDown();
}
</script>
