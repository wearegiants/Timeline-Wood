/**
 * External Dependencies
 */
import 'jquery';
const feather = require('feather-icons')
import 'alpinejs'
import { tns } from "tiny-slider/src/tiny-slider"
import AOS from 'aos';

AOS.init();

$(document).ready(() => {
  feather.replace();

  var options = {
    'quotes': {
      loop: true,
      //mode: 'gallery',
      items: 1,
      slideBy: 'page',
      nav: false,    
      controls: false,
      autoplay: true,
      autoHeight: true,
      speed: 600,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: true,
    }
  }

  var doc = document,
      win = window,
      initFns = {},
      sliders = new Object();

  for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);
    }
  }

});
