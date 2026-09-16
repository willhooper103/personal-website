<!doctype html>
<html>
	
	<head>
		<meta lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>my-site-index</title>
		<meta name='description' content='This is the challenge-1 index'>
		<meta name='og:image' content='challenge-1/images/memory-map.png'>
		<meta name='og:image' content='challenge-1/images/note-app.png'>
		<meta name='og:image' content='challenge-1/images/wired-revised.png'>
		<meta name='og:image' content='challenge-1/images/collage.png'>
		<link rel='stylesheet' href='css/index.css'>
		<link rel='stylesheet' href='css/reset.css'>
		<link rel='stylesheet' href='css/header-3.css'>
		<link rel='stylesheet' href='css/name.css'>
		<link rel='stylesheet' href='css/footer.css'>
		<link rel='stylesheet' href='css/welcome-2.css'>
		<link rel='stylesheet' href='css/about-module-3.css'>
		<link rel='stylesheet' href='css/projects-module.css'>
	</head>
		
	<body>
		<header class='site-header'>

			<div class='inner-column'>
				<?php include('header-3.php'); ?>
			</div>

		</header>

		<main id="index" class='page-content'>

			<section class='welcome'>

				<div class='inner-column'>
					<?php include('name.php'); ?>
				</div>	
				
			</section>

			<section class='about'>
				
				<div class='inner-column'>
					<?php include('about-module-3.php'); ?>
				</div>	
				
			</section>

			<footer class='footer'>
			
			<div class='inner-column'>
				<?php include('footer.php'); ?>
			</div>	
				
			</footer>

	
	</body>
</html>	

