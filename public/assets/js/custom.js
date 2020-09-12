/**
 * Created by Subbapdm on 12/04/2020.
 */

$(document).ready(function(){

   /* Main Menu & slide menu */
   $('ul li:has(ul)').addClass('has-submenu');
   $('ul li ul').addClass('sub-menu');
   var $menuButton = $('.clickMenu'), $menuWrap = $('.navbar-outer');
   $menuButton.click(function(e){
       e.preventDefault();
       $menuButton.toggleClass('active');
       $menuWrap.toggleClass('active');
   });

   $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

    $(function () {
        $('[data-toggle="popover"]').popover()
    })
   
    /* Scroll Up Button */
    $(window).scroll(function(){
        if($(this).scrollTop() > 300){
            $('#scrollUp').removeClass('zoomIn');
        }else{
            $('#scrollUp').addClass('zoomIn');
        }
    });
    
    $('#scrollUp').on('click', function(){
        $('html, body').animate({scrollTop:0}, 800);
        return false;
    });

    $(".scrollSec a").click(function(e) {
        e.preventDefault();
        var linkHref = $(this).attr("href");
        $('html, body').animate({
            scrollTop: $(linkHref).offset().top
        }, 1000);
    });

});