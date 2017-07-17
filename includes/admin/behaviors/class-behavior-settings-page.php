<?php
/**
 * Created by PhpStorm.
 * User: LuckyStar
 * Date: 5/20/14
 * Time: 1:58 PM
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! class_exists( 'Behavior_Settings_Page' ) ) :
class Behavior_Settings_Page {
    public $customer_haviors = array();
    public function __construct(){
        $this->id                = 'register';
        $this->method_title      = __( 'PayPal', 'woocommerce' );
        add_action( 'rewardpoint_settings_tabs_behavior', array($this,'init' ) );
        add_action( 'rewardpoint_behavior_section_list', array($this, 'list_behavior' ) );
    }
    public function init(){
        include_once("class-behavior-register.php");
        $this->customer_behaviors = apply_filters( 'rewardpoint_behaviors', array('Behavior_Register'));
        $all_customer_behavior = $this->customer_behaviors;
        $current_section = empty( $_REQUEST['section'] ) ? 'list' : sanitize_title( $_REQUEST['section'] );
        $this->output_sections($current_section);
        do_action('rewardpoint_behavior_section_'.$current_section);
        // Load gateways in order
        foreach ($this->customer_behaviors as $behavior) :
            $load_behavior = new $behavior;
            ///$this->customer_haviors[$load_behavior->id] = $load_behavior;
        endforeach;
    }
    public function output_sections($current_section='list') {
        $behavior_tabs = apply_filters( 'rewardpoint_behavior_sections', array(
            array(
                'name' => 'list',
                'label' => 'Behaviors',
            ),
        ));
        if ( empty( $behavior_tabs ) )
            return;
        echo '<ul class="subsubsub">';
        $array_keys = array_keys( $behavior_tabs );

        foreach ( $behavior_tabs as $id=>$rows )
            echo '<li><a href="' . admin_url( 'admin.php?page=rewardpoint&tab=behavior&section=' . $rows['name'] ) . '" class="' . ( $current_section == $rows['name'] ? 'current' : '' ) . '">' . $rows['label'] . '</a>'.( end( $array_keys ) == $id ? '' : '|' ).'</li>';

        echo '</ul><br class="clear" />';
    }
    function list_behavior(){
        include_once( __PLUGIN_PATH__."includes/admin/list-data/class-list-data-behavior.php");
    }
}
new Behavior_Settings_Page();
endif;