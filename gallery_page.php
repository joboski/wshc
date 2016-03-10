<?php require 'header.php' ?>
<?php include 'data/gallery_page-vars.php' ?>
<style>
	body[style] {
   		height: inherit !important;
 }
</style>
		<!-- <header>2014</header> -->

<section class="section" id="<?= $key ?>_2014">
	<h1 class="section-header header-bar header-destination">Photos 2014</h1>
	<div class="container">
	<?php 	foreach( $fourteen as $key => $values ){	?>
	<h2 class="section-header"><?php echo ucfirst($key) ?></h2>
		<div class="justified mar-bot30">
<?php    	foreach( $values as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 		}		?>
		</div>
	</div>
</section>
<?php	}		?>

	
	

<section class="section" id="<?= $key ?>_2012">
	<h1 class="section-header header-bar header-news">Photos 2012</h1>
	<div class="container">
	<?php 	foreach( $twelve as $key => $values ){	?>
	<h2 class="section-header"><?php echo ucfirst($key) ?></h2>
		<div class="justified mar-bot30">
<?php    	foreach( $values as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 		}		?>
		</div>
	</div>
</section>
<?php	}		?>	
	
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