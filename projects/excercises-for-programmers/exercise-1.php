

<!-- Create a program that prompts for your name and prints a greeting using your name.

Prompt for name, so maybe '<label>What is your name</label>'

What is your name? (then in this space a place to type in a name, so a form.)


a button to submit the name

response after submission, Hello, (name), nice to meet you!

if a name is submitted, then the response is given, if not, then response is something like, "Please enter a name."
 -->

 <style>
 	label, input, button {
/* 		border: 1px solid red;*/
 	}

 	p {
 		font-size: 18px;
 	}

 	form {
 		max-width: 400px;
 		border: 1px solid black;
 		border-radius: 8px;
 		padding: 0rem 1rem 1rem 1rem;
 	}

 	.field {
/* 		border: 1px solid blue;*/
 		display: flex;
 		flex-direction: column;
 	}

 	.field label {
 		font-size: 18px;
 		magin-bottom: 4px;
 	}

 	button[type='submit'] {
 		margin-top: 20px;
 	}
 </style>





 <?php

 function showCode($data) {
 	echo '<pre><code>' .
 	print_r($data, true) . '</code></pre>';
 }
 
 $name = "";
 $greeting = "";

// echo $_SERVER["QUERY_STRING"];
// showCode($_POST);




if(isset($_POST['submitted'])) {
	//check if user gave name
	if ( isset($_POST['nameInput']) && !empty($_POST['nameInput'])) {
		$name = $_POST['nameInput'];
		//if so, create greeting message.
		$greeting = "Hi, " . $name . " nice to meet you!";
	}else {
		$greeting = "Please enter name.";
	}

	//If not, then create message saying 'Please enter name'.
}



  ?>

 <form method='POST'>

 	<p>Enter a name</p>

 	<div class='field'>

 		<label>What is your name?</label>
 		<input type='text' name='nameInput'>


 	</div>

 	<?php
 		echo $greeting;

 	 ?>

 	<button type='submit' name='submitted'>Push me
 	</button>

 	
 <?php



   

 ?>

 </form>






















  