<?php $newss = Doctrine::getTable('Content')->fetchall(array('limit'=>5))?>
<?php $i=0; foreach ($newss as $news):?>
    <?php if($i++ == 0):?>
        <div style="position:relative;width:440px;height:280px;overflow:hidden;">
            <?php echo image_tag('/u/c/'.$news->getImage(), array('style'=>'width:440px;max-height:280px;'))?>
            <div style="position:absolute;bottom:0;left:0;height:56px;background:rgba(0, 0, 0, 0.9);width:440px;">
                <a href="" style="color:#fff;font-weight:bold;text-transform:uppercase;line-height:18px;
                                  text-decoration:none;font-size:11px;margin:10px;padding:0;display:block;">
                      <?php echo $news?>
                </a>
            </div>        
        </div>
        <?php break;?>
    <?php endif?>
<?php endforeach?>
<!--<div style="width:440px;border-top:1px solid #dedede;">&nbsp;</div>-->

<div style="padding:0 10px;margin:15px 0;overflow-y:scroll;height:477px;">
    <?php $i=0; foreach ($newss as $news):?>
        <?php if($i++ >0) include_partial('content/newsList', array('news'=>$news));?>
    <?php endforeach?>
</div>


<style>
scrollbar {  
    width: 11px;  
}  
scrollbar-track {  
    background-color: #eaeaea;  
    border-left: 1px solid #ccc;  
}  
scrollbar-thumb {  
    background-color: #ccc;  
}  
scrollbar-thumb:hover {  
    background-color: #aaa;  
}

::-webkit-scrollbar {  
    width: 11px;  
}  
::-webkit-scrollbar-track {  
    background-color: #eaeaea;  
    border-left: 1px solid #ccc;  
}  
::-webkit-scrollbar-thumb {  
    background-color: #ccc;  
}  
::-webkit-scrollbar-thumb:hover {  
    background-color: #aaa;  
}

@namespace url(http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul);
scrollbar{
  -moz-appearance: none !important;
}


@-moz-document url-prefix(http://),url-prefix(https://) {
 scrollbar {
 -moz-appearance: none !important;
 background: rgb(0,255,0) !important;
 }
 thumb,scrollbarbutton {
 -moz-appearance: none !important;
 background-color: rgb(0,0,255) !important;
 }
 thumb:hover,scrollbarbutton:hover {
 -moz-appearance: none !important;
 background-color: rgb(255,0,0) !important;
 }
 scrollbarbutton {
 display: none !important;
 }
 scrollbar[orient="vertical"] {
 min-width: 11px !important;
 }
 }

</style>