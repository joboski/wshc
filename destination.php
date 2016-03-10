<? require 'header.php' ?>
<? require 'data/destination-vars.php' ?>
<link rel="stylesheet" href="css/parallax.css"/>

	<section class="section destination nav-offset">
		<div class="row parallax-new parallax-1"></div>

		<div class="row">
			<h1 class="section-header header-bar header-destination">Welcome to Singapore</h1>
		</div>

		<div class="container ">
			<div>
<?			foreach( $travel['exper']['para'] as $para ) { ?>
				<p><?= $para ?></p>
<?			} ?>
			</div>
		</div>
	</section>
	

	<section id="venue" class="section destination">
		<div class="row parallax-new parallax-2"></div>
		<div class="row">
			<h1 class="section-header header-bar header-destination">Suntec Singapore</h1>
		</div>

		<div class="container">
<?		foreach( $travel['venue'][0][1] as $para ) { ?>
			<p><?= $para ?></p>
<?		} ?>
		</div>
	</section>	

	<section id="accommodation" class="section destination">
		<div class="row parallax-new parallax-3"></div>
		<div class="row">
			<h1 class="section-header header-bar header-destination">Accommodation</h1>
		</div>

		<div class="container">

		<!-- <p>Foreign participants attending The Singapore WSH Conference 2016 can get to experience and enjoy the vibrancy of Singapore in a convenient, fuss-free and cost-effective way.</p> -->

		<div class="row mar-bot60">
			<h2 class="section-header">Official Hotel</h2>
			<p style="text-align:left;margin-left:15px;">The official hotel for The Singapore WSH Conference 2016 is Pan Pacific Hotel. It is located 550m from Suntec Singapore. Please click below to enjoy the special rates for Conference participants.</p>
			<div class="align-center">
				<h4 class="section-header">Pan Pacific Hotel</h4>
				<a href="https://www.panpacific.com" target="_blank"><img src="images/hotels/panpacific.jpg" alt="hotel image" class="img_max_width mar-bot10"
				onmouseover="this.src='images/hotels/room/panpacific_room.jpg' " onmouseout="this.src='images/hotels/panpacific.jpg'"></a>
				<div class="centralize"><a href="https://resweb.passkey.com/go/TheSingaporeWSHConference" class="btn btn-warning" target="_blank">BOOK NOW!</a></div>
			</div>
		</div>
			
		<!-- </div> -->
		<div class="row">
			<h3 class="section-header pad-bot30">Hotels Partners within the vicinity</h3>
			<p style="text-align:left;margin-left:15px;">Here is a list of partner hotels with special rates for Conference participants. All our partner hotels are 5 to 15 mins away from Suntec Singapore.</p>
<?		foreach( $travel['hotel']['other'] as $hotel ){					?>
			<div class="col-md-4 col-sm-6 col-xs-12 align-center mar-bot30">
				<h4 class="section-header"><?= $hotel[0] ?></h4>
				<a href="<?= $hotel[1] ?>" target="_blank"><img src="images/<?= $hotel[2] ?>" alt="hotel" class="img_max_width mar-bot10"
				onmouseover="this.src='images/<?= $hotel[3] ?>'" onmouseout="this.src='images/<?= $hotel[2] ?>'"></a>
				<div class="centralize"><?= $hotel[6] ?></div>
			</div>
<? 		}																	?>
		</div>
	</div>
</section>

<div id="around" class="section parallax-new">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8019195988236!2d103.85846441019935!3d1.2933104224377159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19af38dd2bf3%3A0xd63e8cb2dacf54c7!2sSuntec+Convention+%26+Exhibition+Centre!5e0!3m2!1sen!2ssg!4v1452800800712" style="width:100%;height:100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<section class="section destination">
	<div class="row">
		<h1 class="section-header header-bar header-destination">Getting Around</h1>
	</div>

	<div class="container">
		<div>
			<div class="row" class="mar-bot30">
				<div class="col-md-3 col-md-push-9 destination-gfx">
					<img src="images/assets/MRT.jpg" alt="MRT image" class="img-responsive img_max_width">
				</div>
				<div class="col-md-9 mar-bot30 col-md-pull-3">
					<h4 class="section-header" style="text-align:left;margin-left:-6px">MRT Services</h4>
					<p>Suntec Singapore is easily accessible by three Mass Rapid Transit (MRT) train stations—Esplanade and Promenade stations via the Circle Line, and City Hall station via the East West/ North South Line.</p>
					<p>Esplanade and Promenade stations are linked directly to Suntec Singapore. From City Hall station, you can walk to Suntec Singapore via Raffles City and Esplanade Xchange.</p>
					<p><u>Walking Directions</u></p>
					<ul style="margin-top:-15px;">
						<li>From Promenade MRT (3 mins): Take Exit C and enter Suntec City</li>
						<li>From Esplanade MRT (3 mins): Take Exit A and take the escalator in front (at the entrance of Esplanade Xchange) to Suntec City</li>
						<li>From City Hall MRT (8-10 mins): Turn right after the exit gantries and walk through City Link Mall. Follow the directional signage at the end of the mall to the escalators leading to Suntec City</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 destination-gfx">
					<img src="images/assets/Taxi.jpg" alt="taxi" class="img-responsive img_max_width">
				</div>
				<div class="col-md-9">
					<h4 class="section-header" style="text-align:left;margin-left:-6px">Taxi Services</h4>
					<p>Getting around Singapore by taxi is easy and convenient. All taxis are metered, but be mindful of the peak hour surcharges, location-based surcharges (e.g., Changi Airport, Central Business District) and ERP (automated toll system) charges.</p>
					<p>You may choose to flag a taxi at Suntec’s taxi stand or make an advance booking by calling. The contact numbers of taxi companies in Singapore:</p>
					<!-- <p><u>By phone</u></p> -->
					<ul style="margin-top:-15px;">
						<li>Comfort Taxi / CityCab: 6552 1111</li>
						<li>TransCab: 6555 3333</li>
						<li>SMRT Taxi: 6555 8888</li>
						<li>Prime Taxi: 6778 0808</li>
						<li>Premier Taxi: 6363 6888</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>
</section>

<span class="anchor" id="visa"></span>
<section class="section destination">
	<div class="row">
		<h1 class="section-header header-bar header-destination">Visa Requirement</h1>
	</div>

	<div class="container">
		<h4 class="section-header" style="text-align:left;margin-left:-5px">Foreign Visitors Visa Requirement</h4>
		<p>For information on foreign visa requirement, please visit <a href="http://www.ica.gov.sg/page.aspx?pageid=96"><b>The Immigration & Checkpoints Authority.</b></a></p>

		<div class="hide">
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
		</div><!-- Hide Section -->	

	</div>
</section>
<script>
	$(document).ready(function(){
		
	});
</script>
<? require 'footer.php' ?>