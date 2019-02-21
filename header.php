<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	
		<!-- Post Section -->
	<!--
	<?php  
	
		if(have_posts()) :
			while(have_posts()): the_post();?>
				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<p><?php the_content();?></p>
	<?php endwhile;
		else:
			echo ('Sorry, Nothing Found');
		endif;
	
	?>
	-->
	
	<div class="wrapper clear">
			<div class="main_wrap header_bg clear">
				<div class="wrap clear">
					<header>
						<div class="header">
							<div class="header_left">
								<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
								<p><?php bloginfo('description'); ?></p>
							</div>
							<div class="header_right">
								<?php 
								$args = array(
									'theme_location' =>'primary'
								);
								
								wp_nav_menu($args); ?>
							
							</div>
						</div>
					</header>

				</div>
			</div>