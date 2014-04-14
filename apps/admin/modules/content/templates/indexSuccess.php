<?php echo link_to('жагсаалт', 'content/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'content/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('content/index')?>" method="GET">
    <?php include_partial('partial/search', array());?>
</form>
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Мэдээ мэдээлэл</th>
      <th>Огноо</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $content): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td>
        <?php if($content->getImage()) 
              {
                echo link_to('[delete image]', 'content/deleteImage?id='.$content->getId(), array('confirm'=>'Are you sure?')).'<br/>';
                echo image_tag('/u/c/'.$content->getImage(), array('style'=>'float:left;margin-right:15px;max-width:200px'));
              }
         ?>
        <b><?php echo $content ?></b><br>
        <?php echo GlobalLib::utf8_substr(strip_tags($content->getBody()), 0, 150).' ...' ?>
      </td>
      <td nowrap><?php echo $content->getCreatedAt() ?></td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'content', 'id'=>$content->getId()))?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br clear="all">
<?php echo pager($pager, 'content/index')?>