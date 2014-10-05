<a name="home" style="margin:0 0 10px 0;clear:both;display:block;"></a>
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
               <a href="#about" style="padding-left:10px"><?php echo __('Firewall Solution LLC')?></a>
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
               <a href="#contact"><?php echo __('Contact')?></a>
            </li>
            <li class="<?php if($action == 'contact') echo 'current'?>">
                <?php if($sf_user->getCulture() == "en"):?>
                    <a href="<?php echo url_for('main/culture?l=mn')?>" style="border:0;"><?php echo __('Монгол')?></a>
                <?php else:?>
                    <a href="<?php echo url_for('main/culture?l=en')?>" style="border:0;"><?php echo __('English')?></a>
                <?php endif?>
            </li>
            <br clear="all">
        </ul>
    </div><!--menu-->
</div><!--wrapper-->
</div><!--header-->

<br clear="all">
<br clear="all">
