<x-layout>
    @include ('products._header')

    <main class=" max-w-6xl mx-auto mt-5 lg:mt-20 space-y-6">
        @if ($products->count())
            <x-posts-grid :posts="$products" />

            {{ $products->links() }}
        @else
            <p class="text-center">No products yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
