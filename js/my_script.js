var NumPartnerDiv = 0;
var PartnerDivArray;
var CurrentPartnerDiv = 0, PreviousPartnerDiv = 0;

function ChangePartnersDiv(){
	if(CurrentPartnerDiv >= (NumPartnerDiv-1)){
		CurrentPartnerDiv = 0;
	}
	else{
		CurrentPartnerDiv++;
	}
		
	$(PartnerDivArray[PreviousPartnerDiv]).fadeOut("slow");
	$(PartnerDivArray[CurrentPartnerDiv]).fadeIn("slow");
	PreviousPartnerDiv = CurrentPartnerDiv;
	
	setTimeout(ChangePartnersDiv,5000);
}


$(document).ready(function() {

	$('.scrollbar-light').scrollbar();


	$('.logo_array > ul.nav > li').click(function (e) {
        e.preventDefault();
        $('.logo_array > ul.nav > li').removeClass('active');
        $(this).addClass('active');                
    });            

	PartnerDivArray = new Array();	
	NumPartnerDiv = $('div[class=logo_array]').length;
	
	$('div[class=logo_array]').each(function() {
        PartnerDivArray.push(this);
    });
	
    setTimeout(ChangePartnersDiv,6000);

    $("#scroller").simplyScroll({
        customClass: 'customFBwindow',
        auto: false,
        // manualMode: 'loop',
        speed: 10
     });

     $("#spkr-scroller").simplyScroll({
     	customClass: 'customSPKRwindow',
         auto: false,
         // manualMode: 'loop',
         speed: 10	
     });

    // $("#scroll_news").simplyScroll({
    //     // customClass: 'vert',
    //     // orientation:'vertical',
    //     // auto: false,
    //     // speed: 1
    // });

    $("#carousel_ul").simplyScroll({
        customClass: 'customFOOTwindow',
        auto: true,
        // autoMode: true,
        speed: 5
    });

   
        
    



	var today = new Date();
	var eventDay = new Date(); 
	eventDay = new Date(eventDay.getFullYear(), 3 - 1, 10); 
    // eventDay.setSeconds(eventDay.getSeconds() + 5.5); 
	$('#countdown').countdown({until: eventDay, format:'d', padZeroes: true,
        // layout: '<b>{dn}</b> {desc}',
        onExpiry:changeDate,
        layout: '{dn}'
        // description:'To end of Early Bird discount'
    }); 

    function changeDate(){
        // alert('It is finished!');
    // var today = new Date();
    // var eventDay = new Date(); 
    // eventDay = new Date(eventDay.getFullYear(), 8 - 1, 10); 
    // $('#countdown').countdown({until: eventDay, format:'dd', padZeroes: true,
    //     // layout: '<b>{dn}</b> {desc}',
    //     description:'To the SingaporeWSHConference'
    // }); 

    }
	 
	// $('#removeCountdown').click(function() { 
	//     var destroy = $(this).text() === 'Remove'; 
	//     $(this).text(destroy ? 'Re-attach' : 'Remove'); 
    // if( today == eventDay )
	   //  $('#countdown').countdown('destroy'); 
	// });

    // $("img.lazy").unveil()
    $("img.lazy").unveil(200, function() {
      
      $(this).load(function() {
        this.style.opacity = 1;
      });
    });


    $('#galwindow').scrollbox({
    	direction: 'h',
    	distance: 500
    	// /linear: true,
    	// speed:100
  	});

  	$('#galwindow-backward').click(function () {
    	$('#galwindow').trigger('backward');
  	});

  $('#galwindow-forward').click(function () {
    $('#galwindow').trigger('forward');
  });

});

	// var liftoffTime = new Date(); 
	// liftoffTime = new Date(liftoffTime.getFullYear() + 1, 7, 0); 
	
	// $('#countdown').countdown({until: liftoffTime, compact: true, 
 //    layout: '<div><span class="image{d10}"></span><span class="image{d1}"></span>' + 
 //        '<span class="imageDay"></span><span class="imageSpace"></span>' + 
 //        '<span class="image{h10}"></span><span class="image{h1}"></span>' + 
 //        '<span class="imageSep"></span>' + 
 //        '<span class="image{m10}"></span><span class="image{m1}"></span>' + 
 //        '<span class="imageSep"></span>' + 
 //        '<span class="image{s10}"></span><span class="image{s1}"></span></div>'}); 

// var liftoffTime = new Date(); 
// liftoffTime = new Date(eventDay.getFullYear() + 1, 7, 0); 
// $('#countdown').countdown({until: eventDay});

        //options( 1 - ON , 0 - OFF)
        // var auto_slide = 1;
        // var hover_pause = 1;
        // var key_slide = 0;
        
        // //speed of auto slide(
        // var auto_slide_seconds = 1000;
        /* IMPORTANT: i know the variable is called ...seconds but it's 
        in milliseconds ( multiplied with 1000) '*/
        
        /*move the last list item before the first item. The purpose of this is 
//         if the user clicks to slide left he will be able to see the last item.*/
//         $('#carousel_ul li:first').before($('#carousel_ul li:last')); 

//         //check if auto sliding is enabled
//         if(auto_slide == 1){
//             /*set the interval (loop) to call function slide with option 'right' 
//             and set the interval time to the variable we declared previously */
//             var timer = setInterval('slide("right")', auto_slide_seconds); 
            
//             /*and change the value of our hidden field that hold info about
//             the interval, setting it to the number of milliseconds we declared previously*/
//             $('#hidden_auto_slide_seconds').val(auto_slide_seconds);
//         }
  
//         //check if hover pause is enabled
//         if(hover_pause == 1){
//             //when hovered over the list 
//             $('#carousel_ul').hover(function(){
//                 //stop the interval
//                 clearInterval(timer)
//             },function(){
//                 //and when mouseout start it again
//                 timer = setInterval('slide("right")', auto_slide_seconds); 
//             });
  
//         }
  
//         //check if key sliding is enabled
//         if(key_slide == 1){
            
//             //binding keypress function
//             $(document).bind('keypress', function(e) {
//                 //keyCode for left arrow is 37 and for right it's 39 '
//                 if(e.keyCode==37){
//                     //initialize the slide to left function
//                     slide('left');
//                 }else if(e.keyCode==39){
//                     //initialize the slide to right function
//                     slide('right');
//                 }
//             });

//         }        
//   });

// //new Date function




// //slide function  
// function slide(where){
    
//     //get the item width
//     var item_width = $('#carousel_ul li').outerWidth() + 10;
    
//     /* using a if statement and the where variable check 
//     we will check where the user wants to slide (left or right)*/
//     if(where == 'left'){
//         //...calculating the new left indent of the unordered list (ul) for left sliding
//         var left_indent = parseInt($('#carousel_ul').css('left')) + item_width;
//     }else{
//         //...calculating the new left indent of the unordered list (ul) for right sliding
//         var left_indent = parseInt($('#carousel_ul').css('left')) - item_width;
    
//     }
    

    
//     //make the sliding effect using jQuery's animate function... '
//     $('#carousel_ul:not(:animated)').animate({'left' : left_indent}, 'slow', 'linear', function(){    
        
//         /* when the animation finishes use the if statement again, and make an ilussion
//         of infinity by changing place of last or first item*/
//         if(where == 'left'){
//             //...and if it slided to left we put the last item before the first item
//             $('#carousel_ul li:first').before($('#carousel_ul li:last'));
//         }else{
//             //...and if it slided to right we put the first item after the last item
//             $('#carousel_ul li:last').after($('#carousel_ul li:first')); 
//         }
        
//         //...and then just get back the default left indent
//         $('#carousel_ul').css({'left' : '-150px'});


//         console.log($('#carousel_ul li a img').attr('src'));

//         switch( $('#carousel_ul li a img').attr('src') ){

//         	case 'images/partners/strategic.jpg':
//         		$('#partners-group').html('Strategic Partners');
//         		break;
//         	case 'images/partners/support.jpg':
//         		$('#partners-group').html('Supporting Partners');
//         		break;
//         	case 'images/partners/gold.jpg':
//         		$('#partners-group').html('Gold Sponsor');
//         		break;
//         	case 'images/partners/silver.jpg':
//         		$('#partners-group').html('Silver Sponsors');
//         		break;
//         	case 'images/partners/general.jpg':
//         		$('#partners-group').html('General Sponsors');
//         		break;
//         	case 'images/partners/exhibit.jpg':
//         		$('#partners-group').html('Concurrent Exhibition');
//         		break;
//         	case 'images/partners/satellite.jpg':
//         		$('#partners-group').html('Satellite Events');
//         		break;
//         	// default: 
//         	// 	$('#partners-group').html('Strategic Partners');
//         	// 	break;
//         }

//         // if ($('#carousel_ul li a img').attr('src') == 'images/partners/ILO.jpg') {
//         // 	$('#partners-group').html('ILO');
//         // }

//         // else if ($('#carousel_ul li a img').attr('src') == 'images/partners/siso_footer.jpg') {
//         // 	$('#partners-group').html('Siso');
//         // }
//     });

// }





 //    $('#calendar').fullCalendar({
	// 	header: {
	// 		left: 'prev,next today',
	// 		center: 'title',
	// 		right: 'month,agendaWeek,agendaDay'
	// 	},
	// 	defaultDate: '2014-05-05T15:00:00',
	// 	selectable: true,
	// 	selectHelper: true,
	// 	select: function(start, end) {
	// 		var title = prompt('Event Title:');
	// 		var eventData;
	// 		if (title) {
	// 			eventData = {
	// 				title: title,
	// 				start: start,
	// 				end: end
	// 			};
	// 			$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
	// 		}
	// 		$('#calendar').fullCalendar('unselect');
	// 	},
	// 	editable: true,
	// 	eventLimit: true, // allow "more" link when too many events
	// 	events: [
	// 		{
	// 			title: 'The Singapore WSH Conference',
	// 			start: '2014-05-07T16:00:00',
	// 			end: '2014-05-08T18:00:00'
	// 		},
	// 		{
	// 			title: 'Total WSH',
	// 			start: '2015-05-09T:16:00:00',
	// 			end: '2014-05-09T18:00:00'
	// 		},
	// 		{
	// 			//id: 999,
	// 			title: 'ASEAN OSH',
	// 			start: '2014-05-08T16:00:00'
	// 		},
	// 		{
	// 			//id: 999,
	// 			title: 'IPAF',
	// 			start: '2014-12-09T18:00:00'
	// 		},
	// 		{
	// 			title: 'Scaling New Heights',
	// 			start: '2014-05-06T17:00:00',
	// 			end: '2014-05-06T18:00:00'
	// 		},
	// 		{
	// 			title: 'Conference on the Globbally Harmonized System',
	// 			start: '2014-05-05T17:30:00',
	// 			end: '2014-05-06T17:30:00'
	// 		},
	// 		{
	// 			title: 'Compliance of Commercial Diving in Standards in Singapore Seminar',
	// 			start: '2014-05-06T22:00:00',
	// 			end: '2014-05-06T23:00:00'
	// 		},
	// 		{
	// 			title: 'OS + H Asia 2014',
	// 			start: '2014-05-07T17:30:00',
	// 			end: '2014-05-09T19:30:00'
	// 		},
	// 		{
	// 			title: 'Total Solutions Towards Optimizing WSH Competencies',
	// 			start: '2014-05-09T17:30:00',
	// 		}
	// 	]
	// });
	
// });

$(document).ready(function () {
	if(navigator.userAgent.match(/Android/i) ||
	   navigator.userAgent.match(/webOS/i) ||
	   navigator.userAgent.match(/iPhone/i) ||
	   navigator.userAgent.match(/iPad/i) ||
	   navigator.userAgent.match(/iPod/i) ||
	   navigator.userAgent.match(/BlackBerry/i)) {
		$('.parallax-new').addClass('mobile');
	}
	$('body').css('height', 'auto');
	$('body').css('overflow-x', 'hidden');
	$('.parallax-new').css('height', Math.floor($(window).height() * 0.6)+'px');
	$(window).on('resize', function(){ $('body').css('max-width', $('html').innerWidth()+'px'); });
});


