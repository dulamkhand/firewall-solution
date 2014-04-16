<form action="<?php echo url_for('page/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<table width="100%">
  <tfoot>
    <tr>
      <td colspan="2">
        <?php echo $form->renderHiddenFields(false) ?>
        <input type="submit" value="Хадгалах"/>
        &nbsp;<a href="<?php echo url_for('page/index') ?>">Жагсаалтруу буцах</a>
      </td>
    </tr>
  </tfoot>
  <tbody>
    <?php echo $form->renderGlobalErrors() ?>
    <tr>
      <th><?php echo $form['title']->renderLabel() ?></th>
      <td>
        <?php echo $form['title']->renderError() ?>
        <?php echo $form['title'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['title_en']->renderLabel() ?></th>
      <td>
        <?php echo $form['title_en']->renderError() ?>
        <?php echo $form['title_en'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['image']->renderLabel() ?></th>
      <td>
        <?php echo $form['image']->renderError() ?>
        <?php echo $form['image'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['content']->renderLabel() ?></th>
      <td>
        <?php echo $form['content']->renderError() ?>
        <?php echo $form['content'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['content_en']->renderLabel() ?></th>
      <td>
        <?php echo $form['content_en']->renderError() ?>
        <?php echo $form['content_en'] ?>
      </td>
    </tr>    
  </tbody>
</table>

</form>