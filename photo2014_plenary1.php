<?php require 'header.php' ?>
<?php include 'data/gallery_page-vars.php' ?>
<style>
	body[style] {
   		height: inherit !important;
 }
</style>
<div class="container mar-top100">
	<div class="mar-top80 mar-bot80">
		<h3 class="category">Photos 2014</h3>
	</div>
	<div class="mar-top40 mar-bot40">
		<h3 class="category lime_green">Plenary 1</h3>
	</div>
	<div class="justified">
<?php    	foreach( $fourteen['plenary1'] as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 		}		?>
	</div>
	
</div>
<?php include 'footer.php' ?>