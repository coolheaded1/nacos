"use strict";

jQuery(document).ready(function($){
    //your custom js code here
    $( "#ndndnd" ).addClass("classToBeAdded");
    window.setTimeout('hide_loader()',2010);
});
function hide_loader(){$('.loader-container').hide();}

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

// document.getElementById("ndndnd").className += " classToBeAdded";
function showDiv(num) {
    jQuery(document).ready(function($){$( "#ndndnd" ).removeClass("classToBeAdded");});
    document.getElementById('paraDiv1').style.display='none';
    document.getElementById('paraDiv2').style.display='none';
    document.getElementById('paraDiv3').style.display='none';
    document.getElementById('paraDiv'+num).style.display='block';
}

