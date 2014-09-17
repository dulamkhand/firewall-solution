<?php $host = sfConfig::get('app_host')?>
<div id="main" class="container">
  	<div class="main_image">
    		<?php echo image_tag('/u/jobs/1.jpg', array())?>
    		<div class="desc">
      			<div class="block">
        				<span style="font-weight:bold;color:#fff;">Luigi's Mansion</span>
        				<p>08/27/2013</p>
        				<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat etc.
      			</div>
    		</div>
  	</div>
  	<div class="image_thumb">
    		<ul>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/1.jpg'?>"><?php echo image_tag('/u/jobs/t1.jpg', array())?></a>
      				<div class="block">
      					<span>Luigi's Mansion</span>
      					<p>08/27/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.
      				</div>
      			</li>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/2.jpg'?>"><?php echo image_tag('/u/jobs/t2.jpg', array())?></a>
      				<div class="block">
      					<span>The Outichoke Lantern</span>
      					<p>08/21/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
      				</div>
      			</li>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/3.jpg'?>"><?php echo image_tag('/u/jobs/t3.jpg', array())?></a>
      				<div class="block">
      					<span>Waiter</span>
      					<p>08/27/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.
      				</div>
      			</li>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/4.jpg'?>"><?php echo image_tag('/u/jobs/t4.jpg', array())?></a>
      				<div class="block">
      					<span>Rabbit in the Hat</span>
      					<p>08/29/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
      				</div>
      			</li>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/4.jpg'?>"><?php echo image_tag('/u/jobs/t4.jpg', array())?></a>
      				<div class="block">
      					<span>Rabbit in the Hat</span>
      					<p>08/29/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
      				</div>
      			</li>
      			<li>
      				<a href="<?php echo $host.'/u/jobs/4.jpg'?>"><?php echo image_tag('/u/jobs/t4.jpg', array())?></a>
      				<div class="block">
      					<span>Rabbit in the Hat</span>
      					<p>08/29/2013</p>
      					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
      				</div>
      			</li>
    		</ul>
  	</div><!--image_thumb-->
</div><!--main-->


<script type="text/javascript">
var intervalId;
var slidetime = 2500; // milliseconds between automatic transitions

$(document).ready(function() {	

  // Comment out this line to disable auto-play
	intervalID = setInterval(cycleImage, slidetime);

	$(".main_image .desc").show(); // Show Banner
	$(".main_image .block").animate({ opacity: 0.85 }, 1 ); // Set Opacity

	// Click and Hover events for thumbnail list
	$(".image_thumb ul li:first").addClass('active'); 
	$(".image_thumb ul li").click(function(){ 
		// Set Variables
		var imgAlt = $(this).find('img').attr("alt"); //  Get Alt Tag of Image
		var imgTitle = $(this).find('a').attr("href"); // Get Main Image URL
		var imgDesc = $(this).find('.block').html(); 	//  Get HTML of block
		var imgDescHeight = $(".main_image").find('.block').height();	// Calculate height of block	
		
		if ($(this).is(".active")) {  // If it's already active, then...
			return false; // Don't click through
		} else {
			// Animate the Teaser				
			$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".main_image img").attr({ src: imgTitle , alt: imgAlt});
			});
		}
		
		$(".image_thumb ul li").removeClass('active'); // Remove class of 'active' on all lists
		$(this).addClass('active');  // add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
			
	// Toggle Teaser
	$("a.collapse").click(function(){
		$(".main_image .block").slideToggle();
		$("a.collapse").toggleClass("show");
	});
	
	// Function to autoplay cycling of images
	// Source: http://stackoverflow.com/a/9259171/477958
	function cycleImage(){
    var onLastLi = $(".image_thumb ul li:last").hasClass("active");       
    var currentImage = $(".image_thumb ul li.active");
    
    
    if(onLastLi){
      var nextImage = $(".image_thumb ul li:first");
    } else {
      var nextImage = $(".image_thumb ul li.active").next();
    }
    
    $(currentImage).removeClass("active");
    $(nextImage).addClass("active");
    
		// Duplicate code for animation
		var imgAlt = $(nextImage).find('img').attr("alt");
		var imgTitle = $(nextImage).find('a').attr("href");
		var imgDesc = $(nextImage).find('.block').html();
		var imgDescHeight = $(".main_image").find('.block').height();
					
		$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
      $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
      $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
		});
  };
	
});// Close Function
</script>