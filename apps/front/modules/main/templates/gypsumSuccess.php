<?php include_partial('content/category', array());?>

<div class="box left" style="width:690px;margin:0 0 10px 0;text-align:justify;">
		<h5><?php echo $page?></h5>
		<?php echo image_tag('/u/page/t350-'.$page->getImage(), array('width'=>350, 'style'=>'float:left;margin:0 5px 5px 0;'))?>    
    <?php echo GlobalLib::clearOutput($page->getContentCulture())?>
</div>
<br clear="all">
