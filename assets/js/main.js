/**
 * Created by ido on 2/28/2017.
 */
(function ($) {
    $(document).ready(function () {
       //time stamp
        function timestamp() {
            var d = new Date;
            var timestamp = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

            console.log('last refresh was at: ' + timestamp);
        }
        timestamp();
    });

    //highlight services tab when service is selected
        var body = $('body');
        var navbar = $('#menu-main');
        var services = $('li.menu-item-object-page a:contains("Services")');
        var blog = $('li.current_page_parent a:contains("Blog")');
        if($(body).hasClass('single-services')){
            $(body).find($(navbar));
                if($(navbar).find($(services))){

                     $(services).parent().addClass('services-menu-item');
                     $('.services-menu-item').css('background-color', '#93A444');
                     $('.services-menu-item a').css('color', '#ffffff');
                }

        };
        //not working yet
        if($(body).hasClass('single-format-standard')){
            console.log('body ok');
            $(body).find($(navbar));
            console.log('navbar ok');
              if($(navbar).find($(blog))){
                console.log('blog ok');
                $(blog).parent().addClass('blog-post-menu-item');
                $('.blog-post-menu-item').css('background-color', '#93A444');
                $('.blog-post-menu-item a').css('color', '#ffffff');
            }
        };
//hamburger menu
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("is-active");
    });

    //slick slider
    $('.kudus-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="fa fa-angle-right fa-2x"></button>',
        nextArrow: '<button type="button" class="fa fa-angle-left fa-2x"></button>'
    });

    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function () {
        var $bgobj = $(this); //assaining the object
        jQuery($window).scroll(function () {
            // scroll the background at var speed
            //the yPos is a negative value because we're scrolling it UP!
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // put together our final background position
            var coords = '50% ' + yPos + 'px';

            //Move the background
            $bgobj.css({
                backgroundPosition: coords
            });
        }); //ebd window scroll
    });
    /**
     * scrollup
     *
     */

    function scroll_up() {
        $(window).scroll(function(){
            function scrollUpInit(){
                if( $('.scrollup').hasClass('active')){

                    $('.scrollup').removeClass('active');
                };
            }
            if ($(this).scrollTop() > 450) {
                setTimeout( scrollUpInit, 1000 );

                $('.scrollup').fadeIn();

            } else {
                $('.scrollup').fadeOut();
            }

        });
        $('.scrollup').click(function(){
            $(this).toggleClass('active');
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
    }//scroll_up
    scroll_up()
    function img_lazyload(){
        var imgDefer = document.getElementsByTagName('img');
        for ( var i=0; i < imgDefer.length; i++) {
            if( imgDefer[i].getAttribute( 'data-src' ) ) {
                imgDefer[i].setAttribute( 'src', imgDefer[i].getAttribute( 'data-src' ));
            }
        }
    }
    window.onload = img_lazyload();

    /**
     * hero_scroll_down
     *
     */
    function hero_scroll_down(){
        var arrow = $('.hero .arrow i');
        var scroll = $(window).scrollTop();
        if (!arrow) return;
        $(arrow).click(function () {
            $('html, body').animate({
                scrollTop: $(this).parent().offset().top - 100
            }, 1000);
        });
        //scrolldown fade effect on home page

        $(window).scroll( function(){
            if ( $(this).scrollTop() >= 1) {
                $(arrow).addClass('fade');
            } else{
                $(arrow).removeClass('fade');
            }
            console.log(scroll);
        });

    }// hero_scroll_down

    hero_scroll_down();
})(jQuery);

