

<style>
	ol {
		display: grid;
		list-style-type: none;

	}

	monster-card {
		display: block;
		outline: 1px solid black;
		border-radius: 8px;
		padding: 1rem;
		background-color: hsl(100 50% 70%);
	}

	h2, p {
		font-family: sans-serif;
	}

	img {
		border-radius: 8px;
	}

	@media (width >= 500px) {
		ol {
			grid-template-columns: 1fr 1fr;
		}
	}
</style>


<?php

$monsters = ["one", 1, "three", "cat" ];

// echo "I have " . $monsters[0] . " " . $monsters[3] . ".";

$Cody = [
	"id" => 1850,
	"name" => "Cody",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/cody.jpg",
];


$Lima = [
	"id" => 1851,
	"name" => "Lima-bean",
	"favoriteFood" => "mango",
	"age" => 40,
	"adopted" => false,
	"portrait" => "images/lima-bean.jpg",
];


$Reads = [
	"id" => 1852,
	"name" => "Mrs. Reads-a-lot",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/mrs-reads-a-lot.jpg",
];


$Orangina = [
	"id" => 1853,
	"name" => "Orangina",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/orangina.jpg",
];


$Shadow = [
	"id" => 1854,
	"name" => "Shadow",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/shadow.jpg",
];


$Fragoo = [
	"id" => 1855,
	"name" => "Fragoo",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/fragoo.jpg",
];


$MrBanana = [
	"id" => 1856,
	"name" => "Mr. Banana",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "images/mr-banana.jpg",
];


// $story = $Cody["name"] . " is " . $Cody["age"] . " years old and his favorite food is " . $Cody["favoriteFood"] . ".";

// $template = "<p id=" . $Cody["id"] . ">" . $story . "</p>";

// echo $template;




$fruitsArray = ["apple", "banana", "peach", "mango", "strawberry"];
 
echo "<ol>";

foreach ($fruitsArray as $fruit) {
	// echo "<li>" . $fruit . "</li>";
}

echo "</li>";

echo "</ol>";





$monstersArray = [$Cody, $Lima, $Reads, $MrBanana, $Fragoo, $Shadow, $Orangina];

echo "<ol>";

foreach ($monstersArray as $monster) {
	$id = $monster["id"];
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old";
	$portrait = $monster["portrait"];
	$status = $monster["adopted"];

	// set human readable status message

	if ($status == 1) {
		$status = "ADOPTED!";
	} else {
		$status = "NEEDS A HOME!";
	}

	echo "<ol>";

	echo "<li class='monster'>";

	echo "<monster-card id='" . $id . "'>" .
			"<picture class='portrait'>" .
				"<img src='" . $portrait . "' width='300'>" .

			"<h2 class='name'>". $monster["name"] . "</h2>" .

			"<p class='story'>" . $story . "</p>" .
			"<p class='status'>" . $status . "</p>" .

		  "</monster-card>";

	echo "</li>";
}

	echo "</ol>";

?>





