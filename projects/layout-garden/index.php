<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>layout-garden</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/big-banner.css">
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="css/sticky-scroll.css">
		<link rel="stylesheet" href="css/skitch.css">
		<link rel="stylesheet" href="css/graphic-panel-module.css">
		<link rel="stylesheet" href="css/cta.css">
		<link rel="stylesheet" href="css/circle-img.css">
		<link rel="stylesheet" href="css/cookbook.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
	</head>

	<body>
		
		<section class="site-header">
			<div class="inner-column">
				
				<?php include('header.php'); ?>
			</div>
				
		</section>

		<main class="page-content">

			<section class="section-one">
				<div class='inner-column'>

					<?php include('sticky-scroll.php'); ?>
					
				</div>
			</section>


			<section class="section-two">
				<div class='inner-column'>

					 <?php include('skitch.php'); ?>
					
				</div>
			</section>


			<section class="section-three">
				<div class='inner-column'>

					 <?php include('graphic-panel-module.php'); ?>

				</div> 
			</section>


			<section class="other-section">
				<div class='inner-column'>

					 <?php include('cta.php'); ?>

				</div>
			</section>


			<section class="other-section">
				<div class='inner-column'>

					<?php include('news.php'); ?>
				
				</div>
			</section>


			<section class="other-section">
				<div class='inner-column'>

					 <?php include('big-banner.php'); ?>

				</div> 
			</section>
			

			<section class="other-section">
				<div class='inner-column'>

					 <?php include('circle-img.php'); ?>

				</div> 
			</section>


			<section class="other-section">
				<div class='inner-column'>

					 <?php include('cookbook.php'); ?>

				</div> 
			</section>

		</main>


		<footer class='site-footer'>
			<div class="inner-column">

				<?php include('footer.php'); ?>
				
			</div>
		</footer>

	</body>
</html>

