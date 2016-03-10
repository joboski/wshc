<?php include 'header.php' ?>
<?php include 'data/gallery_page-vars.php' ?>

<section class="section">
<h1 class="section-header header-bar header-news">Site Visit 2012</h1>
<div class="container">
	<div class="justified mar-top30">
<?php   foreach( $twelve['Site Visit'] as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 	}		?>
		</div>
</div>
</section>

<?php include 'footer.php' ?>