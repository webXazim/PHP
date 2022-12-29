<x-product-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-product-dropdown-item href="/shop?{{ http_build_query(request()->except('category', 'page')) }}#pp"
        :active="request()->routeIs('home') && is_null(request()->getQueryString())">
        All
    </x-product-dropdown-item>
    @foreach ($categories as $category)
        <x-product-dropdown-item
            href="/shop?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}#pp"
            :active='request()->fullUrlIs("*?category={$category->slug}*")'>
            {{ ucwords($category->name) }}
        </x-product-dropdown-item>
    @endforeach
</x-product-dropdown>
