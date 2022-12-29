@props(['category'])

<a href="/blog?category={{ $category->slug }}" class="px-3 py-1 uppercase"
    style="font-size: px; color: gray; font-style: normal;" title="Category">{{ $category->name }}</a>
