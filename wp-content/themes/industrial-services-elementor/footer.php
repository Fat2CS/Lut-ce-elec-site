<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industrial Services Elementor
 */

?>

<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('industrial-services-elementor-footer-sidebar')) {
        echo '<div class="row footer-area">';
          dynamic_sidebar('industrial-services-elementor-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-lg-6 col-md-6 align-self-center">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
          if (!get_theme_mod('industrial_services_elementor_footer_text') ) { ?>
            <?php esc_html_e('Industrial Services WordPress Theme','industrial-services-elementor'); ?>
          <?php } else {
            echo esc_html(get_theme_mod('industrial_services_elementor_footer_text'));
          }
        ?>
          <?php if ( get_theme_mod('industrial_services_elementor_copyright_enable', true) == true ) : ?>
          <?php
            /* translators: %s: WP Elemento */
            printf( esc_html__( ' By %s', 'industrial-services-elementor' ), 'WP Elemento' ); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 align-self-center text-center text-md-right">
        <?php if ( get_theme_mod('industrial_services_elementor_copyright_enable', true) == true ) : ?>
          <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'industrial-services-elementor' ), 'WordPress' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>