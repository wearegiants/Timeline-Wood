const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./dist')
  .browserSync({
    proxy: 'timelinewood.dev.cc',
    notify: false,
  });

const purgecssWordpress = {
  whitelistPatterns: [
      /^(is-|has-|will-|js-|fs-|feather-|word-|aos-|wp-|aspect-|embed-|tns-|alm-|form-)/,
      /^rtl(-.*)?$/,
      /^home(-.*)?$/,
      /^blog(-.*)?$/,
      /^archive(-.*)?$/,
      /^date(-.*)?$/,
      /^error404(-.*)?$/,
      /^logged-in(-.*)?$/,
      /^admin-bar(-.*)?$/,
      /^no-customize-support(-.*)?$/,
      /^wp-custom-logo(-.*)?$/,
      /^search(-.*)?$/,
      /^nav(-.*)?$/,
      /^wp(-.*)?$/,
      /^screen(-.*)?$/,
      /^navigation(-.*)?$/,
      /^(.*)-template(-.*)?$/,
      /^(.*)?-?single(-.*)?$/,
      /^postid-(.*)?$/,
      /^post-(.*)?$/,
      /^attachmentid-(.*)?$/,
      /^attachment(-.*)?$/,
      /^page(-.*)?$/,
      /^(post-type-)?archive(-.*)?$/,
      /^author(-.*)?$/,
      /^gallery(-.*)?$/,
      /^category(-.*)?$/,
      /^tag(-.*)?$/,
      /^card(-.*)?$/,
      /^menu(-.*)?$/,
      /^tags(-.*)?$/,
      /^tax-(.*)?$/,
      /^term-(.*)?$/,
      /^date-(.*)?$/,
      /^(.*)?-?paged(-.*)?$/,
      /^says(-.*)?$/,
      /^depth(-.*)?$/,
      /^comment(-.*)?$/,
      /^comments(-.*)?$/,
      /^children(-.*)?$/,
      /^crnb(-.*)?$/,
      /^custom(-.*)?$/,
      /^custom-background(-.*)?$/,
      /^port-description(-.*)?$/
  ]
};

mix
  .sass('resources/assets/styles/app.scss', 'styles')
  .sass('resources/assets/styles/editor.scss', 'styles')
  .purgeCss({
    extend: { content: [path.join(__dirname, 'index.php')] },
    whitelist: require('purgecss-with-wordpress').whitelist,
    whitelistPatterns: purgecssWordpress.whitelistPatterns
  });

mix
  .js('resources/assets/scripts/app.js', 'scripts')
  //.js('resources/assets/scripts/marquee.js', 'scripts')
  .js('resources/assets/scripts/customizer.js', 'scripts')
  .blocks('resources/assets/scripts/editor.js', 'scripts')
  .extract();

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .options({ 
    processCssUrls: false,
    postCss: [
      require('tailwindcss')('./tailwind.config.js'),
    ]
  })
  .sourceMaps(false, 'source-map')
  .version();
