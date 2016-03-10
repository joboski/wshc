<?php include 'header.php' ?>
<?php include 'data/new_speaker-vars.php' ?>

<?php 
	$keynote_indicator = false;
	$plenary_indicator = false;
	$symposium_indicator = false;
 ?>
<link rel="stylesheet" href="css/speakers.css">

<!-- <div class="hide"> -->
<section id="speaker" class="section nav-offset">
	<h1 class="section-header header-bar header-speakers">Speakers</h1>
	<div class="container">
		<div class="row">
		<?php 	foreach( $speakers as $row ){		?> 
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<span class="anchor" id="<?php echo $row[0] ?>"></span>
				<div class="section-cell">
				<!-- data-target="#spkr-<?php //echo $row[0] ?>" -->
					<a class="spkr-btn long" data-toggle="modal" href="#">
						<div class="align-center mar-bot20">
							<img src="images/<?php echo $row[1] ?>" width="300" alt="image" class="img-rounded img-square" >
						</div>
						<div class="spkr-txt">
							<p class="name"><?php echo $row[2] ?></p>
							<p class="designation"><?php echo $row[3] ?></p>
						</div>
					</a>
					<div id="spkr-<?php echo $row[0] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Keynote Speaker</h4>
								</div> 
								<div class="speaker modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="align-center"><img src="images/<?php echo $row[1] ?>" width="300" class="img-rounded pad-bot30 inner-size"/></div>
											<div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
												<div class="inner-spkr-txt">
													<p class="name"><b><?php echo $row[2] ?></b></p>
													<p class="designation"><?php echo $row[3] ?></p>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

												<?php foreach( $row[4] as $para ){ ?>
													<p><?php echo $para ?></p>
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div><!-- End of section-cell -->
			</div>
<?php 	} ?>
		</div>
	</div>
</section>
<!-- </div> -->




<div class="hide">
<section id="keynote" class="section nav-offset">
	<h1 class="section-header header-bar header-speakers">Keynote Speakers</h1>
	<div class="container">
		<div class="row">
		
<?php 	foreach( $keynote as $row ){		?> 

			<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8  col-xs-offset-2">
			<!-- <div class="col-lg-4 col-md-4 col-sm-4"> -->
				<span class="anchor" id="<?php echo $row[0] ?>"></span>
				<div class="section-cell">
					<!-- data-toggle="modal" href="#" -->
					<a class="spkr-btn long" data-target="#spkr-<?php echo $row[0] ?>" data-toggle="modal" href="#">
						<div class="align-center mar-bot20">
							<img src="images/<?php echo $row[1] ?>" width="300" alt="image" class="img-rounded img-square" >
						</div>
						<div class="spkr-txt">
							<p class="name"><?php echo $row[2] ?></p>
							<p class="designation"><?php echo $row[3] ?></p>
						</div>
					</a>
					<div id="spkr-<?php echo $row[0] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Keynote Speaker</h4>
								</div> 
								<div class="speaker modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="align-center"><img src="images/<?php echo $row[1] ?>" width="300" class="img-rounded pad-bot30 inner-size"/></div>
											<div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
												<div class="inner-spkr-txt">
													<p class="name"><b><?php echo $row[2] ?></b></p>
													<p class="designation"><?php echo $row[3] ?></p>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

												<?php foreach( $row[4] as $para ){ ?>
													<p><?php echo $para ?></p>
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php 	} ?>
		</div><!-- End of Row -->
	</div>
</section>

<span class="anchor" id="plenary"></span>
<section class="section">
	<h1 class="section-header header-bar header-speakers">Plenary Speakers</h1>
	<div class="container">
		<div class="row">

<?php 	foreach( $plenary as $row ){		?>

<?php 		if( !$plenary_indicator ){		?>			 		
			
			<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-6 col-sm-offset-0 col-xs-8  col-xs-offset-2">

<?php 		$plenary_indicator = TRUE;		?>

<?php 		} else {						?>

			<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8  col-xs-offset-2">

<?php 		}								?>
				<span class="anchor" id="<?php echo $row[0] ?>"></span>
				<div class="section-cell">
					<!-- data-toggle="modal href="#" " -->
					<a class="spkr-btn" data-target="#spkr-<?php echo $row[0] ?>" data-toggle="modal" href="#">
						<div class="align-center mar-bot20">
							<img src="images/<?php echo $row[1] ?>" width="300" alt="image" class="img-rounded img-square" >
						</div>
						<div class="spkr-txt">
							<p class="name"><?php echo $row[2] ?></p>
							<p class="designation"><?php echo $row[3] ?></p>					
						</div>
					</a>
					
					<div id="spkr-<?php echo $row[0] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Plenary Speakers</h4>
								</div> 
								<div class="speaker modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="align-center"><img src="images/<?php echo $row[1] ?>" width="300" class="img-rounded pad-bot30 inner-size"/></div>
											<div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
												<div class="inner-spkr-txt">
													<p class="name"><b><?php echo $row[2] ?></b></p>
													<p class="designation"><?php echo $row[3] ?></p>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

											<?php foreach( $row[4] as $para ){ ?>
												<p><?php echo $para ?></p>
											<?php } ?>

											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php 	} ?>
		</div><!-- End of Row -->
	</div>
</section>

<span class="anchor" id="symposium"></span>
<section class="section">
	<h1 class="section-header header-bar header-speakers">Symposium Speakers</h1>
	<div class="container">
		<div class="row">

<?php 	foreach( $symposium as $row ){		?>

<?php 		//if( !$symposium_indicator ){		?>	

			<div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-8 col-xs-offset-2">

				<span class="anchor" id="<?php echo $row[0] ?>"></span>
				<div class="section-cell">
					<!-- data-toggle="modal" href="#" -->
					<a class="spkr-btn" data-target="#spkr-<?php echo $row[0] ?>" data-toggle="modal" href="#">
						<div class="align-center mar-bot20">
							<img src="images/<?php echo $row[1] ?>" width="300" alt="image" class="img-rounded img-square" >
						</div>
						<div class="spkr-txt">
							<p class="name"><?php echo $row[2] ?></p>
							<p class="designation"><?php echo $row[3] ?></p>
						</div>
					</a>
					<div id="spkr-<?php echo $row[0] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Symposium Speakers</h4>
								</div> 
								<div class="speaker modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="align-center"><img src="images/<?php echo $row[1] ?>" width="300" class="img-rounded pad-bot30 inner-size"/></div>
											
											<div class="col-lg-5 col-lg-offset-4 col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-3 col-xs-10 col-xs-offset-1">
												<div class="inner-spkr-txt">
													<p class="name"><b><?php echo $row[2] ?></b></p>
													<p class="designation"><?php echo $row[3] ?></p>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

												<?php foreach( $row[4] as $para ){ ?>
													<p><?php echo $para ?></p>
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php 	}	?>
		</div><!-- End of Rows -->
	</div>
</section>	
</div>



<?php include 'footer.php' ?>