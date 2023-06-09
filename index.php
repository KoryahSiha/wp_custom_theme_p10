<?php

get_header();

// Affichage de la liste des articles avec la boucle
if ( have_posts() ):
    while (have_posts()):
        the_post();
        ?>
        <article>
            <h2><a href="<?= get_permalink() ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </article>
        <?php
    endwhile;
endif;

get_footer();