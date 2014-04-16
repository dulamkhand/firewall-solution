<?php echo link_to('жагсаалт', 'model/index?productId='.$productId, array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'model/new?productId='.$productId, array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Модел</th>
      <th>Model</th>
      <th>Дэс дараалал</th>
      <th>Үүсгэсэн</th>
      <th>Засварласан</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $model): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td width="30%">
					<a href="<?php echo url_for('model/edit?id='.$model->getId()) ?>"><?php echo $model->getName()?></a>
      </td>
      <td width="30%">
					<a href="<?php echo url_for('model/edit?id='.$model->getId()) ?>"><?php echo $model->getNameEn()?></a>
      </td>
      <td width="10%"><?php echo $model->getSort() ?></td>
      <td><?php echo $model->getCreatedAt() ?></td>
      <td><?php echo $model->getUpdatedAt() ?></td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'model', 'id'=>$model->getId()));?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br clear="all">
<?php echo pager($pager, 'model/index?productId='.$productId)?>