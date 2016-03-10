<?php
	require 'header.php';
	include 'data/about_us-vars.php';
?>

	<section id="conference" class="section">
		<div class="row" id="parallax2"></div>
		<div class="container">
			<!-- <div class="col-md-12" id="conf_img">
				<img src="images/photos2014/LNP_8199.jpg" alt="">
			</div> -->
			<!-- <div class="mar-bot40 mar-top30">
				<h4>About The Event</h4>
				<p>Debuting in 2010, The Singapore WSH Conference was established as a premier platform for workplace safety and health (WSH) stakeholders across the region. This year, the Conference is poised once again to bring together WSH professionals, business leaders and government officials to learn about latest trends and developments impacting WSH and its practice. The forth edition of this biennial conference is expected to bring together more than 1000 delegates from across the region and industries.</p>
				<p>Increasingly, businesses and organisations have started embracing WSH as a fundamental business value, instead of viewing it as mere regulatory compliance. However, as we strive towards WSH excellence, it becomes important to understand health risks and safety issues to embrace WSH in its totality. The Singapore WSH Conference 2016, with the theme “Total WSH: The Future of Our Workplace”, aims to highlight the importance of adopting a holistic approach towards managing both safety and health risks in the workplace.</p>
				<p>Leading practitioners and businesses will share their insights and experiences on how addressing health, along with safety, contributes to employee engagement, satisfaction and productivity, as well as organisational sustenance and business success. Case studies and examples of best practices will also contextualise the Conference’s message for Singapore. These will provide leaders and professionals with key knowledge and tools to achieve sustenance in their efforts towards better safety and health outcomes.</p>
				<p>The Singapore WSH Conference 2016 is co-organised by the WSH Council, WSH Institute and Ministry of Manpower (MOM).</p>
			</div> -->
			
				<!-- <div class="col-md-4 col-md-offset-6"> -->
					<!-- <div class="align-center"> -->
						<!-- <img class="mar-bot10" src="img/logo-hero.png"> -->
						<!-- <h2 class="slogan">About the Event</h2>
						<p>Debuting in 2010, The Singapore WSH Conference was established as a premier platform for workplace safety and health (WSH) stakeholders across the region. This year, the Conference is poised once again to bring together WSH professionals, business leaders and government officials to learn about latest trends and developments impacting WSH and its practice. The forth edition of this biennial conference is expected to bring together more than 1000 delegates from across the region and industries.</p>
						<p>Increasingly, businesses and organisations have started embracing WSH as a fundamental business value, instead of viewing it as mere regulatory compliance. However, as we strive towards WSH excellence, it becomes important to understand health risks and safety issues to embrace WSH in its totality. The Singapore WSH Conference 2016, with the theme “Total WSH: The Future of Our Workplace”, aims to highlight the importance of adopting a holistic approach towards managing both safety and health risks in the workplace.</p>
						<p>Leading practitioners and businesses will share their insights and experiences on how addressing health, along with safety, contributes to employee engagement, satisfaction and productivity, as well as organisational sustenance and business success. Case studies and examples of best practices will also contextualise the Conference’s message for Singapore. These will provide leaders and professionals with key knowledge and tools to achieve sustenance in their efforts towards better safety and health outcomes.</p>
						<p>The Singapore WSH Conference 2016 is co-organised by the WSH Council, WSH Institute and Ministry of Manpower (MOM).</p> -->
					<!-- </div> -->
				<!-- </div> -->
			
			<div class="mar-top80">
				<h3 class="category">About The Conference</h3>
			</div>
			<div class="mar-top40 mar-bot60r">
				<p>Debuting in 2010, The Singapore WSH Conference was established as a premier platform for workplace safety and health (WSH) stakeholders across the region. This year, the Conference is poised once again to bring together WSH professionals, business leaders and government officials to learn about latest trends and developments impacting WSH and its practice. The forth edition of this biennial conference is expected to bring together more than 1000 delegates from across the region and industries.</p>
				<p>Increasingly, businesses and organisations have started embracing WSH as a fundamental business value, instead of viewing it as mere regulatory compliance. However, as we strive towards WSH excellence, it becomes important to understand health risks and safety issues to embrace WSH in its totality. The Singapore WSH Conference 2016, with the theme “Total WSH: The Future of Our Workplace”, aims to highlight the importance of adopting a holistic approach towards managing both safety and health risks in the workplace.</p>
				<p>Leading practitioners and businesses will share their insights and experiences on how addressing health, along with safety, contributes to employee engagement, satisfaction and productivity, as well as organisational sustenance and business success. Case studies and examples of best practices will also contextualise the Conference’s message for Singapore. These will provide leaders and professionals with key knowledge and tools to achieve sustenance in their efforts towards better safety and health outcomes.</p>
				<p>The Singapore WSH Conference 2016 is co-organised by the WSH Council, WSH Institute and Ministry of Manpower (MOM).</p>
			</div>
		</div>		
	</section>

	<section id="organisers" class="section">
		<div class="container">
			<!-- <div class="mar-bot60 mar-top60"> -->
				<h3 class="category">The Organisers</h3>
			<!-- </div> -->
		</div>
<?php	foreach( $organisers as $row ){					?>
		<div class="container">
			<div class="row mar-top40">
				<div class="col-md-2 text-center pad-top5">
					<img src='images/<?= $row[0] ?>' alt="Image">
				</div>
				<div class="col-md-10">
<?				for( $org=1; $org<count($row); $org++ ){			?>
						<p><?= $row[$org] ?></p>
<?				}													?>	
				</div>			
			</div>
		</div>
<?		}														?>		
	</section>

	<section id="strategic" class="section">
		<div class="container">
			<h3 class="category">Strategic Partners</h3>
		</div>
<?php	foreach( $strategic as $row ){					?>
	<div class="container">
		<div class="row mar-top40">
			<div class="col-md-2 text-center pad-top5 mar-bot30">
				<img src='images/<?= $row[1] ?>' alt="Image">
			</div>
				<div class="col-md-10">
<?				for( $strategic=2; $strategic<count($row); $strategic++ ){			?>
					<p><?= $row[$strategic] ?></p>
<?				}													?>				
				</div>
			</div>
		</div>
<?		}														?>		
	</section>

	<section id="support" class="section">
		<div class="container">
			<h3 class="category">Supporting Partners</h3>
		</div>
<?php	foreach( $support as $row ){					?>
		<div class="container">
			<div class="row mar-top40">
				<div class="col-md-2 text-center pad-top5 mar-bot30">
					<img src='images/<?= $row[1] ?>' alt="Image" >
				</div>
				<div class="col-md-10">
	<?		for( $support=2; $support<count($row); $support++ ){			?>
						<p><?= $row[$support] ?></p>
	<?		}															?>					
				</div>
			</div>
		</div>
<?		}														?>		
	</section>

	<section id="strategic" class="section hide">
		<div class="container">
			<h3 class="category">Strategic Partners</h3>
<?php			foreach( $strategic as $row ){						?>
			<div class="row mar-top40">
			<div class="col-md-2"><a href="<?= $row[0] ?>" target="_blank"><img src='images/<?= $row[1] ?>' alt="Image"></a></div>
<?				for( $strat=2; $strat<count($row); $strat++ ){		?>
<?					if( $strat > 2 ){								?>
				<div class="col-md-10 col-md-offset-2"><p><?= $row[$strat] ?></p></div>
<?					} else {										?>
			<div class="col-md-10 col-md-offset-2"><p><?= $row[$strat] ?></p></div>
<?					}												?>
<? 				}													?>	
			</div>				
<?			}														?>		
		</div>
	</section>

	<section id="support" class="section hide">
		<div class="container">
			<h3 class="category">Supporting Partners</h3>
<?				foreach( $support as $row ){						?>
			<div class="row mar-top40">
			<div class="col-md-2"><a href="<?= $row[0] ?>" target="_blank"><img src='images/<?= $row[1] ?>' alt="Image" class="img-responsive"></a></div>
<?				for( $supp=2; $supp<count($row); $supp++ ){			?>
<?					if( $supp > 2 ){								?>
				<div class="col-md-10"><p><?= $row[$supp] ?></p></div>
<?					} else {										?>
			<div class="col-md-10 col-md-offset-2"><p><?= $row[$supp] ?></p></div>
<?					}												?>
<? 				}													?>	
			</div>				
<?			}														?>		
		</div>
	</section>

	<section id="contact" class="section">
		<div class="container">
			<h3 class="category">Contact Us</h3>
			<h4 class="txt-bold">We are here to help<br>Contact us with questions!</h4>
			
			<address>
				<strong><u>See</u> Kar Hong</strong><br>
				<strong>Secretariat - Delegate Services</strong><br>
				<strong>Tel:</strong> +65 9758 8820<br>
				<strong>Fax:</strong> +65 6270 0261<br>
				<strong>Email:</strong><a href="mailto:secretariat@singaporewshconference.sg"> secretariat@singaporewshconference.sg</a><br>
				<strong>Operating Hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>

			<p>For sponsorship enquiries, please contact:</p>

			<address>
				<strong>Kamariah <u>Idris</u> (Maya)</strong><br>
				<strong>Sponsorship Sales Manager</strong><br>
				<strong>Tel:</strong> +65 8298 5083<br>
				<strong>Email:</strong><a href="mailto:sponsorship_sales@singaporewshconference.sg">  sponsorship_sales@singaporewshconference.sg</a><br>
				<strong>Operating Hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>
		</div>
	</section>

<? require 'footer.php'; ?> 
