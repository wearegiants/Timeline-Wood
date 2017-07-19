<div class="page-header">
  <h2 class="title title--md text-center capped spaced nomargin color--black"><?php the_title(); ?></h2>
  <?php 
    $thecontent = get_the_content();
    if(!empty($thecontent)): 
  ?>
  <div class="page-header__content text-center fs-row">
    <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-centered">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endif; ?>
</div>
