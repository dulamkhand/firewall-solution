<span style="text-decoration:none;">
    <?php echo sfConfig::get('app_phone')?>   
</span>
<br clear="all">
<a href="mailto:<?php echo sfConfig::get('app_email')?>" style="text-decoration:none;">
   <?php echo sfConfig::get('app_email')?>
</a><br>
<br clear="all">

<span style="text-decoration:none;">
    <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') 
        : sfConfig::get('app_address')?>
</span>
<br clear="all"/>
<br clear="all"/>

<a href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/facebook-4-m.png', array())?>
</a>
<a href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/twitter-4-m.png', array())?>
</a>
<a href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/youtube-4-m.png', array())?>
</a>
<a href="skype:<?php echo sfConfig::get('app_skype')?>?call" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/skype-4-m.png', array())?>
</a>
<a href="http://www.pinterest.com/<?php echo sfConfig::get('app_pinterest')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/pinterest-4-m.png', array())?>
</a>
<a href="http://www.instagram.com/<?php echo sfConfig::get('app_instagram')?>" target="_blank" style="text-decoration:none;">
   <?php echo image_tag('i/instagram-4-m.png', array())?>
</a>
