<?php include 'header.php' ?>
<?php include 'data/gallery_page-vars.php' ?>

<section class="section">
<h1 class="section-header header-bar header-news">Day 2 Plenary 3 2010</h1>
<div class="container">
	<div class="justified mar-top30">
<?php   foreach( $ten['Day 2 Plenary 3'] as $value ){			?>
			<a href="images/<?php echo $value ?>"><img src="images/<?php echo $value ?>" alt="<?= $value ?>"></a>
<?php 	}		?>
		</div>
</div>
</section>

<?php include 'footer.php' ?>