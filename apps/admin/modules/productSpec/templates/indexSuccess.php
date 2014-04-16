<?php $url = 'http://'.$sf_request->getHost()?>

<form action="<?php echo url_for('productSpec/save')?>" method="POST">
<fieldset>
<legend>Техникийн үзүүлэлт</legend>

Бүтээгдэхүүн: <b><?php echo $product->getTitle().' / '.$product->getTitleEn()?></b>
<input type="hidden" name="productId" value="<?php echo $product->getId()?>"/>

<table width="70%">
		<tr>
			<td></td>
			<?php $models = GlobalTable::doFetchArray('ProductModel', array('productId'=>$product->getId(), 'orderBy'=>'sort DESC, name ASC, name_en ASC'))?>
			<?php if(sizeof($models)):?>
					<?php foreach ($models as $model):?>
							<th>
									<?php echo $model['name']?>
							</th>
					<?php endforeach?>
			<?php else:?>
					<th>Үзүүлэлт</th>
			<?php endif?>
		</tr>
<?php $rss = Doctrine::getTable('ProductSpec')->createQuery()
								->where('product_id =? ', $product->getId())								
								->fetchArray();
			$productSpecs = array();
			foreach ($rss as $rs) {
			  	$productSpecs[$rs['spec_id']][$rs['model_id']] = $rs;
			}?>
<?php $specs = GlobalTable::doFetchArray('Spec', array('orderBy'=>'sort DESC, name ASC, name_en ASC'))?>
<?php foreach ($specs as $spec):?>
		<?php $specId = $spec['id']?>
		<tr>
			<td>
				<label class="clean" style="width:250px;font-weight:normal;">
						<input type="checkbox" name="spec_checks[]" value="<?php echo $specId?>" tabindex="<?php echo $specId?>" class="spec_checks"
								<?php echo isset($productSpecs[$specId]) ? 'checked' : ''?> />
						<?php echo $spec['name']?> / <?php echo $spec['name_en']?>
				</label>
			</td>
			<?php if(sizeof($models)):?>
					<?php foreach ($models as $model):?>
							<?php $modelId = $model['id']?>
							<td><input type="text" name="spec_<?php echo $specId?>_<?php echo $modelId?>" style="width:100px;"
								value="<?php echo isset($productSpecs[$specId][$modelId]) ? $productSpecs[$specId][$modelId]['body'] : ''?>" <?php if(!isset($productSpecs[$specId][$modelId])) echo 'disabled'?>
						 		class="stext spec_text_<?php echo $specId?> <?php echo isset($productSpecs[$specId][$modelId]) ? 'enabled' : 'disabled'?>"/></td>
					<?php endforeach?>
			<?php else:?>
					<td><input type="text" name="spec_<?php echo $specId?>_0" style="width:100px;"
								value="<?php echo isset($productSpecs[$specId][0]) ? $productSpecs[$specId][0]['body'] : ''?>" <?php if(!isset($productSpecs[$specId][0])) echo 'disabled'?>
						 		class="stext spec_text_<?php echo $specId?> <?php echo isset($productSpecs[$specId][0]) ? 'enabled' : 'disabled'?>"/></td>
			<?php endif?>
		</tr>
<?php endforeach?>
<tr>
  <td colspan="20">
    	<input type="text" name="color" value="<?php echo $product->getColor()?>" style="width:60px;"/>
    	<span class="help"><a href="<?php echo sfConfig::get('app_host')?>images/bgcolors1536.png" target="_blank">Эндээс</a> өнгөний код сонгон оруулж үзүүлэлт хүснэгтийг өөр өөр өнгөөр харуулах боломжтой. (Оруулаагүй үед ногоон өнгөөр харагдана)</span>
  </td>
</tr>
</table>

<input type="submit" value="Хадгалах"/>
</fieldset>
<br clear="all">

</form>


<script type="text/javascript">
$(document).ready(function(){
  $('.spec_checks').change(function(){
    if($(this).prop('checked'))  {
      $('.spec_text_' + $(this).attr('tabindex')).removeAttr('disabled');
      $('.spec_text_' + $(this).attr('tabindex')).removeClass('disabled');
      $('.spec_text_' + $(this).attr('tabindex')).addClass('enabled');
    } else {
      $('.spec_text_' + $(this).attr('tabindex')).attr('disabled', 'true');
      $('.spec_text_' + $(this).attr('tabindex')).removeClass('enabled');
      $('.spec_text_' + $(this).attr('tabindex')).addClass('disabled');
    }
  });
});
</script>
