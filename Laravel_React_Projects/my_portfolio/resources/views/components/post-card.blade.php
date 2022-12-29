@props(['post'])
<style>
    .post-card {
        box-shadow: .1px .1px 8px .01px rgba(77, 77, 77, .4);
        border-radius: 5px;
        transition: all .2s;
        border: 2px solid rgba(77, 77, 77, .4);
    }

    .post-card:hover {
        border: 2px solid rgba(77, 77, 77, .6);
        box-shadow: .1px .1px 8px .01px rgba(77, 77, 77, 1);
        transform: scale(1.001);
        transition: all .2s;
    }

    .title a {
        color: aqua;
        font-size: 25px;
    }

    .excerpt {
        color: lightgray;
        font-size: 17px;
    }

    .author-name {
        color: #ff5000;
    }

    .author-section {
        font-size: 14px;
        color: lightgray;
        margin-top: 9px;
        line-height: .5;
    }

    .author-extention {
        color: gray;
        font-size: 12px;
    }

    .read-more-btn a {
        color: aqua;
        padding: 7px 17px 9px 17px;
        text-decoration: none;
        border-radius: 20px;
        background: #202020;
    }

    .read-more-btn a:hover {
        background: #303030;
        box-shadow: .1px .1px 8px .01px rgba(77, 77, 77, .2);

    }
</style>
<article {{ $attributes->merge(['class' => 'transition-colors my-2 mx-2 duration-300 post-card']) }}>
    <div class="mx-2 my-2 flex flex-col">
        <div>
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-5 flex flex-col justify-between flex-1">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl title clamp one-line">
                        <a href="blog/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 excerpt space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex bottom-0 justify-between items-center mt-8">
                <div class="authorimg flex items-center text-sm">
                    <img src="images/wxa-logo.png" alt="Web & Software Developer | Founder of webXazim">
                    <div class="ml-2">
                        <h5 class="author-section">
                            Writen by <a href="/?author={{ $post->author->name }}"><span
                                    class="author-name">{{ $post->author->name }}</span></a>
                            <h6 class="author-extention">Web Developer</h6>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block read-more-btn">
                    <a href="blog/posts/{{ $post->slug }}" class="transition-colors duration-300 ">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
