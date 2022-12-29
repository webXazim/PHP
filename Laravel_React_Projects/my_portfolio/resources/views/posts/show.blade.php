<head>
    <title>{{ $post->title }}</title>
    <meta name="author" content="{{ $post->author->name }}">
    <meta name="description" content="{{ $post->excerpt }}">
    <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:title" content="{{ $post->title }}">


    <style>
        .blogpage {
            background: white;
        }
    </style>
</head>
<x-layout>
    <div class="blogpage">

        <div class="bloghead d-lg-flex">
            <div class="container-sm">

                <div class="col-lg-9">
                    <div class="headimg">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                            class="rounded-md">

                    </div>
                </div>

                <div class="d-lg-flex">
                    <div class="lefthead">
                        <div class="d-inline-block mt-lg-2">
                            <h1 class="title col-lg-10">
                                {{ $post->title }}
                            </h1>
                            <h6 class="posts-excerpt col-lg-8 d-none d-md-block ms-0">{{ $post->excerpt }}</h6>
                        </div>

                        <div class="headbottom justify-around d-sm-block d-md-flex text-sm">
                            <div class="d-inline-flex mt-1">

                                <img src="/images/wxa-logo.png" alt="Author image">
                                <div id="author" class="ml-1 mt-3 text-left author">
                                    <p class="font-bold">
                                        Writen by <a style="color: var(--dorange)"
                                            href="/?author={{ $post->author->name }}" title="Author name">
                                            {{ $post->author->name }}
                                        </a>

                                    </p>
                                    <p class="mt-1 block text-gray-400 text-xs">
                                        Published
                                        <time>{{ $post->created_at->diffForHumans() }}</time>
                                    </p>
                                </div>
                                <div id="category" class="mt-lg-3 hidden lg:block">
                                    <x-category-button :category="$post->category" />
                                </div>
                            </div>
                            <div class="timecomment justify-between align-top mt-3 d-inline-flex text-gray-400 text-sm">
                                <style>
                                    #category {
                                        border-left: 3px solid var(--dorange);
                                        margin: 35px;
                                        padding: 10px;
                                    }

                                    .comments a {
                                        text-decoration: none;

                                    }
                                </style>

                                <div>
                                    <h5 id="time" class="">
                                    </h5>

                                </div>
                                <div class="comments">
                                    <h5>
                                        <a href="#cmt" class="">
                                            {{ $post->comments->Count() }} comments</a>
                                    </h5>
                                </div>

                                {{-- share button --}}
                                <div class="share">
                                    <button id="btn" class="">
                                        <h4><a title="Share This Page"><i
                                                    class="fa-solid fa-share-from-square ps-3"></i></a>
                                        </h4>
                                    </button>
                                    <p class="result"></p>
                                    <script>
                                        const shareData = {
                                            title: '{{ $post->title }}',
                                            text: '{{ $post->excerpt }}',
                                            url: 'https://webxazim.com/blog/posts/{{ $post->slug }}'
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
                    <div class="d-sm-none d-lg-block">
                        <div class="">
                            <div class="righthead">
                                <h5>Relevent Tags</h5>
                                <div class="">
                                    <form method="GET" action="/blog">
                                        @if (request('category'))
                                            <input type="hidden" name="category" value="{{ request('category') }}">
                                        @endif
                                        <div id="alltags" class="">
                                            {{-- javascript generated code will be here --}}
                                        </div>
                                    </form>
                                </div>
                                <div id="tags" class="hide hidden">{!! $post->tags !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div class="mt-lg-5 d-lg-flex container-xxl">
            <main class="row max-w-2xl mx-auto mt-3 lg:mt-14 space-y-6">
                <article class="mx-auto ">
                    <div class="col-span-8 mb-2">
                        <div class="hidden lg:flex justify-between mb-4">
                            <a title="Go back to post" href="/blog"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg"
                                style="color: var(--orange)">
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

                                Back to Posts
                            </a>


                        </div>

                    </div>

                    <div class="col-span-8">
                        <div>
                            <div id="x" class="space-y-4 lg:text-lg leading-loose">{!! $post->body !!}
                            </div>
                        </div>
                        <hr>
                        <h4 class="mt-3">Tags</h4>
                        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                            <form method="GET" action="/blog">
                                @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif

                                <div id="alltag" class="">

                                    {{-- javascript generated code will be here --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </main>



            <div class="contentholder col-span-8 max-w-2xl mx-auto mt-5 lg:mt-14 space-y-6 ml-5 lg:text-center mb-10">
                <ol id="list-example" class="sticky-top mt-5 pt-5 list-group">
                    <h4 class="mt-5">Table of Contents</h4>
                    {{-- javascript generated code will be here --}}
                </ol>
            </div>

        </div>
        <div class="">
            <style>
                .cmt {
                    background-color: #000015;
                    padding-bottom: 5%;
                    color: lightgray;
                    overflow: auto;
                    max-height: 100%;
                }

                .cmt button {
                    color: #000015;
                }

                @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap");


                .signup-box {
                    display: ;
                    margin: auto;
                    margin-top: 5em;
                    width: 100%;
                    height: auto;
                    background: #000015;
                    padding: 5em 12%;
                    color: white;
                    text-align: center;

                }

                .signup-box .signup-form {
                    place-items: center;
                    display: grid;
                }

                .signup-form input:-webkit-autofill,
                .signup-form input:-webkit-autofill:hover,
                .signup-form input:-webkit-autofill:focus {
                    border: 0;
                    border-bottom: 2px solid white;
                    -webkit-text-fill-color: white;
                    -webkit-box-shadow: 0 0 0px 1000px #000015 inset;
                }


                .signup-form .signup-input {
                    border: 0;
                    border-bottom: 2px solid gray;
                    font-size: 1.2em;
                    padding: 0.5em 0.25rem;
                    background-color: #000015;
                }


                .signup-form .signup-input:focus {
                    border: 0;
                    outline: 0;
                    border-bottom: 2px solid lightgray;
                }

                .signup-form input:focus::placeholder {
                    color: lightgray
                }


                .signup-form input[type="submit"] {
                    margin: auto;
                    font-size: 1em;
                    width: max-content;
                    background: #000019;
                    padding: .73em 2em;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    color: #fff;
                    border: 0;
                    outline: 0;
                    transition: 0.3s all ease-in-out;
                    border-bottom: 2px solid gray;
                }

                .signup-form input[type="submit"]:hover {
                    background: #333;
                    padding: .73em 4em;
                    cursor: pointer;
                }

                .signup-form input {
                    background-color: #000015;
                    color: white;
                    width: 65%;


                }



                @media only screen and (max-width: 768px) {
                    .signup-box {
                        width: 100%;
                        padding: 5em 0em;
                    }

                    .signup-form input {
                        background-color: #000015;
                        color: white;
                        width: 100%;

                    }


                    .signup-form input[type="submit"] {
                        margin: auto;
                        font-size: 15px;
                        width: max-content;
                        background: #000019;
                        padding: 5px 8px;
                        text-transform: uppercase;
                        letter-spacing: .5px;
                        color: #fff;
                        border: 0;
                        outline: 0;
                        transition: 0.3s all ease-in-out;
                        border-bottom: 2px solid gray;
                    }

                    .signup-form input[type="submit"]:hover {
                        background: #333;
                        padding: 5px 10px;
                        cursor: pointer;
                    }

                    .signup-form .signup-input {
                        border: 0;
                        border-bottom: 2px solid gray;
                        font-size: 15px;
                        padding: 5px 5px;
                        margin: 10px;
                        background-color: #000015;
                    }

                }
            </style>
            <section id="">
                <div class="wrapper">

                    <div class="signup-box">
                        <h2>Subscribe to get new post in your inbox!</h2>

                        <form class="mt-5 signup-form d-flex container-xxl" method="POST" action="/subscribe">
                            @csrf

                            <input id="email" type="email"
                                class="signup-input @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email"
                                placeholder="Enter E-mail">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </section>
        </div>

        <section class="text-center max-w-4xl mx-auto col-span-12 col-start-5 mt-10 space-y-6">

            <div class="mb-5">
                <h2>Latest posts</h2>
                <div>
                    <p class="d-none hide hidden">
                        {{ $x = collect($post->all())->sortByDesc('created_at')->take(7) }}
                    </p>
                    @foreach ($x as $title)
                        <h3 class="d-inline-flex mt-4"><a href="/posts/{{ $title->slug }}"
                                class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-3"
                                title="{{ $title->title }} | post link">{{ $title->title }}</a>
                        </h3>
                    @endforeach
                </div>
            </div>


        </section>

        <div class="cmt" id="cmt">
            <div class="container-xxl mb-5 pb-5">

                @include ('posts._add-comment-form')
                <div class="mx-3 my-3">

                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </div>
            </div>
        </div>


        <script type="text/javascript">
            const gettags = document.querySelectorAll("#tags p");
            for (var i = 0; i < gettags.length; i++) {

                const n = document.createElement("button");
                const tagnode = document.createTextNode(gettags[i].textContent);
                n.appendChild(tagnode);
                var x = document.getElementById("alltags").appendChild(n);
                x.className = "tagsbtn font-bold text-sm m-1 underline italic ";
                x.type = "";
                x.name = "search";
                x.value = gettags[i].textContent;
            }
        </script>

        <script type="text/javascript">
            const gettag = document.querySelectorAll("#tags p");
            for (var i = 0; i < gettag.length; i++) {

                const n = document.createElement("button");
                const tagnode = document.createTextNode(gettag[i].textContent);
                n.appendChild(tagnode);
                var x = document.getElementById("alltag").appendChild(n);
                x.className = "tagsbtn font-bold text-sm m-1 underline italic";
                x.type = "";
                x.name = "search";
                x.value = gettag[i].textContent;
            }
        </script>

        <script type="text/javascript">
            const fakeImages = document.querySelectorAll("#x h2");
            for (var i = 0; i < fakeImages.length; i++) {

                const linode = document.createElement("li");
                var a = document.getElementById("list-example").appendChild(linode);
                a.id = "list";

                const node = document.createElement("a");
                const textnode = document.createTextNode(fakeImages[i].textContent);
                node.appendChild(textnode);
                var x = document.getElementById("list").appendChild(node);
                x.className = "list-group-item list-group-item-action";
                x.href = "#section" + i;
            }
        </script>
        <script>
            function get_text(el) {
                ret = "";
                var length = el.childNodes.length;
                for (var i = 0; i < length; i++) {
                    var node = el.childNodes[i];
                    if (node.nodeType != 8) {
                        ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
                    }
                }
                return ret;
            }
            var words = get_text(document.getElementById('x'));
            var count = words.split(' ').length;
            console.log(count);

            let time;
            const word1 = 520; // 4m
            const word2 = 600; // 5m
            const word3 = 750; // 6m
            const word4 = 800; // 6m
            const word5 = 1000; // 8m
            const word6 = 1500; // 12m
            if (300 > count) {
                time = 2
            } else if (word1 > count) {
                time = 3
            } else if (word1 < count) {
                time = 4
            } else if (word2 > count) {
                time = 4
            } else if (word2 < count) {
                time = 5
            } else if (word3 > count) {
                time = 6
            } else if (word3 < count) {
                time = 7
            } else if (word4 > count) {
                time = 7
            } else if (word4 < count) {
                time = 8
            } else if (word5 > count) {
                time = 8
            } else if (word5 < count) {
                time = 9
            } else if (word6 > count) {
                time = 11
            } else {
                time = 'more than' + 12
            }
            document.querySelector('#time').innerText = '⏱️' + time + ' minutes read ';
        </script>

</x-layout>
</div>
