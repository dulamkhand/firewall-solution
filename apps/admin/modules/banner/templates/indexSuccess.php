<?php echo link_to('жагсаалт', 'banner/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'banner/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Файл</th>
      <th>Дэс дараалал</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($banners as $banner): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td><a href="<?php echo sfConfig::get('app_host')?>u/b/<?php echo $banner->getFilename()?>" target="_blank">
            <?php echo image_tag('/u/b/'.$banner->getFilename(), array('style'=>'max-width:200px')); ?>
        </a></td>
      <td><?php echo $banner->getSort() ?></td>
      <td nowrap>
        <a href="<?php echo url_for('banner/edit?id='.$banner->getId()) ?>">Засварлах</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <a onclick="return confirm('Та итгэлтэй байна уу?')" href="<?php echo url_for('banner/delete?id='.$banner->getId()) ?>">Устгах</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>