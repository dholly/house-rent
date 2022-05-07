<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basic
 */
require_once get_template_directory() . '/inc/block-manager.php';
require_once get_template_directory() . '/inc/helpers.php';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    $meta_title = ''; $meta_description = '';
    //$meta_title = get_field('meta_title');
    //$meta_description = get_field('meta_description');
    ?>
    <title><?php echo $meta_title  ?></title>
    <meta name="description" content="<?php echo $meta_description  ?>">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php wp_body_open();?>

<div id="page">
    <header>

    </header>

