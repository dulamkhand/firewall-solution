<?php echo link_to('жагсаалт', 'gallery/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'gallery/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<?php foreach ($pager->getResults() as $image): ?>
  <div style="position:relative;width:180px;height:150px;overflow:hidden;padding:1px;float:left;margin:4px;border:1px solid #ccc;">
    <?php echo image_tag('/u/g/180-'.$image->getFilename(), array('alt'=>$image, 'title'=>$image, 'style'=>'float:left; max-width:180px; max-height:135px;'))?><br>
    <span style="position:absolute;bottom:0px;left:0;"><b><?php echo $image?></b></span>
    <a style="position:absolute;bottom:0px;right:14px;" href="<?php echo url_for('gallery/edit?id='.$image->getId()) ?>"><?php echo image_tag('icons/edit.gif', array())?></a>
    <a style="position:absolute;bottom:0px;right:0px;" onclick="return confirm('Та итгэлтэй байна уу?')" href="<?php echo url_for('gallery/delete?id='.$image->getId()) ?>"><?php echo image_tag('icons/delete.gif', array())?></a>
  </div>
<?php endforeach; ?>

<br clear="all">
<?php echo pager($pager, 'gallery/index')?>
