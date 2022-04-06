<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303_Assignment
 * @since MTM6303_Assignment 1.0
 */

?>
<?php echo get_the_ID(); 

$thumbnail = get_the_post_thumbnail_url('MTM6303_Assignment-featured-image');


echo $thumbnail;
 
if ( $thumbnail ) {
    $alt_text = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );
 
    if ( ! empty( $thumbnail ) ) {
        if ( ! empty( $alt_text ) ) {
            $alt_text = $alt_text;
       } else {
            $alt_text = __( 'no alt text set', 'textdomain' ); 
       }
       echo '';
   }
}


?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php MTM6303_Assignment_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'MTM6303_Assignment' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

