<?php $reks = Doctrine::getTable('Banner')->fetchall()?>
<div class="flexslider">
  <ul class="slides">
    <?php foreach ($reks as $rek):?>
        <li><?php echo image_tag('/u/b/'.$rek['filename'], array('style'=>'width:970px;height:280px;'))?></li>
    <?php endforeach;?>
  </ul>
</div><!--flexslider-->

<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    directionNav: false,
    itemWidth:970,
    itemHeight:280,
  });
});
</script>