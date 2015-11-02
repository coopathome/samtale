<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h1 class="entry-title"><?php the_title(); ?></h1>

    <?php if($post->post_parent) {
      $parent = $wpdb->get_row("SELECT post_title FROM $wpdb->posts WHERE ID = $post->post_parent");
      $parent_link = get_permalink($post->post_parent); ?>
      <a href="<?php echo $parent_link; ?>" class="parent-link">&larr; Back to <strong><?php echo $parent->post_title; ?></strong></a>
    <?php } ?>

      <?php	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); ?>
      <ul class="subpage-nav">
        <?php foreach( $mypages as $page ) {
          $content = $page->post_content; if ( ! $content )
          $content = apply_filters( 'the_content', $content ); ?>
          <li><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></li>
        <?php } ?>
      </ul>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

      <?php // comments_template(); ?>

		</article>

	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
