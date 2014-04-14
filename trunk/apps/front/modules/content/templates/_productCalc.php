<?php $color = $p->getColor() ? '#'.$p->getColor() : '#177B01'?>
<?php $cost = $p->getRentalCost()?>
<table>
	<tr>
			<td colspan="gray"><h4 style="color:<?php echo $color?>;"><?php echo __('Rental cost calculation')?></h4></td>
	</tr>
	<tr style="margin:15px 0 0 0;display:block;">
			<td style="padding:5px;"><b><?php echo number_format(floor($cost/28), null, null, ".")?>₮</b> / <span class="gray"><?php echo __('day')?></span></td>
	</tr>
	<tr>
			<td style="padding:5px;"><b><?php echo number_format(floor($cost/4), null, null, ".")?>₮</b> / <span class="gray"><?php echo __('week')?></span></td>
	</tr>
	<tr>
			<td style="padding:5px;"><b><?php echo number_format($cost, null, null, ".")?>₮</b> / <span class="gray"><?php echo __('4 weeks')?></span></td>
	</tr>
	<tr style="margin:15px 0;display:block;">
			<td>
					<span class="gray left"><?php echo __('From')?></span>
					<input type="text left" name="dateFrom" class="left datepicker1" style="width:90px;border:1px solid #ccc;margin:3px 15px 0 2px;" />
					<span class="gray left"><?php echo __('To')?></span>
					<input type="text left" name="dateTo" class="left datepicker2" style="width:90px;border:1px solid #ccc;margin:3px 0 0 2px;"/>
			</td>
	</tr>
	<tr style="margin:15px 0;display:block;">
			<td><h4 id="calctotal" style="color:<?php echo $color?>;"></h4></td>
	</tr>
	<tr style="margin:15px 0;display:block;">
			<td><a href="#" class="button" style="width:100px;background:<?php echo $color?>;border-radius:2px;">
			   <h4 style="color:#fff;"><?php echo __('Rental terms')?></h4>
	   </a></td>
	</tr>
</table>

<script type="text/javascript">
$(function() {
		$(".datepicker1").datepicker();
		$(".datepicker2").datepicker({onSelect:function(dateText, inst) {
  	    if($('.datepicker1').val() < $('.datepicker2').val()) {
            $.ajax({
              url: "<?php echo url_for('content/calc')?>", 
              type: "post",
              data: {from:$('.datepicker1').val(), to:$('.datepicker2').val(), cost:"<?php echo $cost?>"},
              success: function(data) { $("#calctotal").html(data); }
            });
        } else {
            $("#calctotal").html('');
        }
    }});
});

</script>

<style>
.ui-datepicker {
background: #fff; /* Old browsers */
background: #fff -moz-linear-gradient(top, #fcfcfc 0%, #fff 100%); /* FF3.6+ */
background: #fff -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfcfc)), color-stop(100%,#fff)); /* Chrome,Safari4+ */
background: #fff -webkit-linear-gradient(top, #fcfcfc 0%, #fff 100%); /* Chrome10+,Safari5.1+ */
background: #fff -o-linear-gradient(top, #fcfcfc 0%, #fff 100%); /* Opera11.10+ */
background: #fff -ms-linear-gradient(top, #fcfcfc 0%, #fff 100%); /* IE10+ */
background: #fff linear-gradient(top, #fcfcfc 0%, #fff 100%); /* W3C */
font-size:11px;
padding:10px;
border:1px solid #ccc;
}
 
.ui-datepicker table {
width:160px;
}
 
.ui-datepicker table td {
text-align:center;
}
 
.ui-datepicker a {
cursor:pointer;
text-decoration:none;
}
 
.ui-datepicker-prev {
float:left;
}
 
.ui-datepicker-next {
float:right;
}
 
.ui-datepicker-title {
text-align: center;
font-weight:bold;
z-index:-1;
}
</style>