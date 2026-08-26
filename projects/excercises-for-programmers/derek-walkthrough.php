<?php


// ask for noun
// ask for verb
// adjective
// adverb

// Display the message

// 
	echo 'Memory: $_POST: ';
	
	echo "<code><pre>";
	print_r($_POST);
	echo "</pre></code>";

	// setup (Defaults)
	$message = "Fill out the form";

	$noun = "";
	$verb = "";
	$adjective = "";
	$adverb = "";

	$nounHelper = "";

	function prepareMessage($n, $v, $a, $ad) {
		return "Do you $v your $a $n $ad? That's hilarious!";
	}

	// if submitted...
	$formSubmitted = isset( $_POST['buttonPushed'] );

	if ($formSubmitted) {

		// $noun = !empty($_POST['noun']) ? $_POST['noun'] : "";

		if (!empty($_POST['noun'])) {
			$noun = $_POST['noun'];
		} else {
			$nounHelper = "Please enter a person, place, or thing.";
		}

		$verb = $_POST['verb'];
		$adjective = $_POST['adjective'];
		$adverb = $_POST['adverb'];

		// if they've add all the words
		if ( !empty($_POST['noun']) && !empty($_POST['verb']) ) {
			// prepare the message
			$message = prepareMessage($noun, $verb, $adjective, $adverb);
		} else {
			$message = "Make sure you fill out the entire form";
		}

	} else {
		
	}

?>

<!-- <a href='/forms/mad.php'>refresh POST state</a> -->

<form method='POST'>
	<p>Please enter the following:</p>
 
	<input-field>
		<label for='n'>
			Noun <span title='(A person, place, thing, idea)'>(i)</span>

			<?php if ($nounHelper) { ?>
				<span class='warning'><?=$nounHelper?></span>
			<?php } ?>
		</label>
		<input id='n' type='text' name='noun' value='<?=$noun?>'  />
	</input-field>

	<input-field>
		<label for='v'>Verb</label>
		<input id='v' type='text' name='verb' value='<?=$verb?>' />
	</input-field>

	<input-field>
		<label for='a'>Adjective</label>
		<input id='a' type='text' name='adjective' value='<?=$adjective?>' />
	</input-field>

	<input-field>
		<label for='ad'>Adverb</label>
		<input id='ad' type='text' name='adverb' value='<?=$adverb?>' />
	</input-field>

	<div class="actions">
		<button type='submit' name='buttonPushed'>
			Submit
		</button>
	</div>

	<output>
		<p><?=$message?></p>
		<!-- <p>Do you <input type='text' name='adverbInline' placeholder='Verb' /> your <input type='text' name='adverbInline' /> <input type='text' name='adverbInline' /> <input type='text' name='adverbInline' />? That's hilarious!</p> -->
	</output>
</form>




<style>
	form {
		display:grid;
		gap: 16px;
		max-width: 300px;

		input-field {
			display: grid;
			input[type='text'] {
				padding: 0.3em;
			}

			.warning {
				color: orange;
			}
		}
	}
</style>
Show less




