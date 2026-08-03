


<header style='font-size: 1.5em; list-style: none; background-color: rgb(165 217 140);'>


<?php

	function stateGenerator($name, $location, $age, $population) {
		$state = [
			"name" => $name,
			"location" => $location,
			"age" => $age,
			"population" => $population,

		];
		return $state;
	}

	$northcarolina = stateGenerator("North Carolina", "South East", 1789, 11,200,00);
	$southcarolina = stateGenerator("South Carolina", "South East", 1788, 5,570,274);
	$illinois = stateGenerator("Illinois", "Midwest", 1818, 12700000);
	$texas = stateGenerator("Texas", "Southwest", 1845, 31709821);
	
	$states = [$northcarolina, $southcarolina, $illinois, $texas];

?>

<?php foreach ($states as $s) { ?>
	<li class='state'>
		<state-card>
			<h2 class='name'><?=$s["name"]?></h2>

			<p class='location'><?=$s["location"]?></p>
			<p class='age'><?=$s["age"]?></p>
			<p class='population'><?=$s["population"]?></p>


		</state-card>
	</li>
<?php } ?>
	


</header>