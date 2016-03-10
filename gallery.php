<?php include 'header.php' ?>
<?php include 'data/galthumb-vars.php' ?>

<script>
	// $(document).ready(function(){
			
		var fragment = window.location.hash;
		alert(fragment);
		// );
</script>
	
<section class="section nav-offset" id="media">
	<!-- <div class="row"> -->
		<h1 class="section-header header-bar header-news no-margin">Media Room</h1>
	<!-- </div> -->
	<div class="container">	

	<h3 class="section-header">Media Enquiries</h3>
		<p>For media enquiries, please contact:</p>
		<address>
			<strong>Ranjeet <u>Kaur</u> (Ms)</strong><br>
			<strong>Associate Director</strong><br>
			<strong>Tel: +65 6390 3376</strong><br>
			<strong>Email:</strong> <a href="mailto:ranjeet.kaur@hkstrategies.com">ranjeet.kaur@hkstrategies.com</a><br>
			<!-- <strong>DID:</strong> +65 6390 3376<br> -->
		</address>
	</div>
</section>

<span class="anchor" id="photo"></span>
<section class="section">
	<!-- <div class="row"> -->
		<h1 class="section-header header-bar header-news">Photo Gallery</h1>
	<!-- </div> -->
			<div class="container">
				<h2 class="section-header">2014</h2>
			</div>
			<div class="container">
				<div class="justified mar-bot60" id="pic2014">
					<?php foreach ($thumb2014 as $value) {	?>
						 <a href="<?php echo $value[0] ?>" target="_blank"><img alt="<?php echo $value[1] ?>" src="images/<?php echo $value[2] ?>"></a>
					<?php } ?>
			    </div>
			</div>
			<div class="container">
			    <h2 class="section-header">2012</h2>
			</div>
			<div class="container">
			    <div class="justified mar-bot60" id="pic2012">
				    <?php foreach ($thumb2012 as $value) {	?>
						 <a href="<?php echo $value[0] ?>" target="_blank"><img alt="<?php echo $value[1] ?>" src="images/<?php echo $value[2] ?>"></a>
					<?php } ?>
			    </div>
			</div>

			<div class="container">
			    <h2 class="section-header">2010</h2>
			</div>
			<div class="container">
			    <div class="justified" id="pic2010">
				    <?php foreach ($thumb2010 as $value) {	?>
						 <a href="<?php echo $value[0] ?>" target="_blank"><img alt="<?php echo $value[1] ?>" src="images/<?php echo $value[2] ?>"></a>
					<?php } ?>
			    </div>
			</div>
		<!-- </div> -->
	</section>
	
	<span class="anchor" id="video"></span>
	<section class="section">
		<div class="row">
			<h1 class="section-header header-bar header-news">Video Gallery</h1>
		</div>
		<!-- <div class="container">
			
		</div> -->
		<div class="container align-center">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/NajkrTeBFrw" frameborder="0" allowfullscreen></iframe>
			<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/2AgfkxrVR8w" frameborder="0" allowfullscreen></iframe> -->
		</div>
	</section>

<!-- </div> -->
	
<?php include 'footer.php' ?>