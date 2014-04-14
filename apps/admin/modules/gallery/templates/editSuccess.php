<?php echo link_to('жагсаалт', 'gallery/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'gallery/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<?php include_partial('form', array('form' => $form)) ?>
