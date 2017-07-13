<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?>>
	<?php include locate_template('parts/page-header.php' ); ?>
<div class="fs-row">
<?php 
  $home_args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
  );
  $home_posts = get_posts( $home_args );
  foreach ( $home_posts as $post ) : setup_postdata( $post ); 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
  $thumb_url = $thumb_url_array[0];
?>

<div class="fs-cell fs-all-half">
  <div class="hero relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
    <div class="centered text-center">
      <h1 class="color--white"><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h1></h1>
    </div>
    <div class="covered bg--black-50"></div>
  </div>
</div>

<?php 
  endforeach;
  wp_reset_postdata(); 
?>
</div>

	<div class="hentry__content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
				<?php the_post(); the_content(); ?>
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>