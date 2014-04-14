<?php echo link_to('жагсаалт', 'poll/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'poll/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">


<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('poll/optionCreate') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

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
      <?php echo $form['poll_id'] ?>
      <tr>
        <th>Poll</th>
        <td>
          <?php echo $poll ?>
        </td>
      </tr>
      
      <tr><td colspan="2" style="border:0;">&nbsp;</td></tr>
      
      <tr>
        <td colspan="2" style="border:0;">
          <table width="100%">
            <tr>
              <td><b>Сонголтууд</b></td>
              <td><b>Эрэмбэ</b></td>
              <td><b>#</b></td>
            </tr>
            <?php $options = Doctrine::getTable('PollOption')->findByPollId($poll->getId());
              foreach ($options as $option)
              {
                echo '<tr><td>'.$option.'</td>';
                echo '<td>'.$option->getSort().'</td>';
                echo '<td>'.link_to('Устгах', 'poll/optionDelete?id='.$option->getId(), array('confirm'=>'Are you sure?')).'</td></tr>';
              }
             ?>
           </table>
        </td>
      </tr>
      
      <tr><td colspan="2" style="border:0;">&nbsp;</td></tr>
      
      <tr>
        <th colspan="2">Сонголт нэмэх</th>
      </tr>
      
      <tr>
        <th><?php echo $form['text']->renderLabel() ?></th>
        <td>
          <?php echo $form['text']->renderError() ?>
          <?php echo $form['text'] ?>
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