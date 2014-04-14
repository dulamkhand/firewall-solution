<div class="comment-body" id="comment<?php echo $comment->getId()?>">
  <b style="float:left;"><?php echo $comment?></b><span class="timestamp" style="float:left;margin:0 0 0 10px;"><?php echo time_ago($comment->getCreatedAt())?></span>:
  <br clear="all">
  <?php echo GlobalLib::clearOutput($comment->getText())?>
  <hr style="border:0;border-top:1px solid #dedede;" />
</div>