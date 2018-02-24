jQuery(document).ready(function($){
    scrollTop();
    initMailStyles();
    function initMailStyles(){
        $('input').attr('style', 'border: 0px solid!important');
        $('textarea').attr('style', 'padding: 5px!important');
        $('#hugeit-contact-wrapper_3 .buttons-block button.submit').css('background', 'inherit!important');
        $('#hugeit-contact-wrapper_3 .buttons-block button.submit').attr('style', 'margin-top: 10px!important;border-radius: 0!important');
        // $('#hugeit-contact-wrapper_3 .buttons-block button.submit').attr('style', 'border-radius: 0!important');
        // $('#hugeit-contact-wrapper_3 .buttons-block button.submit').attr('style', 'width:550; height:300; font-size:8px');
    }
    var scrollPosition = 0;
    var paragraphTopValue = 0;
    // wp-admin/css/common.min.css delete html,body{ height: 100%}

    $(window).load(function(){ 
        setHeader();
    });
    function setHeader(){
        var viewportHeight = $(this).height();
        var viewportHeightMinusNav = viewportHeight - 60;
        paragraphTopValue = viewportHeightMinusNav - 200;
        paragraphTopValueMobile = viewportHeightMinusNav - 100;
        $('#header').css('min-height', viewportHeightMinusNav + 'px');
        if ($( window ).width() >= 768) {   //only mobile
            $('#header img').css('top', paragraphTopValue + 'px');
        }else{
            $('#header img').css('top', paragraphTopValueMobile + 'px');
        }
    }

    function scrollTop(){
        $('html,body').animate({scrollTop: 0},'fast');
    }
    var $root = $('html, body');
    $('.navbar a').click(function() {
        var topOfObject = $( $.attr(this, 'href') ).offset().top
        $root.animate({
            scrollTop: topOfObject - 60
        }, 500);
        return false;
    });
    $('#representation .mail').click(function() {
        var topOfObject = $( $.attr(this, 'href') ).offset().top
        $root.animate({
            scrollTop: topOfObject - 60
        }, 500);
        return false;
    });
    $('.navbar a').on('click', function(){
        $('.btn-navbar').click();
        if ($( window ).width() <= 1010) {   //only mobile
            $('.navbar-toggle').click()
        }
    });

    $(".alert").delay(3000).fadeOut('slow', function() {
        $(this).alert('close');
    });

    $(window).resize(function() {
        setHeader();
        if ($( window ).width() > 780) {   //only mobile
            notMobile();
        }
        if ($( window ).width() >= 516) {
            var parentMateries  = $('#section2').outerHeight();
            var parentEreloon   = $('#section3').outerHeight();
            // $('#representationContainer').css('margin-top', 0.5*0.5*0.5*parentMateries + 'px');
            // $('#materiesContainer').css('margin-top', 0.5*0.5*parentMateries + 'px');
            // $('#ereloonContainer').css('margin-top', 0.5*0.5*parentEreloon + 'px');
            // $('#contactContainer').css('margin-top', 0.5*0.5*0.5*parentEreloon + 'px');
        }
        else{
            $('#representationContainer').css('margin-top', '0');
            $('.iconContainerMateries').css('margin-top', '0');
            $('.iconContainerEreloon').css('margin-top', '0');
            $('#contactContainer').css('margin-top', '0');
        }
        if ($( window ).width() <= 1070) {
            $('nav').addClass('shrinkNav');
            $('.navitem').addClass('pushTop');
            $('.navbarImage').addClass('shrinkNavbarImage');
        }
    }).resize();
    $(window).scroll( function(){
        if ($( window ).width() >= 1070) {
            if ($(document).scrollTop() > 50) {
                $('nav').addClass('shrinkNav');
                $('.navitem').addClass('pushTop');
                $('.navbarImage').addClass('shrinkNavbarImage');
            } else {
                $('nav').removeClass('shrinkNav');
                $('.navitem').removeClass('pushTop');
                $('.navbarImage').removeClass('shrinkNavbarImage');
            }
        }

        var scrollPosition      = $(window).scrollTop();
        var bottomOfWindow      = $(window).scrollTop() + $(window).height();
        $('.fadeInScrollEarly').each( function(i){
            var topOfObject = $(this).offset().top;
            var bottomOfObject = $(this).offset().top + $(this).outerHeight() - 300;

            if( bottomOfWindow > bottomOfObject ){
                $(this).animate({'opacity':'1'},500);
            }
        });
        $('.fadeInScroll').each( function(i){
            var topOfObject = $(this).offset().top;
            var bottomOfObject = $(this).offset().top + $(this).outerHeight() + 300;

            if( bottomOfWindow > bottomOfObject ){
                $(this).animate({'opacity':'1'},500);
            }
        });
    });
    function notMobile(){
        $(window).scroll( function(){
            scrollPosition = $(window).scrollTop();
            bottomOfWindow = $(window).scrollTop() + $(window).height();

            var scrollPercent = 0
            scrollPercent = ($(window).scrollTop() / $('#header').outerHeight()) ;
            var scrollPercentHeaderReverse = 1 - (scrollPercent) * 5;
            var scrollPercentFullReverse = 1 - (scrollPercent / 90);

            $('#header').css('background-position-y', parseInt($(this).scrollTop()*.3));
            $('#header img').css('top', paragraphTopValue + parseInt($(this).scrollTop()*.3));
            $('#header img').css('opacity', scrollPercentHeaderReverse);
        });
    };



    // jQuery.fn.center = function(parent) {
    //     if (parent) {
    //         parent = this.parent();
    //     } else {
    //         parent = window;
    //     }
    //     this.css({
    //         "position": "absolute",
    //         "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
    //         "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
    //     });
    // return this;
    // }
    // // $("div.target:nth-child(1)").center(true);
    // $("#materiesContainer").center(true);
});
