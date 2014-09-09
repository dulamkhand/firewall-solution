<?php $reks = Doctrine::getTable('Banner')->fetchall()?>
<div class="flexslider">
  <ul class="slides">
    <?php foreach ($reks as $rek):?>
        <li><?php echo image_tag('/u/b/'.$rek['filename'], array('style'=>'max-width:600px;max-height:500px;margin:30px 0 0 200px;'))?></li>
    <?php endforeach;?>
  </ul>
</div><!--flexslider-->

<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    directionNav: false,
    itemWidth:1000,
    itemHeight:500,
  });
});
</script>