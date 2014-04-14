<?php echo link_to('жагсаалт', 'poll/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'poll/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('poll/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="submit" value="Хадгалах" style="cursor:pointer;font-weight:bold;padding:10px;"/>
          &nbsp;<a href="<?php echo url_for('poll/index') ?>">Жагсаалтруу буцах</a>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['question']->renderLabel() ?></th>
        <td>
          <?php echo $form['question']->renderError() ?>
          <?php echo $form['question'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['question_en']->renderLabel() ?></th>
        <td>
          <?php echo $form['question_en']->renderError() ?>
          <?php echo $form['question_en'] ?>
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