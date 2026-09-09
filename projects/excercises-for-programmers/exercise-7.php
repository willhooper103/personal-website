


//Create a program that calculates the area of a room. Prompt the useer for the length and width of the room in feet. Then display the are in both square feet and square meters.

Example output:

What is the length of the room in feet? 15
What is the width of the room in feet? 20
You entered dimensions of 15 feet by 20 feet.
The area is
300 square feet
27.871 square meters

The formula for this conversion is 

m2 = f2 x 0.09290304


So, this needs a form with inputs for entering the length and width.
It needs to multiply the length and the width to get the square footage.
Then it needs to multiply the square footage by 0.09290304 to get sqaure meters.


<?php

$length = '';
$width = '';
$areaFeet = '';
$areaMeter = '';
$error = '';
$outputMessage = '';
$outputMessage2 = '';

if (isset($_POST['submitted'])) {
	$length = $_POST['length'] ?? '';
	$width = $_POST['width'] ?? '';


	if (!is_numeric($length) || floatval($length) < 0) {
		$error = "Please enter the length.";
	} elseif (!is_numeric($width) || floatval($width) < 0) {
		$error = "Please enter the width.";
	} else {
		// calculate room area 
		$areaFeet = floatval($length) * floatval($width);
		$areaMeter = (floatval($length) * floatval($width)) * 0.09290304;

		$outputMessage = "The area of the room in feet is " . $areaFeet . ".<br>";
		$outputMessage2 = "The area of the room in meters is " . $areaMeter . ".";
	}

}

 ?>

 <form method="POST">

 	<p>Calculate the area of a room</p>

 	<inputfield>
 		<label for="">Enter the length</label>
 		<input type="text" name='length' value='<?=$length?>'>
 	</inputfield>

 	<inputfield>
 		<label for="">Enter the width</label>
 		<input type="text" name='width' value='<?=$width?>'>
 	</inputfield>

 	<div class='actions'>
 		<button type='submit' name='submitted'>Enter</button>
 	</div>
 

 	<output>
 		<?php 

 			if (!empty($error)) {
 				echo $error;
 			}
 			else if (!empty($outputMessage)) {
 				echo $outputMessage;
 				echo $outputMessage2;
 			}
 		?>
 	</output>
 	
 </form>

<style>
	form {
		display: block;
		display: grid;
		outline: 1px solid black;
		border-radius: 8px;
		max-width: 300px;
		background-color: ghostwhite;
		padding: 1rem;
		gap: 1rem;
	}

	input-field {
		display: grid;
	}
</style>