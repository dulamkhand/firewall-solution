<div id="footer">
<div class="wrapper">
    <div class="left" style="width:500px;margin:0 0 0 7px;">
          <h4 style="margin:0 0 6px 0;"><?php echo __('Product')?></h4>
          <ul class="left">
              <?php $rss = Doctrine::getTable('ProductCategory')->createQuery()->where('parent_id =?','0')->execute()?>
              <?php $i=0; foreach ($rss as $cat):?>
                  <li class="left" style="width:250px;overflow:hidden;">
                      <span style="background:#fff;width:4px;height:4px;display:block;float:left;margin:11px 0 0 0;"></span>
              				<a href="<?php echo url_for('content/products?cid='.$cat->getId())?>" style="color:#fff;text-decoration:none;padding:0px 0 0px 15px;display:block;">
                          <?php echo $cat?>
                      </a>
                  </li>
              <?php endforeach?>
              <li class="left" style="width:250px;overflow:hidden;">
                  <span style="background:blue;width:4px;height:4px;display:block;float:left;margin:11px 0 0 0;"></span>
          				<a href="<?php echo url_for('main/gypsum')?>" style="color:blue;text-decoration:none;padding:0px 0 0px 15px;display:block;">
              		    <?php echo __('Gypsum board')?>
          		    </a>
      		    </li>
          </ul>
    </div>
    <div class="right fff" style="width:490px;">
          <h4 style="margin:0 0 6px 0;"><?php echo __('Contact')?></h4>
    		  <b><?php echo __('Phone')?> : </b> <?php echo sfConfig::get('app_phone')?> &nbsp; 
    		  <b><?php echo __('Email')?> : </b> <a href="mailto:<?php echo sfConfig::get('app_email')?>" class="fff"><?php echo sfConfig::get('app_email')?></a><br/>
          <b><?php echo __('Address')?> : </b> <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') : sfConfig::get('app_address')?>
          
          <div class="right" style="margin:-25px 7px 0 0;">
              <a href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/facebook-5-m.png', array())?></a>
              <a href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/twitter-5-m.png', array())?></a>
              <a href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/youtube-5-m.png', array())?></a>
              <!--<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>-->
              <?php use_javascript('skypeCheck.js') ?>
              <a href="skype:<?php echo sfConfig::get('app_skype')?>?call" target="_blank" style="margin:1px 0 0 0;"><?php echo image_tag('i/skype-5-m.png', array())?></a>
          </div>
    </div>
    
    <br clear="all">
    <br clear="all">
    <div class="fff" style="border-top:0px solid #FFEA01;">
        Copyright @ 2014 All rights reserved. Simpedil Mongolia LLC
    </div>
</div>
</div><!--footer-->