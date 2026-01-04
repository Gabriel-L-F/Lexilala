<?php
/*
Template Name: Home
 * @package WP_B2
 * @since 1.0.0
 */

get_header();
?>
<main>
	<div class="search-wrapper">
		<h1 class="search-title">Trouvez facilement les mots pour mieux se comprendre</h1>
		<div class="search-bar">
			<div class="search-bar-content">
				<input type="text" placeholder="Rechercher">
				<button  class="icon-search">
					<img class="loupe-recherche" src="<?php echo get_template_directory_uri(); ?>/image/loupe-recherche.png" alt="Logo Lexilala">
				</button>
			</div>
			<button class="filter">
					<img class="filter-image" src="<?php echo get_template_directory_uri(); ?>/image/filter.png" alt="Logo Lexilala">
			</button>
		</div>
	</div>
	<div class="info">
	<p class="info-content">
		Lexilala propose une liste de plus de 700 mots clés et expressions d’usage fréquent dans les structures de la Petite Enfance et en contexte scolaire, traduits en 17 langues, plus le français !<br><br>
		Vous pouvez écouter chacun des mots dans les différentes langues et générer une carte image composée d’une illustration et de plusieurs traductions afin de transmettre un message.
	</p>
	</div>
	<div class="ilustration">
		<img class="ilustration-image" src="<?php echo get_template_directory_uri(); ?>/image/ilu.png" alt="Logo Lexilala">
	</div>
	<div class="info">
		<p class="info-content"> 
		<b>LexiLaLa</b> est un site interactif qui facilite la communication entre les structures éducatives et les familles dont le français n’est pas la langue première. En complément des traducteurs en ligne, il propose des mots du quotidien scolaire, sélectionnés et traduits par une communauté éducative multiculturelle, puis illustrés pour en faciliter la compréhension. LexiLaLa offre aussi des ressources pour aider enseignants, parents et élèves à évoluer dans des environnements éducatifs plus inclusifs.
		</p>
	</div>
</main>
<?php
get_footer();
