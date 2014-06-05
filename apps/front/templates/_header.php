<div id="header">
<div id="menu">
    <?php $action = $sf_request->getParameter('action')?>
    <ul>
        <li class="<?php if($action == 'index') echo 'current'?>">
           <a href="<?php echo url_for('@homepage')?>"><?php echo image_tag('logo-tr.png', array('style'=>'float:left;margin:-45px 0 0 -35px;'))?></a>
        </li>
        <li class="<?php if($action == 'about') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><?php echo __('About Us')?></a>
        </li>
        <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
           <a href="<?php echo url_for('content/products')?>"><?php echo __('Our service')?></a>
        </li>
        <li class="<?php if($action == 'contact') echo 'current'?>">
           <a href="<?php echo url_for('main/contact')?>"><?php echo __('Contact')?></a>
        </li>
    </ul>
</div>
</div>

<br clear="all">
<br clear="all">