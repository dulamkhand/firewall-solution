<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php $host = sfConfig::get('app_host')?>
    <link rel="shortcut icon" href="/images/favicon.png" />
  
    <!--jquery-->
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="<?php echo $host?>js/jquery-latest.js"></script>
  
  	<!--css-->
    <?php use_stylesheet('all.css') ?>
    <?php use_stylesheet('/addons/fonts/open-sans.css') ?>
    <?php use_stylesheet('/addons/fonts/roboto.css') ?>
    <?php use_stylesheet('/addons/fonts/oswald.css') ?>
    <?php //use_stylesheet('custom-theme/jquery-ui-1.8.18.custom.css') ?>
    
    <?php use_javascript('/addons/flexslider/jquery.flexslider-min.js');?>
    <?php use_stylesheet('/addons/flexslider/flexslider.css');?>
    
  	<?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>

<body>
<div id="fb-root"></div>
<!--<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=623636837674066";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->

<div class="wrapper">
    <?php include_partial("global/header", array());?>
    <div id="content">
        <?php include_partial("content/slider", array());?>
        
        <?php if ($sf_user->hasFlash('flash')): ?>
    	      <div class="flash"><?php echo $sf_user->getFlash('flash')?></div>
    	  <?php endif; ?>
    
        <?php echo $sf_content?>
        
        <br clear="all">
    </div>
</div>

<br clear="all">
<?php include_partial("global/footer", array());?>

</body>
</html>