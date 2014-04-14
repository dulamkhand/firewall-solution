<?php echo link_to('жагсаалт', 'user/index', array('class'=>'title'))?> 
<span class="separator"> | </span>
<?php echo link_to('шинээр нэмэх', 'user/new', array('class'=>'title'))?>
<br clear="all">
<br clear="all">

<form action="<?php echo url_for('user/index')?>" method="GET">
<fieldset>
<legend>Хайлт / Шүүлт</legend>
  <?php echo link_to('Бүгд', 'user/index')?> &nbsp; - &nbsp;
  <?php echo link_to('Идэвхитэй', 'user/index?isActive=1')?> &nbsp; - &nbsp; 
  <?php echo link_to('<span style="background:#ccc;padding:0px 5px;">Идэвхигүй</span>', 'user/index?isActive=0')?>
  <br clear="all">
  <br clear="all">
  
  <table width="100%">
    <tr>
      <td width="20%" align="right">Хэрэглэгчийн нэр</td>
      <td><input type="text" name="username" id="username" value="<?php echo $sf_request->getParameter('username')?>" size="30" /></td>
      <td width="20%" align="right">Утасны дугаар</label></td>
      <td><input type="text" name="phone" id="phone" value="<?php echo $sf_request->getParameter('phone')?>" size="30" /></td>
    </tr>
    
    <tr>
      <td align="right">Бүтэн нэр</label></td>
      <td><input type="text" name="fullname" id="fullname" value="<?php echo $sf_request->getParameter('fullname')?>" size="30" /></td>
      <td align="right">Имэйл</td>
      <td><input type="text" name="email" id="email" value="<?php echo $sf_request->getParameter('email')?>" size="30" /></td>
    </tr>
  </table>
  <input type="submit" value="Харуулах" />
  
</fieldset>
</form>

<?php
$q_str_arr = (is_array($q_str_arr) && sizeof($q_str_arr)) ? $q_str_arr : array();
echo pager($pager, url_for('user/index?'.join("&", $q_str_arr)));
?>
<table width="100%">
  <thead>
    <tr>
      <th>№</th>
      <th>Хэрэглэгч</th>
      <th>И-мэйл</th>
      <th>Утас</th>
      <th>Бүртгүүлсэн</th>
      <th>Сүүлд нэвтэрсэн</th>
      <th>Идэвхжүүлэх код</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($pager->getResults() as $user): ?>
    <tr style="background:<?php if(!$user->getIsActive()) echo '#ccc';?>">
      <td><?php echo ++$i ?></td>
      <td valign="center">
        <span class="left"><?php echo $user->getFullname() ?> (<span class="description"><?php echo $user->getUsername()?></span>)<br clear="all"></span>
      </td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getMobile() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
      <td><?php echo $user->getLoggedAt() ?></td>
      <td><?php echo $user->getActivationCode() ?></td>
      <td nowrap>
        <?php include_partial('partial/editDelete', array('module'=>'user', 'id'=>$user->getId()))?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php echo pager($pager, url_for('user/index?'.join("&", $q_str_arr)));?>