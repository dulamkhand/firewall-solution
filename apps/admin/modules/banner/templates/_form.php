<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo link_to('жагсаалт', 'banner/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'banner/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">


<form action="<?php echo url_for('banner/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Хадгалах"/>
          &nbsp;<a href="<?php echo url_for('banner/index') ?>">Жагсаалтруу буцах</a>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['filename']->renderLabel() ?></th>
        <td>
          <?php echo $form['filename']->renderError() ?>
          <?php echo $form['filename'] ?>
          <div class="help"><?php echo $form['filename']->renderHelp() ?></div>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sort']->renderLabel() ?></th>
        <td>
          <?php echo $form['sort']->renderError() ?>
          <?php echo $form['sort'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
