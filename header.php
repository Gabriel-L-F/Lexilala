<?php
/**
 * The header template file
 *
 * Displays all of the <head> section and everything up until <main>
 *
 * @package WP_B2
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main-content">
		<?php esc_html_e( 'Skip to content', 'wp-b2' ); ?>
	</a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<div class="logo_header">
					<img src="<?php echo get_template_directory_uri(); ?>/image/logo_header.png" alt="Logo Lexilala">
				</div>
				<div class="nav-bar">
					<li><a href="#">Les mots de l'école</a></li>
					<li><a href="#">Qui sommes-nous ?</a></li>
					<li><a href="#">Mode d'emploi</a></li>
					<li><a href="#">Ressources</a></li>
					<li class="dropdown">
				</div>
				<button class="lang-select">
                    Français 
                    <span class="arrow-down"><img src="<?php echo get_template_directory_uri(); ?>/image/fleche_menu.png" alt="menu header"></span>
                </button>
            </li>
        </ul>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="menu-toggle-icon"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'wp-b2' ); ?></span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'primary-menu',
						'container'       => 'div',
						'container_class' => 'primary-menu-container',
						'fallback_cb'     => false,
					)
				);
				?>
			</nav>
		</div>
	</header>
