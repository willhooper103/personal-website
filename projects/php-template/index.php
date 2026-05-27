<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Template</title>
	<style> 

		inner-column {
			inner-column {
			width: 100%;
			max-width: 1100px;
			margin-left: auto;
			margin-right: auto;
		}
		p {
			font-size: 1.2rem;
			width: 50ch;
		}
	</style>
</head>

<body>

	<header>
		<inner-column>
			<h1>Mad Libs PHP</h1>
		</inner-column>
	</header>

	<main>
		<inner-column>
			<?php 
			$adjectiveOne = "far off";
			$adjectiveTwo = "noisy";
			$adjectiveThree = "exhausted";
			$adjectiveFour = "many";
			$nounOne = "hotdogs";
			$nounTwo = "ravine";
			$nounThree = "mountain";
			$nounFour = "mules";
			$nounFive = "fascists";
			$nounSix = "well";
			$nounSeven = "ivy";
			$nounEight = "face";
			$nounNine = "money";
			$verbOne = "running";
			$verbTwo = "swimming";
			$verbThree = "knitting";
			$verbFour = "yodeling";
			$plant = "corpse flower";
			$game = "pin the tail on the donkey";
			$partofbody = "elbow";
			$place = "Alps";
			$number = "100";


			 echo "<p>  A vacation is when you take a trip to some " . $adjectiveOne . " place with your " . $adjectiveTwo . " family. Usually you go to some place that is near a " . $nounTwo . " or up on a " . $nounThree . ". A good vacation place is one where you can ride " . $nounFour . " or play " . $game . " or go hunting " . $nounFive . ". </p>";
			 ?>

				 <p>I like to spend my time <?php echo $verbTwo?> or <?php echo $verbOne?>. When parents go on a vacation, they spend their time eating three <?php echo $nounOne?> a day, and fathers play golf, and mothers sit around <?php echo $verbThree?>. Last summer, my little brother fell in a <?php echo $nounSix?> and got poison <?php echo $nounSeven?> all over his <?php echo $nounEight?>.</p>

				
				 <p>My family is going to go to the <?=$place?> and I will practice <?=$verbFour?>. Parents need vacation more than kids because parents are always very <?=$adjectiveThree?> and because they have to work <?=$adjectiveFour?> hours every day all year making enough <?=$nounNine?> to pay for the vacation.</p>

		</inner-column>
		
	</main>

	     <footer>
	     	
	     </footer>

	</body>
</html>

