<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <div class="max-w-screen-md">

    <h1 class="text-3xl font-bold text-black">{{ $post['title'] }}</h1>
    <p class="mb-5 font-light">{{ $post['author'] }}</p>
    
      <p class="font-light">{{ $post['content'] }}</p>

      <a href="/posts" class="text-md text-blue-500">&laquo; Back to posts</a>
  </div>
</x-layout>