<a name="comments"></a>

<h2><?php echo __('COMMENTS')?></h2>
<hr style="border:0;border-bottom:3px double #DFDFDF;margin:10px 0;">
<div id="comments" style="max-height:400px;overflow-y:scroll;">
  <?php 
    $comments = Doctrine::getTable('Comment')->fetchall($objectType, $objectId);
    foreach ($comments as $comment)
    {
      include_partial('comment/list', array('comment'=>$comment));
    }
  ?>
</div>
<a name="comment-add"></a>

<br clear="all">

<h2><?php echo __('LEAVE A COMMENT')?></h2>
<?php include_partial('comment/form', array('objectType'=>$objectType, 'objectId'=>$objectId)) ?>

<script type="text/javascript">
function deleteComment(id)
{
  $.ajax({
    url: "<?php echo url_for('comment/delete')?>", 
    data: {commentId : id},
    success: function(data){
      var commentDiv = '#comment'+id;
      $(commentDiv).hide();
    }
  });
}
</script>