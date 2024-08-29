var header = $(".header");
var header_back = $(".header-back")
$(document).scroll(function(e) {
    if($(this).scrollTop() > $(".header-top").height()) {
        header.css({"position" : "fixed", "top" : "0"});
        header.addClass("header-fixed")
        // header.removeClass("header")
        header_back.css({"display" : "block"});
    } else {
        header.css("position", "relative");
        header.removeClass("header-fixed")
        // header.addClass("header")
        header_back.css({"display" : "none"});

    }
});

function mobMenuVisible(){
    
    document.getElementsByClassName('mob-menu-btn')[0].style.color = "rgb(194, 194, 0)"
    document.getElementsByClassName('mob-menu-container')[0].style.opacity = "1"
    document.getElementsByClassName('mob-menu-container')[0].style.height = "80vh"
    // document.getElementsByClassName('mob-menu-container')[0].style.display = "flex"
    document.getElementsByClassName('mob-menu-back')[0].style.display = "block"
    
    
    
    
    
    
}
function mobMenuHide(){
    document.getElementsByClassName('mob-menu-btn')[0].style.color = "#fff"
    document.getElementsByClassName('mob-menu-container')[0].style.opacity = "0"
    document.getElementsByClassName('mob-menu-container')[0].style.height = "0"
    document.getElementsByClassName('mob-menu-back')[0].style.display = "none"
}

// smooth scroll 

// $(document).ready(function(){
//   // Add smooth scrolling to all links
//   $(".about-btn").on('click', function(event) {

//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

//       // Using jQuery's animate() method to add smooth page scroll
//       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 300, function(){
   
//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;
//       });
//     } // End if
//   });
// });