<?php $action = $sf_request->getParameter('action')?>
<ul id="mainmenu">
    <li class="<?php if($action == 'index') echo 'current'?>">
       <a href="<?php echo url_for('@homepage')?>"><h2><?php echo __('HOME')?></h2></a>
    </li>
    <li class="separator"></li>
    <li class="<?php if($action == 'about') echo 'current'?>">
       <a href="<?php echo url_for('main/about')?>"><h2><?php echo __('About Us')?></h2></a>
    </li>
    <li class="separator"></li>
    <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
       <a href="<?php echo url_for('content/products')?>"><h2><?php echo __('Products')?></h2></a>
    </li>
    <li class="separator"></li>
    <li class="<?php if(in_array($action, array('service', 'serviceShow'))) echo 'current'?>">
       <a href="<?php echo url_for('content/service')?>"><h2><?php echo __('Rent')?></h2></a>
    </li>
    <li class="separator"></li>
    <li class="<?php if($action == 'contact') echo 'current'?>">
       <a href="<?php echo url_for('main/contact')?>"><h2><?php echo __('Contact')?></h2></a>
    </li>
</ul>
<br clear="all">
