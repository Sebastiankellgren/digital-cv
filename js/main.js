//Start at top if page reloads
$(window).on('beforeunload', function(){
    $(window).scrollTop(0);
});

//Load all functions
$(document).ready(function(){
    smoothScrolling();
    scrollingEffects();
    meny();
    interest();
    employment();
});

//Scroll to div when link is clicked
function smoothScrolling() {
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top
            }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            });
            }
        }
    });
}

//Add styles to elements when they're in viewport (when you can see them on the screen)
function scrollingEffects() {
        $('#employment').on('inview', function(event, isInView) {
            if (isInView) {
                $(".employments").css({
                    "opacity":"1",
                    "bottom":"0"
                });
            }
        });
        
        $('#interests').on('inview', function(event, isInView) {
           if (isInView) {
               $(".interest-div").css("opacity","1");
           } 
        });  
}

//Burger icon effects to the menu
function meny() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            $(".menu-meny-container").hide();
            $(".burger").hide();
        }
        else {
            $(".menu-meny-container").fadeIn("slow");
            $(".burger").fadeIn("slow");
        }

    });
    
    $(".burger").click(function(){
        if ($(".burger").is(".change")) {
            $(".menu-mobil-meny-container").fadeOut();
            $(".burger").removeClass("change");
            return false;
        }
        
		$(".burger").addClass("change");
        $(".menu-mobil-meny-container").fadeIn("slow");
	});
}

//Show information about the interest when it's clicked
function interest() {
    $(".interest-div").on("click", function() {
        
        if ( $(this).is(".active") ) {
            $(this).find(".interest-info").css("opacity","0");
            $(this).find("h3, .fa").css("opacity","1");
            $(this).removeClass("active");
            $(this).removeClass("darker");
            return false;
        }
        
        $(".interest-div").find(".interest-info").css("opacity","0");
        $(".interest-div").find("h3, .fa").css("opacity","1");
        $(".interest-div").removeClass("active");
        $(".interest-div").removeClass("darker");
        
        $(this).find(".interest-info").css("opacity","1");
        $(this).find("h3, .fa").css("opacity","0");
        $(this).addClass("active");
        $(this).addClass("darker");
    });
}

//Show information about the employment when it's clicked
function employment() {
    $(".employment").on("click", function() {
        
        if ( $(this).is(".open") ) {
            $(this).find("p").slideUp("slow");
            $(this).removeClass("open");
            return false;
        }
        
        $(this).find("p").slideDown("slow");
        $(this).addClass("open");        
    });
}
