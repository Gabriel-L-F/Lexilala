<?php
/**
 * Template Name: About
 * Template Post Type: page
 *
 * Page template for the About page.
 *
 * @package WP_B2
 * @since 1.0.0
 */
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body"<?php body_class('about-page'); ?>>
    <div class="main"> 
    <h1 class="title">Qui sommes-nous ?</h1>
    <div class="logo-dulala">
        <p class="intro">Ce projet est développé par l’association Dulala, un laboratoire national de ressources et formations pour l’éducation plurilingue et interculturelle.</p>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_dulala.png" alt="Logo Dulala">
    </div>
    <p class="parteners">Lexilala existe et s’enrichit grâce aux contributions précieuses de plusieurs partenaires : le CASNAV de Paris, la FCPE de la ville de Montreuil, l’association Fable-Lab, l’institut de recherche dix—milliards—humains, l’école des langues Jakinola, l’association AES, les nombreux acteurs des « Cités éducatives » en France, les éditions Syros, l’association Entre & Avec, l’école Thot… <br> <br> Un grand merci au laboratoire Icar et au Labex ASLAN, par l’intermédiaire du séminaire ELSE « Rencontres entre acteurs du bi-plurilinguisme », qui soutiennent le projet Lexilala.</p>
    <div class="logo-parteners">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_icar.png" alt="Logo Icar">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_aslan.png" alt="Logo Labex Aslan">
    </div>
    <p class="thanks">Un grand merci également aux étudiant·es 
        du Master 2 Français Langue Étrangère de l’Université Paul-Valéry Montpellier 3 qui ont testé et évalué le site Lexilala. <br> <br>
        Un énorme merci également à tous les traducteurs et illustrateurs, qui sont trop nombreux pour être tous cités ici. En particulier, 
        nous adressons des remerciements chaleureux et notre sincère reconnaissance à Ilaria Marsigli, Valentina Semeghini, Julitine Qin, 
        Laura Gomez, Anamiga Joseph, Mama Doucouré, Salif Sy, Idrissa Konté, Lavinia Boteanu, Claudia Pietri, Alexandre Wehbe, Dimitra Tzatzou, 
        Emily Fogarty, Maria et Lucia Huerta, Jesus Garate, Nour Aziz, Ammar Zalt, Natalia Ribin, Irina Latour, Paola Reyes, Konstantine Archaia,
        Amalia Chatziathanasiou, Haydar Iscen, Özlem Altintas, Alice Marsigli, Zhen Lin, Marna Emiliani, Mélanie Kidnan, Marie Windels, Nathalie Guérin,
        Nadjat Belkaïd, Issam Boulekbache, Ina Delaunay-Ciodaru, Vithusa Vasiddan, Christina Kalpakidou, Tatiana Martin, Malika Pedley,
        Cédric Pernette, Yagmur Ceylan Uslu, Adele Neri, Diana Buscemi, Agence Verba Translation, Ecole Malégarie de Bayonne, Cécile Chicot,
        Cécile Vesin, Ouafae Adardor, Samira Bentalha, Wafa Bedjaoui, Georgios Bourliakos, Iris Bouteldja, Ines Charrada, Isha Corcoran, 
        Founé Diawara, Berna Odabas, Zoé Roth Ogier, Gisèle Sawaya, Dmitri et Marina Savostianoff, Abigail Stern, Dyhia Stiti, Rado Suciu, 
        Ali Turek, Paraskevi Tzevelekaki, Katy Zhu, Association AES, Maëlle Vigouroux, Rosa Faneca, Marie-Catherine Scherer, Fabienne Bergmann, 
        Olga Zaritska, Ilona Matei, Billel et Zara Ben Medakhene, Houria Toula, Vasuki Srishoban, Merve Sengul, Mihad Belmir, Jasmina Iljazi, 
        Assaf Matityahu, Maria Siemushyna, Caterina Ramonda, Doha Najji, compagnie Les frères Ducasse, Anisa Shyti, Nassim Ibrahimi,
        Fahim Sadeqi… <br> <br> Ce projet est financé par l’ANCT, la Fondation de France, la Fondation Daniel et Nina Carasso, la Fondation Pierre Bellon 
        ainsi que le FONJEP. </p>
    <div class="logo-thanks">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_anct.png" alt="Logo anct">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_fondation_de_france.png" alt="Logo fondation de france">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_fonjep.png" alt="Logo fonjep">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_fondation_pierre_bellon.png" alt="Logo fondation pierre bellon">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/image/logo_carasso.png" alt="Logo carasso">
    </div>
    </div>
</body>
</html>
<?php
get_footer();
