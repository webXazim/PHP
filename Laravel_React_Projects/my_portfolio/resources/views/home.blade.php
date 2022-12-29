@extends('layouts.app')
<title>Welcome</title>
<link rel="stylesheet" href="css/home.css" type="text/css" />
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=5426">
</script>
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

@section('content')
    <main class="spacer layer1 home-container">


        <div id="container" style="background-color: #202020;" class="bg">
            <section style="background-color: rgb(189, 23, 23);" class="spacer layer1 overlay">
                <section class="container-section">

                    <header class="container">
                        <section class="greet-text">
                            <div class="">
                                <h1 class="welcome-text">Welcome!</h1>
                                <h4>Nice to see you here.</h4>
                            </div>
                        </section>
                        <section class="background ">
                            <div>
                                <h5>welcome.js</h5>
                                <pre><code class="code" id="code"></code></pre>
                            </div>
                        </section>
                    </header>
                </section>
                <div class="scroll-down"><svg width="40px" height="50px" viewBox="0 0 247 390" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                        <path id="wheel" d="M123.359,79.775l0,72.843"
                            style="fill:none;stroke:#ff5000;stroke-width:20px;" />
                        <path id="mouse"
                            d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                            style="fill:none;stroke:#fff;stroke-width:20px;" />
                    </svg>
                    <p>Scroll Down</p>
                </div>
            </section>

            <section class="panel quote">
                <div class="quote_text">
                    <p class="dev-quality container"> <video data-aos='fade-zoom-in' data-aos-duration="1000"
                            src="video/test.mp4" controls autoplay="autoplay" muted loop id="myVideo"></video></p>
                </div>
            </section>

        </div>
        <section class="spacer layerBtm">

        </section>


        <style>
            .fun {
                color: aqua;
            }

            .fun-name {
                color: darkred;
            }

            .perantheses {
                color: yellow;
            }

            .curly {
                color: bisque;
            }

            .obj {
                color: blueviolet;
            }

            .string {
                color: gray;
            }
        </style>
        <script>
            var code = document.querySelector('.code')
            var type = new Typewriter(code, {
                loop: false,
                delay: 11,
            });

            const codeObj = {
                line1: '<span class="fun">function</span> <span class="fun-name">greet</span><span class="perantheses">()</span> <span class="curly">{</span>',
                line2: '<span class="obj">console</span>.<span class="fun-name">log</span><span class="perantheses">("<span class="string">Welcome!</span>")</span>'
            }

            type
                .typeString(`${codeObj.line1}
${codeObj.line2}`)
                .pauseFor(300)
                .deleteChars(10)
                .typeString('<strong>JS</strong> plugin for a cool typewriter effect and ')
                .typeString('<strong>only <span style="color: #27ae60;">5kb</span> Gzipped!</strong>')
                .pauseFor(1000)
                .start()
        </script>




        <script>
            gsap.registerPlugin(ScrollTrigger);

            const quoteText = document.querySelectorAll(".quote p");

            gsap.set(quoteText, {
                autoAlpha: 0
            });
            gsap.to(".overlay", {
                duration: 2,
                scale: 90,
                autoAlpha: 0,
                ease: "power2.in",
                scrollTrigger: {
                    trigger: "#container",
                    start: "top top",
                    end: "+=4000",
                    anticipatePin: true,
                    pin: true,
                    scrub: true
                }
            });


            gsap.fromTo(
                quoteText, {
                    autoAlpha: 0
                }, {
                    duration: 3,
                    autoAlpha: 1,
                    stagger: {
                        amount: 1
                    },

                    ease: "expo.inOut",
                    scrollTrigger: {
                        trigger: ".quote",
                        start: "bottom top",
                        end: "+=1500",
                        scrub: true
                    }
                });

            /* Copyright (c) 2020 by Craig Roblewsky (https://codepen.io/PointC/pen/KRWgOK) for code used below */
            //const svg = document.querySelector("#overlay");
            const ratio = 0.5625;

            function newSize() {
                let w = window.innerWidth;
                let h = window.innerHeight;
                if (w > h * (16 / 9)) {
                    gsap.set("#pin-overlay", {
                        attr: {
                            width: w,
                            height: w * ratio
                        }
                    });
                } else {
                    gsap.set("#pin-overlay", {
                        attr: {
                            width: h / ratio,
                            height: h
                        }
                    });
                }
                //let data = svg.getBoundingClientRect();
                //gsap.set("#overlay", {x:w/2 - data.width/2});
                //gsap.set("#overlay", {y:h/2 - data.height/2});
            }

            newSize();
            window.addEventListener("resize", newSize);
        </script>
    </main>
@endsection
