<?php
  // Random array of colors for the ticker. 
  $input = array("blue", "green", "red", "orange", "darkBlue", "lightBlue");
  $rand_keys = array_rand($input, 2);
?>

<div id="ticker" class="marquee bg--<?php echo $input[$rand_keys[0]] . "\n"; ?>">
  <div id="ticker__wrapper" class="marquee-content_items mono mono--sm color--white">
    <div>
      <?php the_field('ticker',4); ?>
      <?php the_field('ticker',4); ?>
      <?php the_field('ticker',4); ?>
      <?php the_field('ticker',4); ?>
      <?php the_field('ticker',4); ?>   
    </div>
  </div>
</div>