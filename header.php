<?
	header('Content-type: text/html; charset=UTF-8');
	$debug = 2;
	$regURL = 'reg';
	require 'data/home-vars.php';
?>
<!DOCTYPE html>
<!--
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@'~~~     ~~~`@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@'                     `@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@'                           `@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@'    _     _           _   _    `@@@@@@@@@@@@@@@
@@@@@@@@@@@'     |_|___| |_ ___ ___| |_|_|     `@@@@@@@@@@@@@
@@@@@@@@@@'      | | . | . | . |_ –| '_| |      `@@@@@@@@@@@@
@@@@@@@@@'      _| |___|___|___|___|_,_|_|       `@@@@@@@@@@@
@@@@@@@@@      |___|                              @@@@@@@@@@@
@@@@@@@@'                      n,                 `@@@@@@@@@@
@@@@@@@@                     _/ | _                @@@@@@@@@@
@@@@@@@@                    /'  `'/                @@@@@@@@@@
@@@@@@@@a                 <~    .'                a@@@@@@@@@@
@@@@@@@@@                 .'    |                 @@@@@@@@@@@
@@@@@@@@@a              _/      |                a@@@@@@@@@@@
@@@@@@@@@@a           _/      `.`.              a@@@@@@@@@@@@
@@@@@@@@@@@a     ____/ '   \__ | |______       a@@@@@@@@@@@@@
@@@@@@@@@@@@@a__/___/      /__\ \ \     \___.a@@@@@@@@@@@@@@@
@@@@@@@@@@@@@/  (___.'\_______)\_|_|        \@@@@@@@@@@@@@@@@
@@@@@@@@@@@@|\________     					 \@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@ transforming.solutions.com  @@@@@@@@@@@@@@@@@
-->
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<meta name="title" content="The Singapore WSH Conference 2016"/>
	<meta name="description" content="24-25 August 2016 Suntec Singapore Themed “Total WSH: The Future of Our Workplace”, the conference highlights the importance of adopting a holistic approach towards managing both safety and health risks in the workplace." />
	<meta name="keywords" content="wshconference, wsh conference, wshc2016, singaporeconference, safety and health conference" />


	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-title" content="WSHC2016"/>
	<title>The Singapore WSH Conference 2016</title>
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen"/>	
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/justifiedGallery.min.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"/>
	<link rel="stylesheet" href="css/font-awesome.css"/>
	<link rel="stylesheet" href="css/jquery.countdown.css">
	<link rel="stylesheet" href="css/jquery.simplyscroll.css">
	<link rel="stylesheet" href="css/jquery.scrollbar.css">
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<style>
		#mobile_popup {
			display:none;
		}

		@media all and (orientation: portrait) {
			#mobile_popup {
				background-color: rgba(22,26,32,0.6);
		        display: block;
		        height: inherit;
		        position: absolute;
		        top: 0;
		        width: 100%;
		        z-index: 99999;
			}
			#mobile_notice {
				border:2px solid white;	
				background-color: #e5e5e5;
				border-radius:20px;
				margin:50% 18%;
				/*height: inherit;*/
			}

			#mobile_notice > h1 {
				color:#222632;
				font-weight: 500;
				padding: 20px;
				margin:5% 0;
				line-height: 1.5em;
				text-align:center;
			}
		}
	</style>

</head>
 
<body>
	<!-- <div class="container"> -->
	<!-- Navbar Section Page -->
		<nav id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img id="nav-logo" src="images/logo/header2.png" /></a>
				</div>
				<div class="collapse navbar-collapse hide">
				<ul class="nav navbar-nav no-shadow" data-0="margin-top:5px;">

<?          foreach( $navbar as $key => $value ){                                   ?>

<?              if( isset($value) && $key == 'About' ){                             ?>

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                    <ul class="dropdown-menu">
<?                  foreach( $value as $k => $v ){                                  ?>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?php echo strtolower($key).".php#".$k ?>" role="navigation" ><?= $v ?></a></li>
<?                  }                                                               ?>                  
                    </ul>

<?              } elseif( isset($value) && $key == 'Gallery' ){                     ?> 
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News & Resources</a>
                    <ul class="dropdown-menu">
<?                  foreach( $value as $k => $v ){                                  ?>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?php echo strtolower($key).".php#".$k ?>" role="navigation" ><?= $v ?></a></li>
<?                  }                                                               ?>                  
                    </ul>

<?				 } elseif( isset($value) && $key == 'Destination' ){                                         ?> 
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Singapore</a>
                    <ul class="dropdown-menu">
<?                  foreach( $value as $k => $v ){                                  ?>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?php echo strtolower($key).".php#".$k ?>" role="navigation" ><?= $v ?></a></li>
<?                  }                                                               ?>                  
                    </ul>				
<?				} elseif( isset($value) ){                                         ?> 
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $key ?></a>
                    <ul class="dropdown-menu">
<?                  foreach( $value as $k => $v ){                                  ?>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?php echo strtolower($key).".php#".$k ?>" role="navigation" ><?= $v ?></a></li>
<?                  }                                                               ?>                  
                    </ul>	
<?              } else {                                                            ?> 
                    <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?php echo strtolower($key).".php" ?>"><? echo $key ?></a></li>
<?              }                                                               	?>
<?          }                                                                       ?>
				</ul>
			</div>
			</div>
		</nav><!--  End of Navbar -->

		<div id="mobile_popup">
			<div id="mobile_notice">
				<h1>For a better experience,<br>please view this in landscape mode.</h1>
			</div>
		</div>

		<script>
			$(window).on("orientationchange",function(){
  				// alert("The orientation has changed!");
  				$('div#mobile_popup').addClass('hide');
			});	
		</script>
