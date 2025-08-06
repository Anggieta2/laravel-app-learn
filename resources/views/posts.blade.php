<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <div class="container grid grid-cols-1 gap-10">
  @foreach ($posts as $post)
    <div class="max-w-screen-lg bg-slate-400 rounded-md flex">
      
      <div class="">
        <h1 class="text-3xl font-bold text-black capitalize">{{ $post['title'] }}</h1>
        <p class="mb-5 font-light capitalize">{{ $post['author'] }} | {{ $post['created_at']->diffForHumans() }}</p>
      </div>
        
      <p class="font-light">{{ Str::limit($post['content'], 100) }}</p>
      
      <a href="/posts/{{ $post['slug']}}" class="text-md text-blue-500">Read More &raquo;</a>
      <hr>
    </div>

    .
    @endforeach
  </div>
</x-layout>