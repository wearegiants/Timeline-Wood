@php $questions = get_field('frequently_asked_questions') @endphp

<div 
  x-data="{ tab: window.location.hash }"
  class="container prose mx-auto">
  @php $i = 1; @endphp
  @foreach($questions as $question)
  @if(!$question['section_header'])
  <div class="border-b border-gray-200 py-4">
    <span 
      @click.prevent="tab = 'question-{{ $i }}'; window.location.hash = 'question-{{ $i }}'"
      class="space-x-4 group cursor-pointer text-xl font-medium text-black">
      <span 
        :class="{ 'text-brand-blue': tab === 'question-{{ $i }}' }"
        class="group-hover:text-brand-blue transition ease duration-300">{!! $question['question'] !!}</span>
    </span>
    <div class="pt-2" x-show="tab === 'question-{{ $i }}'">
      {!! $question['answer'] !!}
    </div>
  </div>
  @php $i++ @endphp
  @else
  <div>
    <span class="text-2xl text-black">{!! $question['section_label'] !!}</span>
  </div>
  @endif
  @endforeach
</div>
