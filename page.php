<?php get_header(); ?>
<?php while(have_posts()):the_post(); ?>
<div class="cont">
<h3>contacts</h3>
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>