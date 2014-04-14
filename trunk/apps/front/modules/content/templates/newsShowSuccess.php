<div style="padding:30px;text-align:justify;">
    <h2><?php echo $news?></h2>
    
    <hr style="border:0;border-bottom:3px double #DFDFDF;">
  
    <div class="timestamp"><?php echo time_ago($news->getCreatedAt())?></div>
    
    <br clear="all">
  
    <?php if($news->getImage()) echo image_tag('/uploads/content/'.$news->getImage(), array('style'=>'float:left;margin-right:15px;')) ?>

    <?php echo GlobalLib::clearOutput($news->getBodyCulture())?>
    
    <br clear="all">
    <br clear="all">
    <a href="<?php echo url_for('content/news')?>">&laquo; <?php echo __('back to news list')?></a>
    <br clear="all">
    <br clear="all">
    <br clear="all">
    <br clear="all">

    <?php include_partial('comment/comment', array('objectType'=>'news','objectId'=>$news->getId()));?>
    
</div>