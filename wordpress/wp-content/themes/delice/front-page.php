<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <main>
          <div class=" policy p-4">
            <section class="mb-50">
            <h2 class="titre-h2-front-page">Les dernières recettes</h2>
              <div class="d-flex justify-content-between">
                <?php
                
                    $recentPosts = new WP_Query();
                    $recentPosts->query('showposts=3');
                    ?>
                <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div class="card">
                        <p class="text-center m-revert h-40"><?php the_title() ?></p>
                        <a href="<?php the_permalink(); ?>" class="card-img-top"><div class="text-center"><?php the_post_thumbnail('medium', ['class' => '', 'alt'=>'', 'style' => 'height : auto;']); ?></div></a>
                        <div class="card-body text-center">
                        <p>
          <a href="<?php the_permalink(); ?>" class="">Voir l'article</a>
        </p></div>
				  

                    </div>
                <?php endwhile; ?>
            </div>
</section>
            <section>
            <h2 class="titre-h2-front-page">Galerie Photos</h2>
    <div class="row">
    <?php echo do_shortcode('[foogallery id="206"]'); ?>
    </div></section>
        </div>
        </main>
        <?php endwhile; endif; ?>
  <div>
		<svg id="" preserveAspectRatio="xMidYMax meet" class="" viewBox="0 0 1600 190" style="display: block;" data-height="200">

			<path class="" style="fill:#FC88A14D;" d="M1638,192c0-25.405-20.595-46-46-46c-20.729,0-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561c-5.75-18.848-23.271-32.561-44-32.561s-38.25,13.713-44,32.561 C1014.25,159.713,996.729,146,976,146s-38.25,13.713-44,32.561C926.25,159.713,908.729,146,888,146s-38.25,13.713-44,32.561 C838.25,159.713,820.729,146,800,146s-38.25,13.713-44,32.561C750.25,159.713,732.729,146,712,146s-38.25,13.713-44,32.561 C662.25,159.713,644.729,146,624,146s-38.25,13.713-44,32.561C574.25,159.713,556.729,146,536,146s-38.25,13.713-44,32.561 C486.25,159.713,468.729,146,448,146s-38.25,13.713-44,32.561C398.25,159.713,380.729,146,360,146s-38.25,13.713-44,32.561 C310.25,159.713,292.729,146,272,146s-38.25,13.713-44,32.561C222.25,159.713,204.729,146,184,146s-38.25,13.713-44,32.561 C134.25,159.713,116.729,146,96,146s-38.25,13.713-44,32.561C46.25,159.713,28.729,146,8,146c-25.405,0-46,20.595-46,46 c0,24.056,18.469,43.787,42,45.816V238h1596v-0.708C1621.589,233.504,1638,214.675,1638,192z"></path>
		</svg>
  </div>

<?php get_footer(); ?>