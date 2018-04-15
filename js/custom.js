$(document).ready(function(){
	    $("#toform").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr("href"),
			top = $(id).offset().top;
		$("body,html").animate({scrollTop: top}, 5000);
	    });
        });
		
		