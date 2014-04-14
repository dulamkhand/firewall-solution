<div style="width:400px;border-top:1px solid #dedede;padding:0;height:80px;clear:both;margin:0 0 5px 0;overflow:hidden;">
    <?php echo image_tag('/u/c/t100-'.$news->getImage(), array('style'=>'width:130px;height:80px;margin:0;', 'class'=>'left'))?>
    <div class="desc left justify" style="width:260px;margin:0 0 0 10px;line-height:16px;">
        <h3 style="margin:0"><?php echo $news?></h3>
        <?php echo GlobalLib::utf8_substr($news->getBodyCulture(), 0, 100)?>...
        <span class="timestamp"><?php echo time_ago($news->getCreatedAt())?></span>
    </div>
    <br clear="all">
</div>
