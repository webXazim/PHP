@props(['category'])

<a href="/shop?category={{ $category->slug }}#pp"
    class="px-3 py-1 border border-blue-100 text-blue-100 text-xs uppercase font-semibold"
    style="font-size: 10px">{{ $category->name }}</a>
