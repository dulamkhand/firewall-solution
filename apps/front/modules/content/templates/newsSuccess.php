<div style="margin:10px 0 0 40px;width:555px;float:left;">
  <?php foreach ($pager->getResults() as $news):?>
      <div style="border-bottom:1px solid #dedede;padding:20px 0;">
          <a href="<?php echo url_for('content/newsShow?id='.$news->getId())?>"><h2><?php echo $news?></h2></a>
          <div class="desc"><?php echo GlobalLib::utf8_substr($news->getBodyCulture(), 0, 300)?>...</div>
          <div class="timestamp"><?php echo time_ago($news->getCreatedAt())?></div>
          <a href="<?php echo url_for('content/newsShow?id='.$news->getId())?>" class="button right" style="padding:3px 15px;"><?php echo __('More')?> <?php echo image_tag('icons/arrow1.png', array())?></a>
          <br clear="all">
      </div>
  <?php endforeach?>

  <br clear="all">
  
  <?php echo pager($pager, 'content/news')?>
</div>

<?php include_partial('content/productRand');?>

<br clear="all">
<br clear="all">