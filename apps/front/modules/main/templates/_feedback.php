<form action="<?php echo url_for('main/contact')?>" method="post" id="formFeedback">
    <h2 style="margin:0 0 10px 0;font-family:'Roboto Condensed';font-size:20px;color:#177B01;text-align:center;width:95%;">
        <?php echo __('Leave us a message')?>
    </h2>

    <br clear="all">
    <div class="left" style="margin:0;width:380px;text-align:right;">
        <?php echo $form['name']->renderError() ?>
        <?php echo $form['name'] ?>
      
        <?php echo $form['email']->renderError() ?>
        <?php echo $form['email'] ?>
      
        <?php echo $form['phone']->renderError() ?>
        <?php echo $form['phone'] ?>
    </div>
	
    <div class="left" style="margin:0 0 0 1px;width:390px;text-align:left;">
        <?php echo $form['message']->renderError() ?>
        <?php echo $form['message'] ?>
        <br clear="all">
        <a href="javascript:$('#formFeedback').submit();" style="margin:0 0 0 -17px;font-size:15px;color:#177B01;">
            <?php echo __('Send')?>
        </a>
    </div>
    <br clear="all">
</form>


<script type="text/javascript">
$(document).ready(function(){
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
        if($(this).val() == '<?php echo __('Message')?>') $(this).val('');
    }).blur(function(){
        if($(this).val() == '') $(this).val('<?php echo __('Message')?>');
    });
});
</script>
