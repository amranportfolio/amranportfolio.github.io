<?php get_header(); ?>

			<div class="main_wrap clear">
				<div class="wrap downnp clear">
					<p class="date">
					<?php echo "Today : " . date("l, M d , Y;")." "; ?>
					<?php echo "Time:- " . date("h:i:sa"); ?>
					
					</p>
					<div class="content_wrapper clear">
						<div class="content clear">
							
							<?php
							if(have_posts()) : ?>
							
							
							<h2 class="archive_heading">
				
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>

				<?php _e(''); ?> <?php echo single_cat_title(); ?>                     

			<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>

				<?php _e('Archive For'); ?> <?php single_tag_title(); ?> <?php _e('Tag'); ?>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

				<?php _e(' Archive For '); ?> <?php the_time('F jS, Y'); ?>                                        

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('F, Y'); ?>                                    

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

				<?php _e('Archive For'); ?> <?php the_time('Y'); ?>                                        

			<?php /* If this is a search */ } elseif (is_search()) { ?>

				<?php _e('Search Results'); ?>                            

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>

				<?php _e('Author :'); ?> '<?php echo get_the_author(); ?>' 
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

				<?php _e('Blog Archives'); ?>                                        

	<?php } ?>							
				</h2>
							
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