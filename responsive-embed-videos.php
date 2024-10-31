<?php
/*
Plugin Name: Responsive Embed Videos
Plugin URI: http://apps.meow.fr
Description: This plugins makes the most commonly used embed videos responsive.
Version: 0.0.1
Author: Thomas KIM
Author URI: http://www.meow.fr
Text Domain: responsive-embed-videos
Domain Path: /languages
*/

function rev_init() {
    add_action( 'wp_enqueue_scripts', 'rev_scripts' );
    add_action( 'wp_enqueue_scripts', 'rev_style' );
    add_shortcode( 'rev', 'rev_shortcode' );
}
add_action( 'init', 'rev_init' );

function rev_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'rev-js', plugin_dir_url( __FILE__ ) . 'js/rev.js', array( 'jquery' ), '0.0.1', true );
}

function rev_style() {
    wp_enqueue_style( 'rev-css', plugin_dir_url( __FILE__ ) . 'css/rev.css' );
}

function rev_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
            'video' => '',
            'width' => '100%',
            'align' => 'center',
            'ratio' => '16/9',
            'style' => 'simple',
        ), $atts );
    
    $video_url = $a['video'];
    $ratio = $a['ratio'];
    $revwidth = $a['width'];
    $align = $a['align'];
    $style = $a['style'];
    $host = parse_url($video_url)['host'];
    if($host == 'www.youtube.com' || $host == 'youtube.com') {
        $host = 'youtube';
        // Let's clean the url
        $video_url = str_replace( 'watch?v=', 'embed/', $video_url);
    }
    if($host == 'player.vimeo.com' || $host == 'vimeo.com') {
        $host = 'vimeo';
        $video_url = str_replace( '//vimeo.com', '//player.vimeo.com', $video_url);
        $video_url = str_replace( '//www.vimeo.com', '//player.vimeo.com', $video_url);
    }
    if($host == 'youtube') {
        if($style == 'simple') {
            $options = "?showinfo=0&autohide=1";
        }
        return "<div class='rev-video-container ".$align."'>
        <iframe class='rev-video-iframe' revwidth='".$revwidth."' revratio='".$ratio."' src='".$video_url.$options."' frameborder='0'  allowfullscreen></iframe>
        </div>";
    }
    elseif($host == 'vimeo') {
        if($style == 'simple') {
            $options = "?badge=0&portrait=0&title=0&byline=0";
        }
        return "<div class='rev-video-container ".$align."'>
            <iframe class='rev-video-iframe' revwidth='".$revwidth."' revratio='".$ratio."' src='".$video_url.$options."' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>";
    }
    else {
        return "Sorry, but Responsive Embed Videos only support Youtube and Vimeo videos.";
    }
}
?>
