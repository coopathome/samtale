<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

 <?php if ( is_user_logged_in() ) { ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post post--preview" id="post-<?php the_ID(); ?>">

			<h2 class="entry-title" style="margin-bottom: 0;">
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      </h2>

  		<em>Posted by <?php the_author_posts_link() ?> on <a href="<?php the_permalink();?>"><?php the_time('j F, Y'); ?></a></em>

      <br>
      <br>
			<div class="entry post__entry">
				<?php the_content(); ?>
			</div>

			<aside class="postmetadata post__meta">
				<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
				<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?><br>
        <a href="<?php the_permalink() ?>#respond"><strong>Join the conversation</strong>
          <?php comments_number( 'No comments yet &#187', '1 Comment &#187', '% Comments &#187' ); ?>
          <?php // comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
        </a>
			</aside>

		</article>

	<?php endwhile; ?>

	<div class="index-navigation">
    <?php post_navigation(); ?>
  </div>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php } else { ?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hub-hero-colour.jpg" >
  <h1>Please <a href="<?php bloginfo('url');?>/login">sign in</a> with your CRS ID.</h1>
  <p>Talk to your manager if you need help with your CRS ID.</p>
  <a href="<?php bloginfo('url');?>/login" class="um-button um-alt [btn]">Sign In</a>
<?php } ?>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
