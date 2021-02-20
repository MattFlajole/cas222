$( document ).ready(function() {

    $( ".cross" ).hide();
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

});

// test comment

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


