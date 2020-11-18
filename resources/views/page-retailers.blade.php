@extends('layouts.app')
@section('content')
@include('partials.page-header')

@php
  $on = get_field('online_retailers');
  $ca = get_field('ca_retailers');
  $or = get_field('or_retailers');
  $co = get_field('co_retailers');
  $sk = get_field('sk_retailers');
@endphp

<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'on_retailers' }">

  <div class="container md:flex justify-center items-center text-gray-300 space-x-4 mb-4 text-center">
    @if($on)<button @click.prevent="tab = 'on_retailers'; window.location.hash = 'on_retailers'" :class="{ 'text-brand-red': tab === 'on_retailers' }" class="hover:text-brand-red transition ease duration-300">Online Retailers</button>@endif
    @if($ca)<button @click.prevent="tab = 'ca_retailers'; window.location.hash = 'ca_retailers'" :class="{ 'text-brand-red': tab === 'ca_retailers' }" class="hover:text-brand-red transition ease duration-300">California Retailers</button>@endif
    @if($or)<button @click.prevent="tab = 'or_retailers'; window.location.hash = 'or_retailers'" :class="{ 'text-brand-red': tab === 'or_retailers' }" class="hover:text-brand-red transition ease duration-300">Oregon Retailers</button>@endif
    @if($co)<button @click.prevent="tab = 'co_retailers'; window.location.hash = 'co_retailers'" :class="{ 'text-brand-red': tab === 'co_retailers' }" class="hover:text-brand-red transition ease duration-300">Colorado Retailers</button>@endif
    @if($sk)<button @click.prevent="tab = 'sk_retailers'; window.location.hash = 'sk_retailers'" :class="{ 'text-brand-red': tab === 'sk_retailers' }" class="hover:text-brand-red transition ease duration-300">South Korea Retailers</button>@endif
  </div>

  <div x-show="tab === 'on_retailers'" class="container">
    <span class="sr-only">Online Retailers</span>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5 pt-5 md:gap-8 md:pt-8">
      @foreach($on as $image)
        @include('components.retailer')
      @endforeach
    </div>
  </div>

  <div x-show="tab === 'ca_retailers'" class="container">
    <span class="sr-only">California Retailers</span>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5 pt-5 md:gap-8 md:pt-8">
      @foreach($ca as $image)
        @include('components.retailer')
      @endforeach
    </div>
  </div>

  <div x-show="tab === 'or_retailers'" class="container">
    <span class="sr-only">Oregon Retailers</span>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5 pt-5 md:gap-8 md:pt-8">
      @foreach($or as $image)
        @include('components.retailer')
      @endforeach
    </div>
  </div>

  <div x-show="tab === 'co_retailers'" class="container">
    <span class="sr-only">Colorado Retailers</span>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5 pt-5 md:gap-8 md:pt-8">
      @foreach($co as $image)
        @include('components.retailer')
      @endforeach
    </div>
  </div>

  <div x-show="tab === 'sk_retailers'" class="container">
    <span class="sr-only">South Korea Retailers</span>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5 pt-5 md:gap-8 md:pt-8">
      @foreach($sk as $image)
        @include('components.retailer')
      @endforeach
    </div>
  </div>

</div>
  
@endsection
  