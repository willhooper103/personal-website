
<h1>PHP</h1>

<style>
	
	body {
		background: hsl(195, 53%, 79%);
	}

	p {
		font-size: 1.2rem;
		font-family: sans-serif;
		color: hsl(350, 100%, 50%);
	}

	h1 {
		font-family: sans-serif;
		color: hsl(350, 100%, 50%);
	}


	.things-I-like {
		color: hsl(350, 100%, 50%);;
	}
</style>

<?php 

	$first = "Will";
	$last = "Hooper";
	$noun = "fine art";
	$nounTwo = "piano";
	$nounThree = "guitar";
	$city = "Chicago";
	$intro = "I live in ";
	$message = "";


	$Chicago = false; 

	if ($Chicago) { 
		$message = $intro . " " . $city;
		echo "<p>I live in Chicago.</p>";
	} else {
		echo "<p>I live in Cleveland.</p>";
	}

	$NorthCarolina = true;

	if ($NorthCarolina) {
		echo "<p>I am from North Carolina.</p>";
	}	else {
		echo "I am from South Carolina.";
	}


	$full_name = $first . " " . $last;

	


	$price = 34;

	$tax = $price * .10;

	$total = $price + $tax;

	echo "<p>" . $total . "</p>";

	$percent = 15;
	$tip = $price * .20;

	echo "<p>Percent tip: " . $percent . "</p>"; 

	if ($percent == 0) {
		$tip = 0;
		}

	if ($percent == 10) {
		$tip + $total * (10/100);
		}

	if ($percent == 15) {
		$tip + $total * (15/100);
		}

	$total = $total + $tip;

	echo "<p>The total is: $" . $total . "</p>";








	$temperature = 85;

	if ($temperature > 90) {
		echo "<p>It's a hot day!<p>";
	} elseif ($temperature > 80) {
		echo "<p>It's a warm day!<p>";
	} else {
		echo "<p>It's a cold day!<p>";
	}





	$mygear = ["Ibanez", "Yamaha DGX 670", "Alvarez acoustic", "Boss tuner", "MXR Dyna Comp", "MXR 6-band eq", "Boss pitch shifter/delay", "Hall of Fame reverb", "Roland Cube 60", "Dunlop Crybaby Wah", "Electro Harmonix 720 Loop", "Fender Strat"];

	$favorite_thing = $mygear[0];

	echo "<section class='things-I-like'>";

	$guitar = [
		"id" => 120,
		"name" => "Ibanez",
		"type" => "semi-hollow body",
	]; 

	
 ?>


 <p>My favorite guitar is my <?=$favorite_thing?>.</p>

 <p>My piano is a <?=$mygear[1]?>.</p>

 <p>I have an <?=$mygear[2]?>, a <?=$mygear[3]?>, an <?=$mygear[4]?>, <br> an <?=$mygear[5]?>, a <?=$mygear[6]?>, a <?=$mygear[7]?>, <br> a <?=$mygear[9]?>, and an <?=$mygear[10]?>.</p>

 <p>I have a <?=$mygear[8]?> solid state amp from the early 80s. </p>

 <p>I also have a 1995 <?=$mygear[11]?> that I got after graduating high school. </p>

 <p>My name is <?=$full_name?>. I have a background in 
 <?=$noun?> and I also play <?=$nounTwo?> and <?=$nounThree?>.</p>

