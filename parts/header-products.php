<div id="header-products" class="product-drop text-center">
  <div class="fs-row relative">
    <div class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
      <div class="wrapper bg--black-75">
        <div class="fs-row">
<?php $rows = get_field('product_collections'); ?>
<?php foreach ($rows as $row):?>
<?php $image = $row['thumbnail']; ?>
          <div class="fs-cell fs-lg-fourth">
            <a href="<?php echo 'http://timeline-wood.myshopify.com/collections/skinnies/' #echo $row['url']; ?>" class="product-drop__link">
              <div class="product-drop__thumb">
                <img src="<?php echo $image['sizes']['gallery-sm']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>" />
              </div>
              <h4 class="color--white"><?php echo $row['title']; ?></h4>
            </a>
          </div>
<?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>