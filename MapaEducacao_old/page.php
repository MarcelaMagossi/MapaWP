<?php get_header(); ?>
	<div class="container">
	<div class="row">
	<div class="col-md-9 col-xs-9 col-sm-9">
	   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="title"><?php the_title(); ?></div></center>
	
	         <?php the_content(); ?>

	         <?php endwhile?>
	         <?php else: ?>
	         Essa página não existe!
	         <?php endif; ?>
		</div>
	</div>
	</div>
<?php get_footer(); ?>