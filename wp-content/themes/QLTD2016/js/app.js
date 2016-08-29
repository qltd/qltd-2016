 // $(function(){
 //    $('.nav-toggle, .nav-close, .bg-overlay').click(function(){
 //        $('.bg-overlay, .nav-overlay').toggleClass('show');
 //    })
 // })

function toggleNav(){
    var bgOverlay = document.getElementsByClassName('bg-overlay'),
         navOverlay = document.getElementsByClassName('nav-overlay');

    bgOverlay[0].classList.toggle('show');
    navOverlay[0].classList.toggle('show');
}

var navToggle = document.getElementsByClassName('nav-toggle'),
    navClose = document.getElementsByClassName('nav-close'),
    bgOverlay = document.getElementsByClassName('bg-overlay');

navToggle[0].addEventListener("click", function(){ toggleNav() });
navClose[0].addEventListener("click", function(){ toggleNav() });
bgOverlay[0].addEventListener("click", function(){ toggleNav() });


jQuery(document).ready(function(){
    //back to top button
    jQuery('.back-to-top-button').click(function(){
        var $target = jQuery('body');
        jQuery('html, body').stop().animate({
                'scrollTop': $target.offset().top
        }, 900, 'swing',function(){
            jQuery('.back-to-top-button').fadeOut();
        });
    });
});
