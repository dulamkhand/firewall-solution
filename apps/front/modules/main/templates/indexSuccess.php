<div class="page">
<div class="wrapper">
    <?php include_partial("content/slider", array());?>

    <div style="margin-left:25px;background:url(http://static.gateway.com/up/Resource/Gateway/Home/Highlights/20110528/aboutus_highlight_en.png)" class="home-box">
    		<a href="#">
    		</a>
    </div>
    
    <div style="background:url(http://static.gateway.com/up/Resource/Gateway/Home/Highlights/20110528/aboutus_highlight_en.png)" class="home-box">
    		<a href="#">
    		</a>
    </div>
    
    <div style="margin-right:0px;background:url(http://static.gateway.com/up/Resource/Gateway/Home/Highlights/20110528/aboutus_highlight_en.png)" class="home-box">
    		<a href="#">
    		</a>
    </div>
</div>
</div>

<div class="page bg-blue">
<div class="wrapper">
    <h2><?php echo __('Brief intro')?></h2>
    <p>Tell your visitors about the spectacular thumbnails displayed in the space below.</p>
    <br clear="all">
    <?php include_partial('main/about', array());?>
</div>
</div>

<div class="page bg-dark-blue">
<div class="wrapper">
    <h2 style="border-bottom:1px solid #dedede;padding-bottom:16px;margin-bottom:14px;">
        <?php echo __('Products and services')?>
    </h2>
    <?php include_partial('main/service', array());?>
</div>
</div>

<div class="page bg-orange">
<div class="wrapper">
    <h2><?php echo __('Works we did')?></h2>
    <p>Tell your visitors about the spectacular thumbnails displayed in the space below.</p>
    <br clear="all">
    <?php include_partial('main/jobs', array());?>
</div>
</div>

<div class="page bg-gray">
<div class="wrapper">
    <h2 class="orange"><?php echo __('Our clients')?></h2>
    <p>Tell your visitors about the spectacular thumbnails displayed in the space below.</p>
    <br clear="all">
    <?php include_partial('main/clients', array());?>
</div>
</div>

<div class="page bg-white">
<div class="wrapper">
    <h2 class="blue"><?php echo ('Contact us')?></h2>
    <br clear="all">
    <p style="font-style:italic;font-weight:normal;color:#666;font-size:20px;font-family:Roboto Condensed;letter-spacing:-1px;">Get instant feedback from your visitors with a pre-configured contact form. Set the recipient email address and start receiving messages in your inbox.</p>
    <br clear="all">
    
    <div class="left" style="width:530px;padding:0;">
        <?php include_partial('main/feedback', array('form'=>$form));?>
    </div>
    <div class="right" style="width:400px;border-left:1px solid #dedede;padding:0 0 0 37px;">
        <?php include_partial('main/contact', array());?>
    </div>
</div>
</div>

