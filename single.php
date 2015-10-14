<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="post-meta">
        <span class="post-author">Posted by <?php the_author_posts_link() ?> on <?php the_date(); ?></span>
      </div>
      <div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

				<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>

		</article>

	<?php comments_template(); ?>

  <div class="post-nav">
    <div class="post-nav-prev">
      <?php
        $prev_post = get_previous_post();
        if ( is_a( $prev_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $prev_post->ID ); ?>">&larr; <?php echo get_the_title( $prev_post->ID ); ?></a>
          <!-- <br><small><?php echo get_the_date( $prev_post->date ); ?></small> -->
        <?php }
      ?>
    </div>
    <div class="post-nav-next">
      <?php
        $next_post = get_next_post();
        if ( is_a( $next_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?> &rarr;</a>
          <!-- <br><small><?php echo get_the_date( $next_post->date ); ?></small> -->
        <?php }
      ?>
    </div>
  </div>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
