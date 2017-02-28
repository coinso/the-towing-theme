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


})(jQuery);