
<?php
	include('data/projects.php');
	// gets us the $projects  variable/data

	$current = null;

	foreach ($projects as $project) {
		if ($project['id'] == $_GET['id']) {
			$current = $project;
		}
	}

?>

<section>
	<inner-column>
		<h1 class='loud-voice'><?=$current['name']?></h1>
	</inner-column>
</section>
