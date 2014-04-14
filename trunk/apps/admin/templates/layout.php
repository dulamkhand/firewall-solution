<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>  
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
  	
  	<link rel="shortcut icon" href="/images/logo_small.png" />
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <?php use_javascript('jquery-latest.js');?>

    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>
    <div id="container">
      <div id="header">
        <h2 style="margin-top:26px;">SIMPEDIL MONGOLIA | ADMIN PANEL</h2>
        <?php $tab = isset($tab) ? $tab : $sf_request->getParameter('module'); ?>
        <?php $action = $sf_request->getParameter('action'); ?>
  
        <br clear="all">
        <div id="topmenu">
          <ul>
	            <?php if($sf_user->isAuthenticated() && $sf_user->hasCredential('admin-simpedil')):?>
	            		<li <?php echo ($tab == 'content' && $action == "feedback") ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Үнийн санал', 'content/feedback')?>
		              </li>
		              <li <?php echo $tab == 'banner' ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Слайдер', 'banner/index')?>
		              </li>
		              <li <?php echo ($tab == 'category') ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Бүтээгдэхүүний категори', 'category/list')?>
		              </li>
		              <li <?php echo ($tab == 'spec') ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Бүтээгдэхүүний үзүүлэлт', 'spec/index')?>
		              </li>
		              <li <?php echo $tab == 'product' ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Бүтээгдэхүүн', 'product/index')?>
		              </li>
		              <li <?php echo ($tab == 'content' && $action == "index") ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Мэдээ мэдээлэл', 'content/index')?>
		              </li>		              
		              <li <?php echo $tab == 'page' ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Бидний тухай', 'page/index')?>
		              </li>
		              <li <?php echo $tab == 'user' ? 'class="current"' : '' ?>>
		                  <?php echo link_to('Админ', 'user/list')?>
		              </li>
		              <li><?php echo link_to('Гарах', '@logout')?></li>
	            <?php else:?>
	              	<li>&nbsp;</li>
	            <?php endif ?>
          </ul>
          
        </div>
      </div>
     
      <div id="wrapper">
        <div id="content">
					  <?php if ($sf_user->hasFlash('flash')): ?>
					      <div class="flash"><?php echo $sf_user->getFlash('flash')?></div>
					  <?php endif; ?>

          	<?php echo $sf_content ?>
        </div>
      </div>
  
      <div id="footer">
        	Copyright &copy; 2014 &nbsp; SIMPEDIL LLC
        	<br clear="all">
      </div>
      
    </div>
  </body>
</html>