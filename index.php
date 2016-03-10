<? require 'header.php' ?>
<? include 'data/new_speaker-vars.php' ?>
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
						<div class="item <?php echo (strcmp($carousel_img[0][1], $value[1]) ? '' : 'active' )?>"><img src="images/<?= $value[1] ?>" alt="<?= $value[1] ?>" class="img-responsive stretch">
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
		<div class="col-lg-7 col-md-8">
			<div id="news-container">
				<h3>Latest News and Updates</h3>
				<div id="news_scroll">
					<div class="news_item">
						<a href="#"><img src="images/assets/regthumb.jpg"></a>
						<div>
							<h4>Register Now! <span>(28 Jan)</span></h4>
							<p>
								Sign up for The Singapore WSH Conference now to enjoy the early bird discount! Click <a href="registration.php"> here </a>to register!			
							</p>
						</div>
					</div>
					<div class="news_item">
						<a href="#"><img src="images/assets/callforposter.jpg"></a>
						<div>
							<h4>Call for Poster <span>(25 Jan)</span></h4>
							<p>
								Submission for research posters is open. Click <a href="programme.php#poster">here</a> to know more.<br>&nbsp;<br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">$(document).ready(function(){ $('#news_scroll').niceScroll({background:"#004D53", railpadding:{top:1,right:2,left:1,bottom:1},cursoropacitymin:0.7,cursoropacitymax:0.7,cursorcolor:"#70B943",cursorborder:"1px solid #70B943"}); });	</script>
		</div>

		<div id="count_down-container" class="col-lg-4 col-md-3">
			<table id="count_down">
				<tr>
					<td class="digit"><?
						date_default_timezone_set('Asia/Singapore');
						echo ceil((strtotime('15 April 2016') - time()) / (60 * 60 * 24));
					?></td>
					<td>
						<div class="line1">days to end of<br>early bird discount!</div>
						<a href="registration.php"><div class="line2">Register Now!</div></a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row grey speakers-section">
		<h3 class="section-header header-bar header-home">Don't miss the chance to hear from our distinguished speakers!</h3>
		<div class="container">			
			<!-- <div id="speakerFlow" class="ContentFlow"> -->
			<div id="spkr-window">
				<!-- <div class="flow"> -->
				<ul id="spkr-scroller">

					<?php foreach ($index_speakers as $row) { ?>
						<li>
							<div class="item">
								<a href="speakers.php#<?php echo $row[0] ?>">
									<img class="content" src="images/<?php echo $row[1]?>" alt="" width="300">
								</a>
								<div class="spkr-txt">
									<p class="name"><?php echo $row[2] ?></p>
									<p class="designation"><?php echo $row[3] ?></p>
								</div>
							</div>
						</li>
					<?php }	 ?>
				</ul>

			</div>		
				<!-- </div>End of class flow -->

				<!-- <div class="globalCaption"></div> -->
				<!-- <div class="scrollbar"><div class="slider"><div class="position"></div></div></div> -->
			<!-- </div> -->
			<!-- <script language="JavaScript" type="text/javascript" src="js/contentflow.js"></script> -->
			<!-- <script tyle="text/javascript">var cf = new ContentFlow('speakerFlow', {circularFlow:true,startItem:0,reflectionHeight:0});</script> -->
		</div>
	</div>

	<div class="row">
		<div>
			<h3 class="section-header header-bar header-home">Photo Gallery</h3>
		</div>
		<div class="container mar-top30">			
			<div id="galwindow">
				<ul id="scroller">
		<?php 	foreach( $gal2014 as $image ){	?>
				<li><a href="gallery.php#photo"><img src="images/<?= $image ?>" alt="image-loading" width="250" height="167"></a></li>
		<?php   }	?>
				</ul>
			</div>
			
		</div>
	</div>

<? require 'footer.php' ?>