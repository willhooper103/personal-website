

<!-- Create a program that prompts for your name and prints a greeting using your name.

Prompt for name, so maybe '<label>What is your name</label>'

What is your name? (then in this space a place to type in a name, so a form.)


a button to submit the name

response after submission, Hello, (name), nice to meet you!

if a name is submitted, then the response is given, if not, then response is something like, "Please enter a name."
 -->

 <?php

 if (isset($_POST["submitted"])) {
 	// echo "Thank you.";

 }

  ?>

  <?php 

  $name = "Will,";
  $name2 = 1;
  $message = "nice to meet you!";
  $message2 = "Please enter a name.";


  if (isset($_POST["submitted"])) {

  		if(isset($_POST["name"])) {
  			if ($_POST["name"]) {
  				$name = $_POST["name"];
  			} 
  		}

  }

  ?>

 <form method='POST'>
 	<p>Entering a name</p>

 	<div class='field'>
 		<label>What is your name?</label>
 		<input type='name'  name='name' value=''>
 	</div>

 	<?php 

 		echo "Hello, " . $name . " " . $message;
 
 	?>


 	<button type='submit' name='submitted'>Push me
 	</button>

 </form>




 <!-- Create a program that prompts for an input string and displays output that shows the input string and the number of characters the string contains. 

 example output: 

 What is the input string? Homer
 Homer has 5 characters.

 This needs a form to enter 'Homer'

 It needs a button to submit the string.

 The program will need to count the letters in 'Homer', or any other string entered.

 So maybe, $Homer = [
				"characters" => 5
				"name" => $Homer

 It will need to echo 'Homer has 5 characters.'-->














  