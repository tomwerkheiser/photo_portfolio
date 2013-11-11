<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2><?php the_title(); ?></h2>

	<?php //comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	
	<div class="content theContent">
		<?php the_content(); ?>	

		<?php echo 'Categories: ' . get_the_category_list(', ' ); ?>

		<span class="blogdate"><time datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?></time></span> 		
	</div>
	<?php //comments_template( '', true ); ?>

</article>
<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>