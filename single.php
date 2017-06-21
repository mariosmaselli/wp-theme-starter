<?php 

/* ----------
Single 
---------- */

get_header(); 

?>

 <div class="page page-wrapper">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<h1><?php the_title(); ?></h1>

				<?php do_action('loop_example_output' ); ?>    



		
		</div>

	<?php endwhile; ?>

	<?php endif; ?>

 </div>

<?

get_footer();