<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('new');
?>
 <main>
        <section class="error-404">
            <div class="left">
                <p>Error 404</p>
                <h4>Não conseguimos encontrar a página <br> que você está procurando </h4>
            </div>

            <div class="right">
                <img src="<?php echo get_template_directory_uri();?>/assets/error.png" width="500" height="500" alt="Página não encontrada">
                <div class="shadow"></div>
            </div>
        </section>
    </main>

</main>

<?php get_footer(); ?>
