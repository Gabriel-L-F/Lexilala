<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package WP_B2
 * @since 1.0.0
 */

get_header();
?>

	<div class="search-wrapper">
		<h1 class="search-title title">Trouvez facilement les mots pour mieux se comprendre</h1>
		<div class="search-bar">
			<div class="search-bar-content">
				<input class="bar" type="text" placeholder="Rechercher">
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
		<img class="ilustration-image" src="<?php echo get_template_directory_uri(); ?>/image/ilu.png" alt="illustration">
	</div>
	<div class="info">
		<p class="info-content"> 
		<b>LexiLaLa</b> est un site interactif qui facilite la communication entre les structures éducatives et les familles dont le français n’est pas la langue première. En complément des traducteurs en ligne, il propose des mots du quotidien scolaire, sélectionnés et traduits par une communauté éducative multiculturelle, puis illustrés pour en faciliter la compréhension. LexiLaLa offre aussi des ressources pour aider enseignants, parents et élèves à évoluer dans des environnements éducatifs plus inclusifs.
		</p>
	</div>
	<div class="form-head">
		<h2 class="title">Des nouveaux mots ?</h2>
		<p class="description"> <b>Vous ne trouvez pas un mot ?</b> <br><br>Proposez-en un nouveau et contribuez à enrichir LexiLaLa avec des mots utiles au quotidien scolaire, pensés par et pour la communauté éducative.</p>
	</div>
	
	<form class="add-word block" method="post" action="">
    <h3 class="form-title">Ajout de mot</h3>

    <input type="hidden" name="send_word_form" value="1">

    <div class="in-row">
        <label class="language-peaker">Langue</label>
        <select name="langue" required>
            <option value="">Choisir la langue</option>
            <option value="français">Français</option>
            <option value="anglais">Anglais</option>
        </select>
    </div>

    <label>Écrivez le mot que vous souhaitez ajouter</label>
    <input class="insert_word" type="text" name="mot" required>

    <label>Écrivez la définition</label>
    <input type="text" name="description" required>

    <div class="in-row">
        <input class="checkbox" type="checkbox" name="conditions" required>
        <p class="condition">Acceptez les conditions d'ajout de ce mot</p>
    </div>

    <button class="send" type="submit">Envoyer</button>
</form>



	<div class="soutient block">
		<p class="greetings">J’utilise vos ressources, j’apprécie votre travail, je vous soutiens !</p>
		<button class="subscribe">Nous soutenir</button>
	</div>

<?php


if ( isset($_POST['send_word_form']) && $_POST['send_word_form'] == 1 ) {

   
    $langue      = sanitize_text_field($_POST['langue']);
    $mot         = sanitize_text_field($_POST['mot']);
    $description = sanitize_textarea_field($_POST['description']);

    if ( !isset($_POST['conditions']) ) {
        echo "<p style='color:red;'>Vous devez accepter les conditions.</p>";
    } else {
        global $wpdb;
        $table_name =  'lx_conseiller';

        $data = array(
            'langue'      => $langue,
            'mot'         => $mot,
            'description' => $description,
            'date_ajout'  => current_time('mysql')
        );

        $format = array('%s','%s','%s','%s');

        $wpdb->insert($table_name, $data, $format);

      if ( $wpdb->insert_id ) {
    echo "<p style='color:green;'>Mot ajouté avec succès ! ID = " . $wpdb->insert_id . "</p>";
} else {
    echo "<p style='color:red;'>Erreur lors de l'ajout du mot.</p>";
    echo "<p>Erreur MySQL : " . $wpdb->last_error . "</p>";
}
    }
}

get_footer();