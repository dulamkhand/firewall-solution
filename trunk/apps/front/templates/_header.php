<div id="header">
<div id="floater">
      <?php echo sfConfig::get('app_phone')?> &nbsp; &nbsp; | &nbsp; &nbsp; 
      <a href="mailto:firewallsolution.llc@gmail.com" style="text-decoration:none;color:#777;font-size:16px;">
            firewallsolution.llc@gmail.com</a>
</div>

<div class="wrapper">
<div id="menu">
    <?php $action = $sf_request->getParameter('action')?>
    <ul>
        <li>
           <a href="<?php echo url_for('@homepage')?>" style="margin:0;">
              <?php echo image_tag('logo-tr.png', array('style'=>'float:left;margin:-32px 15px 0 -12px;'))?>
          </a>
        </li>
        <li class="<?php if($action == 'about') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><?php echo __('Firewall Solution LLC')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
           <a href="<?php echo url_for('content/products')?>"><?php echo __('Products and services')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'jobs') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><?php echo __('Works we did')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'clients') echo 'current'?>">
           <a href="<?php echo url_for('main/clients')?>"><?php echo __('Our clients')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'contact') echo 'current'?>">
           <a href="<?php echo url_for('main/contact')?>"><?php echo __('Contact')?></a>
        </li>
    </ul>
</div>
</div>
</div>
