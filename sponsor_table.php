<?php include 'header.php' ?>
<?php include 'data/sponsors-vars.php' ?>

<div class="container">
	<section class="section" id="page_platinum"> <h3 class="category">Platinum Sponsor</h3> </section>
	<div class="row">	
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
			<div class="sponsorhipPlan">
				<div id="fplatinum" style="border:2px solid #85C440;">
					<div id="hfplatinum" style="background-image: linear-gradient(90deg, #85C440, #27A931);">
						<h4 class="title"><?= $sponsors_oppo['platinum']['plan'] ?></h4>
						<p class="price"><?= $sponsors_oppo['platinum']['price'] ?></p>
					</div>
<?						foreach( $sponsors_oppo['gold'] as $key => $val ){			?>
<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
							<p class="hpara"><?= $val ?></p>
<?							} 															?>
<?						}																?>							
				</div>
			</div>
		</div>
		<!-- Gold -->
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30" style="height:inherit;">
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



	<section class="section" id="page_Gold"> <h3 class="category">Gold Sponsor</h3> </section>
	<div class="row">	
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
			<div class="sponsorhipPlan">
				<div id="fplatinum">
					<div id="hfplatinum">
						<h4 class="title"><?= $sponsors_oppo['platinum']['plan'] ?></h4>
						<p class="price"><?= $sponsors_oppo['platinum']['price'] ?></p>
					</div>
<?						foreach( $sponsors_oppo['gold'] as $key => $val ){			?>
<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
							<p class="hpara"><?= $val ?></p>
<?							} 															?>
<?						}																?>							
				</div>
			</div>
		</div>
		<!-- Gold -->
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30" style="height:inherit;">
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

	<section class="section" id="page_Silver"> <h3 class="category">Silver Sponsor</h3> </section>
	<div class="row">	
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
			<div class="sponsorhipPlan">
				<div id="fplatinum">
					<div id="hfplatinum">
						<h4 class="title"><?= $sponsors_oppo['platinum']['plan'] ?></h4>
						<p class="price"><?= $sponsors_oppo['platinum']['price'] ?></p>
					</div>
<?						foreach( $sponsors_oppo['gold'] as $key => $val ){			?>
<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
							<p class="hpara"><?= $val ?></p>
<?							} 															?>
<?						}																?>							
				</div>
			</div>
		</div>
		<!-- Gold -->
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
			<div class="sponsorhipPlan">
				<div id="fsilver" style="border:2px solid #FCDC44">
					<div id="hfsilver" style="background-image:linear-gradient(90deg, #E15427, #FCDC44)">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30" style="height:inherit;">
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



	<section class="section" id="page_General"> <h3 class="category">General Sponsor</h3> </section>
	<div class="row">	
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
			<div class="sponsorhipPlan">
				<div id="fplatinum">
					<div id="hfplatinum">
						<h4 class="title"><?= $sponsors_oppo['platinum']['plan'] ?></h4>
						<p class="price"><?= $sponsors_oppo['platinum']['price'] ?></p>
					</div>
<?						foreach( $sponsors_oppo['gold'] as $key => $val ){			?>
<?							if( strcmp($key, "plan") & strcmp($key, "price") ){		?>
							<p class="hpara"><?= $val ?></p>
<?							} 															?>
<?						}																?>							
				</div>
			</div>
		</div>
		<!-- Gold -->
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30">
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
		<div class="col-md-3 col-sm-6 col-xs-12 mar-top30" style="height:inherit;">
			<div class="sponsorhipPlan">
				<div id="fgeneral" style="border:2px solid #EA4264">
					<div id="hfgeneral" style="background-image:linear-gradient(90deg, #802940, #EA4264)">
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



<?php include 'footer.php' ?>