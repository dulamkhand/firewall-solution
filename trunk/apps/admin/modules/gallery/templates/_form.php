<form action="<?php echo url_for('gallery/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Хадгалах" style="cursor:pointer;font-weight:bold;padding:10px;"/>
          &nbsp;<a href="<?php echo url_for('gallery/index') ?>">Жагсаалтруу буцах</a>
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
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description_en']->renderLabel() ?></th>
        <td>
          <?php echo $form['description_en']->renderError() ?>
          <?php echo $form['description_en'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['filename']->renderLabel() ?></th>
        <td>
          <?php echo $form['filename']->renderError() ?>
          <?php echo $form['filename'] ?>
          <div class="description"><?php echo $form['filename']->renderHelp() ?></div>
        </td>
      </tr>
    </tbody>
  </table>
</form>