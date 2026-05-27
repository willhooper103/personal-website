
<h1>PHP</h1>

<?php 

	$first = "Will";
	$last = "Hooper";
	$noun = "fine art";
	$nounTwo = "piano";
	$nounThree = "guitar";
	$city = "Chicago";
	$intro = "I live in ";
	$message = "";


	$Chicago = true; 

	if ($Chicago) { 
		$message = $intro . " " . $city;
		echo "I live in Chicago.";
	} else {
		echo "I live in Cleveland.";
	}

	$NorthCarolina = true;

	if ($NorthCarolina) {
		echo "I am from North Carolina.";
	}	else {
		echo "I am from South Carolina.";
	}


	$full_name = $first . " " . $last;


	$temperature = 85;

	if ($temperature > 90) {
		echo "It's a hot day!";
	} elseif ($temperature > 80) {
		echo "It's a warm day!";
	} else {
		echo "It's a cold day!";
	}
	
 ?>

 <p>My name is <?=$full_name?>. I have a background in 
 <?=$noun?> and I also play <?=$nounTwo?> and <?=$nounThree?>.</p>

