<?php require 'header.php' ?>
<?php include 'data/gallery_page-vars.php' ?>
<style>
	body[style] {
   		height: inherit !important;
 }
</style>
<div class="container">
		<!-- <header>2014</header> -->

<section class="section" id="<?= $key ?>_2014">
	<h3 class="category">Photos 2014</div>
<?php 	foreach( $fourteen as $key => $values ){	?>

	<h3 class="category"><?php echo ucfirst($key) ?></h3>
		<div class="justified mar-top30">
<?php    	foreach( $values as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 		}		?>
		</div>
</section>
<?php	}		?>

	
	

<section class="section" id="<?= $key ?>_2012">
	<h3 class="category mar-bot30">Photos 2012</div>
	<?php 	foreach( $twelve as $key => $values ){	?>
	<h3 class="category"><?php echo ucfirst($key) ?></h3>
		<div class="justified mar-top30">
<?php    	foreach( $values as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 		}		?>
		</div>
</section>
<?php	}		?>	
</div>	
		<!-- <section class="section" id="siteVisit">
			<h3 class="category lime_green">Site Visit</h3>
			<div class="justified">
				<a><img src="images/gallery/exp_img1.jpg"></a>
				<a><img src="images/gallery/exp_img2.jpg"></a>
				<a><img src="images/gallery/exp_img3.jpg"></a>
				<a><img src="images/gallery/exp_img4.jpg"></a>
				<a><img src="images/gallery/exp_img5.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-01.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-02.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-03.jpg"></a>
			</div>		
		</section>
			<h2 id="welcomeDinner">Welcome Dinner</h2>
			<div class="justified">
				<a><img src="images/gallery/exp_img1.jpg"></a>
				<a><img src="images/gallery/exp_img2.jpg"></a>
				<a><img src="images/gallery/exp_img3.jpg"></a>
				<a><img src="images/gallery/exp_img4.jpg"></a>
				<a><img src="images/gallery/exp_img5.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-01.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-02.jpg"></a>
				<a><img src="images/gallery/WSHC WEBSITE HOMEPAGE REVISION VER 6-03.jpg"></a>
			</div> -->
		
	<!-- </div> -->



<?php require 'footer.php' ?>