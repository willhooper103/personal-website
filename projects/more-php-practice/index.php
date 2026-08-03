


<style>
	ol {
		display: ;
		padding-inline-start: 10px;
	}

	</style>

<?php

$NorthCarolina = [
	"id" => 1,
	"name" => "North Carolina",
	"statebird" => "Northern Cardinal",

];

$SouthCarolina = [
	"id" => 2,
	"name" => "South Carolina",
	"statebird" => "Carolina Wren",
	
];

$Illinois = [
	"id" => 3,
	"name" => "Illinois",
	"statebird" => "Northern Cardinal",
	
];

$stateArray = [$NorthCarolina, $SouthCarolina, $Illinois];

echo "<ol>";

foreach ($stateArray as $states) {
	$id = $states["id"];
	$name = $states["name"];
	$statebird = $states["statebird"];
	$story = "This is a state I have lived in.";



echo "<ol>";

echo "<li class='states'>";

echo "<states-card id='" . $id . "'>" .

	 "<h2 class='name'>". $states["name"] . "</h2>" .
	 "<p class='statebird'>" . $states["statebird"] . "</p>" .
	 "<p class='statebird'>" . $story . "</p>" .


	 "</states-card>";

echo "</li>";

echo "</ol>";

}

?>