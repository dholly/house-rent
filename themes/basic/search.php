<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pojarka
 */

get_header();
?>

    <main class = "page-container mw">
        <div class = "page-container__content search-content">
            <h1>
                Результаты поиска: "<?php echo get_search_query() ?></span>"
            </h1>
        <?php if ( have_posts() ) : ?>
                <div>
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                ?>
                <div class = "search-result d-flex">
                    <a class = "search-result__img" href = "<?php echo get_post_permalink()?>">
                        <img src = "<?php echo get_the_post_thumbnail_url($post,'thumbnail')?>">
                    </a>
                    <div class = "search-result__content">
                        <a href = "<?php echo get_post_permalink()?>">
                        <h2>
                            <?php the_title() ?>
                        </h2>
                        </a>
                        <div>
                            <?php the_excerpt() ?>
                        </div>
                    </div>
                </div>

                <?php

            endwhile;
            ?>
            </div>
        <?php
            the_posts_navigation();
        else :
                ?>
            <div class = "search-not-found">
                <div>К сожалению поиск не дал результатов :(</div>
                <div>
                    <button class = "search-btn btn2 blue">Попробовать еще раз</button>
                </div>
            </div>
            <?php
        endif;
        ?>
        </div>
    </main><!-- #main -->

<?php
get_footer();
