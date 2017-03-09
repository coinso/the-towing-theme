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
        var blog = $('li.menu-item-object-page a:contains("blog")');
        if($(body).hasClass('single-services')){
            $(body).find($(navbar));
                if($(navbar).find($(services))){

                     $(services).parent().addClass('services-menu-item');
                     $('.services-menu-item').css('background-color', '#164626');
                     $('.services-menu-item a').css('color', '#ffffff');
                }

        };
        //not working yet
        if($(body).hasClass('.single-post')){
            $(body).find($(navbar));
            if($(navbar).find($(blog))){
                $(blog).parent().addClass('blog-post-menu-item');
                $('.blog-post-menu-item').css('background-color', '#164626');
                $('.blog-post-menu-item a').css('color', '#ffffff');
            }
        };

    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("is-active");
    });
})(jQuery);

