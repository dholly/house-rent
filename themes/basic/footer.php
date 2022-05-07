<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic
 */

?>
<footer>

<?php wp_footer();
get_block('underfooter', $args);
get_block('footer', $args);
get_block('extrafooter');
?>
</footer>
</div>
</body>
</html>
