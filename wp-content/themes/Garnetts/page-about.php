/*
Template Name: About
*/


<?php get_header(); ?>
			
			<div id="content">
				<div class="row">
					<div class="large-6 columns">This is my first WP site.</div>
					<div class="large-6 columns">This is my first WP site.</div>

				</div>
			
				<div id="inner-content" class="row clearfix">

			
				    <div id="main" class="large-8 medium-8 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
   
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>