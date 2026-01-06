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


<header id="masthead" class="site-header">
	<div class="container">
		<div class="site-branding">
			
			<div class="burger">
			<span></span>
			<span></span>
			<span></span>
			</div>

			<div class="logo_header">
			<a href="http://lexilala.com">
				<img class="logo"src="<?php echo get_template_directory_uri(); ?>/image/logo_header.png" alt="Logo Lexilala">
			</a>
			</div>

			<ul class="nav-bar">
			<li><a href="#">Les mots de l'école</a></li>
			<li><a href="http://lexilala.com/about/">Qui sommes-nous ?</a></li>
			<li><a href="#">Mode d'emploi</a></li>
			<li><a href="#">Ressources</a></li>
			<li class="dropdown">
				<select class="lang-select" name="lang-select" id="lang-select">
				<option value="fr" selected>Français</option>
				<option value="en">Anglais</option>
				<option value="es">Espagnol</option>
				<option value="de">Allemand</option>
				</select>
			</li>
			</ul>
		</div>
	</div>



			<nav id="site-navigation" class="main-navigation">

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
