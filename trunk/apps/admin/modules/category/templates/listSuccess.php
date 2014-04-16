<?php use_javascript('/addons/tree/tree.js') ?>
<?php use_stylesheet('/addons/tree/tree.css') ?>

<form action="<?php echo url_for('category/list')?>" method="GET">
    <?php include_partial('partial/search', array());?>
</form>

<br clear="all">
<fieldset style="width:600px;">

  <!-- Begin: Treeview-->
  <div style="margin-top:-12px; width:100%;">
	  	<a class="small" href="javascript:ddtreemenu.flatten('treemenu2', 'expand')"><?php echo image_tag('/addons/tree/expand.gif', array())?></a>
	  	<a class="small" href="javascript:ddtreemenu.flatten('treemenu2', 'contact')"><?php echo image_tag('/addons/tree/collapse.gif', array())?></a>
	  	<?php echo link_to("Категори нэмэх", "category/new", array('style'=>'text-decoration:underline;'));?>
	  	<span style="float:right">Д/д</span>
	  	<span style="float:right;margin:0 10px 0 0;">Түрээс</span>
  </div>
  
  <!-- Begin: Content of treeview -->
  <div>
    <ul id="treemenu2" class="treeview">      
	      <?php 
	      $cats = GlobalTable::doExecute('ProductCategory', array('parentId'=>'0', 'orderBy'=>'sort DESC, name ASC, name_en ASC'));
	      foreach ($cats as $cat) {
	          listChildNodes($cat, $sf_params);
	      }?>
    </ul>
  </div>
  <!-- End: Content of treeview -->
  <!-- End: Treeview -->
  
  <?php function listChildNodes($cat, $sf_params){	?>
    <li>
      <?php echo str_repeat("&nbsp;", 15)?>
      <span style="color:black;"><?php echo $cat->getName()?></span> &nbsp;
      <span style="color:gray;">(<?php echo $cat->getNameEn()?>)</span> &nbsp;
      
      <?php echo link_to("Засварлах", "category/edit?id=".$cat->getId(), array('class'=>'action'));?>  | 
      <?php echo link_to("Устгах", "category/delete?id=".$cat->getId(), array('class'=>'action', 'onclick'=>"return confirm('Are you sure?')"));?>
      
      <span style="float:right"><?php echo $cat->getSort()?></span>
      <span style="float:right;margin:1px 10px 0 0;"><?php if($cat->getHasLeasing()) echo image_tag('i/ok-m.png', array('width'=>15))?></span>
        
      <?php 
      $children = GlobalTable::doExecute('ProductCategory', array('parentId'=>$cat->getId(), 'categoryKeyword'=>$sf_params->get('s'), 'orderBy'=>'sort DESC, name ASC'));
      if (sizeof($children)) {?>
          <ul>
            <?php foreach ($children as $child){
                listChildNodes($child, $sf_params);
            }?>
          </ul>
      <?php }?>
    </li>
  <?php }?>
  
  <script type="text/javascript">
	  	ddtreemenu.createTree("treemenu2", true);
	  	ddtreemenu.flatten('treemenu2', 'contact');
  </script>

</fieldset>