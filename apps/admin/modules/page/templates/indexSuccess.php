<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Агуулга</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $page): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td>
        <b><?php echo $page ?></b><br>
        <?php echo GlobalLib::utf8_substr(strip_tags($page->getContent()), 0, 200).' ...' ?>
      </td>
      <td nowrap>
          <?php include_partial('partial/editDelete', array('module'=>'page', 'id'=>$page->getId()))?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br clear="all">

<?php echo pager($pager, 'page/index')?>