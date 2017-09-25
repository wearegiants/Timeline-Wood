<?php 

if ( $post->post_parent == '488' ) { include locate_template('page-commercial-product.php'); } else {

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<div class="page-header">
    <h2 class="title title--md text-center capped spaced nomargin color--black"><?php the_title(); ?></h2>
  </div>

	<div class="hentry__content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php } get_footer(); ?>