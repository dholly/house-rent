<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package basic
 */
global $post;
global $r_opt;
get_header();
?>
	<main id="primary" class="info-page mw">
        <?php
        the_content();
        ?>
	</main><!-- #main -->

<?php

get_footer();
