							<article class="home_ar_wrap">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="featured_image">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<p class="featured_content"><?php echo excerpt('35'); ?></p>
								</div>
								
								<div class="post_meta">
									 Posted By: <?php the_author_posts_link(); ?> | Posted On: <?php the_time('d M, Y'); ?> | Posted In: <?php the_category(', ');?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'my_comment_class', 'Comments Off' ); ?>
								</div>
								
							</article>