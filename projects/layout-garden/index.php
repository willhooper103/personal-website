<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>layout-garden</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/big-banner2.css">
	<link rel="stylesheet" href="css/news-style.css">
	<link rel="stylesheet" href="css/art-panel2.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
</head>
<body>
	



	<section class="site-header">
		<div class="inner-column">
			
			<?php include('php/header.php'); ?>
		</div>
			
	</section>

<main class="page-content">


	<section class="section-one">
		<div class='inner-column'>

			 <?php include('php/art-panel2.php'); ?>
					
		</div> 
	</section>


	<section class="other-section">
		<div class='inner-column'>

			<?php include('php/news.php'); ?>

			 <?php include('php/big-banner2.php'); ?>

			
					
		</div> 
	</section>
</main>

<footer class='site-footer'>
	<div class="inner-column">
		<?php include('php/footer.php'); ?>
		
	</div>
	
</footer>

</body>
</html>

