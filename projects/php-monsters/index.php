<?php

$monsters = ["one", 1, "three", "cat" ];

echo "I have " . $monsters[0] . " " . $monsters[3] . ".";

$Cody = [
	"id" => 1856,
	"name" => "Cody",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];


$Lima = [
	"id" => 1856,
	"name" => "Lima",
	"favoriteFood" => "mango",
	"age" => 40,
	"adopted" => false,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",

];


$Reads = [
	"id" => 1856,
	"name" => "Reads",
	"favoriteFood" => "Mountain Dew Code Red",
	"age" => 38,
	"adopted" => true,
	"portrait" => "https://peprojects.dev/images/portrait.jpg",
];


$story = $Cody["name"] . " is " . $Cody["age"] . " years old and his favorite food is " . $Cody["favoriteFood"] . ".";

$template = "<p id=" . $Cody["id"] . ">" . $story . "</p>";

echo $template;




$fruitsArray = ["apple", "banana", "peach", "mango", "strawberry" ];
 
echo "<ol>";

foreach ($fruitsArray as $fruit) {
	echo "<li>" . $fruit . "</li>";
}

echo "</li>";

echo "</ol>";





$monstersArray = [$Cody, $Lima, $Reads];


foreach ($monstersArray as $monster) {
	$name = $monster["name"];
	$story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old";
	echo "<li class='monster'>";

	echo "<monster-card>"
			. "<h2 class='name'>". $monster["name"] . "</h2>" .

			"<p class='story'>" . $story . "</p>" .

		  "</monster-card>";

	echo "</li>";
}




?>





