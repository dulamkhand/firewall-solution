<a name="home"></a>
<div id="header">
<div class="wrapper">
    <div id="menu">
        <?php $action = $sf_request->getParameter('action')?>
        <ul>
            <li style="margin-left:-8px;">
               <a href="#home" style="border:0;padding:2px 5px;">
                  <?php echo image_tag('logo-tr.png', array('style'=>'max-width:40px;float:left;margin:0'))?>
               </a>
            </li>
            <li class="<?php if($action == 'about') echo 'current'?>">
               <a href="#about"><?php echo __('Firewall Solution LLC')?></a>
            </li>
            <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
               <a href="#products"><?php echo __('Products and services')?></a>
            </li>
            <li class="<?php if($action == 'jobs') echo 'current'?>">
               <a href="#jobs"><?php echo __('Works we did')?></a>
            </li>
            <li class="<?php if($action == 'clients') echo 'current'?>">
               <a href="#clients"><?php echo __('Our clients')?></a>
            </li>
            <li class="<?php if($action == 'contact') echo 'current'?>">
               <a href="#contact" style="border:0;"><?php echo __('Contact')?></a>
            </li>
            <br clear="all">
        </ul>
    </div><!--menu-->
</div><!--wrapper-->
</div><!--header-->

<br clear="all">
<br clear="all">
