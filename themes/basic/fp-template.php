<?php
/*
Template Name: Шаблон главной
Template Post Type: page
*/
get_header();
?>

<?php
get_block('headertop'($args));
get_block('headermedia'($args));
?>

<?php
get_block('howitworks'($args));
get_block('features'($args));
get_block('whyus'($args));
get_footer();
