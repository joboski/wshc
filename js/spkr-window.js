$(document).ready(function() {

	$('#spkr-window').scrollbox({
    	
    	direction: 'h',
    	distance: 500
    	// /linear: true,
    	// speed:100
  	});

  	$('#spkr-window-backward').click(function () {
    	
    	$('#spkr-window').trigger('backward');
  	
  	});

	$('#spkr-window-forward').click(function () {

		$('#spkr-window').trigger('forward');
	});
};	