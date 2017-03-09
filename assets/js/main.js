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
})(jQuery);

