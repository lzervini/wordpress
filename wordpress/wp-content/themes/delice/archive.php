<?php get_header(); ?>
<main>
	<h2><?php the_category(); ?></h2>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">

				<div class="">
				<?php the_post_thumbnail(); ?>
				<div class="text-justify">

					<p class="post__meta text-center">
						Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
						par <?php the_author(); ?> • <?php comments_number(); ?> <br> <?php the_category(' | '); ?>
                    </div>
					</p>
				
					  <?php the_excerpt(); ?>
				  
					  <p>
						<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
					</p>
				</div>
			</div>

			</article>
			
			<?php endwhile; endif; ?>
		</main>
<?php get_footer(); ?>