<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="icon" href="/images/wxa-logo.png" type="image/png">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <link href="<?php echo e(asset('css/variable.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/blog.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/layouts.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/portfolio.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&family=Roboto:wght@300&display=swap"
        rel="stylesheet">


    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="100" class="scrollspy-example" tabindex="0">
    <div class="online-div" id="app">
        <div id="na">
            <nav id="navbar" class="navbar justify-between navbar-expan navbar-expand-md shadow-sm">
                <div class="container-xl justify-between">
                    <div class="container-fluid justify-between d-flex">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            <img class="brand-name" src="https://dl.dropbox.com/s/4dswuti8m1axhke/wxa-white.png?dl=0">
                        </a>

                        <button class="navbar-toggler" onclick="n()" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                            <span class="text-white txt"><i id="icon1" class="fa-solid fa-chevron-up"></i><br><i
                                    id="icon2" class="fa-solid fa-chevron-down"></i></span>
                        </button>
                    </div>

                    <div class="collapse wholenav container justify-between navbar-collapse"
                        id="navbarSupportedContent">

                        <!-- middle Of Navbar -->
                        <div class="navlink d-lg-flex d-md-flex midnavlink me-5 pe-5">
                            <a class="nav-link portfolio" href="/">Portfolio</a>
                            <a class="nav-link blog" href="/blog">Blog</a>
                            <a class="nav-link about" href="/about">About</a>
                            
                        </div>

                        <!-- Right Side Of Navbar -->
                        <ul class="navlink rinavlink navbar-nav ms-auto ps-3">
                            <!-- Authentication Links -->
                            <div class=" navlink md:mt-0 flex items-center">
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => []]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                         <?php $__env->slot('trigger', null, []); ?> 
                                            <button class="text-sm text-truncate uppercase" style="max-width: 150px;">
                                                Welcome, <?php echo e(auth()->user()->name); ?>!
                                            </button>
                                         <?php $__env->endSlot(); ?>

                                        <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-item','data' => ['href' => '/blog/admin/posts','active' => request()->is('blog/admin/posts')]]); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/blog/admin/posts','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('blog/admin/posts'))]); ?>
                                                Dashboard
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-item','data' => ['href' => '/blog/admin/posts/create','active' => request()->is('blog/admin/posts/create')]]); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/blog/admin/posts/create','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('blog/admin/posts/create'))]); ?>
                                                Add Post
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-item','data' => ['href' => '/shop/admin/products/create','active' => request()->is('shop/admin/products/create')]]); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/shop/admin/products/create','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('shop/admin/products/create'))]); ?>
                                                Add Product
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php endif; ?>

                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-item','data' => ['href' => '#','xData' => '{}','@click.prevent' => 'document.querySelector(\'#logout-form\').submit()']]); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','x-data' => '{}','@click.prevent' => 'document.querySelector(\'#logout-form\').submit()']); ?>
                                            Log Out
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <a href="/register" id="reg-link"
                                        class="ml-2 text-xs font-bold uppercase   <?php echo e(request()->is('register') ? '' : ''); ?>">
                                        Register
                                    </a>

                                    <a href="/login" id="log-link"
                                        class="text-nowrap ml-6 text-xs font-bold uppercase <?php echo e(request()->is('login') ? '' : ''); ?>">
                                        Log In
                                    </a>
                                <?php endif; ?>

                                <a href="/hire" class="hirebtn rounded-full ml-5 px-3">
                                    <b>H</b>ire!
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>

        <main class=" rounded mx-auto d-block content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!--footer -->
    <footer class="footer-section text-dark text-center">
        <div class="container">

            <div class="footer-cta pt-5 pb-5">
                <div class="row text-center">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <div class="cta-text">
                                <h4>Find me</h4>
                                <span>Natore, Rajshahi, Bangladesh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call me</h4>
                                <span>+8801612013641</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="cta-text">
                                <h4>Mail me</h4>
                                <span>azim@webxazim.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5">
                <div class="">
                    <div class=" mb-50 text-center mb-5">
                        <div class="footer-widget">
                            <div data-aos='fade-in' data-aos-duration="2000" class="footer-logo">
                                <a href="/"><img
                                        src="https://dl.dropbox.com/s/4dswuti8m1axhke/wxa-white.png?dl=0"
                                        class="img-fluid" alt="webXazim logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>I can help you by building better website for your business, portfolio, brochures,
                                    eCommerce, social media etc. "webXazim" this is my personal brand to help you to
                                    grow your business smoothly</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Say Hi! On..</span>
                                <a data-aos='fade-up' data-aos-duration="500"
                                    href='https://www.linkedin.com/in/webxazim/'><i class='fab fa-linkedin'></i></a>
                                <a data-aos='fade-up' data-aos-duration="1000" href='https://twitter.com/WebXazim'><i
                                        class='fab fa-twitter'></i></a>
                                <a data-aos='fade-up' data-aos-duration="1500"
                                    href='https://www.instagram.com/webxazim/'><i class='fab fa-instagram'></i></a>
                                <a data-aos='fade-up' data-aos-duration="2000" href='https://github.com/webXazim'><i
                                        class='fab fa-github'></i></a>
                                <a data-aos='fade-up' data-aos-duration="2500" href='https://codepen.io/webXazim'><i
                                        class='fab fa-codepen'></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved <a href="http://www.webxazim.com"
                                    target="_blank">webXazim</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 col-lg-6 d-lg-block text-right">
                        <div class="footer-menu">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-100px";
                var auton = document.querySelector('.show')
                if (auton) {
                    var element = document.querySelector(".wholenav");
                    element.classList.remove("show");
                    let icon1 = document.querySelector('#icon1')
                    icon1.style.transform = 'translatey(0px)'
                    let icon2 = document.querySelector('#icon2')
                    icon2.style.transform = 'translatey(0px)'
                } else {}
            }
            prevScrollpos = currentScrollPos;

            document.getElementById("scroll-indicator").style.visibility = "hidden"
        }
    </script>

    <script>
        function n() {
            var x = document.querySelector('.collapsed');
            if (x) {
                document.querySelector('.txt').style.backgroundColor = ''
                let icon1 = document.querySelector('#icon1')
                icon1.style.transform = 'translatey(0px)'

                let icon2 = document.querySelector('#icon2')
                icon2.style.transform = 'translatey(0px)'
            } else {
                document.querySelector('.txt').style.backgroundColor = ''
                let icon1 = document.querySelector('#icon1')
                icon1.style.transform = 'translatey(15px)'

                let icon2 = document.querySelector('#icon2')
                icon2.style.transform = 'translatey(-15px)'
            }

        }
    </script>


</body>

</html>
<?php /**PATH P:\webXazim\wxa\laravel\portfolio\my_portfolio\resources\views/layouts/app.blade.php ENDPATH**/ ?>