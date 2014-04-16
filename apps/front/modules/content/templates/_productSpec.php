<?php $color = $p->getColor() ? '#'.$p->getColor() : '#177B01'?>

<?php if($sf_request->getParameter('action') == 'productShow' && $p->getHasLeasing()):?>
    <a href="<?php echo url_for('content/serviceShow?id='.$p->getId().'&cid='.$p->getCategoryId())?>" 
                                      style="float:right;display:block;margin:-16px -10px 0 0;">
        <?php echo image_tag('i/rent-icon.png', array('style'=>''))?>
    </a>
<?php endif?>

<div class="code" style="color:#666;width:250px;">
		<?php echo __('Cod').'.'.$p->getCode()?>
</div>
<h3 style="margin:7px 0 10px 0;color:<?php echo $color?>;"><?php echo $p?></h3>

<?php if($p->getSummaryCulture()):?>
  <div class="summary">
		  <?php echo GlobalLib::clearOutput($p->getSummaryCulture())?>
		  <br clear="all">
	</div>
<?php endif?>
<br clear="all">

<?php $models = GlobalTable::doExecute('ProductModel', array('productId'=>$p->getId(), 'orderBy'=>'sort DESC, name ASC, name_en ASC'))?>
<table width="">
		<tr>
			<th style="border:1px solid <?php echo $color?>;color:#fff;padding:3px 10px;background:<?php echo $color?>;">
					<?php if(sizeof($models)) echo __('Model')?>
			</th>
			<?php if(sizeof($models)):?>
					<?php foreach ($models as $model):?>
							<th style="border:1px solid <?php echo $color?>;color:#fff;opacity:0.7;padding:3px 10px;background:<?php echo $color?>;">
									<?php echo $model?>
							</th>
					<?php endforeach?>
			<?php else:?>
					<th style="border:1px solid <?php echo $color?>;color:#fff;opacity:0.7;padding:3px 10px;background:<?php echo $color?>;">
							<?php echo __('Spesifications')?>
					</th>
			<?php endif?>
		</tr>
<?php $rss = Doctrine::getTable('ProductSpec')->createQuery()->where('product_id =?', $p->getId())->fetchArray();
			$productSpecs = array();
			foreach ($rss as $rs) {
			  	$productSpecs[$rs['spec_id']][$rs['model_id']] = $rs;
			}?>
<?php $specs = GlobalTable::doExecute('Spec', array('orderBy'=>'sort DESC, name ASC, name_en ASC'))?>
<?php foreach ($specs as $spec):?>
		<?php $specId = $spec->getId()?>
		<?php if(isset($productSpecs[$specId])):?>
				<tr>
					<td style="border:1px solid <?php echo $color?>;color:#fff;opacity:0.7;padding:3px 10px;background:<?php echo $color?>;"><?php echo $spec?></td>
					<?php if(sizeof($models)):?>
							<?php foreach ($models as $model):?>
									<?php $modelId = $model['id']?>
									<td style="border:1px solid <?php echo $color?>;padding:3px 10px;"><?php echo isset($productSpecs[$specId][$modelId]) ? $productSpecs[$specId][$modelId]['body'] : ''?></td>
							<?php endforeach?>
					<?php else:?>
							<td style="border:1px solid <?php echo $color?>;padding:3px 10px;"><?php echo isset($productSpecs[$specId][0]) ? $productSpecs[$specId][0]['body'] : ''?></td>
					<?php endif?>
				</tr>
		<?php endif?>
<?php endforeach?>
</table>
