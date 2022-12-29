<x-layout>
    @include ('posts._header')
    <style>
        .blog {
            color: #ff6000 !important;
        }
    </style>
    <main data-aos='fade-in' data-aos-duration='2000' class=" max-w-7xl mx-auto mt-5 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center text-white">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
