<div id="CommentAdd">
  <form action="#" method="post" class="form" id="commentForm">

    <input type="hidden" value="<?php echo $objectType ?>" name="commentObjectType" id="commentObjectType" />
    <input type="hidden" value="<?php echo $objectId ?>" name="commentObjectId" id="commentObjectId" />
    
    <input class="field" type="text" value="<?php echo __('Your name')?>" style="width:400px;" name="commentName" id="commentName" />

    <div id="commentError" class="error_message"></div>
    <textarea  class="field" name="commentBody" id="commentBody" style="width:400px;height:60px;"><?php echo __('Enter your comment.')?></textarea>
    <br clear="all">
    <br clear="all">
    
    <a href="#comment-add" onclick="submitCommentForm();" class="button"><?php echo __('Leave a comment')?></a>
    <?php echo image_tag('icons/loader16.gif', array('style'=>'float:left;display:none;', 'id'=>'commentLoader'))?>
  </form>
</div><!--CommentAdd-->

<script type="text/javascript">
function submitCommentForm()
{
  $('#commentError').html('');
  
  if($('#commentBody').val() == "")
  {
    $('#commentError').html('<?php echo __('Enter your comment.')?>');
    return false;
  }
  
  $.ajax({
    url: "<?php echo url_for('comment/save')?>", 
    type: "post",
    data: {commentObjectId:$('#commentObjectId').val(), commentObjectType:$('#commentObjectType').val(), commentName:$('#commentName').val(), commentBody:$('#commentBody').val()},
    beforeSend: function(){
      $('#commentLoader').show();
    },
    success: function(data)
    {
      $('#commentLoader').hide();
      $("#comments").append(data);

      $('#commentName').val("<?php echo __('Your name')?>");
      $('#commentBody').val("<?php echo __('Enter your comment.')?>");
    }
  });
  return false;
}

$(document).ready(function(){
  $('#commentName').click(function(){
      if($(this).val() == '<?php echo __('Your name')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Your name')?>');
  });

  $('#commentBody').click(function(){
      if($(this).val() == '<?php echo __('Enter your comment.')?>') $(this).val('');
  }).blur(function(){
      if($(this).val() == '') $(this).val('<?php echo __('Enter your comment.')?>');
  });
});
</script>