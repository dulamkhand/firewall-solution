<form action="<?php echo url_for('main/contact')?>" method="post" id="formFeedback">
    <table width="100%">
      <tr>
          <td>
              <?php echo $form['organization']->renderError() ?>
              <?php echo $form['organization'] ?>
          </td>
          <td>
              <?php echo $form['name']->renderError() ?>
              <?php echo $form['name'] ?>
          </td>
      </tr>
      <tr>
          <td>
              <?php echo $form['email']->renderError() ?>
              <?php echo $form['email'] ?>
          </td>
          <td>
              <?php echo $form['phone']->renderError() ?>
              <?php echo $form['phone'] ?>
          </td>
      </tr>
      <tr>
          <td colspan="2">
              <?php echo $form['message']->renderError() ?>
              <?php echo $form['message'] ?>
          </td>
      </tr>
      <tr>
         <td colspan="2">
            <a href="javascript:$('#formFeedback').submit();" class="button"><?php echo __('SEND')?></a>
         </td>
      </tr>
    </table>
    <br clear="all">
</form>


<script type="text/javascript">
$(document).ready(function(){
  $('#feedback_organization').click(function(){
      if($(this).val() == '<?php echo __('Organization')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Organization')?>');
  });

  $('#feedback_name').click(function(){
      if($(this).val() == '<?php echo __('Your name')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Your name')?>');
  });
  
  $('#feedback_email').click(function(){
      if($(this).val() == '<?php echo __('Email')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Email')?>');
  });
  
  $('#feedback_phone').click(function(){
      if($(this).val() == '<?php echo __('Phone')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Phone')?>');
  });
  
  $('#feedback_message').click(function(){
      if($(this).val() == '<?php echo __('About product')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('About product')?>');
  });

});
</script>
