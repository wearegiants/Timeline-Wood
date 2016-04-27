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

<body class="fs-grid">
<div id="wrapper">

<header id="header" class="header header--sm relative mobile-menu">
  <div class="fs-row">
    <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-fourth fs-sm-hide">
      <a data-swap-target=".mobile-menu" class="mobile-toggle btn--hamburg btn--nav btn_first btn_last"><span class="fs-sm-hide">Menu</a>
    </menu>
    <menu id="header-main" class="fs-cell fs-lg-fifth fs-md-half fs-sm-half text-center">
      <a href="<?php echo get_site_url(); ?>" id="header--logo" class="btn btn--nav btn--logo btn_first"><?php bloginfo('name' );?></a>
    </menu>
    <menu id="header-search" class="fs-cell fs-lg-fifth fs-md-fourth fs-sm-fourth text-right">
      <ul>
        <li><a href="#search-modal" id="header--logo" class="open--modal btn btn--nav btn_first ss-gizmo ss-search right"><span class="fs-md-hide fs-sm-hide">Search</span></a></li>
        <li><a href="#search-modal" id="header--logo" class="open--modal btn btn--nav btn_first ss-gizmo ss-cart right"><span class="fs-md-hide fs-sm-hide">Bag</span></a></li>
      </ul>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-xl-6 fs-lg-7 fs-md-hide fs-sm-hide">
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
    </menu>
  </div>
  <div class="pinned pinned__bottom">
    <?php include locate_template('parts/mobile-menu.php' ); ?>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
