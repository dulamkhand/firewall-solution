<?php echo link_to('жагсаалт', 'service/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'service/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Зураг</th>
      <th>Үйлчилгээ</th>
      <th>Дэлгэрэнгүй</th>
      <th>Огноо</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $service): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td><?php if($service->getImage()) echo image_tag('/u/s/'.$service->getImage(), array('style'=>'float:left;margin:3px;max-width:100px;')) ?></td>
      <td>
        <b><?php echo $service ?></b><br>
        <?php echo $service->getSummary()?>
      </td>
      <td><?php echo GlobalLib::utf8_substr(strip_tags($service->getBody()), 0, 300).' ...' ?></td>
      <td><?php echo $service->getCreatedAt() ?></td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'service', 'id'=>$service->getId()))?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br clear="all">
<?php echo pager($pager, 'service/index')?>