<div id="header-search" class="header header--sm">
  <div class="fs-row">
    <div class="fs-cell fs-all-full relative">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <div>
          <input type="text" size="18" placeholder="Search" "value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
          <input type="submit" id="searchsubmit" value="Search" class="btn" />
        </div>
      </form>
      <a href="#" id="header-search__close" data-swap-linked="swap_linked_1" data-swap-target="#header, #header-search" class="btn btn--nav btn--swap btn__last ss-gizmo ss-delete right"></a>
    </div>
  </div>
</div>