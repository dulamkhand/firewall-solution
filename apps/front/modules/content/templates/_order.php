<?php $color = $product->getColor() ? '#'.$product->getColor() : '#177B01'?>

<div class="box-product-show" style="border-radius:3px;padding:7px 0 5px 0;float:right;background:<?php echo $color?>;opacity:0.9;
        width:320px;margin:0 0 10px 0;">
<h4 style="cursor:pointer;color:#fff;" onclick="$('#formOrderContainer').slideDown();">
		<?php echo image_tag('i/email-14-m.png', array())?> <?php echo __('Send an invoice')?>
</h4>
<div id="formOrderContainer" style="display:<?php echo $sf_request->isMethod(sfRequest::POST) ? 'block' : 'none'?>;background:#fff;margin:7px 10px 5px 10px;padding:15px;">
    		    
    <form action="<?php echo url_for('content/'.$act.'Show?id='.$product->getId().'&cid='.$product->getCategoryId().'&i='.$sf_params->get('i'))?>" method="post" id="formOrder">
    		<input type="hidden" value="<?php echo $product->getId()?>" name="id"/>
        <?php echo $form['product_id'] ?>
    		<div class="gray">* <?php echo __('fields are mandatory')?></div>
    
        <table>
        		<tr>
        				<td colspan="2">
        						<?php echo $form['organization']->renderError() ?>
        						<?php echo $form['organization'] ?>
        				</td>
        		</tr>
        		<tr>
        				<td>
    						    <?php echo $form['position']->renderError() ?>
    	    					<?php echo $form['position'] ?>
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
    					 		<a href="#orderForm" title="<?php echo __('SEND')?>" class="button" id="orderButtonSubmit" style="background:<?php echo $color?>;">
    					        <?php echo __('SEND')?>
    					    </a>	
    					 </td>    				
        		</tr>
        </table>    
    </form>


<script type="text/javascript">
$(document).ready(function(){
  $('#order_organization').click(function(){
      if($(this).val() == '<?php echo __('Organization')?> *') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Organization')?> *');
  });

  $('#order_position').click(function(){
      if($(this).val() == '<?php echo __('Position')?> *') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Position')?> *');
  });
  
  $('#order_name').click(function(){
      if($(this).val() == '<?php echo __('Your name')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Your name')?>');
  });
  
  $('#order_email').click(function(){
      if($(this).val() == '<?php echo __('Email')?> *') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Email')?> *');
  });
  
  $('#order_phone').click(function(){
      if($(this).val() == '<?php echo __('Phone')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Phone')?>');
  });
  
  $('#order_message').click(function(){
      if($(this).val() == '<?php echo __('Message')?> *') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Message')?> *');
  });


  $('#orderButtonSubmit').click(function() {
  		if($('#order_organization').val() == '<?php echo __('Organization')?> *') $('#order_organization').val('');
  		if($('#order_position').val() == '<?php echo __('Position')?> *') $('#order_position').val('');
  		if($('#order_name').val() == '<?php echo __('Your name')?>') $('#order_name').val('');
  		if($('#order_email').val() == '<?php echo __('Email')?> *') $('#order_email').val('');
  		if($('#order_phone').val() == '<?php echo __('Phone')?>') $('#order_phone').val('');
  		if($('#order_message').val() == '<?php echo __('Message')?> *') $('#order_message').val('');
  		$('#formOrder').submit();
  });
});
</script>

</div>
</div>
