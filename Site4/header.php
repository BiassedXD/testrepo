<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = 'Nicepage 3.4.1, nicepage.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$headerHideBlog = false;
$headerHidePost = false;
$pagePost = is_single();
$pageBlog = is_home(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'site4' ); ?></a>
    <?php if (!$pageBlog && !$pagePost || $pageBlog && !$headerHideBlog || $pagePost && !$headerHidePost) { ?>
    <header class="u-align-left u-black u-clearfix u-header u-header" id="sec-4cc5">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h1 class="u-text u-text-black u-text-default u-text-1">A new way to play</h1>
    <img src="<?php
                                $header_image = get_header_image();
                                if ($header_image) {
                                    echo esc_url($header_image);
                                } else {
                                    ?><?php echo get_template_directory_uri(); ?>/images/th.jpeg<?php
                                }
                            ?>" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="220" data-image-height="220">
    <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Agar.io mod</a>
  </div>
</header>
    
    <?php } ?>
    <div id="content">
