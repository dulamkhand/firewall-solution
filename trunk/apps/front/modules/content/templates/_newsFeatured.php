<div style="background:#1B9300;padding:10px;margin:0 0 10px 0;">
    <h4><?php echo __('Featured news')?></h4>
</div>

<?php $newss = Doctrine::getTable('Content')->fetchall(array('limit'=>4))?>
<?php $i=0; foreach ($newss as $news):?>
    <div style="width:250px;">
        <?php include_partial('content/newsList', array('news'=>$news));?>
    </div>
    <br clear="all">
<?php endforeach?>