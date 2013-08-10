<?php include("header.php");?>
<body class="home page page-id-348 page-template page-template-frontpage-base-php webkit">
	<section id="slideshow-wrapper">
		        <div class="dt_fullscreenslider dt_fullwidthslider" style="height: 280px;">
					<div class="slider-gallery" style="height: 221px;">
						<ul style="height: 472px; top: -236px;">
							<li><a href="javascript: void(0);" rel="0" class="">
								<span class="border"></span><img src="php/1.jpg" alt="01.png" width="58" height="36"></a></li>
								
							<li><a href="javascript: void(0);" rel="1" class="">
								<span class="border"></span><img src="php/2.jpg" alt="02.png" width="58" height="36"></a>
								
								</li>
							<li><a href="javascript: void(0);" rel="2" class="">
								<span class="border"></span><img src="php/3.jpg" alt="03.jpg" width="58" height="36"></a></li>
						
							<li><a href="javascript: void(0);" rel="3" class="">
								<span class="border"></span><img src="php/4.jpg" alt="04.jpg" width="58" height="36"></a></li>
						</ul>
					</div>
				<!--
				<div class="slider-descriptions">
				
				<ul style="width: 6912px; left: -4320px;">
				
				<li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Toung - With New theme</h3>
					<p>Provides a new way of communication.</p>		
				
				</li>
				
				<li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Modern and elegant design</h3>
					<p>With our great tools and interface design the unique modern look we provide.</p>
				</li>
				
				<li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Toung Admin Panel d2</h3>
					<p>Control,Monitor,Promote and Sponser.</p>
				</li>
				<li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Fully customizable</h3>
					<p>Our projects are so flexible that it can be customizable at any point of time.</p>
				</li><li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Easy to use</h3><p>Nav Easy and Work Easy.</p><p><a class="more-link" href="#"><span class="left"></span><span class="mid">Read More</span><span class="right"></span></a></p></li><li style="width: 864px; float: left; opacity: 1; position: static;"><h3>Fun to work with</h3><p>Our product provides unique features of work with fun. </p><p><a class="more-link" href="#"><span class="left"></span><span class="mid">Read More</span><span class="right"></span></a></p></li><li style="width: 864px; float: left; opacity: 0; position: static;"><h3>User friendly</h3><p>We provide you Ease,Easy and appealing user interface.</p><p><a class="more-link" href="#"><span class="left"></span><span class="mid">Read More</span><span class="right"></span></a></p></li><li style="width: 864px; float: left; opacity: 0; position: static;"><h3>Versatile and flexible</h3><p>We provide you flexible solutions.</p><p><a class="more-link" href="#"><span class="left"></span><span class="mid">Read More</span><span class="right"></span></a></p></li></ul></div><div class="slider-controls"><a class="slider-control-left" href="javascript: void(0)">left</a><a class="slider-control-right" href="javascript: void(0)">right</a>
				</div>-->
			</div>	</section>
<section id="content-wrapper" class="no-bottom-borders">
	        <header id="frontpage-intro" class="clearfix">
<h4 style="color:#000;">Welcome to Bhoomika Arts and Mannequins</h4>
<p class="main-intro">Bhoomika Mannequins provides one stop solution for all your needs. We proudly present the quick and easy solution. We are the best makers and dealers of all types of Mannequins, we are able to ensure an environmentally friendly production as well as the highest quality standards.

</p>

</header>
<div id="frontpage" class="clearfix">

<div class="front-page-row clearfix front-page-posts">
<div class="one-third">
<a class="image-wrapper" href="mannequin.php" title="Mannequine">
<img src="images/small-home-manne.jpg" alt="Mannequine">
</a>
<p>Bhoomika gives high quality and purity of its designs with
high-tech injection molding for modern times.
 </p>
<a href="mannequin.php" style="float:right;" title="more"><img src="images/know-more-link.png" alt="more"></a>
</div>
<div class="one-third">
<a class="image-wrapper" href="event.php" title="Event Designs">
<img src="images/small-home-event.jpg" alt="Event Designs">
</a>
<p>We are professional event designers to bring your celebration exciting 
and make people think about it for long time.
 </p>
<a href="event.php" style="float:right;" title="more"><img src="images/know-more-link.png" alt="more"></a>
</div>
<div class="one-third one-third-last">
<a class="image-wrapper" href="modern.php" title="Modern Murals">
<img src="images/small-home-mural.jpg" alt="Modern Murals">
</a>
<p>We are the creators of modern and artistic
murals with creative concepts.<br/>br/>
 </p>
<a href="modern.php" style="float:right;" title="more"><img src="images/know-more-link.png" alt="more"></a>
</div>

<div class="clearfix"></div>
</div>

<div class="front-page-row-sep"></div>
<script type="text/javascript">
                    $(document).ready(function($) {
                        function latestWorkDescriptionHover() 
                        {		
							var projectDetails = $('#frontpage .front-page-projects-description .project-details');
							projectDetails.each(function(){
								$(this).find('.project-content').css('opacity','0');
								$(this).find('.blog-icon').css({'opacity':'0','top':'64','left':'67'});
								$(this).find('.zoom-icon').css({'opacity':'0','top':'64','left':'67'});
								$(this).find('.play-icon').css({'opacity':'0','top':'64','left':'67'});							
							});		
							projectDetails.each(function(){
								$(this).hover(function(){
									$(this).find('.project-content').stop().animate({'opacity': 1});	
								}, function(){
									$(this).find('.project-content').stop().animate({'opacity': 0});
								});
							
							});	
							projectDetails.each(function(){
								$(this).hover(function(){
									$(this).find('.blog-icon').stop().animate({'opacity': 1,'top':36,'left':32}, 200, 'swing');
									$(this).find('.zoom-icon').stop().animate({'opacity':1,'top':36,'left':103}, 200, 'swing');
									$(this).find('.play-icon').stop().animate({'opacity':1,'top':36,'left':103}, 200, 'swing');								
								}, function(){
									$(this).find('.blog-icon').stop().animate({'opacity': 0,'top':64,'left':67}, 400, 'swing');
									$(this).find('.zoom-icon').stop().animate({'opacity': 0,'top':64,'left':67}, 400, 'swing');
									$(this).find('.play-icon').stop().animate({'opacity': 0,'top':64,'left':67}, 400, 'swing');								
								});	
							});
							if($.browser.msie && $.browser.version.substring(0, 2) === "8.") 
							{
								$('#frontpage .front-page-projects-description .project-content').css('background','#333');
							}							 
                        }
						$('#frontpage .front-page-projects-description .front-page-projects-wrapper').carousel({pagination:false,continuous:true,itemsPerTransition:1});
                        //$('#frontpage ul.front-page-projects-description').bxSlider({displaySlideQty: 3,moveSlideQty: 1,speed:500,onAfterSlide: function(currentSlide, totalSlides){}});
						latestWorkDescriptionHover();					
                    });
                    </script>
<div class="front-page-row clearfix front-page-projects front-page-projects front-page-projects-description">
<div class="projects-description">
<h4>Our Latest Works</h4>
<p></p>
</div>
<div class="front-page-projects-wrapper rs-carousel rs-carousel-horizontal rs-carousel-items-auto" aria-disabled="false">
<div class="rs-carousel-mask"><ul class="rs-carousel-runner" style="width: 3240px; left: -900px;">
<li class="rs-carousel-item rs-carousel-item-clone">
<a rel="no-follow" target="_blank" href="gallary.php">
<img src="image/1.jpg" width=176"></a></li>

<li class="rs-carousel-item">
<a rel="no-follow" target="_blank" href="gallary.php">
<img src="image/8.jpg" width=176"></a></li>
<li class="rs-carousel-item">
<a rel="no-follow" target="_blank" href="gallary.php">
<img src="image/5.jpg" width=176"></a></li>
</ul></div><a href="#" class="rs-carousel-action-prev">Prev</a><a href="#" class="rs-carousel-action-next">Next</a></div>
</div>
<div class="front-page-row-sep front-page-row-sep-last-child"></div>
</div>

<!-- end of content wrapper -->
</section>
<?php include("footer.php");?>