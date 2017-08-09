<?php
/**
 * Process otw cm actions
 *
 */
if( isset( $_POST['otw_tgsw_action'] ) ){
	
	require_once( ABSPATH . WPINC . '/pluggable.php' );
	
	switch( $_POST['otw_tgsw_action'] ){
		
		case 'otw_tgsw_settings_action':
				
				if( isset( $_POST['otw_cm_promotions'] ) && !empty( $_POST['otw_cm_promotions'] ) ){
					
					global $otw_tgsw_factory_object, $otw_tgsw_plugin_id;
					
					update_option( $otw_tgsw_plugin_id.'_dnms', $_POST['otw_cm_promotions'] );
					
					if( is_object( $otw_tgsw_factory_object ) ){
						$otw_tgsw_factory_object->retrive_plungins_data( true );
					}
				}
				
				wp_redirect( admin_url( 'admin.php?page=otw-tgsw-settings&message=1' ) );
			break;
	}
}
?>