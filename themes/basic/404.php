<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package basic
 */

get_header();
?>
	<main  class="page-404 tc mw">

        <h1 class = "page-404__title">404</h1>
        <div class = "page-404__subtitle">К сожалению, страница <span>не найдена :(</span></div>
        <div class = "page-404__back">
            <a href = "<?php echo get_site_url()?>">Вернуться на главную</a>
        </div>

	</main><!-- #main -->

<?php
get_footer();
