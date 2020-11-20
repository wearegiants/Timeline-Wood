@php $questions = get_field('frequently_asked_questions') @endphp

<div 
  x-data="{ tab: window.location.hash }"
  class="container prose prose-sm sm:prose mx-auto">
  @php $i = 1; @endphp
  @foreach($questions as $question)
  @if(!$question['section_header'])
  <div class="border-b border-gray-200 py-3 md:py-4">
    <button
      @click.prevent="tab = 'question-{{ $i }}'; window.location.hash = 'question-{{ $i }}'"
      class="space-x-4 group cursor-pointer text-base sm:text-lg font-medium text-black leading-6 md:leading-7 flex my-0 text-left font-bold
      ">
      <span class="flex-none pt-1 w-4 -ml-8">
        <i class="mt-px" height="16" width="16" data-feather="chevron-right"></i>
      </span>
      <span 
        :class="{ 'text-brand-black': tab === 'question-{{ $i }}' }"
        class="transition ease duration-300">{!! $question['question'] !!}</span>
    </button>
    <div x-show="tab === 'question-{{ $i }}'">
      {!! $question['answer'] !!}
    </div>
  </div>
  @php $i++ @endphp
  @else
  <div class="mt-12 mb-6">
    <span class="text-2xl text-black">{!! $question['section_label'] !!}</span>
  </div>
  @endif
  @endforeach
</div>
