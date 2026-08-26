

<style>
	form {
		max-width: 400px;
		outline: 1px solid black;
		border-radius: 8px;
		padding: 1rem;
	}
</style>


<?php
if (isset($_POST['submitted'])) {
	if (isset($_POST['user_name']) && !empty($_POST['user_name'])) {
		if ($_POST['user_name']) {
			$name = $_POST['user_name'];
		}
	}
}
?>


<form method='POST'>
	<p>Exercise 4</p>

	<div clas='field'>
		<label>What is exercise 4?</label>
		<input type="text" name="user_name">
	</div>
	
	<button type="submit" name="submitted">Enter</button>

	<div clas='field'>
		<label>What is exercise 4?</label>
		<input type="text" name="user_name">
	</div>

	<button type="submit" name="submitted">Enter</button>

	<div clas='field'>
		<label>What is exercise 4?</label>
		<input type="text" name="user_name">
	</div>

	<button type="submit" name="submitted">Enter</button>
	
	
</form>