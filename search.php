<?php get_header(); ?>

			<div class="main_wrap clear">
				<div class="wrap downnp clear">
				<div class="time_search">
					<p class="date">
						<iframe src="http://free.timeanddate.com/clock/i6mbrqym/n73/tlbd/fs16/tct/pct/tt0/tw1/tm1/th2/ta1" frameborder="0" width="269" height="22" allowTransparency="true"></iframe>
					</p>
					<div class="cust_search">
						<?php get_search_form(); ?>
					</div>
				</div>
					<div class="content_wrapper clear">
						<div class="content clear">
							
							<?php
							if(have_posts()) : ?>
							
							<h2 class="search_result">Search Result For: "<?php the_search_query(); ?>"</h2>
							
							<?php
								while(have_posts()) : the_post(); ?>
							
							<?php get_template_part('content'); ?>
							
							
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