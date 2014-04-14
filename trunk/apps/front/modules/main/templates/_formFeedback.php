<form action="<?php echo url_for('main/contact')?>" method="post" id="formFeedback">
    <h2 style="margin:0 0 10px 3px;"><?php echo __('BOOK A PRODUCT')?></h2>
    <?php echo $form['organization']->renderError() ?>
    <?php echo $form['organization'] ?>

    <?php echo $form['name']->renderError() ?>
    <?php echo $form['name'] ?>
  
    <?php echo $form['email']->renderError() ?>
    <?php echo $form['email'] ?>
  
    <?php echo $form['phone']->renderError() ?>
    <?php echo $form['phone'] ?>
	
    <?php echo $form['message']->renderError() ?>
    <?php echo $form['message'] ?>
    
    <a href="javascript:$('#formFeedback').submit();" class="button"><?php echo __('SEND')?></a>
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
