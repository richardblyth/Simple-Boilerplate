// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// jQuery Form

$(function() {   
    $("#enqsubmit").click(function() {
    	var enqname = $("#enqname").val();
    	var enqemail = $("#enqmail").val();    		    
    	var enqmsg = $("#enqmsg").val();
    	
    	var dataString = 'enqname='+ enqname + '&enqemail=' + enqemail + '&enqmsg=' + enqmsg;   
	
		else if(enqname==''){
            $('#enqname').css({'background-color':'#FAFFBD'});
            $("#enqname").click(function() {
            $(this).animate({'background-color':'#FFFFFF'}, 500);
            });
        }
         
        else if(enqemail==''){
            $('#enqemail').css({'background-color':'#FAFFBD'});
            $("#enqemail").click(function() {
            $(this).animate({'background-color':'#FFFFFF'}, 500);
            });
        }        
           		
        else if(enqmsg==''){
            $('#enqmsg').css({'background-color':'#FAFFBD'});
            $("#enqmsg").click(function() {
            $(this).animate({'background-color':'#FFFFFF'}, 500);
            });
        }        		
            
        else {
    		//$.ajax({
    		//type: "POST",
    		//url: "lib/process.php",
    		//data: dataString,
    		//success: function(){
    			//$('.formfade').fadeOut(400);
    		    //$('.success').fadeIn(1200);
    			//}
    		//});
    	}
    
    	return false;
    	});
    });