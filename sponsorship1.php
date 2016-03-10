<? require 'header.php' ?>
<? require 'data/sponsors-vars.php' ?>

<section id="sponsors" class="section">
	<div class="container">
	<!-- Gold Keppel -->
	<h3 class="category">Sponsors</h3>
<?php	foreach( $sponsors as $key => $rows ){					?>
		<div class="row">
			<h3 class="category"><?= ucwords($key) ?></h3>	
	<?php  	foreach( $rows as $name => $values ){					?>
			<div class="container">	
				<div class="mar-top40">
					<div class="col-lg-2 text-center pad-top5 mar-bot30">
						<a href="<?= $values[0] ?>" target="_blank">
							<img src="images/<?= $values[1] ?>" width="<?= $values[2] ?>" height="<?= $values[3] ?>" border="0">
						</a>
					</div>
					<div class="col-lg-10">
	<?php				foreach( $values[4] as $para ){					?>
						<p><?= $para ?></p>
	<?				}													?>				
					</div>
				</div>
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>

<!-- Sponsorship Opportunities  -->
<section class="section" id="beasponsor">
	<div class="container" >
		<h3 class="category">Be Our Sponsor</h3>
		<h3 class="mar-top60 mar-bot40 txt-bold text-center" style="color:#555">Why Sponsor?</h3>
<?php 	foreach( $sponsors_para as $para ){								?>
			<div><p><?php echo $para ?></p></div>
<?		}																?>

			<div class="row mar-top60">
			<h3 class="txt-bold text-center" style="color:#555;">Sponsorship Packages for 2016</h3>

			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-platinum">
					<div class="sponsorhipPlan">
						<div id="platinum">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4>Platinum</h4></li>
								<li class="price">S$ 250,000</li>					
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-platinum" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-platinum">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <!-- <h4 class="modal-title cap-center" id="gridSystemModalLabel"><?php // echo $value['plan'] ?></h4> -->
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="platinum">
                                               <div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot40">
													<div class="sponsorhipPlan">
														<div id="fplatinum" style="border:2px solid #85C440;">
															<div id="hfplatinum" style="background-image: linear-gradient(90deg, #85C440, #27A931);">
																<h4 class="title"><?= $sponsors_oppo['platinum']['plan'] ?></h4>
																<p class="price"><?= $sponsors_oppo['platinum']['price'] ?></p>
															</div>
										<?						foreach( $sponsors_oppo['platinum'] as $key => $val ){			?>
										<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
																	<p class="hpara"><?= $val ?></p>
										<?							} 															?>
										<?						}																?>							
														</div>
													</div>
												</div>
												<!-- Gold -->
												<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot40">
													<div class="sponsorhipPlan">
														<div id="fgold">
															<div id="hfgold">
																<h4 class="title"><?= $sponsors_oppo['gold']['plan'] ?></h4>
																<p class="price"><?= $sponsors_oppo['gold']['price'] ?></p>
															</div>
										<?						foreach( $sponsors_oppo['gold'] as $key => $val ){			?>
										<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
																	<p class="hpara"><?= $val ?></p>
										<?							} 															?>
										<?						}																?>							
														</div>
													</div>
												</div>

												<!-- silver -->
												<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot40">
													<div class="sponsorhipPlan">
														<div id="fsilver">
															<div id="hfsilver">
																<h4 class="title"><?= $sponsors_oppo['silver']['plan'] ?></h4>
																<p class="price"><?= $sponsors_oppo['silver']['price'] ?>
															</div>
										<?						foreach( $sponsors_oppo['silver'] as $key => $val ){			?>
										<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
																	<p class="hpara"><?= $val ?></p>
										<?							} 															?>
										<?						}																?>							
														</div>
													</div>
												</div>

												<!-- general -->
												<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot40" style="height:inherit;">
													<div class="sponsorhipPlan">
														<div id="fgeneral">
															<div id="hfgeneral">
																<h4 class="title"><?= $sponsors_oppo['general']['plan'] ?></h4>
																<p class="price"><?= $sponsors_oppo['general']['price'] ?>
															</div>
										<?						foreach( $sponsors_oppo['general'] as $key => $val ){			?>
										<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
																	<p class="hpara"><?= $val ?></p>
										<?							} 															?>
										<?						}																?>							
														</div>
													</div>
												</div>
                                            </div>
											


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
<?		}				?>
			</div>
		<div class="mar-top50">
			<p>For sponsorship enquiries, please contact:</p>

			<address>
				<strong>Kamariah <u>Idris</u> (Maya)</strong><br>
				<strong>Sponsorship Sales Manager</strong><br>
				<strong><abbr title="Phone">Tel:</abbr></strong> +65 8298 5083<br>
				<strong><abbr title="email">Email: </abbr></strong><a href="mailto:sponsorship_sales@singaporewshconference.sg">sponsorship_sales@singaporewshconference.sg</a><br>
				<strong>Operating Hours:</strong>: 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>
		</div>
	</div>
</section>	

<section id="2014sponsors" class="section">
	<div class="container">
	<!-- Gold Keppel -->
	<h3 class="category">Past Sponsors</h3>
<?php	foreach( $past as $key => $rows ){					?>
		<div class="row">
			<h3 class="category"><?= ucwords($key) ?></h3>	
	<?php  	foreach( $rows as $name => $values ){					?>
			<div class="container">	
				<div class="mar-top40">
					<div class="col-lg-2 text-center pad-top5 mar-bot30">
						<a href="<?= $values[0] ?>" target="_blank">
							<img src="images/<?= $values[1] ?>" width="<?= $values[2] ?>" height="<?= $values[3] ?>" border="0">
						</a>
					</div>
					<div class="col-lg-10">
	<?php				foreach( $values[4] as $para ){					?>
						<p><?= $para ?></p>
	<?				}													?>				
					</div>
				</div>
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>


<? require 'footer.php' ?>