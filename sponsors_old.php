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
				<div class="mar-top20">
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
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>

<!-- Sponsorship Opportunities  -->
<section class="section" id="beasponsor">
	<div class="container" >
		<h3 class="category">Be Our Sponsor</h3>
		<h3 class="mar-top30 txt-bold text-center" style="color:#555">Why Sponsor?</h3>
<?php 	foreach( $sponsors_para as $para ){								?>
			<div><p><?php echo $para ?></p></div>
<?		}																?>

			<div class="row mar-top60">
			<h3 class="txt-bold text-center" style="color:#555;">Sponsorship Packages for 2016</h3>
<? 		foreach( $sponsors_oppo as $plan => $value ){		?>	
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sponsor-window">
				<a class="sponsor-btn" href="#" data-toggle="modal" data-target="#oppo-<?php echo $value['plan'] ?>">
				<!-- <a href="tbl_<?php //echo $value['plan'] ?>.php" target="_blank"> -->
					<div class="sponsorhipPlan">
						<div id="<?= $plan ?>">
							<ul class="planContainer">
								<li class="title_spacer">&nbsp;</li>
								<li class="title"><h4><?= $value['plan'] ?></h4></li>
								<li class="price"><?= $value['price'] ?></li>
	<?						//foreach( $value as $key => $val ){			?>
	<?							//if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
									<!-- <li><?= $key ?></li> -->
	<?							//} 															?>
	<?						//}																?>							
							</ul>
						</div>
					</div>
				</a>
				<div id="oppo-<?= $value['plan'] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-<?=$value['plan']?>">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <!-- <h4 class="modal-title cap-center" id="gridSystemModalLabel"><?php // echo $value['plan'] ?></h4> -->
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="<?= $plan ?>">
                                                <ul class="planContainer">
                                                    <li class="title_spacer">&nbsp;</li>
                                                    <li class="title"><h4><?= $value['plan'] ?></h4></li>
                                                    <li class="price"><?= $value['price'] ?></li>
                        <?                      foreach( $value as $key => $val ){          ?>
                        <?                          if( strcmp($key, "plan") & strcmp($key, "price") ){     ?>
                                                        <li style="color:#000;text-align:left"><?= $val ?></li>
                        <?                          }                                                           ?>
                        <?                      }                                                               ?>                          
                                                </ul>
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
				<strong>Tel:</abbr></strong> +65 8298 5083<br>
				<strong>Email: </abbr></strong><a href="mailto:sponsorship_sales@singaporewshconference.sg">  sponsorship_sales@singaporewshconference.sg</a><br>
				<strong>Operating Hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
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
				<div class="mar-top20">
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
			</div>
	<?		}														?>		
		</div>
<? }	?>
</section>


<? require 'footer.php' ?>