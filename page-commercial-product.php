<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
$images = get_field('gallery');

?>
<div id="product">
  <div class="page-header">
    <h2 class="title title--md text-center capped spaced nomargin color--black"><a href="<?php echo get_the_permalink(488); ?>"><?php echo get_the_title(488); ?></a></h2>
  </div>
  <div class="fs-row">
    <div class="fs-cell fs-xl-7 fs-lg-7 fs-md-6 fs-sm-3">
      <div class="product-images">
        <div class="fs-row">
          <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-threequarters">
            <div class="product-carousel" data-carousel-options='{"autoHeight":true,"pagination":false,"controls":true}'>
              <?php foreach($images as $image): ?>
              <div class="product-images--single">
                <img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="fs-cell fs-lg-2 fs-md-1 fs-sm-fourth">
            <?php $i = 1; foreach($images as $image): ?>
            <a href="#" class="product-images--thumb" onclick="$('.product-carousel').carousel('jumpItem', <?php echo $i; ?>);">
              <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
            </a>
            <?php $i++; endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <hr class="invisible fs-cell fs-lg-hide fs-md-6 fs-sm-3">
    <div class="fs-cell fs-xl-5 fs-lg-5 fs-md-6 fs-sm-3">
      <h1 class="product-title" itemprop="name"><?php the_title(); ?></h1>
      <hr class="invisible compact">
      <?php the_content(); ?>
      <hr class="invisible compact">
      <a href="#order" class="lightbox btn btn--outlined">Orders &amp; Info</a>
      <a href="#sample" class="lightbox btn btn--outlined">Order Samples</a>
    </div>
  </div>
  <div class="product-page__footer"></div>
</div>
<hr class="invisible">

<div id="sample" style="display:none">
  <div id="product-order-modal" class="product-order-modal wrapper">
    <h2>Samples</h2>
    <?php the_field('samples', 488); ?>
  </div>
</div>

<div id="order" style="display:none">
  <div id="product-order-modal" class="product-order-modal wrapper">
    <h2>Ordering</h2>
    <?php the_field('order', 488); ?>
  </div>
</div>

<?php get_footer(); ?>