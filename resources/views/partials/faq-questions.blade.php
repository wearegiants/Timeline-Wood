@php $group = get_field('group_1') @endphp

<div class="prose mx-auto">
  <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'description' }" class="group">
    <div class="border-b border-gray-100">
      <h2 class="flex items-center space-x-4 -ml-8">
        <i height="16" width="16" data-feather="plus"></i>
        <span><?= $group['category'] ?></span>
      </h2>
    </div>
    @foreach($group['questions'] as $question)
    <div class="border-b border-gray-100 pb-6">
      <h4 
        @click.prevent="tab = '<?= $question['question'] ?>'; window.location.hash = '<?= $question['question'] ?>'"
        :class="{ 'active': tab === '<?= $question['question'] ?>' }"><?= $question['question'] ?></h4>
      <div x-show="tab === '<?= $question['question'] ?>'"><?= $question['answer'] ?></div>
    </div>
    @endforeach
  </div>
</div>