<?php 

Themewrangler::setup_page();get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
$thumb_url = $thumb_url_array[0];
$images = get_field('gallery');

?>
<hr class="invisible">
<div id="product">
  <div class="fs-row">
    <div class="fs-cell fs-xl-7 fs-lg-7 fs-md-6 fs-sm-3">
      <div class="product-images">
        <div class="fs-row">
          <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-threequarters">
            <div class="product-carousel" data-carousel-options='{"autoHeight":true}'>
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
      <a href="<?php echo get_permalink(488); ?>" class="product-subtitle color--gray">Commercial Applications</a>
      <h1 class="product-title" itemprop="name"><?php the_title(); ?></h1>
      <hr class="invisible compact">
      <?php the_content(); ?>
      <hr class="invisible compact">
      <a href="#order" class="lightbox btn btn--outlined">Place Order</a>
    </div>
  </div>
  <div class="product-page__footer"></div>
</div>
<hr class="invisible">

<div id="order" style="display:none">
  <div id="product-order-modal" class="product-order-modal wrapper">
    <h2>Ordering</h2>
    <div class="color--red">
      +1 503 765 8056<br>
      <a href="mailto:order@timelinewood.com">orders@timelinewood.com</a>
    </div>
    <hr class="invisible compact">
    <div class="color--black">
      To place an order, please call or email the Timeline studio and a sales
      associate will assist you. Each product from our Color Series is available in 5 plank widths,
      2 plank lenghts and 3 edge options and overed in unlimited supply.
    </div>
    <hr class="invisible compact">
    <div class="color--gray">
      Selected sock is avaiable at the Tiemline facility in Hilsboro, Oregon. <br>Please contact us for a price list.
    </div>
  </div>
</div>

<?php get_footer(); ?>