<? require 'header.php' ?>
<? require 'data/destination-vars.php' ?>
<link rel="stylesheet" href="css/parallax.css"/>


<section class="section">
	<!-- <div class="row"> -->
		<div class="row parallax-new parallax-1"></div>
		<!-- <img src="images/gallery/exp_img1.jpg" style="width:100%; height:600px;"> -->
		<div class="container">
			<div class="align-center mar-bot30">
				<h3 class="category">Welcome to Singapore</h3>
			</div>
		</div>
		<div class="container ">
			<!-- <div class="row"> -->
				<div>
		<? 			foreach( $travel['exper']['para'] as $para ){					?>
						<p><?= $para ?></p>
		<?			}																?>
				</div>
			<!-- </div> -->
		</div>
	<!-- </div> -->
</section>
<!-- carousel section -->
	

	<section id="venue" class="mar-bot60">
		<div class="row parallax-new parallax-2"></div>
		<div class="container">
			<div class="align-center mar-bot30">
				<h3 class="category">Suntec City</h3>
			</div>
				<? foreach( $travel['venue'][0][1] as $para ){         ?>
	    			<p><?= $para ?></p>
				<?      }      ?>
			</div>
		</div>
			<!-- <div class="row" id="parallax1"></div> -->
				<!-- <div class="col-md-4 col-md-offset-6"> -->
					<!-- <div class="align-center"> -->
						<!-- <img class="mar-bot10" src="img/logo-hero.png"> -->
						<!-- <h2 class="slogan">Suntec City</h2> -->
						<? //foreach( $travel['venue'][0][1] as $para ){         ?>
	            			<!-- <p class="gold"><?= $para ?></p> -->
						<?    // }      ?>
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
	</section>	

	
	
		<!-- <div class="container">
			<div class="align-center">
				<h3 class="category">The Big Picture</h3>
				<? //foreach( $travel['venue'][1][1] as $para ){         ?>
	    			<p><?= $para ?></p>
				<? //}      ?>
			</div>
		</div> -->
		
		<!-- <div class="row" id="parallax2"> -->
			<!-- <div class="col-md-4 col-md-offset-6"> -->
				<!-- <div class="align-center"> -->
					<!-- <img class="mar-bot10" src="img/logo-hero.png"> -->
					<!-- <h2 class="slogan">The Big Picture</h2> -->
					<? //foreach( $travel['venue'][1][1] as $para ){         ?>
            			<!-- <p class="gold"><?= $para ?></p> -->
					<?     // }      ?>
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->

	<!-- </div> -->




	<section class="section" id="accommodation">
		<div class="row parallax-new parallax-3"></div>
	<div class="container">
		
		<!-- <div class="row"> -->
		<div class="mar-bot30">
			<h3 class="category">Accommodation</h3>
		</div>
<? 		foreach( $travel['accom'] as $para ){								?>
			<div><p><?php echo $para ?></p></div>
<? 		}																	?>

		<div class="row">
			<div class="mar-bot60"><h3 class="category">Official Hotel</h3></div>
			<div class="col-md-4 col-md-offset-4">
				<p class="align-center">Pan Pacific Hotel</p>
				<a href=""><img src="images/hotels/panpacific.jpg" alt="hotel image" class="img-stretch change_pic"></a>
			</div>
			<div class="col-md-4 col-xs-12">
<? 			//for ($t=1; $t < count($travel['hotel']['official']); $t++){		?>
				<p><? //$travel['hotel']['official'][$t] ?></p>
<? 			//}																?>
			</div>
		</div>

		<!-- </div> -->
		<div class="row">
			<div class="mar-top80"><h3 class="category lime_green">Hotels Partners within the vicinity</h3></div>

			<div class="col-md-4 col-sm-6 col-xs-12 align-center">
				<p class="mar-top30 align-center"><?= $travel['hotel']['other'][0][0] ?></p>
				<a href="<?= $travel['hotel']['other'][0][1] ?>"><img src="images/hotels/marina.jpg" 
				onmouseover="this.src='images/hotels/marina.jpg' " onmouseout="this.src='images/images/hotels/marina_room.jpg' "	 alt="Marina Hotel" class="img_max_width change_pic"></a>
				<div class="centralize"><a href="#" class="btn btn-warning">BOOK NOW!</a></div>
			</div>

		

		</div>

		
	</div>
</section>

<section class="section" id="around">
	<div class="container">
		<div class="mar-bot30">
		<h3 class="category">Getting Around</h3>
		<div class="mar-bot60">
			<div class="row mar-bot50">
				<div class="col-md-9 mar-bot30">
					<h4 class="text-bold">MRT Services</h4>
					<p>Located in the heart of the city, our Centre is easily accessible by three Mass Rapid Transit (MRT) train stations, namely Esplanade and Promenade stations via the Circle Line, and City Hall station via the East West Line.</p>
					<p>While Esplanade station and Promenade station on the Circle Line are linked directly to Suntec City Mall, walk via Raffles City and Esplanade Xchange to get from City Hall MRT station to Suntec City</p>
					<p><u>Walking Directions</u></p>
					<ul>
						<li>From Promenade MRT (3 mins): Take Exit C and enter Suntec City</li>
						<li>From Esplanade MRT (3 mins): Take Exit A and go up the escalator straight ahead (at the entrance of Esplanade Xchange) to Suntec City</li>
						<li>From City Hall MRT (8-10 mins): Turn right after the exit gantries and walk through City Link Mall. Follow the directional signage at the end of the mall to the escalators leading to Suntec City (same exit as from Esplanade MRT)</li>
					</ul>
				</div>
				<div class="col-md-3">
					<img src="images/assets/MRT.jpg" alt="MRT image" class="img-responsive img_max_width">
				</div>
			</div>
			<div class="row mar-bot50">
				<div class="col-md-9 col-md-push-3">
					<h4 class="text-bold">Taxi Services</h4>
					<p>Getting around Singapore by taxi is easy and convenient. All taxis are metered, but be mindful of the peak hour surcharges, location-based surcharges (e.g. Changi Airport, Central Business District) and ERP (automated toll system) charges.</p>
					<p>You may choose to flag a taxi at Suntec's taxi stand or make an advance booking:</p>
					<p><u>By phone</u></p>
					<ul>
						<li>Comfort Taxi / CityCab: 6552 1111</li>
						<li>TransCab: 6555 3333</li>
						<li>SMRT Taxi: 6555 8888</li>
						<li>Prime Taxi: 6778 0808</li>
						<li>Premier Taxi: 6363 6888</li>
					</ul>
				</div>
				<div class="col-md-3 col-md-pull-9 mar-top30">
					<img src="images/assets/Taxi.jpg" alt="taxi" class="img-responsive img_max_width">
				</div>
			</div>	
		</div>
	</div>
<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8013210384943!2d103.85518675035279!3d1.2936911990518067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19af38dd2bf3%3A0xd63e8cb2dacf54c7!2sSuntec+Convention+%26+Exhibition+Centre!5e0!3m2!1sen!2ssg!4v1452749987525" width="2048" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
		
	
</section>

<section class="section" id="visa">
	<div class="container">
		<div class="mar-bot60 mar-top60">
		<h3 class="category">Visa Requirement</h3>
		</div>
		<div class="row">
			
			<div id="accordion" class="panel-group">
			    <div class="panel panel-default">
			        <div class="panel-heading">
			            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration:none;"><h4 class="panel-title">
			               Foreign Visitors Requirement
			            </h4></a>
			        </div>

			        <div id="collapseOne" class="panel-collapse">
			            <div class="panel-body">
			            	<p>Foreigners holding travel documents issued by the following countries will require a visa to enter Singapore:</p>
							<ul>
								<li>Afghanistan</li>
								<li>Algeria</li>
								<li>Bangladesh (Except Diplomatic / Official passport holders)</li>
								<li>Commonwealth of Independent States* (Except Diplomatic / Official / Service passport holders for stay of up to 30 days )
									<ul>
										<li>Armenia</li>
										<li>Azerbaijan</li>
										<li>Belarus</li>
										<li>Kazakhstan</li>
										<li>Moldova</li>
										<li>Russia</li>
										<li>Tajikistan</li>
										<li>Uzbekistan</li>
									</ul>
								</li>
								<li>Egypt</li>
								<li>Georgia (Except Diplomatic / Official / Service passport holders for stay of up to 30 days )</li>
								<li>Guinea</li>
								<li>Ukraine (Except Diplomatic / Official / Service passport holders for stay of up to 90 days )</li>
								<li>India (Except Diplomatic / Official passport holders)</li>
								<li>Iran</li>
								<li>Iraq</li>
								<li>Jordan (Except Diplomatic / Official passport holders)</li>
								<li>Lebanon</li>
								<li>Libya</li>
								<li>Mali</li>
								<li>Morocco</li>
								<li>Myanmar (Except Diplomatic / Official passport holders)</li>
								<li>Nigeria (Except Diplomatic / Official passport holders)</li>
								<li>People's Republic of China (Except Diplomatic / Official / Service passport holders for stay of up to 30 days )</li>
								<li>Pakistan</li>
								<li>Saudi Arabia</li>
								<li>Somalia</li>
								<li>Sudan</li>
								<li>Syria</li>
								<li>Tunisia (Except Diplomatic / Official passport holders)</li>
								<li>Turkmenistan (Except Diplomatic / Official / Service passport holders for stay of up to 30 days )</li>
								<li>Yemen</li>
							</ul>
							<!-- <p><strong><sup>**</sup>Accurate as of <a href="http://www.ica.gov.sg/page.aspx?pageid=96">http://www.ica.gov.sg/page.aspx?pageid=96</a>(Last updated: 15 June 2015)</strong></p> -->
							<p>Visitors holding these travel documents also require a visa to enter Singapore:</p>
							<ul>
								<li>Hong Kong Document of Identity</li>
								<li>Macau Special Administrative Region (MSAR) Travel Permit </li>
								<li>Palestinian Authority Passport</li>
								<li>Refugee Travel Document issued by the Middle-East countries</li>
								<li>Temporary Passport issued by United Arab Emirates</li>
							</ul>
							<p>For more information on obtaining a visa, please go to the <a href="http://www.ica.gov.sg/e_services_overview.aspx?pageid=291" target="_blank">Visa Application</a> page.</p>
							<p>Nationals of the Commonwealth Independent States-- Georgia, Turkmenistan and Ukraine, may be granted entry to Singapore without visas <u>if they are on transit to or from a third country.</u></p>
							<ul>
							<li>They are in transit to or from a third country</li>
							<li>They hold :
								<ul>
									<li>A valid passport</li>
									<li>A confirmed onward air-ticket</li>
									<li>Entry facilities (including visa) to the third country</li>
									<li>Sufficient funds for the period of stay in Singapore</li>
								</ul>
							</li>
							<li>They continue their journey to the third country within the 96-hour visa free period granted</li>
							<li>They satisfy Singapore's entry requirements as determined by the Immigration & Checkpoints Authority officers at the Singapore Checkpoints</li>
							</ul>
							<p><strong><sup>**</sup>Information accurate as of <a href="http://www.ica.gov.sg/page.aspx?pageid=96">The Immigration & Checkpoints Authority</a> (Last updated: 18 Dec 2015)</strong></p>
			            </div>
			        </div>

			      

			    </div>

			</div><!-- End of Panel Accordion -->
		</div><!-- End of Row -->
	</div>
</section>

<? require 'footer.php' ?>