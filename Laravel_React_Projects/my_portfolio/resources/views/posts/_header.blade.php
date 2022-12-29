<header class=" max-w-8xl mt-20 text-center">

    <style>
        .search-input:focus {
            border: 0;
            outline: 0;
        }

        .search-input-holder .search-input {
            width: 18rem;
            padding: 15px;
            background: #404040;
            border-radius: 50px;
            border: 2px solid #303030;
            box-shadow: .1px .1px 8px .01px rgba(77, 77, 77, .1);


        }

        .search-input-holder {
            justify-content: center;

        }

        .search-input:hover {
            border: 2px solid #505050;
            box-shadow: .1px .1px 8px .01px rgba(77, 77, 77, .7);

        }

        .search-input:focus {
            outline: 2px solid aqua;
        }

        .search-input::placeholder {
            color: gray;
            font-size: 20px;
            letter-spacing: 2px;
        }

        .category-stack {
            background: #505050;
            border-radius: 50px;
            color: aqua;
            width: 7em;
            margin: auto;
            z-index: 6;
        }


        .category-stack:hover {
            background: #404040;
            border-radius: 50px;
        }
    </style>
    <h1 data-aos='fade-in' data-aos-duration='1000' class="text-4xl text-gray-500 pt-2">
        Useful post on <span class="text-white">Web<span class="text-gray-500"> & others </span>Educational</span>
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex category-stack">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="search-input-holder relative lg:inline-flex items-center">
            <form method="GET" action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text" name="search" placeholder="Find any blog post..." class=" search-input"
                    value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
