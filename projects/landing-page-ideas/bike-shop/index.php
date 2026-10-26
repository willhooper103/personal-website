

<!doctype html>
<html>
	
	<head>
		<meta lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>bike-shop</title>
		<meta name='description' content='This is the challenge-1 index'>
		<meta name='og:image' content='challenge-1/images/memory-map.png'>
		<meta name='og:image' content='challenge-1/images/note-app.png'>
		<meta name='og:image' content='challenge-1/images/wired-revised.png'>
		<meta name='og:image' content='challenge-1/images/collage.png'>
		<link rel='stylesheet' href='css/index.css'>
		<link rel='stylesheet' href='css/reset.css'>
		<link rel='stylesheet' href='css/header.css'>
		<link rel='stylesheet' href='css/bikeshop-header.css'>
		<link rel='stylesheet' href='css/footer.css'>
	</head>
		
	<body>

		<header class='site-header'>
			<div class='inner-column'>
				<?php include('header.php'); ?>
			</div>
		</header>

		<main id="index" class='page-content'>

			<section class='content-intro'>
				<div class='inner-column'>
					<?php include('intro.php'); ?>
				</div>	
			</section>

			<section class='bikeshop-header'>
				<div class='inner-column'>
					<?php include('bikeshop-header.php'); ?>
				</div>					
			</section>

			<section class='bikeshop-footer'>	
				<div class='inner-column'>
					<?php include(''); ?>
				</div>					
			</section>
		</main>

		<footer class='site-footer'>			
			<div class='inner-column'>
				<?php include('footer.php'); ?>
			</div>					
		</footer>
	
	</body>
</html>	
