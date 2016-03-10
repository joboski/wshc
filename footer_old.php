	</div> <!-- End of Container -->

		<!-- FOOTER -->
	<div id="footer-holder">
		<div id="footer-addons">
			<div id="organisers">
				<h5>Organisers</h5>
	        	<ul class="list-inline">
	            	<li class="organisers"><a href="http://www.wshc.sg/" target="_blank"><img src="images/logo/wshcouncil_logo.jpg" border="0"></a></li>
	                <li class="organisers"><a href="http://www.wshi.gov.sg/" target="_blank"><img src="images/logo/wshinstitute_logo.jpg" border="0" style="margin-bottom:5px;"></a></li>
	                <li class="organisers"><a href="http://www.mom.gov.sg/" target="_blank"><img src="images/logo/mom_logo.jpg" border="0"></a></li>    
	            </ul>
       		</div>
			<!-- <h5 id="partners-group" class="text-center">Strategic Partners</h5> -->
       		<div id="thumb_carousel">	
       			<ul id="carousel_ul">
       			<? foreach( $footer as $key => $value ){	?>
       				<li style="width:<?= $value[2] ?>; height:<?= $value[3] ?>;"><a href='<?= $value[0] ?>' target="_blank"><img src='images/<?= $value[1] ?>' width="<?php echo $value[2] ?>" height="<?php echo $value[3] ?>"/></a></li>
       			<? }	?>
       			</ul>
       			<!-- <input type='hidden' id='hidden_auto_slide_seconds' value=0 /> -->
       		</div>
		</div>
		<div>
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
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
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

	<!-- JavaScript -->
   <script src="js/my_script.js"></script>
	<!-- Calendar Script -->
	<!-- <script src='full-calendar/lib/moment.min.js'></script> -->
	<!-- <script src='full-calendar/lib/jquery.min.js'></script> -->
	<!-- <script src='full-calendar/fullcalendar.min.js'></script> -->

</body>
</hmtl>
