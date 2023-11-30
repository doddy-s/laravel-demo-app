<div
  class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-2 text-gray-950 dark:text-gray-100">
  <div id="{{ $post->id }}">
    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="{{ 'post' . $post->id }}" role="tabpanel"
      aria-labelledby="about-tab">

      <div class="flex flex-col items-start gap-4">
        <div class="flex">
          <img class="w-10 h-10 rounded-full mr-2" src="https://github.com/doddy-s.png" alt="">
          <div class="font-medium">
            <div>{{ $post->user->username }}</div>
            <div class="text-sm">On {{ $post->created_at }} in {{ $post->community->name }} Community</div>
          </div>
        </div>
        <p class="break-all">{{ $post->content }}</p>
        <img class="h-96 object-cover rounded-lg aspect-auto" src="{{ $post->media }}" alt=""/>
      </div>

    </div>
    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="{{ 'comment' . $post->id }}" role="tabpanel"
      aria-labelledby="services-tab">
      Bar
    </div>
  </div>

  <ul
    class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-t border-gray-200 bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
    id="defaultTab" data-tabs-toggle="#{{ $post->id }}" role="tablist">
    <li class="me-2">
      <button id="about-tab" data-tabs-target="#{{ 'post' . $post->id }}" type="button" role="tab"
        aria-controls="about" aria-selected="true"
        class="inline-block p-4 text-blue-600 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Post</button>
    </li>
    <li class="me-2">
      <button id="services-tab" data-tabs-target="#{{ 'comment' . $post->id }}" type="button" role="tab"
        aria-controls="services" aria-selected="false"
        class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">{{ $post->comment_count }}
        Comments</button>
    </li>
  </ul>
</div>
