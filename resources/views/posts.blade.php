<x-layout>
  @foreach ($posts as $post)
  
  <x-slot:title>{{$title}}</x-slot:title>
  <div class="max-w-screen-md">

    <h1 class="text-3xl font-bold text-black">{{ $post['title'] }}</h1>
    <p class="mb-5 font-light">{{ $post['author'] }}</p>
    
      <p class="font-light">{{ Str::limit($post['textContent'], 100) }}</p>

      <a href="/posts/{{ $post['id']}}" class="text-md text-blue-500">Read More &raquo;</a>
  </div>
  @endforeach
</x-layout>