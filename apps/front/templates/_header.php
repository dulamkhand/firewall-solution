<div id="header">
<div class="wrapper">
    <a href="<?php echo url_for('@homepage')?>" class="left" style="margin:18px 0 0 20px;">
        <?php echo image_tag('logo.png', array('style'=>''))?>
    </a>
    <span class="left" style="width:1px;height:52px;margin:30px 25px 0 25px;background:#ddd;"></span>
    <div id="title" class="left">
        <?php echo __('Construction equipments trade, rent and leasing')?>
    </div>
    <div id="flags">
        <?php $culture = sfContext::getInstance()->getUser()->getCulture();?>
        <a href="<?php echo url_for('main/culture?l=mn')?>" class="<?php if($culture != 'en') echo 'bold'?>">Mon</a>
        <span> / </span>
        <a href="<?php echo url_for('main/culture?l=en')?>" class="<?php if($culture == 'en') echo 'bold'?>">Eng</a>
    </div>
    
    <div id="search">
        <input type="text" name="searchkey" class="input" />
        <a href="#" class="button">&nbsp;</a>
    </div>
    <br clear="all">
</div>
</div><!-- /header -->

<script type="text/javascript">
$(document).ready(function(){
  $('ul#mainmenu li').mouseover(function(){
      
  }).mouseout(function(){
      
  });
});
</script>