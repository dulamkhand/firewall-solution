<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Зураг</th>
      <th>Агуулга</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $page): ?>
    <tr>
      <td><?php echo ++$i?></td>
      <td>
        <?php if($page->getImage()) echo image_tag('/u/page/t350-'.$page->getImage(), array('style'=>'max-width:300px;'))?>
      </td>
      <td>
        <b><?php echo $page ?></b><br>
        <?php echo GlobalLib::clearOutput($page->getContent()) ?>
      </td>
      <td nowrap>
          <a href="<?php echo url_for('page/edit?id='.$page->getId())?>" title="Засварлах" class="action">Засварлах</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<br clear="all">

<?php echo pager($pager, 'page/index')?>