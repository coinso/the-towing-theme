<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 3/1/2017
 * Time: 12:32 PM
 */
?>
<div class="col-md-3" id="footer-widget-1">
<!--                    --><?php //if(is_front_page()):?>
<!--                    <div id="schema">-->
<!--                        --><?php //get_template_part( 'template-parts/globals/content', 'schema' );?>
<!--                    </div>-->
<!--                    --><?php //else:?>
<!--                    --><?php //if(is_active_sidebar('footer-1')){
//                        dynamic_sidebar('footer-1');
//                    }
//                    ?>
<!--                    --><?php //endif;?>
</div>
<div class="col-md-3" id="footer-widget-2">
    <?php if(is_active_sidebar('footer-2')){
        dynamic_sidebar('footer-2');
    }
    ?>
</div>
<div class="col-md-3" id="footer-widget-3">
    <?php if(is_active_sidebar('footer-3')){
        dynamic_sidebar('footer-3');
    }
    ?>
</div>
<div class="col-md-3" id="footer-widget-4">
    <?php if(is_active_sidebar('footer-4')){
        dynamic_sidebar('footer-4');
    }
    ?>
</div>