<head>
    <title>{{ $product->name }}</title>
</head>
<x-layout>
    <div class="pt-5 show-main-section">

        <div class="container d-lg-flex">
            <div class="container">
                <div class="pt-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="" class="rounded">
                </div>
                <div class="">
                    <div class="justify-between mt-2 d-sm-block d-md-flex text-sm">

                        <div class="d-inline-flex">

                            <div class="text-left d-inline-flex">
                                <div class="p-1 mt-3">
                                    <x-product-category-button :category="$product->category" />
                                </div>
                                <p class="mt-3 ml-3 text-sm">
                                    <b>Model:</b> {{ $product->slug }}
                                </p>
                                <p class="mt-3 align-text-top text-sm ml-3 block text-gray-400">
                                    Published
                                    <time>{{ $product->created_at->diffForHumans() }}</time>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-lg-5 d-lg-flex container-xxl">
            <main class="row max-w-4xl mx-auto mt-2 lg:mt-14 space-y-6">
                <article class="mx-auto ">
                    <div class="col-span-">
                        <div class="">
                            <div class="">
                                <h1 class="mb-3">
                                    {{ $product->name }}
                                </h1>
                            </div>
                        </div>
                        <div class='d-block'>
                            <div id="body-content" class="space-y-4 lg:text-lg leading-loose">{!! $product->description !!}

                                <div class="pricing">
                                </div>
                                <br>
                                <div class="col-span-8 mb-2">
                                    <div class="hidden lg:flex justify-between mb-4">
                                        <a href="/shop#pp"
                                            class="transition-colors duration-300 relative inline-flex items-center text-lg back-to-shop">
                                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                                        d="M21 1v20.16H.84V1z">
                                                    </path>
                                                    <path class="fill-current"
                                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                                    </path>
                                                </g>
                                            </svg>

                                            Back to shop
                                        </a>
                                        <div class=" mt-4 align-center text-center">
                                            <button id="btn" class="share-btn">
                                                <h4><a title="Share This Page"><i
                                                            class="fa-solid fa-share-from-square"></i></a>
                                                </h4>
                                            </button>
                                            <p class="result"></p>
                                            <script>
                                                const shareData = {
                                                    title: '{{ $product->name }}',
                                                    text: '{{ $product->excerpt }}',
                                                    url: 'https://webxazim.com/shop/{{ $product->slug }}'
                                                }

                                                const btn = document.querySelector('#btn');
                                                const resultPara = document.querySelector('.result');

                                                // Share must be triggered by "user activation"
                                                btn.addEventListener('click', async () => {
                                                    try {
                                                        await navigator.share(shareData)
                                                        resultPara.textContent = 'Thanks!'
                                                    } catch (err) {
                                                        resultPara.textContent = `Error: ${err}`
                                                    }
                                                });
                                            </script>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <hr>

                        </div>
                </article>
            </main>
        </div>


        <section class="text-center max-w-4xl mx-auto col-span-12 col-start-5 mt-10 space-y-6">

            <div class="mb-5">
                <h1>Latest products</h1>
                <div>
                    <p class="d-none hide hidden">
                        {{ $x = collect($product->all())->sortByDesc('created_at')->take(4)->skip(1) }}
                    </p>
                    @foreach ($x as $title)
                        <h3 class="d-inline-flex mt-4"><a href="/products/{{ $title->slug }}"
                                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-3">{{ $title->name }}</a>
                        </h3>
                    @endforeach
                </div>
            </div>


        </section>




</x-layout>
</div>
