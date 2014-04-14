<?php echo link_to('жагсаалт', 'category/list', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'category/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('category/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Save" />
          &nbsp; <?php echo link_to('Back to list', 'category/list', array()) ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      
      <tr>
        <th><?php echo $form['parent_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['parent_id']->renderError() ?>
          <?php echo $form['parent_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['name_en']->renderLabel() ?></th>
        <td>
          <?php echo $form['name_en']->renderError() ?>
          <?php echo $form['name_en'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['has_leasing']->renderLabel() ?></th>
        <td>
          <?php echo $form['has_leasing']->renderError() ?>
          <label style="display:block;width:153px;">
              <?php echo $form['has_leasing'] ?>
              <?php echo $form['has_leasing']->renderHelp() ?>
          </label>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sort']->renderLabel() ?></th>
        <td>
          <?php echo $form['sort']->renderError() ?>
          <?php echo $form['sort'] ?>
          <span class="help"><?php echo $form['sort']->renderHelp() ?></span>
        </td>
      </tr>
    </tbody>
  </table>

</form>