<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

  <h1><?php _e('Search Results for','html5reset'); ?> <em><?php echo get_search_query(); ?></em></h1>

  <?php get_search_form(); ?>

	<?php if (have_posts()) : ?>

		<?php post_navigation(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				<?php if($post->post_type == 'post') :?>
          <?php posted_on(); ?>
        <?php elseif($post->post_type == 'page') :?>
          <span>Page</span>
        <?php endif; ?>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
