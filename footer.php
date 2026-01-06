<?php
/**
 * The footer template file
 *
 * Contains the closing of the #page div and all content after.
 *
 * @package WP_B2
 * @since 1.0.0
 */

?>

<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-column footer-mission">
            <div class="logo">
                <a href="http://lexilala.com">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo_header.png" alt="Logo Lexilala">
                </a>
            </div>
            <p class="mission-statement">
                Faciliter la communication entre l'école et toutes les familles, quelles que soient leurs langues.
            </p>
        </div>

        <div class="footer-column footer-sitemap">
            <h3 class="sitemap title">Sitemap</h3>
            <ul>
                <li><a href="#">Les mots de l'école</a></li>
                <li><a href="http://lexilala.com/about/">Qui sommes-nous ?</a></li>
                <li><a href="#">Mode d'emploi</a></li>
                <li><a href="#">Ressources</a></li>
            </ul>
        </div>

        <div class="footer-column footer-social">
            <h3 class="social title">Social</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Linkedin</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <span class="legal-link"><a href="#">Mentions légales</a></span>
        <span class="legal-link"><a href="#">Newsletter</a></span>
        <span class="copyright">&copy; 2025 Lexilala</span>
        <span class="legal-link"><a href="#">Politique de confidentialité</a></span>
    </div>
</footer>