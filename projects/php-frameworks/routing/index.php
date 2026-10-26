<header>
	<nav>
		<ul>
			<li><a href='?'>Home</a></li>
			<li><a href='?page=about'>About</a></li>
			<li><a href='?page=contact'>Contact</a></li>
			<li><a href='?page=projects'>Projects</a></li>
		</ul>
	</nav>

	<?php
		var_dump($_GET); // ^ those just pass along the 
	?>
</header>


<main>

	<!-- load the right stuff here -->
	<?php
		if ( isset($_GET['page']) ) {
			$page = $_GET['page'];
			include("pages/$page.php");
		} else {
			include('pages/home.php');
		}
	?>

</main>


<footer>Footer</footer>