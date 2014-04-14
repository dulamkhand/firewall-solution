<?php include_partial('content/category', array('isRent'=>1));?>


<!--PRODUCST-->
<?php $q = Doctrine::getTable('Product')->createQuery();
    $q->where('has_leasing = 1');
    if($sf_params->get('cid')) $q->where('category_id = ?', $sf_params->get('cid'));
    $q->orderBy('title asc');
    $products = $q->execute();?>
    
<div class="left" style="width:735px;margin:0px 0 10px 0;">
  	<div style="text-align:right;margin:0 4px 16px 0;">
    		<span style="color:#666;text-transform:uppercase;font-weight:bold;"><?php echo __('Sort by')?></span>
    		<select name="sortby" id="sortby" style="border:1px solid #dedede;padding:3px 2px;width:100px;" onchange="serviceSortby();">
      			<option value="title" style="padding:0 2px;cursor:pointer;"><?php echo __('Name')?></option>
      			<option value="code" style="padding:0 2px;cursor:pointer;"><?php echo __('Cod')?>.</option>
    		</select>
  	</div>
  	
  	<div id="productList">
        <?php include_partial('content/products', array('products'=>$products, 'action'=>'serviceShow'));?>
    </div>
</div>

<br clear="all">
<br clear="all">

<script type="text/javascript">
function serviceSortby()
{
  $.ajax({
    url: "<?php echo url_for('content/serviceSortby')?>", 
    type: "post",
    data: {sortby:$('#sortby').val(), cid:<?php echo $sf_params->get('cid') ? $sf_params->get('cid') : 0?>},
    beforeSend: function(){
        
    },
    success: function(data) {
        $("#productList").html(data);
    }
  });
  return false;
}
</script>