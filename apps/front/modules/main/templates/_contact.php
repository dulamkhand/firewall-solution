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
<hr style="border:0;border-top:1px solid #dedede;margin:10px 50px 20px 0;">

<?php include_partial('main/contactText', array());?>