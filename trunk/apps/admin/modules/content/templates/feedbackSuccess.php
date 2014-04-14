<form action="<?php echo url_for('content/feedback')?>" method="GET">
    <?php include_partial('partial/search', array());?>
</form>
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Бүтээгдэхүүн</th>
      <th>Байгууллага</th>
      <th>Албан тушаал</th>
      <th>Нэр</th>
      <th>Имэйл</th>
      <th>Утас</th>
      <th>Зурвас</th>
      <th>Огноо</th>
      <th>Устгах</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $feedback): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <?php $p = $feedback->getProduct()?>
      <td>
          <b><?php echo $p->getTitle().'<br>('.$p->getTitleEn().')</b><br><i>'.$p->getCode()?></i><br>
          <?php if($p->getImage()) echo link_to(image_tag('/u/p/'.$p->getImage(), array('style'=>'max-width:130px;')), sfConfig::get('app_host').'index.php/product/'.$p->getId().'.xhtml?cid='.$p->getCategoryId(), array('target'=>'_blank'));?></td>
      <td><?php echo $feedback->getOrganization()?></td>
      <td><?php echo $feedback->getPosition()?></td>
      <td><?php echo $feedback->getName()?></td>
      <td><a href="mailto:<?php echo $feedback->getEmail() ?>"><?php echo $feedback->getEmail() ?></a></td>
      <td><?php echo $feedback->getPhone() ?></td>
      <td><?php echo $feedback->getMessage() ?></td>
      <td nowrap><?php echo $feedback->getCreatedAt() ?></td>
      <td nowrap><?php echo link_to('Устгах', 'content/fdelete?id='.$feedback->getId(), array('confirm'=>'Та итгэлтэй байна уу?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br clear="all">
<?php echo pager($pager, 'content/feedback')?>