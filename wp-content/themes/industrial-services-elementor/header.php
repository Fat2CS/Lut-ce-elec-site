<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industrial Services Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'industrial-services-elementor' ); ?></a>

<header id="site-navigation" class="header text-center text-md-left">
	<div class="upperheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
					<?php if ( get_theme_mod('industrial_services_elementor_header_toptxt') ) : ?>
						<p class="mb-0"><?php echo esc_html( get_theme_mod('industrial_services_elementor_header_toptxt' ) ); ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 align-self-center">
					<?php $industrial_services_elementor_menulink_settings = get_theme_mod( 'industrial_services_elementor_text_menulinks' ); ?>
					<div class="text-center text-md-right">
						<?php if ( is_array($industrial_services_elementor_menulink_settings) || is_object($industrial_services_elementor_menulink_settings) ){ ?>
					    	<?php foreach( $industrial_services_elementor_menulink_settings as $industrial_services_elementor_toplink_setting ) { ?>
						        <a class="mr-3" href="<?php echo esc_url( $industrial_services_elementor_toplink_setting['link_url'] ); ?>"><?php echo esc_html( $industrial_services_elementor_toplink_setting['link_text'] ); ?>
						        </a>
					    	<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 align-self-center">
					<?php $industrial_services_elementor_settings = get_theme_mod( 'industrial_services_elementor_social_links_settings' ); ?>
					<div class="social-links text-center text-md-right">
						<?php if ( is_array($industrial_services_elementor_settings) || is_object($industrial_services_elementor_settings) ){ ?>
							<span class="mr-3"><?php esc_html_e('Follow Us: ','industrial-services-elementor'); ?></span>
					    	<?php foreach( $industrial_services_elementor_settings as $industrial_services_elementor_setting ) { ?>
						        <a href="<?php echo esc_url( $industrial_services_elementor_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $industrial_services_elementor_setting['link_text'] ); ?> mr-2"></i>
						        </a>
					    	<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="middleheader py-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
				
					<div class="logo text-center text-md-left mb-3 mb-lg-0">
			    		<div class="logo-image">
			    			<?php the_custom_logo(); ?>
				    	</div>

						<div></div>
				    	<div class="logo-content">
					    	<?php
					    		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      		echo esc_attr(get_bloginfo('name'));
						      	echo '</a>';
						      	echo '<span class="mb-0">'. esc_attr(get_bloginfo('description')) . '</span>';
				    		?>
						</div>
					</div>
			   	</div>
			   	<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
			   		<?php $industrial_services_elementor_phonetxt_settings = get_theme_mod( 'industrial_services_elementor_phone' ); ?>
					<div class="phoneno text-center text-md-right">
						<?php if ( is_array($industrial_services_elementor_phonetxt_settings) || is_object($industrial_services_elementor_phonetxt_settings) ){ ?>
					    	<?php foreach( $industrial_services_elementor_phonetxt_settings as $industrial_services_elementor_phoneno_setting ) { ?>
						        <p class="mb-0"><?php echo esc_html( $industrial_services_elementor_phoneno_setting['phone_text'] ); ?></p>
						        <h6><?php echo esc_html( $industrial_services_elementor_phoneno_setting['phone_number'] ); ?></h6>
					    	<?php } ?>
						<?php } ?>
					</div>
			   	</div>
			   	<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
			   		<?php $industrial_services_elementor_opentimetxt_settings = get_theme_mod( 'industrial_services_elementor_opening_time' ); ?>
					<div class="opentime text-center text-md-right">
						<?php if ( is_array($industrial_services_elementor_opentimetxt_settings) || is_object($industrial_services_elementor_opentimetxt_settings) ){ ?>
					    	<?php foreach( $industrial_services_elementor_opentimetxt_settings as $industrial_services_elementor_opentime_settings ) { ?>
						        <p class="mb-0"><?php echo esc_html( $industrial_services_elementor_opentime_settings['opentime_text'] ); ?></p>
						        <h6><?php echo esc_html( $industrial_services_elementor_opentime_settings['open_time'] ); ?></h6>
					    	<?php } ?>
						<?php } ?>
					</div>
			   	</div>
			</div>
		</div>
	</div>
	<div class="topheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 align-self-center">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'industrial-services-elementor' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 align-self-center head-btn text-center text-md-right">
					<?php if ( get_theme_mod('industrial_services_elementor_header_button_text') ) : ?>
						<a href="<?php echo esc_url( get_theme_mod('industrial_services_elementor_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('industrial_services_elementor_header_button_text' ) ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>