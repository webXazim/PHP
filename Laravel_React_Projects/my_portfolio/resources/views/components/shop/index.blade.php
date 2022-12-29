@extends('layouts.app')
<title>Shop</title>

@section('content')
    <section class="product-section">

        <div id="shop"></div>
        <style>
            .shop {
                color: #ff6000 !important;
                transform: scaleZ(1.2);
            }

            .product-section {
                background-color: var(--bluex);
                background-image: radial-gradient(circle,
                        var(--bluex),
                        var(--bluex),
                        var(--dblue));
                padding: 3em 0px 10% 0px;
            }

            .regular-price {
                text-decoration: line-through;
                color: gray;
                margin-right: 5px;
                font-size: 14px;
            }

            .cut-rate {
                margin-right: 5px;
                font-size: 15px;
            }

            .product-card {
                box-shadow: 1px 1px 10px 1px rgba(222, 222, 222, .2);
                border-radius: 5px;
                opacity: .9;
            }

            .product-card:hover {
                box-shadow: 1px 1px 10px 1px rgba(222, 222, 222, .7);
                opacity: 1;

            }

            .product-title a {
                color: aqua;
                font-size: 25px;
            }

            .footer-btn a,
            .add-cart-btn {
                color: aqua;
                background: rgba(37, 34, 34, .5);
                text-decoration: none;
            }

            .footer-btn a:hover,
            .add-cart-btn:hover {
                color: aqua;
                background: rgba(55, 55, 55, 1);
                text-decoration: none;
            }
        </style>
        <div class="container-xxl product-list">
            <div id="pp">
                @include ('products._header')
            </div>
            <main class="text-white max-w-6xl mx-auto mt-5 lg:mt-20 space-y-6">
                @if ($products->count())
                    {{ $products->links() }}
                @else
                    <p class="text-center">No products yet. Please check back later.</p>
                @endif
            </main>
            <div class="">
                @foreach ($products as $product)
                    <div class="">

                        <article class="mt-5 product-card">
                            <div class="py-md-2 px-md-2 lg:flex">
                                <div class="flex-1 lg:mr-8">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="">
                                </div>

                                <div class="flex-1 flex flex-col text-white justify-between">
                                    <header class="mt-2 lg:mt-0 px-2">
                                        <div class="d-flex justify-between">
                                            <h6 class="hidden md:block">#{{ $product->id }}</h6>
                                            <h6>
                                                <span class="cut-rate">{{ $product->off }}% Off</span>
                                                <span class="regular-price">${{ $product->price }}</span>
                                                <span
                                                    class="offer-price">${{ ($product->price / 100) * (100 - $product->off) }}</span>
                                                USD
                                            </h6>

                                            <h6 class="text-right">{{ $product->slug }}</h6>
                                        </div>
                                        <div class="space-x-2 footer-btn">
                                            <x-product-category-button :category="$product->category" />
                                        </div>

                                        <div class="mt-4">
                                            <h1 class=" product-title">
                                                <a href="/products/{{ $product->slug }}">
                                                    {{ $product->name }}
                                                </a>
                                            </h1>

                                            <span class="mt-2 block text-gray-400 text-xs">
                                                Published <time>{{ $product->created_at->diffForHumans() }}</time>
                                            </span>
                                        </div>
                                    </header>

                                    <div class="mt-2 px-2 space-y-4">
                                        {!! $product->excerpt !!}
                                    </div>

                                    <footer class="flex mt-3 bg-gray-900 uppercase justify-between items-center">

                                        <div class="lg:block footer-btn">
                                            <a href="/products/{{ $product->slug }}"
                                                class="transition-colors duration-300  font-semibold py-2
                                                px-2">Learn
                                                More</a>
                                        </div>
                                        <div class="hidden md:block footer-btn">
                                            <a href="{{ $product->pvl }}" target="_blank"
                                                class="transition-colors duration-300  font-semibold py-2  px-4">Live
                                                Preview</a>

                                            <a href="/products/{{ $product->slug }}"
                                                class="transition-colors duration-300 font-semibold py-2 px-4">Buy</a>

                                        </div>




                                        <div class="text-dark">
                                            <form action="{{ route('cart.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="id">
                                                <input type="hidden" value="{{ $product->name }}" name="name">
                                                <input type="hidden" value="{{ $product->price }}" name="price">
                                                <input type="hidden" value="{{ $product->image }}" name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button
                                                    class="transition-colors duration-300 uppercase add-cart-btn py-2 px-2">Add
                                                    To
                                                    Cart</button>
                                            </form>
                                        </div>


                                    </footer>
                                </div>
                            </div>
                        </article>










                    </div>
                @endforeach
            </div>
        </div>


    </section>
@endsection
