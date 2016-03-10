<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Infinite Carousel Tutorial</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
        
        //options( 1 - ON , 0 - OFF)
        var auto_slide = 1;
        var hover_pause = 1;
        var key_slide = 1;
        
        //speed of auto slide(
        var auto_slide_seconds = 5000;
        /* IMPORTANT: i know the variable is called ...seconds but it's 
        in milliseconds ( multiplied with 1000) '*/
        
        /*move he last list item before the first item. The purpose of this is 
        if the user clicks to slide left he will be able to see the last item.*/
        $('#carousel_ul li:first').before($('#carousel_ul li:last')); 
        
        //check if auto sliding is enabled
        if(auto_slide == 1){
            /*set the interval (loop) to call function slide with option 'right' 
            and set the interval time to the variable we declared previously */
            var timer = setInterval('slide("right")', auto_slide_seconds); 
            
            /*and change the value of our hidden field that hold info about
            the interval, setting it to the number of milliseconds we declared previously*/
            $('#hidden_auto_slide_seconds').val(auto_slide_seconds);
        }
  
        //check if hover pause is enabled
        if(hover_pause == 1){
            //when hovered over the list 
            $('#carousel_ul').hover(function(){
                //stop the interval
                clearInterval(timer)
            },function(){
                //and when mouseout start it again
                timer = setInterval('slide("right")', auto_slide_seconds); 
            });
  
        }
  
        //check if key sliding is enabled
        if(key_slide == 1){
            
            //binding keypress function
            $(document).bind('keypress', function(e) {
                //keyCode for left arrow is 37 and for right it's 39 '
                if(e.keyCode==37){
                        //initialize the slide to left function
                        slide('left');
                }else if(e.keyCode==39){
                        //initialize the slide to right function
                        slide('right');
                }
            });

        }
        
        
  });

//FUNCTIONS BELLOW

//slide function  
function slide(where){
    
    //get the item width
    var item_width = $('#carousel_ul li').outerWidth() + 10;
    
    /* using a if statement and the where variable check 
    we will check where the user wants to slide (left or right)*/
    if(where == 'left'){
        //...calculating the new left indent of the unordered list (ul) for left sliding
        var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
    }else{
        //...calculating the new left indent of the unordered list (ul) for right sliding
        var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
    
    }
    
    
    //make the sliding effect using jQuery's animate function... '
    $('#carousel_ul:not(:animated)').animate({'left' : left_indent},500,function(){    
        
        /* when the animation finishes use the if statement again, and make an ilussion
        of infinity by changing place of last or first item*/
        if(where == 'left'){
            //...and if it slided to left we put the last item before the first item
            $('#carousel_ul li:first').before($('#carousel_ul li:last'));
        }else{
            //...and if it slided to right we put the first item after the last item
            $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
        }
        
        //...and then just get back the default left indent
        $('#carousel_ul').css({'left' : '-210px'});
    });

}
  
</script>
<style type="text/css">

#carousel_inner {
float:left; /* important for inline positioning */
width:630px; /* important (this width = width of list item(including margin) * items shown */ 
overflow: hidden;  /* important (hide the items outside the div) */
/* non-important styling bellow */
background: #F0F0F0;
}

#carousel_ul {
position:relative;
left:-210px; /* important (this should be negative number of list items width(including margin) */
list-style-type: none; /* removing the default styling for unordered list items */
margin: 0px;
padding: 0px;
width:9999px; /* important */
/* non-important styling bellow */
padding-bottom:10px;
}

#carousel_ul li{
float: left; /* important for inline positioning of the list items */                                    
width:200px;  /* fixed width, important */
/* just styling bellow*/
padding:0px;
height:110px;
background: #000000;
margin-top:10px;
margin-bottom:10px; 
margin-left:5px; 
margin-right:5px; 
}

#carousel_ul li img {
.margin-bottom:-4px; /* IE is making a 4px gap bellow an image inside of an anchor (<a href...>) so this is to fix that*/
/* styling */
cursor:pointer;
cursor: hand; 
border:0px; 
}
#left_scroll, #right_scroll{
float:left; 
height:130px; 
width:15px; 
background: #C0C0C0; 
}
#left_scroll img, #right_scroll img{
border:0; /* remove the default border of linked image */
/*styling*/
cursor: pointer;
cursor: hand;

}
</style>
</head>
<body>
<h1 style='color:black'>Infinite Carousel REVISITED Demonstration</h1>
- auto slide<br />
- hover pause<br />
- keyboard arrows slide(left and right)<br /><br />
  <div id='carousel_container'>
  <div id='left_scroll'><a href='javascript:slide("left");'><img src='left.png' /></a></div>
    <div id='carousel_inner'>
        <ul id='carousel_ul'>
            <li><a href='#'><img src='item1.png' /></a></li>
            <li><a href='#'><img src='item2.png' /></a></li>
            <li><a href='#'><img src='item3.png' /></a></li>
            <li><a href='#'><img src='item4.png' /></a></li>
            <li><a href='#'><img src='item5.png' /></a></li>
            
        </ul>
    </div>
  <div id='right_scroll'><a href='javascript:slide("right");'><img src='right.png' /></a></div>
  <input type='hidden' id='hidden_auto_slide_seconds' value=0 />
  </div>
</body>
</html>


<h4 class="category">Venue</h4>
            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 "><img src="images/<?= $travel['venue'][0][0] ?>" alt=""></div>
<?      foreach( $travel['venue'][0][1] as $para ){         ?>
            <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12"><p><?= $para ?></p></div>
<?      }                                               ?>
        </div>
        <div class="row row-fluid">
            <div class="col-lg-8 col-md-7 col-sm-6">
<?      foreach( $travel['venue'][1][1] as $para ){         ?>
                <p><?= $para ?></p>
<?      }                                               ?>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6"><img src="images/<?= $travel['venue'][1][0] ?>" alt=""></div>

<!-- <div class="collapse navbar-collapse hide">
                    <ul class="nav navbar-nav no-shadow" data-0="margin-top:5px;">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="about.php#conference" role="navigation">About the Conference</a></li>    
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="about.php#organizers" role="navigation">Organizers</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="about.php#strategic" role="navigation">Strategic Partners</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="about.php#support" role="navigation">Supporting Partners</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="about.php#contact" role="navigation" >Contact Us</a></li>    
                        </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programme</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="programme.php#overview" role="navigation">Overview</a></li>  
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="programme.php#dayOne" role="navigation">Day 1</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="programme.php#dayTwo" role="navigation">Day 2</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="programme.php#satellite" role="navigation" >Satellite Events</a></li>    
                        </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Speakers</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="speakers.php#plenary" role="navigation">Plenary Speakers</a></li>    
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="speakers.php#symposium" role="navigation">Symposium Speakers</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="speakers.php#poster" role="navigation">Poster Session</a></li>
                        </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sponsors</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="sponsors.php#sponsors" role="navigation">Sponsors</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="sponsors.php#beasponsor" role="navigation">Be A Sponsor</a></li> 
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="sponsors.php#2014sponsor" role="navigation">2014 Sponsors</a></li>
                        </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News & Resources</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#media" role="navigation">Media Room</a></li>   
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#photo" role="navigation">Photo Gallery</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#video" role="navigation">Video Gallery</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#wsh" role="navigation">WSH Views</a></li>
                        </ul></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destination</a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#media" role="navigation">About Singapore</a></li>  
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#photo" role="navigation">The Venue</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#video" role="navigation">Accomodation</a></li>
                            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="resources.php#wsh" role="navigation">Getting Around</a></li>
                        </ul></li>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="index.php">Registration</a></li>
                    </ul>
                </div> -->
            <!-- </div> -->

<address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>




<?          foreach( $navbar as $key => $value ){                                   ?>

<?              if( isset($value) ){                                                ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $key ?></a>
                    <ul class="dropdown-menu">
<?                  foreach( $value as $k => $v ){                                  ?>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<? _strcmp($key, 'About Us') ? "about#".$k."php" : strtolower($key)."#".$k."php" ?>" role="navigation" ><?= $v ?></a></li>
<?                  }                                                               ?>                  
                    </ul>
<?              } else {                                                            ?> 
                    <li><a data-toggle="collapse" data-target=".navbar-collapse" href="<?= $key ?>"><?= $key ?></a></li>
<?              }                                                                   ?>
<?          }                                                                       ?>





<div id="oppo-<?= $value['plan'] ?>" class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="head-<?=$value['plan']?>">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <!-- <h4 class="modal-title cap-center" id="gridSystemModalLabel"><?= $value['plan'] ?></h4> -->
                            </div> 
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="sponsorhipPlan">
                                            <div id="<?= $plan ?>">
                                                <ul class="planContainer">
                                                    <li class="title_spacer">&nbsp;</li>
                                                    <li class="title"><h4><?= $value['plan'] ?></h4></li>
                                                    <li class="price"><?= $value['price'] ?></li>
                        <?                      foreach( $value as $key => $val ){          ?>
                        <?                          if( strcmp($key, "plan") & strcmp($key, "price") ){     ?>
                                                        <li style="color:#000;text-align:left"><?= $val ?></li>
                        <?                          }                                                           ?>
                        <?                      }                                                               ?>                          
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer" id="foot-<? //$value['plan']?>"> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
