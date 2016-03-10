<? require_once 'header.php'; ?>
<? require_once 'data/speaker-vars.php'; ?>
<? $htmId = 0 ?>

	<section id="keynote" class="section ">
		<h1 class="section-header">Speakers</h1>
		<div class="container">
			<div class="row">
<?			foreach( $keynote as $value ){ ?>
				<h2 class="section-header">Keynote Speaker</h4>
				<!-- <div class="col-md-2 col-sm-4 col-xs-6"> -->
				<div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
					<div class="section-cell">
						<a class="spkr-btn" href="#" data-toggle="modal" data-target="#spkr-<?= ++$htmId.sha1($value[0].$value[1]) ?>" id="keynote-btn">
							<div class="align-center">
								<img src="images/<?= $value[0] ?>" alt="image" class="img-rounded img-square" >
							</div>
							<div class="spkr-txt">
<?						#for( $i=1; $i < count($value)-1; $i++ ){							?>
								<p class="name"><?= $value[1] ?></p>
								<p class="designation"><?= $value[2] ?></p>
<?						#}																	?>
							</div>
						</a>
						<div id="spkr-<?= $htmId.sha1($value[0].$value[1]) ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="gridSystemModalLabel">Keynote Speaker</h4>
									</div> 
									<div class="speaker modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-2 smart-position"><img src="images/<?= $value[0] ?>" class="img-rounded pad-bot30"/></div>
												<div class="col-md-8 col-sm-9 col-xs-10">
<?												for( $i=1; $i < count($value)-1; $i++ ){	?>
													<?= $value[$i] ?>
<?												}											?>
												</div>
												<div class="col-md-10 col-md-offset-1 col-xs-12">
<?												foreach(end($value) as $__) { 				?>
													<p><?= $__ ?></p>
<?												} ?>
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
<?			} 											?>
			</div>
		</div>
</section>
<section class="section" id="plenary">
	<div class="container">
		<div class="row">
			<h2 class="section-header">Plenary Speakers</h2>
<?			foreach( $plenary as $value ){	?>
<?			$imgCount = 0;								?>
<? if( $imgCount == 6 ){								?>
		<div class="row">
<? } 													?>				
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
				<div class="section-cell">				
<?				//foreach( $rows as $row => $detail ){ ?>
					<a class="spkr-btn" href="#" data-toggle="modal" data-target="#spkr-<?= ++$htmId.sha1($value[0].$value[1]) ?>">
						<div class="align-center">
							<img src="images/<?= $value[0] ?>" alt="image" class="img-rounded img-square">
						</div>
						<div class="spkr-txt">
							<p class="name"><?= $value[1] ?></p>
							<p class="designation"><?= $value[2] ?></p>
						</div>
					</a>
					<div id="spkr-<?= $htmId.sha1($value[0].$value[1]) ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">Plenary Speaker</h4>
								</div> 
								<div class="speaker modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-2 smart-position"><img src="images/<?= $value[0] ?>" class="img-rounded pad-bot30"/></div>
											<div class="col-md-8 col-sm-9 col-xs-10">
<?												for( $i=1; $i < count($value)-1; $i++ ){	?>
												<?= $value[$i] ?>
<?												}											?>
											</div>
											<div class="col-md-10 col-md-offset-1 col-xs-12">	
<?												foreach( end($value) as $__ ){ 				?>
												<p><?= $__ ?></p>
<?												} 											?>
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
<? $imgCount++; if( $imgCount == 5 ) echo "</div>"	?>	
<?			} ?>				
			</div>
		</div>
	</section>

	<section id="symposium" class="section">
		<div class="container">
			<div class="row">
			<!-- <div id="speakers-main-header">Symposium Speakers</div> -->
			<h2 class="section-header">Symposium Speakers</h2>
		<?			foreach( $symposium as $value ){ ?>
<?			$imgCount = 0;								?>
<? 		if( $imgCount == 6 ){	?>
			<div class="row">
<? 		} ?>				
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
					<div class="section-cell">
						<a class="spkr-btn" href="#" data-toggle="modal" data-target="#spkr-<?= ++$htmId.sha1($value[0].$value[1]) ?>">
							<div class="align-center">
								<img src="images/<?= $value[0] ?>" alt="image" class="img-rounded img-square">
							</div>
							<div class="spkr-txt">
								<p class="name"><?= $value[1] ?></p>
								<p class="designation"><?= $value[2] ?></p>
							</div>
						</a>
						<div id="spkr-<?= $htmId.sha1($value[0].$value[1]) ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="gridSystemModalLabel">Plenary Speaker</h4>
									</div> 
									<div class="speaker modal-body">
										<div class="container-fluid">
											<div class="row">
												<div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-2 smart-position"><img src="images/<?= $value[0] ?>" class="img-rounded pad-bot30"/></div>
												<div class="col-md-8 col-sm-9 col-xs-10">
<?												for( $i=1; $i < count($value)-1; $i++ ){	?>
													<?= $value[$i] ?>
<?												}										?>
												</div>
												<div class="col-md-10 col-md-offset-1 col-xs-12">
<?												foreach(end($value) as $__) { ?>
													<p><?= $__ ?></p>
<?												} ?>
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
<? $imgCount++; if( $imgCount == 5 ) echo "</div>"	?>	
<?				} ?>				
			</div>
		</div>		
	</section>

<? require_once 'footer.php'; ?>