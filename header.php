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

<body <?php body_class('fs-grid wp'); ?>>
<div id="wrapper">
<?php
  $enabled = get_field('notification_enable', 4);
  $notify = get_field('notification', 4);
  if($enabled):
?>
<div id="header-main__notification" class="text-center"><?php echo $notify; ?></div>
<?php endif; ?>
<header id="header" class="mobile-menu relative fs-grid-fluid">
  <div id="header-main__wrapper">
    <div class="fs-row relative header header--sm">
      <menu id="header-mobile" class="fs-cell fs-lg-hide fs-md-fourth fs-sm-fourth fs-contained">
        <a data-swap-target="#mobile-menu" href="#" class="swap btn--nav btn_first btn_last">
          <img class="open" src="/assets/img/menu.svg">
          <img class="close" src="/assets/img/x.svg">
          <span class="fs-sm-hide">Menu</span>
        </a>
      </menu>
      <menu id="header-navigation" class="fs-cell fs-lg-8 fs-md-half fs-sm-half fs-contained">
        <a href="<?php echo get_site_url(); ?>" id="header--logo" class="btn btn--nav btn--logo"><?php bloginfo('name' );?></a>
        <ul class="fs-md-hide fs-sm-hide">
          <?php echo wp_nav_menu( $mainMenu ); ?>
        </ul>
      </menu>
      <menu class="fs-cell fs-lg-4 fs-md-fourth fs-sm-fourth text-right fs-contained">
        <a id="header-commercial" href="/commercial-applications" class="fs-sm-hide fs-md-hide">Commercial Products <br>for Architects + Designers</a>
        <?php include locate_template('parts/store/shopify--bag.php' ); ?>
      </menu>
    </div>
  </div>
  <?php include locate_template('parts/mobile-menu.php' ); ?>
</header>
<div id="content-wrapper" class='fs-grid'>

