<?php
/**
* Plugin Name: Simple Order Exporter - Woocommerce
* Plugin URI: https://tecrocket.space/
* Description: Export All the Relavant Order Details to CSV File, this plugin give u a custom button within Orders Page. by a Single Click! you can export your file right away! 
* Version: 1.0
* Author: Luqmaan Siddeeq - TecRocket Space
* Author URI: https://tecrocket.space/
**/

add_action( 'manage_posts_extra_tablenav', 'admin_order_list_top_bar_button', 20, 1 );
function admin_order_list_top_bar_button( $which ) {
    global $typenow;

    if ( 'shop_order' === $typenow && 'top' === $which ) {
        ?>
        <div class="alignleft actions custom">
        <form method="POST">
            <button name="button1" style="height:32px;" class="button">
            		<?php echo __( 'Export Orders as CSV', 'woocommerce' ); ?>
			</button>
        </form>
        </div>
        <?php
    }
}
?>