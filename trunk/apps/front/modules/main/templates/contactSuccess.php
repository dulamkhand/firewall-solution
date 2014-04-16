<div class="box" style="width:320px;">
		<h5 style="margin:0 0 16px 0;"><?php echo __('Contact')?></h5>

		<span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;">
			 <?php echo __('Phone')?>.
    </span> 
		<span class="left" style="font-size:13px;text-decoration:none;float:left;">
		   <?php echo sfConfig::get('app_phone')?>
    </span><br/>
	  <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;">
	     <?php echo __('Email')?>.
    </span> 
	  <a class="left" href="mailto:<?php echo sfConfig::get('app_email')?>" style="font-size:13px;text-decoration:none;text-decoration:none;">
       <?php echo sfConfig::get('app_email')?>
    </a>
	  <br/><br/>
	  
    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;font-weight:bold;">
		    <?php echo __('Office')?>.
    </span>
		<span class="left" style="font-size:13px;text-decoration:none;float:left;margin:-23px 0 0 95px;">
		    <?php echo $sf_user->getCulture() == 'en' ? sfConfig::get('app_address_en') : sfConfig::get('app_address')?>
		</span>
		<br clear="all"/><br/>
    
    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;">
		    <?php echo __('Facebook')?>.</span>
	  <a class="left" href="http://www.facebook.com/<?php echo sfConfig::get('app_facebook')?>" style="font-size:13px;text-decoration:none;" target="_blank">
    		<?php echo '/'.sfConfig::get('app_facebook')?>
		</a>
		<br clear="all"/>

    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;">
		    <?php echo __('Twitter')?>.</span>
    <a class="left" href="http://www.twitter.com/<?php echo sfConfig::get('app_twitter')?>" style="font-size:13px;text-decoration:none;" target="_blank">
        <?php echo '/'.sfConfig::get('app_twitter')?>
    </a>
		<br clear="all"/>

    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;"><?php echo __('Youtube')?>.</span>
    <a class="left" href="http://www.youtube.com/<?php echo sfConfig::get('app_youtube')?>" style="font-size:13px;text-decoration:none;" target="_blank">
        <?php echo '/'.sfConfig::get('app_youtube')?>
    </a>
    <br clear="all"/>
    
    <span style="font-size:12px;width:95px;float:left;font-style:italic;font-weight:bold;"><?php echo __('Skype')?>.</span>
		<a class="left" href="skype:<?php echo sfConfig::get('app_skype')?>?call" style="font-size:13px;text-decoration:none;" target="_blank">
		    <?php echo sfConfig::get('app_skype')?>
    </a>
		<br clear="all"/>
</div>

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
<div id="mapContact" class="box" style="width:553px;height:355px;"></div>

<br clear="all">