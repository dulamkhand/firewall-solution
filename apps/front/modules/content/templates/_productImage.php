<?php use_javascript('/addons/pikachoose/jquery.pikachoose.min.js');?>
<?php use_stylesheet('/addons/pikachoose/base.css');?>

<div class="box-product-show pikachoose" style="width:390px;margin:0 0 10px 0;padding:5px;">
    <ul id="pikame">
        <?php if($p->getImage()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage1()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage1(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage2()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage2(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage3()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage3(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage4()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage4(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage5()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage5(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage6()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage6(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage7()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage7(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
        <?php if($p->getImage8()):?>
            <li><a href="#"><?php echo image_tag('/u/p/'.$p->getImage8(), array('style'=>'max-width:390px;max-height:400px;'));?></a></li>
        <?php endif?>
		</ul>
</div>

<script language="javascript">
$(document).ready(function (){
   $("#pikame").PikaChoose({autoPlay:false,transition:[0],showCaption:false,thumbOpacity:1,speed:0,animationSpeed:0});
});
</script>