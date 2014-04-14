<?php echo link_to('жагсаалт', 'product/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'product/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('product/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<?php $o = $form->getObject();?>
<table width="100%">
  <tfoot>
    <tr>
      <td colspan="2">
        <?php echo $form->renderHiddenFields(false) ?>
        <input type="submit" value="Хадгалах"/>
        &nbsp;<a href="<?php echo url_for('product/index') ?>">Жагсаалтруу буцах</a>
      </td>
    </tr>
  </tfoot>
  <tbody>
  <tr><td style="border:0;">
  <?php echo $form->renderGlobalErrors() ?>
<fieldset>
	<legend>Бүтээгдэхүүн</legend>
	<table>
	    <tr>
	      <th><label>Категори</label></th>
	      <td colspan="2">
	        <?php echo $form['category_id']->renderError(); ?>
	        <select name="product[category_id]">
	        			<?php $cats = GlobalTable::doFetchArray('ProductCategory', array('parentId'=>'0'))?>	
	        			<?php foreach ($cats as $cat):?>	
	        					<optgroup label="<?php echo $cat['name']?>" style="padding:2px;">
					        			<?php $subcats = GlobalTable::doFetchArray('ProductCategory', array('parentId'=>$cat['id']))?>	
			        					<?php foreach ($subcats as $subcat):?>
		      									<option value="<?php echo $subcat['id']?>" <?php if($o->getCategoryId() == $subcat['id']) echo 'selected'?> style="padding:2px 2px 2px 20px;">
		      											<?php echo $subcat['name']?>
		      									</option>
		      							<?php endforeach?>
      							</optgroup>
	        			<?php endforeach?>	
	        </select>
	      </td>
	    </tr>
	    <tr>
	      <th><label>Нэр / Name</label></th>
	      <td>
	        <?php echo $form['title']->renderError() ?>
	        <?php echo $form['title'] ?>
	      </td>
	      <td>
	        <?php echo $form['title_en']->renderError() ?>
	        <?php echo $form['title_en'] ?>
	      </td>
	    </tr>
	    <tr>
	      <th><label>Код</label></th>
	      <td colspan="2">
	        <?php echo $form['code']->renderError() ?>
	        <?php echo $form['code'] ?>
	      </td>
	    </tr>
	    <tr>
	      <th><label>Мэдээлэл<br> / Summary</label></th>
	      <td>
	        <?php echo $form['summary']->renderError() ?>
	        <?php echo $form['summary'] ?>
        </td>
      	<td>
	        <?php echo $form['summary_en']->renderError() ?>
	        <?php echo $form['summary_en'] ?>
	      </td>
      </tr>
      <tr>
        <th>
          <label style="width:153px;display:block;">
              <b>Түрээс-д харуулах эсэх</b>
              <?php echo $form['has_leasing']->renderError() ?>
              <?php echo $form['has_leasing'] ?>
          </label>
        </th>
        <td>
          <b>Түрээсийн үнэ</b>
      		<?php echo $form['rental_cost']->renderError() ?>
          <?php echo $form['rental_cost'] ?>
        </td>
      </tr>
  </table>
</fieldset>

<br clear="all">

<fieldset>
<legend>Зураг</legend>
<table>
		<tr><td style="border:0;"><span class="help"><?php echo $form['image1']->renderHelp() ?></span></td></tr>
		<tr>
      <td width="200">
      	<?php if($o->getImage()) {
      	  echo image_tag('/u/p/t162-'.$o->getImage(), array()).'<br>';
      	  echo link_to('[устгах]', 'product/deleteImage?i=0&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image']->renderError() ?>
        <?php echo $form['image'] ?><br>
        <span class="help"><?php echo $form['image']->renderHelp() ?></span>
      </td>
      <td width="200">
      	<?php if($o->getImage1()) {
      	  echo image_tag('/u/p/t162-'.$o->getImage1(), array()).'<br>';
      	  echo link_to('[устгах]', 'product/deleteImage?i=13&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image1']->renderError() ?>
        <?php echo $form['image1'] ?>
      </td>
      <td width="200">
      	<?php if($o->getImage2()) {
      	  echo image_tag('/u/p/t162-'.$o->getImage2(), array()).'<br>';
      	  echo link_to('[устгах]', 'product/deleteImage?i=2&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image2']->renderError() ?>
        <?php echo $form['image2'] ?>
      </td>
      <td width="200">
    		<?php if($o->getImage3()) {
    		  echo image_tag('/u/p/t162-'.$o->getImage3(), array()).'<br>';
    		  echo link_to('[устгах]', 'product/deleteImage?i=3&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image3']->renderError() ?>
        <?php echo $form['image3'] ?>
      </td>
    </tr>
    <tr><td colspan="4"><a onclick='$(".more-images").toggle();' style="cursor:pointer;text-decoration:underline;">Зураг нэмэх</a></td></tr>
    <tr>
    	<td width="200" style="display:none;" class="more-images">
	      <?php if($o->getImage5()) {
	        echo image_tag('/u/p/t162-'.$o->getImage5(), array()).'<br>';
	        echo link_to('[устгах]', 'product/deleteImage?i=5&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image5']->renderError() ?>
        <?php echo $form['image5'] ?>
      </td>
      <td width="200" style="display:none;" class="more-images">
      	<?php if($o->getImage6()) {
      	  echo image_tag('/u/p/t162-'.$o->getImage6(), array()).'<br>';
      	  echo link_to('[устгах]', 'product/deleteImage?i=6&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image6']->renderError() ?>
        <?php echo $form['image6'] ?>
      </td>
      <td width="200" style="display:none;" class="more-images">
	      <?php if($o->getImage7()) {
	        echo image_tag('/u/p/t162-'.$o->getImage7(), array()).'<br>';
	        echo link_to('[устгах]', 'product/deleteImage?i=7&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image7']->renderError() ?>
        <?php echo $form['image7'] ?>
      </td>
      <td width="200" style="display:none;" class="more-images">
      	<?php if($o->getImage8()) {
      	  echo image_tag('/u/p/t162-'.$o->getImage8(), array()).'<br>';
      	  echo link_to('[устгах]', 'product/deleteImage?i=8&id='.$o->getId(), array('target'=>'_blank'));
    		} ?>
        <?php echo $form['image8']->renderError() ?>
        <?php echo $form['image8'] ?>
      </td>
    </tr>
</table>
</fieldset>

<br clear="all">

<fieldset>
<legend>Файл</legend>
    <table>
        <tr><td valign="top">
            <?php echo $form['pdf']->renderError() ?>
            <?php echo $form['pdf'] ?>
            <div class="help" style="margin:3px 0 0 0;"><?php echo $form['pdf']->renderHelp() ?></div>
        </td><td valign="top">
             <?php if($o->getPdf()):?>
                <a href="<?php echo sfConfig::get('app_host').$o->getPdf()?>" target="_blank">
                    <?php echo image_tag('i/pdf-l.png', array())?>
                </a>
                <?php echo link_to('[устгах]', 'product/deletePdf?id='.$o->getId(), array('target'=>'_blank'));?>
            <?php endif?>
        </td></tr>
    </table>
</fieldset>

<br clear="all">

<fieldset>
<legend>Видео</legend>
    <table>
        <tr><td valign="top">
            <?php echo $form['video']->renderError() ?>
            <?php echo $form['video'] ?>
            <div class="help" style="margin:3px 0 0 0;"><?php echo $form['video']->renderHelp() ?></div>
        </td><td valign="top">
        		<iframe width="320" height="235" src="<?php echo $o->getVideo()?>" frameborder="0" allowfullscreen></iframe>
        </td></tr>
    </table>
</fieldset>

<br clear="all">

<fieldset>
	<legend>Дэлгэрэнгүй мэдээлэл</legend>
  <table width="100%">
		   <tr>
		      <td>
		        <?php echo $form['body']->renderError() ?>
		        <?php echo $form['body'] ?>
		      </td>
	      </tr>
	      <tr>
		      <td>
		      	<b>Detail in english</b><br>
		        <?php echo $form['body_en']->renderError() ?>
		        <?php echo $form['body_en'] ?>
		      </td>
		    </tr>
		    <tr>
		      <td>
		      	<b>Keywords for search engine</b><br>
		        <?php echo $form['keywords']->renderError() ?>
		        <?php echo $form['keywords'] ?>
		      </td>
		    </tr>		    
    </table>
</fieldset>

</td></tr>
</tbody>
</table>
</form>
