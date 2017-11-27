<?php
/*
 * Template Name: Category page
 */

 get_header(); ?>

<div class="small-red-background small-space">
	<div class="container">
		<div style="color: white; padding-top:15%;" class="row">
			<h1 style="color: white;"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="container small-space">
	<div class="row">
		<div style="background-color: white;" class="two-thirds column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>	
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
		<div class="one-third column">
		</div>
	</div>
</div>

 <?php get_footer() ; ?>