<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
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

<header id="header" class="header header--md relative mobile-menu">
  <div class="fs-row">
    <menu id="header-mobile" class="fs-cell fs-lg-third fs-md-2 fs-sm-fourth">
      <a data-swap-target=".mobile-menu" class="mobile-toggle btn--hamburg btn--nav btn_first btn_last"><span class="fs-sm-hide">Menu</a>
    </menu>
    <menu id="header-main" class="fs-cell fs-lg-third fs-md-2 fs-sm-half text-center">
      <a href="/" id="header--logo" class="btn btn--nav btn--logo btn_first"><?php bloginfo('name' );?></a>
    </menu>
    <menu id="header-search" class="fs-cell fs-lg-third fs-md-2 fs-sm-fourth text-right">
      <a href="#search-modal" id="header--logo" class="open--modal btn btn--nav btn_first ss-gizmo ss-search right"><span class="fs-sm-hide">Search</span></a>
    </menu>
    <menu id="header-navigation" class="fs-cell fs-lg-hide fs-md-hide fs-sm-hide text-right">
      <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
    </menu>
  </div>
  <div class="pinned pinned__bottom">
    <?php include locate_template('parts/mobile-menu.php' ); ?>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
