$(document).ready(function() {
    
    var pageDown = function(){
        var wh = $(window).height();
        mh = wh - 160;
        $("#main-nav.down").css("position", "absolute");
        $("#main-nav.down").css("top", mh);
        $("#main-nav.down").css("margin", "0 auto");
        $("#main-nav.down").css("width", "80%");
        $("#container.down").css("position", "absolute");
        $("#container.down").css("top", wh);
        $("#container.down").css("width", "100%");
    }
    
    var pageUp = function() {
		$("#main-nav.up").css('top', 160);
		$("#container.up").css('top', 160);
		$("").css('top', 0);
		$("").css('top', 0);
	}
	
    var pageReveal = function() {
        var wh = $(window).height();
        mh = wh - 192;
        wh = wh - 33;
        $('#main-nav.down').css('top', mh);
        $("#container.down").css('top', wh);
    }
    
    var descriptionChange = function(description) {
        $("#description").text(description);
    }
    
    $(window).resize(function() {
        pageDown();
    });
    	
    $('#main-nav a').hover(function() {
        pageReveal();
        var description = $(this).attr("title");
        descriptionChange(description); 
    }, function() {
        if($("#main-nav").hasClass("down")) {
            pageDown();
        }
    });
    
    //$("#main-nav a").click(function() {
       //$("#main-nav.down").removeClass("down").addClass("up");
       //$("#container.down").removeClass("down").addClass("up");
        //pageUp();
        //if
        //$("#main-nav a").removeClass("clicked");
        //$(this).addClass("clicked");
    //});
    
    $("body").removeClass("no-js").addClass("js");
    
    $("body").backstretch([
        "/wp-content/themes/pra/img/bg_0.jpg",
        "/wp-content/themes/pra/img/bg_1.jpg",
        "/wp-content/themes/pra/img/bg_2.jpg",
        "/wp-content/themes/pra/img/bg_3.jpg",
        "/wp-content/themes/pra/img/bg_4.jpg",
        "/wp-content/themes/pra/img/bg_5.jpg"
     ], {duration: 3000, fade: 750});
	
	pageDown(); 
});