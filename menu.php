<?php include("cms_inc_function.php");
connect_db();
?>

<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>Assignment | Menu</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>

	<body>
		<?php include("inc_header.php");?>

		<main>
	<!---		<section id="banner" style="background-image:url(images/three.jpg);">
				<h1>Coffee may make you more ... </h1>
			</section> --->
				

			<section id="news">
				<div class="container">
					<div class="monthly">
						<img src="images/Menu.png">
					</div>
				
					<div class="texts">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
					</div>
					
					<div class="items">
							<?php
							$sql="select * from `member_news` order by date desc";
							$result=mysqli_query($connect,$sql);
							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
							?>
							<div class="item">
								<img src="<?=$row["pic"]?>">
								<h1><?=urldecode($row["topic"])?></h1>
							</div>
							<?php
							}
							?>
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

