<?php
/**
 * Template part for displaying the header banner
 *
 * @package Woostify
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$banner_image = get_theme_mod('woostify_header_banner_image', '');
if (empty($banner_image)) {
    return;
}

$banner_height  = get_theme_mod('woostify_header_banner_height', '100');
$banner_stretch = get_theme_mod('woostify_header_banner_stretch', false);
$banner_class   = $banner_stretch ? 'stretch' : '';
?>

<div class="header-banner <?php echo esc_attr($banner_class); ?>" style="height: <?php echo esc_attr($banner_height); ?>px;">
    <img src="<?php echo esc_url($banner_image); ?>" alt="<?php esc_attr_e('Header Banner', 'woostify'); ?>">
</div>
