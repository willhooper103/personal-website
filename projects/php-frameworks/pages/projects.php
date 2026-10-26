<?php

	// go to the projects json and get the data to show on the screen (like a database)

	include('data/projects.php');

?>

<section>
	<inner-column>
		<h1 class='loud-voice'>Projects</h1>

		<?php 
			foreach ($projects as $project) { 
				$url = "?page=project&id=" . $project['id'];

				?>
				<li>
					<article>
						<?=$project['name'];?>

						<a href="<?=$url?>">Read more</a>
					</article>
				</li>

			<?php } ?>


	</inner-column>
</section>
