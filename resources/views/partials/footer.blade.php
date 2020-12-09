<footer class="bg-brand-gray @if(!is_front_page()) mt-20 @endif">
  <div class="container flex flex-wrap py-12">
    <div class="w-full mb-6 lg:mb-0 lg:w-2/3 flex leading-loose">
      @if (has_nav_menu('footer_first'))
        {!! wp_nav_menu(['theme_location' => 'footer_first', 'menu_class' => 'text-sm w-full', 'container'=> false, 'echo' => false]) !!}
      @endif
      @if (has_nav_menu('footer_second'))
        {!! wp_nav_menu(['theme_location' => 'footer_second', 'menu_class' => 'text-sm w-full text-brand-blue', 'container'=> false, 'echo' => false]) !!}
      @endif
      <div class="text-sm w-full">
        Timeline Studio<br>
        3217 NW Guam Street<br>
        Portland, OR 97210<br>
        +1 503 765 8056<br>
        <a href="mailto:info@timelinewood.com" class="text-brand-green">info@timelinewood.com</a>
      </div>
    </div>
    <div class="w-full lg:w-1/3">
      @include('components.subscribe')
    </div>
  </div>
  <div class="container lg:flex lg:justify-between text-tiny uppercase tracking-widest text-gray-400 pb-12 font-mono">
    @if (has_nav_menu('footer_terms'))
      {!! wp_nav_menu(['theme_location' => 'footer_terms', 'menu_class' => 'md:space-x-4 md:flex md:items-center md:h-8 justify-center space-y-2 md:space-y-0 mb-4 md:mb-0', 'container'=> false, 'echo' => false]) !!}
    @endif
    <div class="text-center md:text-right relative group lg:overflow-hidden lg:h-8">
      <div class="uppercase transition ease duration-300 lg:transform group-hover:-translate-y-full whitespace-no-wrap h-8 hidden lg:inline-flex items-center">+ Site Credits</div>
      <div class="uppercase transition ease duration-300 lg:transform whitespace-no-wrap group-hover:-translate-y-full lg:h-8 lg:flex items-center text-left md:text-center">
        <a class="hover:text-gray-600" target="_blank" href="//hassanrahim.com" class="">Design by 12:01</a> | 
        <a class="hover:text-gray-600" target="_blank" href="//madebyhowler.com" class="">Made by HOWLER</a>
      </div>
    </div>
  </div>
</footer>