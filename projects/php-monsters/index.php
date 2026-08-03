


<header style='font-size: 1em'>
	
<?php 

	function monsterGenerator($name, $age, $favoriteFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood,
		];
		return $monster;

	 }

	$crunchy = monsterGenerator("Crunchy", 6, "pork rinds"); 
	$crusty = monsterGenerator("Crusty", 6, "old bread");
	$chunky = monsterGenerator("Chunky", 6, "corn on the cob");
	$dusty = monsterGenerator("Dusty", 6, "pork rinds");

	$monsters = [$crunchy, $crusty, $chunky, $dusty];

	?>

	<?php foreach ($monsters as $m) { ?>
		<li class='monster'>
			<monster-card>
				<h2 class='name'><?=$m["name"]?></h2>

				<p class='age'><?=$m["age"]?></p>
				<p class='food'><?=$m["favoriteFood"]?></p>
			</monster-card>
		</li>

	<?php } ?>




	<?php 

		function guitarlist($brand, $model, $color, $year) {
			$guitar = [
				"brand" => $brand,
				"model" => $model,
				"color" => $color,
				"year" => $year,
			];

			return $guitar;
		}

		$fender = guitarlist("fender", "strat", "blonde", 1997);
		$ibanez = guitarlist("ibanez", "artcore", "sunburst", 2004);
		$alvarez = guitarlist("alvarez", "artist", "natural", 1996);

		$guitars = [$fender, $ibanez, $alvarez];
		
	?>

	<?php foreach ($guitars as $g) { ?>
		<li class='guitar'>
			<monster-card>
				<h2 class='brand'><?=$g["brand"]?></h2>

				<p class='model'><?=$g["model"]?></p>
				<p class='color'><?=$g["color"]?></p>
				<p class='year'><?=$g["year"]?></p>
			</monster-card>
		</li>

	<?php } ?>

	<?php

	$sandwich = 6.99;
	$tax = 0.10;
	$total = $sandwich + ($sandwich*$tax);
	$prettyTotal = number_format($total, 2, '.', ',');
	echo "<p>Total: $$prettyTotal</p>";

	 ?>



	


	<?php include('guitars_data.php'); ?>


	<ol class='guitar-list'>
		<?php foreach ($guitars as $guitar) { ?>
			<guitar-card>
				<h3><?php echo $guitar['name']; ?></h3>
				<p><?=$guitar['brand']?></p>
			</guitar-card>
		<?php } ?>
	</ol>

 
</header>



























<link rel="stylesheet" href="css/index.css">

<?php include('monster-factory.php'); ?>
<?php include('index-practice.php'); ?>


<ol class='monster-list'>


<?php foreach ($monstersArray as $monster) { ?>

	<?php
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favoriteFood"] . " and I am  " . $monster["age"] . ".";
		$monster["name"];
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];

		if ($status ==1) {
			$status = "Adpoted!";
		} else {
			$status = "Needs a home!";
		}

	?>

	<li class='monster'>
		<monster-card id='<?=$id?>'>
			<picture class='portrait'>
				<img src="<?=$portrait?>" alt="">
			</picture>
			<h2 class='name'><?=$name?></h2>

			<p class='story'><?=$story?></p>
			<p class='status'><?=$status?></p>
			
		</monster-card>

	</li>

<?php } ?>


</ol> 




