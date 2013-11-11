<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="content blog">

	<?php if ( have_posts() ): ?>

	<?php while ( have_posts() ) : the_post(); ?>

			<article>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

				<?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
				
				<div class="theContent">
					<?php the_content('Read More...'); ?>
					<span class="blogdate"><time datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?></time></span> 
				</div>

			</article>

	<?php endwhile; ?>
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div class="nav-below">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>
	<?php else: ?>
	<h2>No posts to display</h2>
	<?php endif; ?>

</div><!-- end .content -->

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>