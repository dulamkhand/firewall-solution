<div class="left" style="width:530px;padding:0;">
    <?php include_partial('main/formFeedback', array('form'=>new FeedbackForm()));?>
</div>

<div class="right" style="width:400px;border-left:1px solid #dedede;padding:0 0 0 37px;">
    <script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyCCai3UpfJoxQUYLs7rE_CcSHM8pVBDPqM" type="text/javascript"></script>
    <?php use_javascript('jQuery.bMap.1.2.3.js');?>
    <script type="text/javascript">
      $(document).ready(function(){ 
      	$("#mapContact").bMap({
      		mapZoom: 12,
      		mapCenter:[<?php echo sfConfig::get('app_lat')?>, <?php echo sfConfig::get('app_lng')?>],
      		markers:{"data":[{
      				"lat":<?php echo sfConfig::get('app_lat')?>,"lng":<?php echo sfConfig::get('app_lng')?>,"title":"FIREWALL SOLUTION","body":""
    			}]}
      	});
      });
    </script>
    <div id="mapContact" style="width:350px;height:200px;border-radius:12px;"></div>
    
    <br clear="all">
    <hr style="border:0;border-top:1px solid #dedede;">
    <br clear="all">
    
	  <span style="font-weight:bold;"><?php echo __('Contact')?>.</span>
	  <br clear="all">
	  <span style="font-size:10px;text-decoration:none;">
		    <?php echo sfConfig::get('app_phone')?>   
    </span>
	  <a href="mailto:<?php echo sfConfig::get('app_email')?>" style="font-size:10px;text-decoration:none;">
       <?php echo sfConfig::get('app_email')?>
    </a><br>
	  <br clear="all">
	  <br clear="all">
	  
    <span style="font-weight:bold;"><?php echo __('Address')?>.</span>
    <br clear="all">
		<span style="font-size:10px;text-decoration:none;">
		    <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') : sfConfig::get('app_address')?>
		</span>
		<br clear="all"/>
		<br clear="all"/>
    
		<span style="font-weight:bold;"><?php echo __('Socials')?>.</span>
	  <a href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" style="font-size:13px;text-decoration:none;" target="_blank">
    		<?php echo '/'.sfConfig::get('app_facebook')?>
		</a>
		<br clear="all"/>
		<br clear="all"/>

    <span style="font-size:10px;text-decoration:none;">
		    <?php echo __('Twitter')?>.</span>
    <a href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" style="font-size:13px;text-decoration:none;" target="_blank">
        <?php echo '/'.sfConfig::get('app_twitter')?>
    </a>
		<br clear="all"/>

    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;"><?php echo __('Youtube')?>.</span>
    <a href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" style="font-size:13px;text-decoration:none;" target="_blank">
        <?php echo '/'.sfConfig::get('app_youtube')?>
    </a>
    <br clear="all"/>
    
    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;"><?php echo __('Skype')?>.</span>
		<a href="skype:<?php echo sfConfig::get('app_skype')?>?call" style="font-size:13px;text-decoration:none;" target="_blank">
		    <?php echo sfConfig::get('app_skype')?>
    </a>
</div>