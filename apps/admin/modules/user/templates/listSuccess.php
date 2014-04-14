<?php echo link_to('жагсаалт', 'user/list', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'user/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Имэйл</th>
      <th>Сүүлд нэвтэрсэн</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($users as $user): ?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getLoggedAt() ?></td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'user', 'id'=>$user->getId()));?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>