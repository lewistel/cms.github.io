<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>Assignment | About</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
	<!---		<section id="banner" style="background-image:url(images/three.jpg);">
				<h1>Coffee may make you more ... </h1>
			</section> --->
				

			<section id="about">
				<div class="container">
					<div class="menu">
						<img src="images/About.png">
						<img src="images/about.jpg"> 
					</div>
				
					
					
				</div>
				
			</section>
		</main>
		
		<?php include("inc_footer.php");?>
		
		<script>
			$(document).ready(function(){
				$(".bxslider").bxSlider({mode:"horizontal",speed:500,auto:true, stopAutoOnClick:true, pager:true,slideWidth:600});
			});
		</script>
		
	</body>
</html>

