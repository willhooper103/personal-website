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
</head>
<body>
	

<main class="page-content">

	<section class="page-header">
		<div class="inner-column">
			<h1 class='attention-voice'>Layout garden</h1>
		</div>
			<?php //include('header-to-left.php'); ?>
	</section>


	<section class="section-one">
		<div class='inner-column'>

			 <?php include('PHP/art-panel.php'); ?>
					
		</div> 
	</section>


	<section class="other-section">
		<div class='inner-column'>

			 <?php include('PHP/big-banner.php'); ?>

			 <?php //include('PHP/news-panel.php'); ?>
					
		</div> 
	</section>
</main>
</body>
</html>


<?php// include('footer.php'); ?>