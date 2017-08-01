<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
$images = get_field('gallery'); 

?>

<article <?php post_class(); ?>>
	<div class="page-header">
    <h2 class="title title--md text-center capped spaced nomargin color--black"><?php the_title(); ?></h2>
  </div>
	<div class="hentry__content">
    <div class="press-gallery fs-row">
<?php foreach($images as $image): ?>
      <div class="fs-cell fs-lg-fourth fs-md-third fs-sm-half press-gallery-item">
        <div class="press-gallery__image-wrapper">
          <a target="blank" href="<?php echo $image['description']; ?>"><img src="<?php echo $image['url']; ?>" class="press-gallery__image" /></a>
        </div>
        <div class="press-gallery__image-caption text-center">
          <a target="blank" href="<?php echo $image['description']; ?>">Read More</a>
        </div>
      </div>
<?php endforeach; ?>
    </div>
	</div>
  <div class="hentry__content">
    <div class="fs-row">
      <div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered text-center">
        <?php the_post(); the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>