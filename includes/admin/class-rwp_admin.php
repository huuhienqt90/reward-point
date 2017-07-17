<?php
/**
 * Created by PhpStorm.
 * User: LuckyStar
 * Date: 5/19/14
 * Time: 3:56 PM
 */

class RWP_Admin {
    function __construct(){
        add_action( 'admin_menu', array( $this, 'admin_menu' ), 9 );
    }
    function admin_menu(){
        add_menu_page( __( 'Reward Point', 'rewardpoint' ), __( 'Reward Point', 'rewardpoint' ), 'manage_options', 'rewardpoint' , array( $this, 'settings_page' ));
    }
    function settings_page(){

    }
}
return new RWP_Admin();