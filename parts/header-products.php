<div id="header-products" class="product-drop text-center">
  <div class="fs-row relative">
    <div class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
      <div class="wrapper bg--black-75">
        <div class="fs-row">
<?php $rows = get_field('product_collections'); ?>
<?php $items = count($rows); ?>
<?php $i=1; foreach ($rows as $row):?>
<?php $image = $row['thumbnail']; ?>
<?php 
  if($items == 2) {
    if($i == 1) {
      $lgPush = 'fs-lg-fourth fs-lg-push-fourth';
    } else {
      $lgPush = 'fs-lg-fourth';
    }
  } elseif($items == 3) {
    if($i == 1) {
      $lgPush = 'fs-lg-fifth fs-lg-push-fifth';
    } else {
      $lgPush = 'fs-lg-fifth';
    }
  } else {
    $lgPush = 'fs-lg-fourth';
  }
?>
          <div class="fs-cell <?php echo $lgPush; ?> product-<?php echo $i; ?>">
            <a href="<?php echo 'http://timeline-wood.myshopify.com/collections/skinnies/' #echo $row['url']; ?>" class="product-drop__link">
              <div class="product-drop__thumb">
                <img src="<?php echo $image['sizes']['gallery-sm']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>" />
              </div>
              <h4 class="color--white"><?php echo $row['title']; ?></h4>
            </a>
          </div>
<?php $i++; endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>