<?php
/*
Template Name: About Page Template 
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
				<div id="about-hero" class="span12 well dropShadow"></div>	
				<div id="main" class="span12 clearfix well dropShadow" role="main">
					
					<? //staff head shots ?>
					<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
					</ul>
					<ul class="thumbnails">	
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
						<li class="span3">
							<div class="thumbnail">
							<img src="<?php bloginfo('template_directory'); ?>/img/headshots/headshot.png" alt="picture" />
								<h3 class="about-name">Zach Zimbler</h3>
								<p class="about-title">Web Guy</p>
							</div>	
						</li>		
					</ul>


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
