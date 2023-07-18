<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>Assignment | Location</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>

	<body>
		<?php include("inc_header.php");?>
	
		<main>
<!---		<section id="banner" style="background-image:url(images/three.jpg);">
				<h1>Coffee may make you more ... </h1>
			</section> --->
<!---				<section id="gallery">
					<div class="container">
						
						<div class="slider">
							<div> <img src="images/b1.jpg"></div>
							<div> <img src="images/b2.jpg"></div>
							<div> <img src="images/b3.jpg"></div>

						</div>
					</div>
				</section> --->
			
			<section id="location">
				<div class="container">
					<div class="address">
						<div>
							<img src="images/Location.png">
						</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14761.756625699547!2d114.153762!3d22.337041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72d9457089d68c58!2sFeva%20Works%20IT%20Education%20Centre!5e0!3m2!1sen!2shk!4v1669951651952!5m2!1sen!2shk" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					
					<div class="address">
						<ul>
							<li>Address: Room 503-506, 5/F,Trade Square, Sheung Sha Wan, KLN</li>
						</ul>
					</div>
				

				</div>
				
			</section>
		</main>
		
		<?php include("inc_footer.php");?>
		
		<script>
			$(document).ready(function(){
				$(".slider").bxSlider({mode:"horizontal",speed:500,auto:true, stopAutoOnClick:true});
			});
		</script>	
	</body>
</html>
