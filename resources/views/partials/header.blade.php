<div class="h-10 bg-black text-white text-tiny sm:text-xs font-bold tracking-widest flex items-center justify-center">
  <span>WE'RE SHIPPING AS USUAL + FREE FOR U.S. ORDERS</span>
</div>
<div x-data='{ open : false }' class="sticky top-0 z-50">
  <header class="banner flex justify-between items-center bg-white z-10">
    <button @click="open = !open" class="h-16 container mx-0 w-1/5 lg:w-auto flex-none lg:hidden">
      <div class="" :class="{ 'hidden': open, 'block': !open }"><i class="" stroke-width="1" data-feather="menu"></i></div>
      <div class="" :class="{ 'block': open, 'hidden': !open }"><i class="" stroke-width="1" data-feather="x"></i></div>
    </button>
    <div class="flex items-center">
      <a class="bg-black inline-flex text-white brand items-center justify-center h-16 px-6" href="{{ home_url('/') }}">
        <img class="block h-4 w-auto" src="@asset('images/timeline-white.svg')" alt="{{ $siteName }}">
      </a>
      <nav class="nav-primary space-x-10 px-10 hidden lg:block text-gray-700">
        <a class="hover:text-brand-blue" href="//shop.timelinewood.com/">Products</a>
        <a class="hover:text-brand-blue" href="/retailers">Retailers</a>
        <a class="hover:text-brand-blue" href="/about">About</a>
        <a class="hover:text-brand-blue" href="/press-room">Press</a>
        <a class="hover:text-brand-blue" href="/contact">Contact</a>
      </nav>
    </div>
    <div class="w-1/5 lg:w-auto flex items-center">
      <a class="inline-flex text-black items-center justify-end xl:justify-center h-16 w-full container mx-0" href="//shop.timelinewood.com/cart">
        <span class="text-center leading-tight">Bag(0)</span>
      </a>
      <a class="bg-brand-yellow text-black items-center justify-center h-16 px-6 hidden lg:flex flex-none" href="/commercial-applications">
        <span class="text-center leading-tight block">Commercial Products<br>for Architects + Designers</span>
      </a>
    </div>
  </header>
  <div x-show="open" class="bg-white py-6 absolute inset-x-0 shadow-xl border-t border-gray-100">
    <a class="hover:text-brand-blue block text-3xl py-4 text-center" href="//shop.timelinewood.com/">Products</a>
    <div class="flex items-center justify-center space-x-6 py-4">
      <a class="hover:text-brand-blue" href="/press-room">Skinnies</a>
      <a class="hover:text-brand-blue" href="/press-room">Shiplap</a>
      <a class="hover:text-brand-blue" href="/press-room">Trim</a>
    </div>
    <a class="hover:text-brand-blue block text-3xl py-4 text-center" href="/retailers">Retailers</a>
    <a class="hover:text-brand-blue block text-3xl py-4 text-center" href="/about">About</a>
    <a class="hover:text-brand-blue block text-3xl py-4 text-center" href="/press-room">Press</a>
    <a class="hover:text-brand-blue block text-3xl py-4 text-center" href="/contact">Contact</a>
  </div>
  <div class="h-px bg-black bg-opacity-05"></div>
</div>