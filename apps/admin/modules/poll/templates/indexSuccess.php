<?php echo link_to('жагсаалт', 'poll/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'poll/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<table width="100%">
	<thead>
		<tr>
		  <th>№</th>
		  <th>Санал асуулга</th>
		  <th>Сонголтууд</th>
		  <th>Эрэмбэ</th>
		  <th>Огноо</th>
	    <th>#</th>
		</tr>
	</thead>
	<tbody>
	  <?php $i=0; foreach ($polls as $poll): ?>
  	<tr>
  	  <td><?php echo ++$i?></td>
      <td><?php echo $poll?></td>
      <td><?php echo $poll->getOptions()?></td>
      <td><?php echo $poll->getSort()?></td>
      <td><?php echo $poll->getCreatedAt() ?></td>
      <td nowrap>
          <a href="<?php echo url_for('poll/optionNew?poll_id='.$poll->getId()) ?>">Сонголтууд</a> | 
          <?php include_partial('partial/editDelete', array('module'=>'poll', 'id'=>$poll->getId()))?>
      </td>
    </tr>
    <?php endforeach; ?>
	</tbody>
</table>