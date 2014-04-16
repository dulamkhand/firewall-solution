<?php echo link_to('жагсаалт', 'model/index?productId='.$sf_params->get('productId'), array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'model/new?productId='.$sf_params->get('productId'), array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('model/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Хадгалах" />
          &nbsp; <?php echo link_to('Жагсаалтруу буцах', 'model/index?productId='.$product->getId(), array()) ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><label>Product</label></th>
        <td>
        		<?php echo $product->getTitle().' / '.$product->getTitleEn()?>
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
        <th><?php echo $form['sort']->renderLabel() ?></th>
        <td>
          <?php echo $form['sort']->renderError() ?>
          <?php echo $form['sort'] ?>
          <?php echo $form['sort']->renderHelp() ?>
        </td>
      </tr>
    </tbody>
  </table>

</form>