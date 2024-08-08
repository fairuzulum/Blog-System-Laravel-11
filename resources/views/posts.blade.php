<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post )
        
    <article class="py-6 max-w-screen-md border-b border-gray-300">
        <a href="/post/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="font-bold text-gray-900 text-3xl tracking-tight">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 24 juni 2024
        </div>
        <p class="font-light py-4">{{ Str::limit($post['body'], 150)}}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/post/{{ $post['slug'] }}">Read more &raquo;</a>
    </article>
    @endforeach

</x-layout>