

<link rel="stylesheet" href="css/guitar-style.css">


	<?php include('guitars-data.php'); ?>

	<?php

	function saleFlag($onsale) {
		if ($onsale) {
			return "<p class='flag'>on sale</p>";
		}
	}

	function saleClass($isOnSale) {
		if ($isOnSale) {
			return "on-sale";
		}
	}

	?>


	<ol class='guitar-list'>
		<?php foreach ($guitars as $guitar) {
			  $style = saleClass($guitar['onsale']); ?>

			<li class='guitar <?=$style?>'>

				<guitar-card>
					<h3><?php echo $guitar['name']; ?></h3>
					<p><?=$guitar['brand']?></p>
					<?=saleFlag($guitar['onsale'])?>
				</guitar-card>

			</li>

		<?php } ?>
	</ol>