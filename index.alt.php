<? require 'header.php' ?>
<!-- <link rel="stylesheet" href="css/demo.css">	 -->
	<link rel="stylesheet" href="css/spkr-scroll.css">
	<link rel="stylesheet" href="css/contentflow.css">
	<link rel="stylesheet" href="css/index.alt.css">
	<script type="text/javascript" src="js/jquery.nicescroll.js"></script>

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

	<div class="row news_section">
		<div id="news-container2" class="col-lg-7 col-md-8">
			<div id="news-container">
				<h3>Latest News and Updates</h3>
				<div id="news_scroll">
					<div class="news_item">
						<a href="#"><img src="images/assets/regthumb.jpg"></a>
						<div>
							<h4>Register Now! <span>(20 Jan)</span></h4>
							<p>
								Registration is now open! Sign up now to enjoy the early bird discount.<br>
								Click <a href="registration.php"> here </a>to register!
							</p>
						</div>
					</div>
					<div class="news_item">
						<a href="#"><img src="images/assets/callforposter.jpg"></a>
						<div>
							<h4>Call for Poster <span>(25 Jan)</span></h4>
							<p>
								Inviting submissions of research posters that are aligned to the theme of The Singapore WSH Conference 2016.<br>
								Click <a href="programme.php#poster">here</a> to know more.
							</p>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">$(document).ready(function(){ $('#news_scroll').niceScroll({cursoropacitymin:0.1,cursoropacitymax:0.7,cursorcolor:"#70B943",cursorborder:"1px solid #70B943"}); });	</script>
		</div>
		<div id="count_down-container" class="col-lg-4 col-md-3">
			<table id="count_down">
				<tr>
					<td class="digit"><?
						date_default_timezone_set('Asia/Singapore');
						echo ceil((strtotime('15 April 2016') - time()) / (60 * 60 * 24));
					?></td>
					<td>
						<div class="line1">Days to end of<br>Early Bird discount!</div>
						<div class="line2">Register Now!</div>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row grey speakers-section">
		<h3 class="section-header header-bar header-home">Don't miss the chance to hear from our distinguished speakers!</h3>
		<div class="container col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">			
			<div id="speakerFlow" class="ContentFlow">
				<div class="flow">
					<div class="item">
						<img class="content" href="speakers.php#nancy-leppink" src="images/new_speaker/SPEAKER PHOTOS 1000W-01.jpg"/>
						<div class="caption">
							Ms Nancy J Leppink<br>
							<span>
								Chief<br>
								Labour Administration, Labour Inspection and<br>
								Occupational Safety and Health Branch<br>
								International Labour Organization
							</span>
						</div>
					</div>
					<div class="item">
						<img class="content" href="speakers.php#david-chan" src="images/new_speaker/SPEAKER PHOTOS 1000W-04.jpg"/>
						<div class="caption">Prof David Chan<br>
							<span>
								Professor of Psychology<br>
								Director, Behavioural Sciences Institute<br>
								Singapore Management University
							</span>
						</div>
					</div>
					<div class="item">
						<img class="content" href="speakers.php#frank-baron" src="images/new_speaker/SPEAKER PHOTOS 1000W-05.jpg"/>
						<div class="caption">
							Mr Franck Baron<br>
							<span>
								Group General Manager<br>
								Risk Management &amp; Insurance<br>
								International SOS
							</span>
						</div>
					</div>
					<div class="item">
						<img class="content" href="speakers.php#chow-yuen" src="images/new_speaker/SPEAKER PHOTOS 1000W-02.jpg"/>
						<div class="caption">
							Mr Chow Yew Yuen<br>
							<span>
								President<br>
								Association of Singapore Marines (ASMI)
							</span>
						</div>
					</div>
					<div class="item">
						<img class="content" href="speakers.php#lee-newman" src="images/new_speaker/SPEAKER PHOTOS 1000W-03.jpg"/>
						<div class="caption">
							Prof Lee Newman<br>
							<span>
								Director<br>
								Department of Environmental and Occupational Health<br>
								University of Colorado
							</span>
						</div>
					</div>
					<div class="item">
						<img class="content" href="speakers.php#marie-larue" src="images/new_speaker/SPEAKER PHOTOS 1000W-06.jpg"/>
						<div class="caption">
							Ms Marie Larue<br>
							<span>
								President and Chief Executive Officer<br>
								Institut de recherche Robert-Sauvé en santé et en sécurité du travail (IRSST)
							</span>
						</div>
					</div>
					<!-- <div class="item">
						<img class="content" href="" src=""/>
						<div class="caption">
							<br>
							<span>
								<br>
								<br>

							</span>
						</div>
					</div> -->
				</div>
				<div class="globalCaption"></div>
				<div class="scrollbar"><div class="slider"><div class="position"></div></div></div>
			</div>
			<script language="JavaScript" type="text/javascript" src="js/contentflow.js"></script>
			<script tyle="text/javascript">var cf = new ContentFlow('speakerFlow', {circularFlow:true,startItem:0});</script>
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