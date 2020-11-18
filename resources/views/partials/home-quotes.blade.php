@php $quotes = get_field('quotes', 4); @endphp

<div id="quotes">
  @foreach($quotes as $quote)
    <div style="background-color:{!! $quote['background_color']; !!}; color: {!! $quote['font_color']; !!};" class="py-20">
      <div class="container text-center">
        <p class="text-xl md:text-4xl uppercase tracking-wider mb-4">{!! $quote['quote'] !!}</p>
        <p class="text-base">{!! $quote['author'] !!}</p>
      </div>
    </div>
  @endforeach
</div>