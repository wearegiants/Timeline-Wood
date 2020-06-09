<?php if(is_front_page()): ?>
<hr class="invisible">
<div class="fs-row">
  <div class="fs-cell fs-all-full">
    <div class="insta-wrapper">
      <div class="text-center"><a class="btn btn--big btn--outlined" href="http://instagram.com/timelinewood" target="blank">Instagram</a></div>
      <hr class="compact invisible">
      <?php echo do_shortcode('[instashow id="1"]'); ?>
      <hr class="compact invisible">
    </div>
  </div>
</div>

<?php endif; ?>
