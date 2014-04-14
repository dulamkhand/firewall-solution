<?php echo link_to('жагсаалт', 'model/index?productId='.$productId, array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'model/new?productId='.$productId, array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="50%">
  <thead>
    <tr>
      <th>№</th>
      <th>Модел</th>
      <th nowrap>Огноо</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $model): ?>
    <?php $id = $model->getId()?>
    <tr>
      <td><?php echo ++$i?></td>
      <td><?php echo $model->getName().' / '.$model->getNameEn()?></td>
      <td nowrap>
          <b>Үүсгэсэн: </b><?php echo $model->getCreatedAt() ?><br>
          <b>Засварласан: </b><?php echo $model->getUpdatedAt() ?><br>
          <b>Дэс дараалал: </b><?php echo $model->getSort() ?>
      </td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'product', 'id'=>$id));?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br clear="all">
<?php echo pager($pager, 'model/index?productId='.$productId)?>