<div class="page">
<div class="wrapper">
    <?php include_partial("content/slider", array());?>
    <div class="home-box">
    		<a href="#">
      		  <div class="left" style="width:150px;margin:5px 0 0 10px;">
      		      <h2><?php echo __('Security camera')?></h2>
        				<ul class="list">
							  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
							  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
        				</ul>
      		  </div>
    				<?php echo image_tag('home-camera.png', array('style'=>'float:right;'));?>				
    		</a>
    </div>
    <div class="home-box">
    		<a href="#">
    		    <div class="left" style="width:150px;margin:5px 0 0 10px;">
        				<h2><?php echo __('Local network')?></h2>
        				<ul class="list">
							  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
							  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
        				</ul>
            </div>
            <?php echo image_tag('home-lan1.png', array('style'=>'float:right;width:150px;margin:-25px 0 0 0;'));?>
    		</a>
    </div>
    <div style="margin-right:0px;" class="home-box">
    		<a href="#">
    		    <div class="left" style="width:150px;margin:5px 0 0 10px;">
		            <h2><?php echo __('Sound system')?></h2>
		            <ul class="list">
          				  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
          				  <li><a href=""><?php echo __('Албан газар байгууллага')?></a></li>
					</ul>
    		    </div>
	   	   		<?php echo image_tag('home-sound3.png', array('style'=>'float:right;width:130px;'));?>
    		</a>
    </div>
</div>
</div>

<div class="page bg-gray" style="min-height:750px;">
<div class="wrapper">
    <h2 style="color:#666;padding-bottom:16px;margin-bottom:30px;border-bottom:1px solid #f0f0f0;">
    <?php echo __('Brief intro')?></h2>
    <?php include_partial('main/about', array());?>
    <?php include_partial('main/service', array());?>
</div>
</div>

<div class="page bg-dark-gray" style="min-height:1050px;">
<div class="wrapper">
    <h2 style="color:#006ED0;">
        <?php echo __('Products and services')?>
    </h2>
    <?php include_partial('main/products', array());?>
</div>
</div>

<div class="page bg-orange" style="min-height:600px;">
<div class="wrapper">
    <h2><?php echo __('Works we did')?></h2>
    <p>Tell your visitors about the spectacular thumbnails displayed in the space below.</p>
    <br clear="all">
    <?php include_partial('main/jobs', array());?>
</div>
</div>

<div class="page bg-gray" style="min-height:600px;">
<div class="wrapper">
    <h2 class="orange"><?php echo __('Our clients')?></h2>
    <p>Tell your visitors about the spectacular thumbnails displayed in the space below.</p>
    <br clear="all">
    <?php include_partial('main/clients', array());?>
</div>
</div>

<div class="page bg-white">
<div class="wrapper">
    <h2 class="blue"><?php echo ('Contact')?></h2>
    <br clear="all">
    <p style="font-style:italic;font-weight:normal;color:#666;font-size:20px;font-family:Roboto Condensed;letter-spacing:-1px;">Get instant feedback from your visitors with a pre-configured contact form. Set the recipient email address and start receiving messages in your inbox.</p>
    <br clear="all">
    <?php include_partial('main/feedback', array('form'=>$form));?>
    <?php include_partial('main/contact', array('textColor'=>'#333', 'lineColor'=>'#dedede', 'width'=>400));?>
</div>
</div>

