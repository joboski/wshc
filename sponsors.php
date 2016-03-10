<? require 'header.php' ?>
<? require 'data/sponsors-vars.php' ?>
<link rel="stylesheet" href="css/sponsor-pop_up.css">
<section id="sponsors" class="section nav-offset">
	<h2 class="section-header header-bar header-sponsors">Sponsors</h2>
<?php	foreach( $sponsors as $key => $rows ){					?>
		<div class="row mar-bot20">
			<h2 class="section-header"><?= ucwords($key) ?></h2>	
	<?php  	foreach( $rows as $name => $values ){					?>
			<div class="container">	
				<div class="col-lg-2 text-center pad-top5 mar-bot30">
					<a href="<?= $values[0] ?>" target="_blank">
						<img src="images/<?= $values[1] ?>" width="<?= $values[2] ?>" height="<?= $values[3] ?>" border="0">
					</a>
				</div>
				<div class="col-lg-10 ">
<?php				foreach( $values[4] as $para ){					?>
					<p class="pad-left20"><?= $para ?></p>
<?				}													?>				
				</div>
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>

<!-- Sponsorship Opportunities  -->
<span class="anchor" id="beasponsor"></span>
<section class="section">
	<h2 class="section-header header-bar header-sponsors">Be a sponsor!</h2>
	<div class="container" >
<?php 	foreach( $sponsors_para as $para ){								?>
			<div><p><?php echo $para ?></p></div>
<?		}																?>
	</div>
	<h2 class="section-header header-bar header-sponsors">Sponsorship Packages for The Singapore WSH Conference 2016</h2>

	<div class="container" >
		<div class="row">

			<div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6 col-xs-offset-3 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-platinum">
					<div class="sponsorhipPlan">
						<div id="platinum">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4><?= $sponsors_oppo['platinum']['plan'] ?></h4></li>
								<li class="price"><?= $sponsors_oppo['platinum']['price'] ?></li>							
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-platinum" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-platinum">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title cap-center" id="gridSystemModalLabel">Sponsorship Packages for 2016</h4>
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="platinum">
                                                <!-- Platinum Page -->
												<div class="row">	
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fsilver">
																<div id="hfsilver">
																	<h4 class="title"><?= $sponsors_oppo['silver']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['silver']['price'] ?></p>
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer" style="height:inherit;">
														<div class="sponsorhipPlan">
															<div id="fgeneral">
																<div id="hfgeneral">
																	<h4 class="title"><?= $sponsors_oppo['general']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['general']['price'] ?></p>
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
                            </div>
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

		<!-- Gold Sponsor -->
			<div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-6 col-xs-offset-3 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-gold">
					<div class="sponsorhipPlan">
						<div id="gold">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4><?= $sponsors_oppo['gold']['plan'] ?></h4></li>
								<li class="price"><?= $sponsors_oppo['gold']['price'] ?></li>							
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-gold" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-gold">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title cap-center" id="gridSystemModalLabel">Sponsorship Packages for 2016</h4>
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="gold">
                                                <!-- Gold Page -->
												<div class="row">	
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fplatinum">
																<div id="hfplatinum">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fgold" style="border:2px solid #1F7CB6">
																<div id="hfgold" style="background-image:linear-gradient(90deg, #3DA8A7, #1F7CB6)">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fsilver">
																<div id="hfsilver">
																	<h4 class="title"><?= $sponsors_oppo['silver']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['silver']['price'] ?></p>
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer" style="height:inherit;">
														<div class="sponsorhipPlan">
															<div id="fgeneral">
																<div id="hfgeneral">
																	<h4 class="title"><?= $sponsors_oppo['general']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['general']['price'] ?></p>
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
                            </div>
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>			


			<!-- Silver Sponsor -->
			<div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-6 col-xs-offset-3 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-silver">
					<div class="sponsorhipPlan">
						<div id="silver">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4><?= $sponsors_oppo['silver']['plan'] ?></h4></li>
								<li class="price"><?= $sponsors_oppo['silver']['price'] ?></li>							
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-silver" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-silver">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title cap-center" id="gridSystemModalLabel">Sponsorship Packages for 2016</h4>
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="silver">
                                                <!-- Platinum Page -->
												<div class="row">	
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fplatinum">
																<div id="hfplatinum">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
														<div class="sponsorhipPlan">
															<div id="fsilver" style="border:2px solid #FCDC44">
																<div id="hfsilver" style="background-image:linear-gradient(90deg, #E15427, #FCDC44)">
																	<h4 class="title"><?= $sponsors_oppo['silver']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['silver']['price'] ?></p>
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
													<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer" style="height:inherit;">
														<div class="sponsorhipPlan">
															<div id="fgeneral">
																<div id="hfgeneral">
																	<h4 class="title"><?= $sponsors_oppo['general']['plan'] ?></h4>
																	<p class="price"><?= $sponsors_oppo['general']['price'] ?></p>
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
                            </div>
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>	
	
			<!-- General Sponsor -->

			<div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-5 col-sm-offset-0 col-xs-6 col-xs-offset-3 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-general">
					<div class="sponsorhipPlan">
						<div id="general">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4><?= $sponsors_oppo['general']['plan'] ?></h4></li>
								<li class="price"><?= $sponsors_oppo['general']['price'] ?></li>							
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-general" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-general">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title cap-center" id="gridSystemModalLabel">Sponsorship Packages for 2016</h4>
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">                    	
										<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
											<div class="sponsorhipPlan">
												<div id="fplatinum">
													<div id="hfplatinum">
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
										<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
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
										<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer">
											<div class="sponsorhipPlan">
												<div id="fsilver">
													<div id="hfsilver">
														<h4 class="title"><?= $sponsors_oppo['silver']['plan'] ?></h4>
														<p class="price"><?= $sponsors_oppo['silver']['price'] ?></p>
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
										<div class="col-md-3 col-sm-6 col-xs-12 mar-top30 mar-bot20 equalizer" style="height:inherit;">
											<div class="sponsorhipPlan">
												<div id="fgeneral" style="border:2px solid #EA4264">
													<div id="hfgeneral" style="background-image:linear-gradient(90deg, #802940, #EA4264)">
														<h4 class="title"><?= $sponsors_oppo['general']['plan'] ?></h4>
														<p class="price"><?= $sponsors_oppo['general']['price'] ?></p>
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
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>



		</div>
		<div class="mar-top30">
			<p>For sponsorship enquiries, please contact:</p>

			<address>
				<strong>Kamariah <u>Idris</u> (Maya)</strong><br>
				<strong>Sponsorship Sales Manager</strong><br>
				<strong>Tel: </strong> +65 8298 5083<br>
				<strong>Email: </strong><a href="mailto:sponsorship_sales@singaporewshconference.sg">  sponsorship_sales@singaporewshconference.sg</a><br>
				<strong>Operating hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>
		</div>
	</div>
</section>	

<span class="anchor" id="2014sponsors"></span>
<section class="section">
	<h2 class="section-header header-bar header-sponsors">Past Sponsors</h2>
<?php	foreach( $past as $key => $rows ){					?>
		<div class="row mar-bot20">
			<h2 class="section-header"><?= ucwords($key) ?></h2>	
	<?php  	foreach( $rows as $name => $values ){					?>
			<div class="container mar-bot20">	
				<div class="col-lg-2 text-center pad-top5 mar-bot30">
					<a href="<?= $values[0] ?>" target="_blank">
						<img src="images/<?= $values[1] ?>" width="<?= $values[2] ?>" height="<?= $values[3] ?>" border="0">
					</a>
				</div>
				<div class="col-lg-10 ">
<?php				foreach( $values[4] as $para ){					?>
					<p class="pad-left20"><?= $para ?></p>
<?				}													?>				
				</div>
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>


<? require 'footer.php' ?>