<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Layout-Garden</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/big-banner.css">
	<link rel="stylesheet" href="css/art-panel.css">
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

			 <?php include('php/art-panel.php'); ?>
					
		</div> 
	</section>


	<section class="other-section">
		<div class='inner-column'>

			 <?php include('php/big-banner.php'); ?>

			 <?php //include('php/news-panel.php'); ?>
					
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

