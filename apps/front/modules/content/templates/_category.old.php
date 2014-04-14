<?php use_javascript('/addons/ui/jquery-ui.min.js');?>
<?php //use_stylesheet('/addons/ui/jquery-ui.css');?>
<?php $act = in_array($sf_request->getParameter('action'), array("service", "serviceShow")) ? "service" : "products"?>

<!--CATEGORIES-->
<div class="left" style="width:230px;margin:0 9px 5px 15px;background:#fff;box-shadow:0 3px 3px rgba(0, 0, 0, 0.3);">
    <div style="position:absolute;top:0;left:0;background:#FE0000;width:210px;padding:10px;">
        <h4 style="margin:0 0 0 17px;"><?php echo __('Products')?></h4>
    </div>
    <br clear="all">
    <div id="accordionProductCategory" style="padding:25px 5px 40px 5px;">
        <?php $map = array()?>
        <?php $list = array()?>
        <?php $q = Doctrine::getTable('ProductCategory')->createQuery()->where('parent_id <> 0');
              		if(isset($isRent) && $isRent) $q->andWhere('has_leasing = 1');
                  $q->orderBy('sort DESC, name ASC');
        			$subcats = $q->execute();?>
        <?php foreach ($subcats as $subcat) {
            $list = isset($map[$subcat->getParentId()]) ? $map[$subcat->getParentId()] : array();
            $list[] = $subcat;
            $map[$subcat->getParentId()] = $list;
        }?>

        <?php $q = Doctrine::getTable('ProductCategory')->createQuery()
                    ->where('parent_id = 0 OR parent_id is null');
                    if(isset($isRent) && $isRent) $q->andWhere('has_leasing = 1');
                    $q->orderBy('sort DESC, name ASC');
        			$cats = $q->execute();?>
        <?php $i=0; foreach ($cats as $cat): ?>
            <h3><?php echo $cat?></h3>

            <div <?php if(!isset($map[$cat->getId()])) echo 'class="no-subcategory"'?> style="padding:0;">
            <?php if(isset($map[$cat->getId()])):?>
                <ul class="product-category">
                    <?php foreach ($map[$cat->getId()] as $subcat):?>
                        <li><a href="<?php echo url_for('content/'.$act.'?i='.$i++.'&cid='.$subcat->getId())?>" class="<?php if($sf_params->get('cid') == $subcat->getId()) echo 'current'?>">
                                <?php echo $subcat?>
                        </a></li>
                    <?php endforeach?>
                </ul>
            <?php endif?>
            </div>
        <?php endforeach?>
    </div><!--accordion-->    
    <br clear="all">
    <h3 style="background:rgba(34, 178, 2, 0.6);width:197px;margin:0 7px 10px 7px;padding:0 10px;">
    		<a href="<?php echo url_for('main/gypsum')?>" style="text-decoration:none;">
    		        <?php echo __('Гипсэн хавтан')?>
    		</a>    
    </h3>
</div>


<script type="text/javascript">
$(function() {
    $("#accordionProductCategory").accordion({
        heightStyle: "content",
        event: "click hoverintent",
        animated: false,
        active: <?php echo $selectedI ? $selectedI : "false"?>,
    });
    
    // disable slideDown for empty subcategory div
    /*$("#accordionProductCategory h3").click(function(){
        if($(this).next().hasClass('no-subcategory')) {
            // do not toggle
            $(this).next().remove();
        }
    });*/
});


// redirect when click empty subcategory div
function doRedirect(id, idx) {
    url = "<?php echo url_for('content/products')?>";
    url = url + "?i=" + idx;
    url = url + "&cid=" + id;
    $(location).attr('href', url);
}


 /*
* hoverIntent | Copyright 2011 Brian Cherne
* http://cherne.net/brian/resources/jquery.hoverIntent.html
* modified by the jQuery UI team
*/
$.event.special.hoverintent = {
setup: function() {
$( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
},
teardown: function() {
$( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
},
handler: function( event ) {
var currentX, currentY, timeout,
args = arguments,
target = $( event.target ),
previousX = event.pageX,
previousY = event.pageY;
function track( event ) {
currentX = event.pageX;
currentY = event.pageY;
};
function clear() {
target
.unbind( "mousemove", track )
.unbind( "mouseout", clear );
clearTimeout( timeout );
}
function handler() {
var prop,
orig = event;
if ( ( Math.abs( previousX - currentX ) +
Math.abs( previousY - currentY ) ) < 7 ) {
clear();
event = $.Event( "hoverintent" );
for ( prop in orig ) {
if ( !( prop in event ) ) {
event[ prop ] = orig[ prop ];
}
}
// Prevent accessing the original event since the new event
// is fired asynchronously and the old event is no longer
// usable (#6028)
delete event.originalEvent;
target.trigger( event );
} else {
previousX = currentX;
previousY = currentY;
timeout = setTimeout( handler, 100 );
}
}
timeout = setTimeout( handler, 100 );
target.bind({
mousemove: track,
mouseout: clear
});
}
};

</script>
