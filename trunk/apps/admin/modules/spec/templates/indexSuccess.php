<?php echo link_to('жагсаалт', 'spec/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'spec/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('spec/index')?>" method="GET">
    <?php include_partial('partial/search', array());?>
</form>
<br clear="all">

<table width="70%">
  <thead>
    <tr>
      <th>№</th>
      <th>Үзүүлэлт</th>
      <th>Specification</th>
      <th>Дэс дараалал</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $spec): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td>
					<a href="<?php echo url_for('spec/edit?id='.$spec->getId()) ?>"><?php echo $spec->getName()?></a>
      </td>
      <td>
					<a href="<?php echo url_for('spec/edit?id='.$spec->getId()) ?>"><?php echo $spec->getNameEn()?></a>
      </td>
      <td width="10%"><?php echo $spec->getSort() ?></td>
      <td nowrap>
        <a href="<?php echo url_for('spec/edit?id='.$spec->getId()) ?>">Засварлах</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <a onclick="return confirm('Та итгэлтэй байна уу?')" href="<?php echo url_for('spec/delete?id='.$spec->getId()) ?>">Устгах</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br clear="all">
<?php echo pager($pager, 'spec/index')?>