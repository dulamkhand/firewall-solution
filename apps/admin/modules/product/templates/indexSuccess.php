<?php echo link_to('жагсаалт', 'product/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'product/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('product/list')?>" method="GET">
    <?php include_partial('partial/search', array());?>
</form>
<br clear="all">

<?php $url = 'http://'.$sf_request->getHost().'/u/p/t120-'?>
<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Зураг</th>
      <th>Категори</th>
      <th>Код/Нэр</th>
      <th>Техникийн үзүүлэлт</th>
      <th>Дэлгэрэнгүй</th>
      <th nowrap>Огноо</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $p): ?>
    <?php $id = $p->getId()?>
    <tr>
      <td><?php echo ++$i?></td>
      <td><?php if($p->getImage()) echo image_tag('/u/p/'.$p->getImage(), array('style'=>'max-width:130px;'));?></td>
      <td><?php echo $p->getProductCategory()?></td>
      <td><a href="<?php echo url_for('product/edit?id='.$p->getId())?>">
      				<?php echo $p->getTitle()?> / <?php echo $p->getTitleEn()?></a><br>
					<b>Код: </b><?php echo $p->getCode()?>
      </td>
      <td><?php echo $p->getSummary()?></td>
      <td><?php echo GlobalLib::utf8_substr($p->getBody(), 0, 100)?> ...</td>
      <td nowrap>
          <b>Түрээс: </b> <?php if($p->getHasLeasing()) echo image_tag('i/ok-m.png', array('width'=>15, 'align'=>'absmiddle'))?><br>
          <b>Үүсгэсэн: </b><?php echo $p->getCreatedAt() ?><br>
          <b>Засварласан: </b><?php echo $p->getUpdatedAt() ?><br>
          <b>Дэс дараалал: </b><?php echo $p->getSort() ?><br>
          <b>Онцлох: </b> <?php if($p->getIsFeatured()) echo image_tag('i/ok-m.png', array('width'=>15, 'align'=>'absmiddle'))?>
      </td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'product', 'id'=>$id));?>
          <br>
					<a href="<?php echo url_for('model/index?productId='.$id)?>" title="Моделууд" class="action"><?php echo $p->getNbModel()?> модел</a> | 
					<a href="<?php echo url_for('model/new?productId='.$id)?>" title="Модел нэмэх" class="action">Модел нэмэх</a>
					<br>
					<a href="<?php echo url_for('productSpec/index?productId='.$id)?>" title="Үзүүлэлтүүд" class="action">Үзүүлэлтүүд</a>
					<br>
          <?php include_partial('partial/isFeatured', array('module'=>'product', 'rs'=>$p));?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br clear="all">
<?php echo pager($pager, 'product/index')?>