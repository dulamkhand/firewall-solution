<div id="header">
<div class="wrapper">
<div id="menu">
    <?php $action = $sf_request->getParameter('action')?>
    <ul>
        <li>
           <a href="<?php echo url_for('@homepage')?>" style="margin:0;">
              <?php echo image_tag('logo-tr.png', array('style'=>'float:left;margin:-32px 0 0 5px;'))?>
          </a>
        </li>
        <li class="<?php if($action == 'about') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><?php echo __('Товч танилцуулга')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if(in_array($action, array('products', 'productShow'))) echo 'current'?>">
           <a href="<?php echo url_for('content/products')?>"><?php echo __('Бүтээгдэхүүн үйлчилгээ')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'jobs') echo 'current'?>">
           <a href="<?php echo url_for('main/about')?>"><?php echo __('Хийж гүйцэтгэсэн ажлууд')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'clients') echo 'current'?>">
           <a href="<?php echo url_for('main/clients')?>"><?php echo __('Харилцагч байгууллагууд')?></a>
        </li>
        <li class="separator"></li>
        <li class="<?php if($action == 'contact') echo 'current'?>">
           <a href="<?php echo url_for('main/contact')?>"><?php echo __('Contact')?></a>
        </li>
    </ul>
</div>
</div>
</div>
