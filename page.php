<?php

get_header();



// Affichage de la liste des articles avec la boucle
if ( have_posts() ):
    the_post();
    ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    </article>
    <?php
endif;

get_footer();