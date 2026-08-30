

<style>

	heading {
		font-size: 2rem;
	}

	form {
		display: grid;
		max-width: 300px;
		gap: 16px;
		outline: 1px solid black;
		background-color: wheat;
		border-radius: 8px;
		padding: 1rem;
	}

	.field {
		display: grid;
		input[type='text'] {
			padding: .3em;
		}
	}

	label {
		font-size: 1.2rem;
	}

	label + input {
		margin-top: .5rem;
	}

	output {
		font-size: 1.5rem;
	}
</style>


<?php

$noun = "";
$verb = "";
$adjective = "";
$adverb = "";
$madLib = "";
$errorMessage = "";

function madlibStatement($n, $v, $adj, $adv) {
	return ("Do you $v your $adj $n $adv? That's hilarious!");
}


if (isset($_POST['submitted'])) {
	$noun = trim($_POST['noun'] ?? '');
	$verb = trim($_POST['verb'] ?? '');
	$adjective = trim($_POST['adjective'] ?? '');
	$adverb = trim($_POST['adverb'] ?? '');


	if (empty($noun)) {
		$errorMessage = "please enter a noun.";
	} elseif (empty($verb)) {
		$errorMessage = "please enter a verb.";
	} elseif (empty($adjective)) {
		$errorMessage = "please enter an adjective.";
	} elseif (empty($adverb)) {
		$errorMessage = "please enter an adverb.";
	} else {
		$madLib = madlibStatement($noun, $verb, $adjective, $adverb);
	}
}

?>


<form method='POST'>
	<heading><strong>Mad Lib</strong></heading>

	<?php if (!empty($errorMessage));?>
	<p style="color: red;"><?=$errorMessage?></p>

	<div class='field'>
		<label>noun</label>
		<input type="text" name='noun' value= '<?=$noun?>'>
	</div>
	

	<div class='field'>
		<label>verb</label>
		<input type='text' name='verb' value= '<?=$verb?>'>
	</div>


	<div class='field'>
		<label>adjective</label>
		<input type='text' name='adjective' value= '<?=$adjective?>'>
	</div>


	<div class='field'>
		<label>adverb</label>
		<input type='text' name='adverb' value= '<?=$adverb?>'>
	</div>

	<button type="submit" name="submitted">Enter</button>

	<output>
		 <?=$madLib?>
	</output>
	
	
</form>




