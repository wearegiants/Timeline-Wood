<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body <?php body_class('fs-grid'); ?>>
<div id="wrapper">

<header id="header" class="relative mobile-menu relative fs-grid-fluid">
  <div class="fs-row relative header header--sm" id="header-main__wrapper">
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-fourth fs-sm-hide">
      <a data-swap-target=".mobile-menu" class="mobile-toggle btn--hamburg btn--nav btn_first btn_last"><span class="fs-sm-hide">Menu</a>
    </menu>
    <menu id="header-main" class="fs-cell fs-lg-fifth fs-md-half fs-sm-half text-center">
      <a href="<?php echo get_site_url(); ?>" id="header--logo" class="btn btn--nav btn--logo"><?php bloginfo('name' );?></a>
    </menu>
    <menu class="fs-cell fs-xl-fifth fs-lg-3 fs-md-fourth fs-sm-half text-right">
      <a href="#" data-swap-linked="swap_linked_1" data-swap-target="#header, #header-search" class="btn btn--nav btn--swap btn_first header__icon--search">
        <span class="fs-md-hide fs-sm-hide">Search</span>&nbsp;
        <img src="/assets/img/magnify.svg" alt="Search">
      </a>
      <?php include locate_template('parts/store/shopify--bag.php' ); ?>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-xl-6 fs-lg-6 fs-md-hide fs-sm-hide">
      <a href="http://timeline-wood.myshopify.com" data-swap-target="#header-products" class="btn btn--nav btn--products product--swap">Products</a>
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
    </menu>
  </div>
  <div class="pinned pinned__bottom">
    <?php include locate_template('parts/mobile-menu.php' ); ?>
  </div>
  <?php include locate_template('parts/header-search.php' ); ?>
</header>
<?php include locate_template('parts/header-products.php' ); ?>

<div id="content-wrapper" class='fs-grid'>
