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
    
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>

<body>

<?php echo $sf_content?>

<br clear="all">

</body>
</html>