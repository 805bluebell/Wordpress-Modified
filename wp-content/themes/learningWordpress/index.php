<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

    <h2> <?php the_title(); ?> </h2>
    <?php the_content(); ?>
    <h3>Help</h3>

    <?php endwhile;
    else:
        echo '<p>Nothing found</p>';

    endif;



?>