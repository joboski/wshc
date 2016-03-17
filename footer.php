<!-- End of Container -->

<!-- FOOTER -->
<div id="footer-holder">
    <div id="footer-addons">
		<div id="organisers">
			<h5>Organisers</h5>
	        <ul class="list-inline">
       	        <li class="organisers"><a href="https://wshc.sg/" target="_blank"><img src="images/logo/wshcouncil_logo.jpg" border="0"></a></li>
                <li class="organisers"><a href="https://wsh-institute.sg/" target="_blank"><img src="images/logo/wshinstitute_logo.jpg" border="0" style="margin-bottom:5px;"></a></li>
	                <li class="organisers"><a href="http://www.mom.gov.sg/" target="_blank"><img src="images/logo/mom_logo.jpg" border="0"></a></li>    
	            </ul>
       		</div>
		<div class="row">
			<!-- <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset2"> -->
       		<div class="logo_array">
       			<h5 class="txt-bold align-center">Strategic Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $strat1 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">Strategic Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $strat2 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">Supporting Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $support0 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">Supporting Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $support1 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="hide" style="display:none;">
       			<h5 class="txt-bold align-center">Supporting Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $support3 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="hide" style="display:none;">
       			<h5 class="txt-bold align-center">Supporting Partners</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $support4 as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">Gold Sponsor</h5>	
       			<ul class="list-inline align-center">
                            <? foreach ($gold as $value) {     ?>
                                  <li><a href="<?= $value[0] ?>" target="_blank"><img src="images/<?= $value[1] ?>" target="_blank" alt="" width="<?php echo $value[2] ?>"></a></li>
                            <? }   ?>
       			</ul>
       		</div>
       		<div class="hide" style="display:none;">
       			<h5 class="txt-bold align-center">Silver Sponsor</h5>	
       			<ul class="list-inline align-center">
       			<? foreach ($silver as $value) {     ?>
                                  <li><a href="<?= $value[0] ?>" target="_blank"><img src="images/<?= $value[1] ?>" target="_blank" alt="" width="<?php echo $value[2] ?>"></a></li>
                            <? }   ?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">General Sponsor</h5>	
       			<ul class="list-inline align-center">
       			<? foreach( $general as $value ){	?>
       				<li><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>"/></a></li>
       			<? }	?>
       			</ul>
       		</div>
       		<div class="logo_array" style="display:none;">
       			<h5 class="txt-bold align-center">Concurrent Exhibition</h5>	
       			<ul class="list-inline align-center">
       				<li><a href="http://www.osha-singapore.com" target="_blank"><img src="images/partners/OSHA2016_Logo.jpg" alt="" width="140"></a></li>
       			</ul>
       		</div>
		<!-- </div> -->
		</div>
	</div>
		<div id="myfootImg" class="row">
			<img src="images/footer/foot_2048.jpg" alt="" class="img-responsive stretch">
			<!-- <div class="footer-text" style="background-color:#000;"><p class="align-center" style="margin:0; padding:5px;">&copy; Copyright 2016 Workplace Safety and Health Conference 2016. All Rights Reserved. Powered by <a href="http://www.eventco.com">The Event Company</a></p></div> -->
		</div>
	</div>

	<!-- <section id="footer" class="footer"> 	 -->
		<!-- </div> -->
		<!-- <div class="container">
			<div class="copyright"> -->
					
			<!-- </div>
		</div> -->
	<!-- </section> -->

<!-- scripts -->
       <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
       <script src="js/jquery.easing.1.3.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/jquery.isotope.min.js"></script>
       <script src="js/skrollr.min.js"></script>        
       <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
       <script src="js/jquery.localscroll-1.2.7-min.js"></script>
       <script src="js/stellar.js"></script>
       <script src="js/jquery.appear.js"></script>
       <script src="js/jquery.plugin.js"></script>
       <script src="js/jquery.unveil.js"></script>
       <script src="js/jquery.countdown.js"></script>
       <script src="js/main.js"></script>
       <script src="js/jquery.simplyscroll.min.js"></script>
       <script type="text/javascript" src="js/jquery.justifiedGallery.min.js"></script>
       <script type="text/javascript" src="js/gallery.js"></script>
       <script type="text/javascript" src="js/jquery.scrollbox.js"></script>
       <script src="js/jquery.scrollbar.js"></script>
	<!-- JavaScript -->
	<script src="js/my_script.js"></script>
	<!-- Calendar Script -->
	<!-- <script src='full-calendar/lib/moment.min.js'></script> -->
	<!-- <script src='full-calendar/lib/jquery.min.js'></script> -->
	<!-- <script src='full-calendar/fullcalendar.min.js'></script> -->

</body>
</html>
