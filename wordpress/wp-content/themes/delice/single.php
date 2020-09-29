<?php get_header(); ?>
	<h1>SINGLE</h1>
	<?php
    // Tant que j'ai des posts, on récupere le post
                if( have_posts() ){
                    while( have_posts()){
                        the_post();
            ?>                    <?php has_category(); ?>
    
                        <div>
                        <?php the_title(); ?>
                        </div>
                        <div>
                          <?php the_content();  ?>
                        </div>
                        <!-- <div>
                          <?php the_author();  ?>
                        </div> -->
                    <?php
                    }
                }else{
                    echo '<p>Aucun contenu trouvé</p>';
                }
            ?>
<?php get_footer(); ?>