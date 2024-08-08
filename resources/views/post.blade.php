<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

        
    <article class="py-6 max-w-screen-md">
        <h2 class="font-bold text-gray-900 text-3xl tracking-tight">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 24 juni 2024
        </div>
        <p class="font-light py-4">{{ $post['body']}}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to posts</a>
    </article>

</x-layout>