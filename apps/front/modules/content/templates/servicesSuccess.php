<?php include_partial("content/slider", array());?>

<?php use_javascript('/addons/ui/jquery-ui.min.js');?>
<?php use_stylesheet('/addons/ui/jquery-ui.css');?>
 
<?php include_partial('content/category', array());?>

<!--PRODUCST-->
<?php $i = $sf_params->get('i')?>
<?php $q = Doctrine::getTable('Product')->createQuery();
    if($sf_params->get('cid')) $q->where('category_id=?', $sf_params->get('cid'));
    $products = $q->execute();?>

<?php include_partial('content/products', array('products'=>$products));?>

<br clear="all">
<br clear="all">

<script type="text/javascript">
	/*$(".box-product").hover(function() {
      $(this).addClass('current');
  });*/
</script>