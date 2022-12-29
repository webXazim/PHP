<header class=" max-w-xl mx-auto text-center">
    <h1 class="text-4xl text-white pt-5">
        <span class="text-white-300">Find Out Your Desired Website</span>
    </h1>
    <style>
        .search-input {
            border: 0;
            outline: 0;
            background: rgba(55, 55, 55, 1);
            padding: 10px;
            border-radius: 30px;
            margin: auto;
            align-content: center;
            justify-items: center;
            color: lightgray;
            width: 15em;
        }

        .search-input:hover {
            background: rgba(55, 55, 55, .5);
        }

        .search-input:focus {
            outline: 2px solid #ff5000;
            box-shadow: 1px 1px 10px 1px rgba(255, 255, 255, .5);
        }

        .cat-btn {
            background: rgba(red, green, blue, .4);
            color: #ff5000;
            z-index: 4;
            max-width: 8em;
            margin: auto;
        }

        .search-input-holder {
            justify-content: center;

        }
    </style>
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex  cat-btn rounded-full">
            <x-product-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative search-input-holder flex lg:inline-flex items-center ">
            <form method="GET" action="/shop#pp">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text" name="search" placeholder="Find something" class="search-input"
                    value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
