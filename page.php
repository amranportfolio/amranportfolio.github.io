<?php get_header(); ?>
			<div class="main_wrap clear">
				<div class="wrap downnp clear">
					<div class="content_wrapper clear">
						<div class="content clear">
							
							<?php
							if(have_posts()) :
								while(have_posts()) : the_post(); ?>
							
							<article class="home_ar_wrap">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="featured_image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
								
								<p><?php the_content(); ?></p>
							</article>
							
							
							<?php	endwhile;
							else:
							echo 'No Posts Found ';
							endif;
							?>
							
							
						</div>
						
						
			<?php get_sidebar(); ?>
					</div>
					<div class="down">
						<div class="pre">
							<?php previous_posts_link('&#8592; PREVIOUS'); ?>
						</div>
						<div class="next">
							<?php next_posts_link('NEXT &#8594;'); ?>
						</div>
					</div>
				</div>
				
			</div>
<?php get_footer(); ?>