<?php
class Snowing {
    public $snow_v = 1.1;

    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'snowing_assets'));
        add_action('wp_head', array($this, 'snowing_render_html'));
    }

    public function snowing_assets() {
        $snowing_v = $this->snow_v;
        wp_enqueue_style('snowing_style', get_stylesheet_directory_uri().'/assets/css/snowing.css?v='.$snowing_v);
        wp_enqueue_script('snowing_script', get_stylesheet_directory_uri().'/assets/js/snowing.js?v='.$snowing_v, array('jquery'), $snowing_v);
    }

    public function snowing_render_html() { ?>
        <canvas class="snowing-canvas" speed="-2" style="opacity: 0.5" interaction="false" size="6" count="50" wind-power="0" image="<?php echo get_stylesheet_directory_uri().'/assets/img/snow5.png' ?>" width="1707" height="443"></canvas>
        <canvas class="snowing-canvas" speed="-1" style="opacity: 0.7" interaction="true" size="8" count="30" wind-power="-2" image="<?php echo get_stylesheet_directory_uri().'/assets/img/snow6.png' ?>" width="1707" height="443"></canvas>
        <canvas class="snowing-canvas" speed="0" style="opacity: 0.8" interaction="true" size="10" count="20" wind-power="-1" image="<?php echo get_stylesheet_directory_uri().'/assets/img/snow7.png' ?>" width="1707" height="443"></canvas>
    <?php }
}

new Snowing();