<div class="w-full xl:w-1/2">
  @foreach ($posts as $post)
    <x-post-card :post="$post"/>
    @endforeach
</div>
