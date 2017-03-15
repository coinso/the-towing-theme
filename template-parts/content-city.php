<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/12/2017
 * Time: 7:36 AM
 */
/**
 * Template part for displaying contact page content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

$cps_schema_type = get_field('cps_schema_type');
$cps_city_page_url = get_field('cps_city_page_url');
$cps_local_brand_name = get_field('cps_local_brand_name');
$cps_city_page_desc = get_field('cps_city_page_descripiton');
$cps_payment_method = get_field('cps_payment_method');
$cps_street_address = get_field('cps_street_address');
$cps_city = get_field('cps_city_name');
$cps_region = get_field('cps_region');
$cps_zip = get_field('cps_zip');
$cps_opening_hrs = get_field('cps_opening_hrs');
$cps_local_phone = get_field('cps_local_phone');
$cps_map_lat = get_field('cps_map_lat');
$cps_map_lng = get_field('cps_map_lng');
$cps_map_zoom = get_field('cps_map_zoom');
$page_title = get_post_meta($post->ID,'page title', true);
?>
<div class="row">
    <div class="col-sm-12 text-center">
        <h1 class="entry-title"><?php echo $page_title ? $page_title : get_the_title(); ?></h1>
    </div>
</div>
<hr class="divider">
<div class="row main-row">
    <div class="col-md-6 col-sm-12" id="contact-form">
        <?php the_content();?>
    </div>
    <div class="col-md-6 col-sm-12" id="map-wrap">
        <div class="row-fluid">
            <div class="col-sm-12">
                <h3>Our Location</h3>
                <div id="map" style="width: 100%;height: 600px;background-color: grey;"></div>
                <script>
                    function initMap() {
                        var mapDiv = document.getElementById('map');
                        var myLatLng = {lat: <?php echo $cps_map_lat; ?>, lng: <?php echo $cps_map_lng; ?>};
                        var map = new google.maps.Map(mapDiv, {
                            center: myLatLng,
                            zoom: <?php echo $cps_map_zoom;?>,
                            styles: [
                                {
                                    featureType: 'all',
                                    stylers: [
                                        { saturation: -80 }
                                    ]
                                },{
                                    featureType: 'road.arterial',
                                    elementType: 'geometry',
                                    stylers: [
                                        { hue: '#00ffee' },
                                        { saturation: 50 }
                                    ]
                                },{
                                    featureType: 'poi.business',
                                    elementType: 'labels',
                                    stylers: [
                                        { visibility: 'off' }
                                    ]
                                }
                            ]
                        });
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: '<?php echo $page_title ? $page_title : get_the_title(); ;?>'
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmB7rzx0LDjjwIiHjWaxNFm8FApA7ugM4&callback=initMap">
                </script>
            </div>
            <div class="col-md-6 col-sm-12" id="schema_wrap">
                <div class="cps_city-schema">
                    <div itemscope="" itemtype="http://schema.org/<?php echo $cps_schema_type ?>">

                        <a itemprop="url" href="<?php echo $cps_city_page_url; ?>">
                            <h3 itemprop="name"><?php echo $cps_local_brand_name ;?></h3>
                        </a>
                        <span itemprop="description"><?php echo $cps_city_page_desc ;?></span>

                        <i class="fa fa-credit-card"></i><span itemprop="paymentAccepted"><?php echo implode(", ",$cps_payment_method);?></span>
                    </div>
                    <div class="footer-address">
                        <div class="cps_description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                            <i class="fa fa-map-marker"></i><span itemprop="streetAddress"><?php echo $cps_street_address;?></span>
                            <span itemprop="addressLocality"><?php echo $cps_city;?></span>
                            <span itemprop="addressRegion"><?php echo $cps_region;?></span>
                            <span itemprop="postalCode" class="schema_li"><?php echo $cps_zip;?></span>

                        </div>
                    </div>

                    <div>
                        <i class="fa fa-clock-o" ></i><span>Opening Hours:</span>
                        <time itemprop="openingHours" datetime="<?php echo $cps_opening_hrs;?>"><?php echo $cps_opening_hrs;?></time>
                    </div>


                    <div class="footer-phone">
                        <i class="fa fa-phone"></i><span itemprop="telephone"><?php echo $cps_local_phone;?></span>
                    </div>


                </div><!--/#schema_wrap-->


            </div><!--/#schema_wrap-->
        </div>

    </div> <!-- end map-wrap -->
</div>
