<?php echo link_to('жагсаалт', 'service/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'service/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">


<form action="<?php echo url_for('service/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<table width="100%">
  <tfoot>
    <tr>
      <td colspan="2">
        <?php echo $form->renderHiddenFields(false) ?>
        <input type="submit" value="Хадгалах" style="cursor:pointer;font-weight:bold;padding:10px;"/>
        &nbsp;<a href="<?php echo url_for('service/index') ?>">Жагсаалтруу буцах</a>
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
        <span class="description"><?php echo $form['image']->renderHelp() ?></span>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['summary']->renderLabel() ?></th>
      <td>
        <?php echo $form['summary']->renderError() ?>
        <?php echo $form['summary'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['summary_en']->renderLabel() ?></th>
      <td>
        <?php echo $form['summary_en']->renderError() ?>
        <?php echo $form['summary_en'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['body']->renderLabel() ?></th>
      <td>
        <?php echo $form['body']->renderError() ?>
        <?php echo $form['body'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['body_en']->renderLabel() ?></th>
      <td>
        <?php echo $form['body_en']->renderError() ?>
        <?php echo $form['body_en'] ?>
      </td>
    </tr>
    <tr>
      <th><?php echo $form['color']->renderLabel() ?></th>
      <td>
        <?php echo $form['color']->renderError() ?>
        <?php echo $form['color'] ?>
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