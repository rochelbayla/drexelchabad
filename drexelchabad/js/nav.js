window.onload = function(){
   if (window.matchMedia("(min-width: 1100px)").matches) {
        $('.menu-navigation-container').css("opacity", "1");
        $('.menu-navigation-container').css("z-index", "5");
        $('.menu-navigation-container').css("top", "50px");
   } else {
        $('.menu-navigation-container').css("opacity", "0");
        $('.menu-navigation-container').css("z-index", "-5");
        $('.menu-navigation-container').css("top", "-100%");    
   } 
};



window.addEventListener("resize", function() {
    if (window.matchMedia("(min-width: 1100px)").matches) {
        $('.menu-navigation-container').css("opacity", "1");
        $('.menu-navigation-container').css("z-index", "5");
        $('.menu-navigation-container').css("top", "50px");
    } else {
        $('.menu-navigation-container').css("opacity", "0");
        $('.menu-navigation-container').css("z-index", "-5");
        $('.menu-navigation-container').css("top", "-100%");
    }
});

function nav() {
 if( $('.menu-navigation-container').css('opacity') == '0' ) {
        $('.menu-navigation-container').css("opacity", "1");
        $('.menu-navigation-container').css("z-index", "5");
        $('.menu-navigation-container').css("top", "50px");
    } else {
        $('.menu-navigation-container').css("opacity", "0");
        $('.menu-navigation-container').css("z-index", "-5");
        $('.menu-navigation-container').css("top", "-100%");
    }
}
    
    
