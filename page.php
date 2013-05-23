<?php get_header(); ?>

<p>pageページが読み込まれています。</p>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>