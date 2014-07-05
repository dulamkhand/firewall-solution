<div class="box" style="width:350px;padding:5px;height:306px;">
		<?php echo image_tag('/u/page/t350-'.$page->getImage(), array('width'=>350))?>    
</div>
<div class="box" style="width:554px;text-align:justify;">
		<h5><?php echo $page?></h5>
    <?php echo GlobalLib::clearOutput($page->getContentCulture())?>
</div>
<br clear="all">

<style>
	.box p {font-size:14px;font-family:Arial,Helvetica,sans-serif;}
</style>

