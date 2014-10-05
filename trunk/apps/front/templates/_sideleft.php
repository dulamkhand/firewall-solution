<div id="sideleft">

    <a href="<?php echo url_for('@homepage')?>" class="left" style="margin:0;">
        <?php echo image_tag('logo200.png', array('style'=>''))?>
    </a>
    
    <br class="all">
    <br class="all">
    
    <?php $action = $sf_request->getParameter('action')?>
    <ul id="mainmenu">
        <li class="<?php if($action == 'index') echo 'current'?>">
           <a href="<?php echo url_for('@homepage')?>"><h2><?php echo __('HOME')?></h2></a>
        </li>
        <li class="<?php if($action == 'about') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><h2><?php echo __('About Us')?></h2></a>
        </li>
        <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
           <a href="<?php echo url_for('content/products')?>"><h2><?php echo __('Our service')?></h2></a>
        </li>
        <li class="<?php if($action == 'contact') echo 'current'?>">
           <a href="<?php echo url_for('main/contact')?>"><h2><?php echo __('Contact')?></h2></a>
        </li>
    </ul>

    <br clear="all">
    <br clear="all">
    
    <a href="<?php echo url_for('@homepage')?>" style="margin:0;">
        <?php echo image_tag('map.png', array('style'=>'width:180px;'))?>
    </a>

    <div class="fff" style="margin:0;">
        <?php echo image_tag('i/phone-28-16.png', array('align'=>'absmiddle'))?>
  		  <?php echo sfConfig::get('app_phone')?> &nbsp; <br/>
  		  <?php echo image_tag('i/email-10-16.png', array('align'=>'absmiddle'))?>
  		  <a href="mailto:<?php echo sfConfig::get('app_email')?>" class="fff">
  		      <?php echo sfConfig::get('app_email')?>
        </a><br/>        
        <?php echo image_tag('i/worldwide-location-16.png', array('align'=>'absmiddle'))?>
        <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') : sfConfig::get('app_address')?>
    </div>
    
    <div class="" style="margin:10px 0 0 0;">
        <a href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/facebook-5-m.png', array())?></a>
        <a href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/twitter-5-m.png', array())?></a>
        <a href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/youtube-5-m.png', array())?></a>
        <!--<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>-->
        <?php use_javascript('skypeCheck.js') ?>
        <a href="skype:<?php echo sfConfig::get('app_skype')?>?call" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/skype-5-m.png', array())?></a>
    </div>
    
    <br clear="all">
    <br clear="all">
    
    <!--<div id="flags">
        <?php //$culture = sfContext::getInstance()->getUser()->getCulture();?>
        <a href="<?php echo url_for('main/culture?l=mn')?>" class="<?php if($culture != 'en') echo 'bold'?>">Mon</a>
        <span> / </span>
        <a href="<?php echo url_for('main/culture?l=en')?>" class="<?php if($culture == 'en') echo 'bold'?>">Eng</a>
    </div>-->

</div><!-- /header -->


<script type="text/javascript">
$(document).ready(function(){
  $('ul#mainmenu li').mouseover(function(){
      
  }).mouseout(function(){
      
  });
});
</script>
