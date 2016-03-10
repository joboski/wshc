<?php

	// 'support'=>'Supporting Partners',
	// 'dayOne'=>'Day 1', 'dayTwo'=>'Day 2', 'satellite'=>'Satellite Events'
	// 'sponsors'=>'Sponsors', 
	// ['keynote'=>'Keynote Speakers', 'plenary'=>'Plenary Speakers', 'symposium'=>'Symposium Speakers']
	$navbar = [
		'About' => ['conference'=>'About the Conference', 'organisers'=>'The Organisers', 'strategic'=>'Strategic Partners', 'support'=>'Supporting Partners', 'contact'=>'Contact Us'],
		'Programme' => ['overview'=>'Programme Overview', 'day1'=>'Day 1', 'day2'=>'Day 2', 'poster'=>'Call for Posters' ],
		'Speakers' => NULL,
		'Registration' => NULL,
		'Gallery' => ['media'=>'Media Room', 'photo'=>'Photo Gallery', 'video'=>'Video Gallery'],
		'Sponsors' => ['sponsors'=>'Sponsors','beasponsor'=>'Be a sponsor', '2014sponsors'=>'Past Sponsors'],
		// 'Gallery' => ['media'=>'Media Room', 'photo'=>'Photo Gallery', 'video'=>'Video Gallery', 'wsh'=>'Resources'],	
		'Destination' => ['experience'=>'The Experience', 'venue'=>'The Venue', 'accommodation'=>'Accommodation', 'around'=>'Getting Around', 'visa'=>'Visa Requirements'],
		
	];

	$carousel_img = [
		['#','idx_carousel/first.jpg',''],
		['#','idx_carousel/second.jpg', 'Learn how you can stay ahead of WSH challenges <span>from our distinguished speakers.</span>'],
		['#','idx_carousel/third.jpg', 'Share your expertise and experience and learn the <span>latest WSH trends</span> from local and overseas speakers.'],
		['#','idx_carousel/fourth.jpg', 'Be part of the Vision Zero Movement community at <span>The Singapore WSH Conference 2016.</span>'],
	];

	$gal2014 = [
		'flashback/flash1.jpg',
		'flashback/flash2.jpg',
		'flashback/flash3.jpg',
		'flashback/flash4.jpg',
		'flashback/flash5.jpg',
		'flashback/flash6.jpg'	
	];


	
		// ['#', 'footer/strategic.png', '140', '50'],
	$strat1 = [
			['http://www.hpb.gov.sg/HOPPortal', 'partners/hpb_footer.jpg', '83', '49'],
			['http://www.iali-aiit.org', 'partners/iali_footer.jpg', '77', '38'],
			['http://www.icohweb.org', 'partners/ICOH.jpg', '52', '52'],
			['http://www.iosh.co.uk', 'partners/iosh_footer.jpg', '69', '49'],
			['http://www.ilo.org/global/about-the-ilo/lang--en/index.htm', 'partners/new/ilo_1.jpg', '43', '70'],
		];


	$strat2 = [
		// ['http://www.ntuc.org.sg', 'partners/ntuc_footer.jpg', '85', '40'],
		['http://www.ntuc.org.sg', 'partners/ntuc_new1.jpg', '70', '42'],
		['http://www.sbf.org.sg', 'partners/sbf.jpg', '90', '45' ],
		['http://www.shri.org.sg', 'partners/SHRI.jpg', '58', '35'],
		// ['http://www.siso.org.sg', 'partners/siso_footer.jpg', '71', '49'],
		['http://www.siso.org.sg', 'partners/siso.png', '55', '57'],
		['http://www.snef.org.sg/', 'partners/snef_footer.jpg', '83', '36'],
	];
	
	$support0 = [
		['http://www.scic.sg', 'partners/SCIC.jpg', '87', '35'],
		['http://www.slp.org.sg', 'partners/slp_footer.jpg', '65', '35'],
	];

	$support1 = [
		['http://www.aiha.org', 'partners/AIHA.jpg', '83', '30'],
		['http://www.aspri.com.sg', 'partners/aspri_footer.jpg', '71', '47'],
		['http://www.asse.org', 'partners/asselogo.jpg', '49', '50'],
		['https://osha.europa.eu', 'partners/EN_OSHA.jpg', '70', '44'],
		['http://www.inshpo.org', 'partners/inshpo.jpg', '61', '47'],
		['http://www.lias.org.sg', 'partners/lias_footer.jpg', '49', '54'],
	];
			
	$support2 = [
		['http://www.np.edu.sg', 'partners/NP_footer.jpg', '109', '33'],
		['http://www.nyp.edu.sg', 'partners/NYP.jpg', '107', '22'],
		['http://www.rp.edu.sg', 'partners/RP.jpg', '85', '28'],
		['#','partners/scal.jpg', '72', '50'],
		['http://www.scic.sg', 'partners/SCIC.jpg', '87', '35'],
		['http://www.sha.org.sg', 'partners/SHA_footer.jpg', '109', '38'],
	];	
		
	$support3 = [
		['http://www.slp.org.sg', 'partners/slp_footer.jpg', '65', '35'],
		['http://www.smfederation.org.sg', 'partners/logo_smf.jpg', '71', '48'],
		['http://pace.sp.edu.sg', 'partners/SP.jpg', '100', '36'],
		['http://www.tp.edu.sg', 'partners/TP.jpg', '90', '25'],
		['http://www.nus.edu.sg', 'partners/NUS.jpg', '87', '40'],
	];
		
	$support4 = [	
		['http://www.ntu.edu.sg', 'partners/NTU.jpg', '101', '35'],
		['http://www.smu.edu.sg', 'partners/SMU.jpg', '99', '50'],
		['http://www.sutd.edu.sg', 'partners/SUTD.jpg', '77', '40'],
		['http://www.unisim.edu.sg', 'partners/UniSIM.jpg', '122', '18'],
	];	
		
	$gold = ['http://www.kepcorp.com', 'partners/KGroup.jpg', '140', '26'];
		
	$silver =['http://www.natsteel.com.sg/', 'partners/NatSteel.jpg', '140', '51'];

		
	$general = [
		['http://www.cdl.com.sg/app/cdl/index.xml', 'partners/CDL.jpg', '62', '55'],
		['http://www.fareast.com.sg/', 'partners/FEO.jpg', '140', '63'],
		['www.pcs.com.sg','partners/pcs.jpg', '65', '45'],
		['https://www.singaporepsa.com/', 'partners/PSA.jpg', '83', '40'],
	];
	
	$concurrent = [	

		'#','partners/OSHA2014_Logo.jpg', '126', '54',
	];	
		// ['#','footer/satellite.png','140', '50'],

		// ['http://www.aseanoshnet.org/','partners/logo_asean.png', '135', '36'],
		// ['www.asretec.org/', 'partners/ASRETEClogo.jpg', '88', '36'],
		// ['www.isfp.org', 'partners/ISFPlogo.jpg', '99', '36'],
		// ['http://www.ipaf.org/', 'partners/IPAFlogo.jpg', '60', '54'],
		// ['#', 'partners/hpb_footer.jpg', '84', '50'],
		// ['#', 'partners/cdas.jpg','94', '54'],

		// ['#','footer/satellite.png', '140', '50'],

		// ['www.ies.org.sg', 'partners/logo_ies.png', '54', '54'],
		// ['http://www.iosh.co.uk/', 'partners/iosh_footer.jpg', '69', '49'],
		// ['http://mda.messe-dusseldorf.com/', 'partners/logo_messe.jpg', '54', '54'],
		// ['http://www.siso.org.sg/', 'partners/logo_siso.jpg', '76', '54'],
		// ['http://www.sportsschool.edu.sg/', 'partners/SSC_logo.jpg', '110', '40'],
		// ['http://www.scic.sg/', 'partners/SCIC.jpg', '90', '36'],

		// ['#','footer/strategic.jpg', '140', '50'],
		// ['#','partners/white.jpg', '140', '70'],
		

?>