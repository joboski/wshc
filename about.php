<?php
	require 'header.php';
	include 'data/about_us-vars.php';
?>
<link rel="stylesheet" href="css/parallax.css"/>

	<section id="conference" class="section nav-offset">
		<div class="row parallax-new parallax-about"></div>
		<h1 class="section-header header-bar header-about">About The Conference</h1>	
		<div class="container">
			<div>
				<p>Debuting in 2010, The Singapore WSH Conference was established as a premier platform for workplace safety and health (WSH) stakeholders across the region. This year, the Conference is poised once again to bring together WSH professionals, business leaders and government officials to learn about latest trends and developments impacting WSH and its practice. The fourth edition of this biennial conference is expected to bring together more than 800 delegates from across the region and industries.</p>
				<p>This year, The Singapore WSH Conference, with the theme “Total WSH: The Future of Our Workplace”, highlights the importance of adopting a holistic approach towards managing both safety and health risks in the workplace. Leading practitioners and businesses will share their insights and experiences on how addressing health, along with safety, contributes to employee engagement, satisfaction and productivity, as well as organisational sustenance and business success. The Conference will provide leaders and professionals with key knowledge and tools to achieve sustenance in their efforts towards better safety and health outcomes.</p>
				<p>The Singapore WSH Conference 2016 is co-organised by the WSH Council, WSH Institute and Ministry of Manpower (MOM).</p>
			</div>
		</div>		
	</section>
	<span class="anchor" id="organisers"></span>
	<section class="section">
		<h1 class="section-header header-bar header-about">The Organisers</h1>
<?php	foreach( $organisers as $row ){					?>
		<div class="container">
			<div class="row mar-top20">
				<div class="col-md-2 text-center pad-top5 mar-bot30">
					<img src='images/<?= $row[0] ?>' alt="organiser" width="<?= $row[1] ?>">
				</div>
				<div class="col-md-10">
<?				for( $org=2; $org<count($row); $org++ ){			?>
						<p><?= $row[$org] ?></p>
<?				}													?>	
				</div>			
			</div>
		</div>
<?		}														?>		
	</section>

	<span class="anchor" id="strategic"></span>
	<section class="section">
		<h1 class="section-header header-bar header-about">Strategic Partners</h1>	
<?php	foreach( $strategic as $row ){					?>
	<div class="container">
		<div class="row mar-top20">
			<div class="col-md-2 text-center pad-top5 mar-bot30">
				<img src='images/<?= $row[0] ?>' alt="strategic partner" width="<?= $row[1] ?>">
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

	<span class="anchor" id="support"></span>
	<section class="section">
		<h1 class="section-header header-bar header-about">Supporting Partners</h1>	
<?php	foreach( $support as $row ){					?>
		<div class="container">
			<div class="row mar-top20">
				<div class="col-md-2 text-center pad-top5 mar-bot30">
					<img src='images/<?= $row[0] ?>' alt="supporting partner" width="<?= $row[1] ?>">
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

	<span class="anchor" id="contact"></span>
	<section class="section">
	<h1 class="section-header header-bar header-about">Contact Us</h1>	
		<div class="container">
			
			<!-- <h4 class="txt-bold">We are here to help<br>Contact us with questions!</h4> -->
			<p>If you have questions, please contact:</p>
			
			<address>
				<strong><u>See</u> Kar Hong (Mr)</strong><br>
				<strong>Secretariat, Delegate Services</strong><br>
				<strong>Tel:</strong> +65 9758 8820 (DID)<br>
				<strong>Fax:</strong> +65 6270 0261<br>
				<strong>Email:</strong><a href="mailto:secretariat@singaporewshconference.sg"> secretariat@singaporewshconference.sg</a><br>
				<strong>Operating hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>

			<p>For sponsorship enquiries, please contact:</p>

			<address>
				<strong>Kamariah <u>Idris</u> (Maya)</strong><br>
				<strong>Sponsorship Sales Manager</strong><br>
				<strong>Tel:</strong> +65 8298 5083<br>
				<strong>Email:</strong><a href="mailto:sponsorship_sales@singaporewshconference.sg">  sponsorship_sales@singaporewshconference.sg</a><br>
				<strong>Operating hours:</strong> 9:30hrs - 17:30hrs (GMT + 8hrs), Monday to Friday (excluding public holidays)<br>
			</address>
		</div>
	</section>

<? require 'footer.php'; ?> 
