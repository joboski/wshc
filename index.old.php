<? require 'header.php' ?>
<!-- <link rel="stylesheet" href="css/demo.css">	 -->
<link rel="stylesheet" href="css/spkr-scroll.css">
		<!-- carousel section -->
		<!-- <div class="jumbotron"> -->
			<div id="carousel-container" class="row scrollbar-light">
				<div id="masthead-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#masthead-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#masthead-carousel" data-slide-to="1"></li>
						<li data-target="#masthead-carousel" data-slide-to="2"></li>
						<li data-target="#masthead-carousel" data-slide-to="3"></li>
						
						<!-- <li data-target="#masthead-carousel" data-slide-to="5"></li>
						<li data-target="#masthead-carousel" data-slide-to="6"></li>	 -->
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<? foreach ($carousel_img as $value) { ?>
						<div class="item <?php echo (strcmp($carousel_img[0][1], $value[1]) ? '' : 'active' )?>"><a href="<?= $value[0] ?>"><img src="images/<?= $value[1] ?>" alt="<?= $value[1] ?>" class="img-responsive stretch"></a>
							<!-- <div id="masthead_2"></div> -->
							<div class="carousel-caption">
	            				<!-- <h4>Title</h4> -->
	            				<h3 style="color:#fff;"><?= $value[2] ?></h3>
	       					</div>
						</div>
						<? } ?>
					</div>

					<!-- Controls -->
					<!-- <a href="#masthead-carousel" role="button" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#masthead-carousel" role="button" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a> -->
				</div>
			</div>
		
		<!-- Rows for About, News and Register -->
		<div class="row dark_teal">
			<div class="container">
				<div class="col-md-6 col-md-offset-1">	
					<h3 id="news-header" class="section-header lime_green">Latest News and Updates</h3>			
					<div class="news_row">
						<!-- <ul id="scroll_news"> -->
						
						<div class="media_wrapper">
							<!-- <div class="media"> -->
								<!-- <div class="pull-left media-top mar-bot10"> -->
								<div class="col-md-3 col-sm-3 col-xs-12 mar-bot10">
								    <a href="#">
								      <img class="media-object" src="images/assets/regthumb.jpg" height="75" width="109" alt="...">
								    </a>
								</div>
								<!-- <div class="media-body"> -->
								<div class="col-md-8 col-md-offset-1 col-sm-9 col-xs-12 mar-bot10">
								    <h4 class="media-heading lime_green">Register Now! <span class="sdate white">(20 Jan)</span></h4>
									<p class="white">Registration is now open! Sign up now to enjoy the early bird discount.<span class="reg_now">Click <a href="registration.php"> here </a>to register!</span> </p>
								</div>
							<!-- </div> -->
						</div>

						<div class="media_wrapper">
							<!-- <div class="media"> -->
								<div class="col-md-3 col-sm-3 col-xs-12 mar-bot10">
								    <a href="#">
								      <img class="media-object" src="images/assets/callforposter.jpg" height="80" width="109" alt="...">
								    </a>
								</div>
								<div class="col-md-8 col-md-offset-1 col-sm-9 col-xs-12 mar-bot10">
								    <h4 class="media-heading lime_green">Call for Poster <span class="sdate white">(25 Jan)</span></h4>
									<p class="white">Inviting submissions of research posters that are aligned to the theme of The Singapore WSH Conference 2016. <span class="reg_now">Click <a href="programme.php#poster"> here </a>to know more.</span></p>
								</div>
							<!-- </div> -->
						</div>				
						
					</div>
				</div>
			<!-- </div> -->
				<!-- <div class="col-md-5">
					<h3>Updated News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem fugit harum, debitis, ducimus impedit optio neque cupiditate rem molestias omnis delectus enim error voluptas repellat asperiores accusamus eligendi, iste vel.</p>
				</div> -->

				<div class="col-md-5" id="div-counter">
					<div id="wrap_countdown" class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
						<p><span id="countdown"></span>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12" id="description">
						<p><span id="to-end">Days to end of</span><span id="discount">Early Bird discount!</span><a href="registration.php"><span id="news_reg">Register Now!</span></a></p>
					</div>
				</div>
				
			</div>
		</div>

	<div class="row">
	</div>

	<div class="row grey">
		<h3 class="section-header header-bar header-home">Don't miss the chance to hear from our distinguished speakers!</h3>
		<div class="container">			
			<div id="spkr-window">
				<!-- <span class="glyphicon glyphicon-triangle-left simply-scroll-btn simply-scroll-btn-left"></span> -->
				<ul id="spkr-scroller">
					<li>
						<a href="speakers.php#nancy-leppink">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-01.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Ms Nancy J Leppink</p>
								<p class="designation">Chief</p>
								<p class="designation">
									Labour Administration, Labour Inspection and<br>
									Occupational Safety and Health Branch<br>
									International Labour Organization
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="speakers.php#david-chan">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-04.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Prof David Chan</p>
								<p class="designation">
									Professor of Psychology<br>
									Director, Behavioural Sciences Institute<br>
									Singapore Management University
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="speakers.php#frank-baron">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-05.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Mr Franck Baron</p>
								<p class="designation">
									Group General Manager<br>
									Risk Management &amp; Insurance<br>
									International SOS
								</p>
							</div>
							<!-- </div> -->
						</a>
					</li>
					<li>
						<a href="speakers.php#chow-yuen">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-02.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Mr Chow Yew Yuen</p>
								<p class="designation">
									President<br>
									Association of Singapore Marines (ASMI)
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="speakers.php#lee-newman">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-03.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Prof Lee Newman</p>
								<p class="designation">
									Director<br>
									Department of Environmental and Occupational Health<br>
									University of Colorado
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="speakers.php#marie-larue">
							<!-- <div class="align-center"> -->
								<img src="images/new_speaker/SPEAKER PHOTOS 1000W-06.jpg" width="300" alt="image" class="img-rounded img-square" >
							<!-- </div> -->
							<div class="spkr-txt">
								<p class="name">Ms Marie Larue</p>
								<p class="designation">
									President and Chief Executive Officer<br>
									Institut de recherche Robert-Sauvé en santé et en sécurité du travail (IRSST)
								</p>
							</div>
						</a>
					</li>

				</ul>
				<!-- <span class="glyphicon glyphicon-triangle-right simply-scroll-btn simply-scroll-btn-right"></span> -->
			</div>
			
		</div>
	</div>


	<div class="row">
		<div>
			<h3 class="section-header header-bar header-home">Photo Gallery</h3>
		</div>
		<div class="container mar-top30">			
			<div id="galwindow">
				<!-- <span class="glyphicon glyphicon-triangle-left simply-scroll-btn simply-scroll-btn-left"></span> -->
				<ul id="scroller">
		<? foreach( $gal2014 as $image ){	?>
				<li><a href="gallery.php"><img src="images/<?= $image ?>" alt="image-loading" width="350" height="250"></a></li>
		<? }	?>
				</ul>
				<!-- <span class="glyphicon glyphicon-triangle-right simply-scroll-btn simply-scroll-btn-right"></span> -->
			</div>
			
		</div>
	</div>

<? require 'footer.php' ?>