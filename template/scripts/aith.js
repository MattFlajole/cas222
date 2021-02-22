$(document).ready(function(){
    $(".topnav > a").click(function() {
        $(".hamburger-menu").addClass("active");
    });
    $(".close").click(function() {
        $(".hamburger-menu").removeClass("active");
    });
});


/*
$( document ).ready(function() {
    function myFunction() {
        let x = $('#myTopnav')[0];
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
});
*/


    /*$( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });
*/


/*
$(function() {
    jQuery(function($){
        $( '.menu-btn' ).click("click", function () {
            $('.responsive-menu').addClass('expand')
            $('.menu-btn').addClass('btn-none')
        });

        $( '.close-btn' ).on("click", function () {
            $('.responsive-menu').removeClass('expand')
            $('.menu-btn').removeClass('btn-none')
        });
    })

    jQuery(function($){
        $( '.menu-btn' ).on("click", function () {
            $('.responsive-menu').toggleClass('expand')
        });
    });
});
*/


