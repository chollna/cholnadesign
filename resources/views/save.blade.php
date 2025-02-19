@extends('layouts.master')
@section('content')


    <img loading="eager" fetchpriority="high" src="{{ asset('assets') }}/images/svg-icons.svg" alt="Social Icons" style="display:none;">

    <!-- start: .mobile.main-nav -->
    <nav class="mobile main-nav">
        <div class="close"><svg class="icon">
                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#close-icon"></use>
            </svg></div>
        <div class="logo"><a href="https://ghost.estudiopatagon.com/zento"><img src="{{ asset('assets') }}/images/logo-zento.svg" alt="Zento"
                    width="170" height="60" decoding="async"></a></div>
        <ul class="menu underline-effect">
            <li class=" nav-home"><a href="https://ghost.estudiopatagon.com/zento/">Home</a></li>
            <li class=" nav-style-guide"><a href="https://ghost.estudiopatagon.com/zento/style-guide/">Style Guide ✨</a>
            </li>
            <li class=" nav-explore-our-tags"><a href="https://ghost.estudiopatagon.com/zento/explore-our-tags/">Explore
                    our Tags</a></li>
            <li class=" nav-text-only-post"><a href="https://ghost.estudiopatagon.com/zento/text-only/">Text Only
                    Post</a></li>
            <li class=" nav-classic-post-image"><a href="https://ghost.estudiopatagon.com/zento/classic/">Classic Post
                    (image)</a></li>
            <li class=" nav-vertical-post"><a href="https://ghost.estudiopatagon.com/zento/vertical/">Vertical Post</a>
            </li>
            <li class=" nav-fullwidth-post"><a href="https://ghost.estudiopatagon.com/zento/fullwidth/">Fullwidth
                    Post</a></li>
            <li class=" nav-no-sidebar-post"><a href="https://ghost.estudiopatagon.com/zento/nosidebar/">No Sidebar
                    Post</a></li>
            <li class=" nav-home-demos"><a href="https://themes.estudiopatagon.com/selector/zento-ghost/">Home Demos
                    🚀</a></li>
        </ul>


        <div class="account">
            <a href="https://ghost.estudiopatagon.com/zento/signin" class="link-button">
                Login
            </a>
            <a href="https://ghost.estudiopatagon.com/zento/subscribe" class="epcl-button">
                Subscribe
            </a>
        </div>
    </nav>
    <!-- end: .mobile.main-nav -->
    <div class="menu-overlay"></div>

    <!-- start: #wrapper -->
    <div id="wrapper">

        <!-- start: #header -->
        <header id="header" class="minimalist enable-sticky" style="height: 115.3px;">

            <!-- start: .menu-wrapper -->
            <div class="menu-wrapper">

                <div class="grid-container">
                    <div class="epcl-flex grid-wrapper">

                        <!-- start: .main-nav -->
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="search-menu-item"><span class="link" data-ghost-search=""><svg
                                            class="icon main-color large">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#search-icon">
                                            </use>
                                        </svg> <span class="hide-on-mobile">Quick Search...</span></span></li>
                            </ul>
                        </nav>
                        <!-- end: .main-nav -->

                        <div class="logo"><a href="https://ghost.estudiopatagon.com/zento"><img src="{{ asset('assets') }}/images/logo-zento.svg"
                                    alt="Zento" width="170" height="60" decoding="async"></a></div>

                        <div class="account underline-effect hide-on-mobile hide-on-tablet hide-on-desktop-sm">
                            <a href="https://ghost.estudiopatagon.com/zento/signin"
                                class="link-button epcl-login">Login</a>
                            <a href="https://ghost.estudiopatagon.com/zento/subscribe" class="epcl-button">Subscribe</a>
                        </div>

                        <div class="open-menu">
                            <svg class="open icon ularge">
                                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#menu-icon"></use>
                            </svg>
                        </div>

                        <div class="clear"></div>

                    </div>

                    <div class="clear"></div>
                </div>

            </div>
            <!-- end: .menu-wrapper -->

            <div class="clear"></div>

        </header>
        <!-- end: #header -->

        <main id="home" class="main">

            <!-- start: .content-wrapper -->
            <div class="content-wrapper">
                <!-- start: .intro-text -->
                <div class="intro-text large-section np-bottom grid-container np-mobile epcl-flex">
                    <div class="left grid-50 tablet-grid-55">
                        <div class="text">

                            <!--kg-card-begin: html-->
                            <h1 class="title ularge fw-medium">Hi, I'm <span class="highlight">Jonathan Doe</span> 👋
                            </h1>
                            <!--kg-card-end: html-->
                            <p>I'm a&nbsp;<strong>design technologist</strong>&nbsp;in Atlanta. I like working on the
                                front-end of the web. This is my site,&nbsp;<strong>Zento</strong>&nbsp;where I blog,
                                share and write tutorials...</p>
                        </div>
                        <form class="subscribe-form" data-members-form="subscribe">
                            <label class="title small" for="subscribe-email">Let's connect</label>
                            <div class="form-group">
                                <input id="subscribe-email" type="email" name="email" class="inputbox large" required=""
                                    placeholder="Enter your email address" data-members-email="">
                                <button class="epcl-button submit absolute" type="submit">Get Started<span
                                        class="loader"></span></button>
                            </div>
                            <p class="error-detail" data-members-error=""></p>
                            <p class="success-message">Subscription was sent successfully, check your email <i
                                    class="fa fa-envelope-o"></i></p>
                        </form>
                    </div>
                    <div class="right grid-45 tablet-grid-45 mobile-grid-60">
                        <img src="{{ asset('assets') }}/images/about.webp" fetchpriority="high" decoding="async" alt=""
                            class="hero-image fullwidth" width="442" height="442">
                    </div>
                </div>
                <!-- end: .intro-text -->
                <section class="epcl-carousel epcl-post-carousel medium-section np-bottom aos-animate" data-aos="fade"
                    id="epcl-post-carousel">
                    <div class="grid-container grid-large np-tablet np-mobile">
                        <h2 class="title bordered medium textcenter"><svg class="icon large secondary-color">
                                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#trending-icon"></use>
                            </svg> Featured Articles</h2>

                            <div class="slider-container">
                                @foreach ($products as $product)
                                    <div class="product-card" style="width: 435px; height: 250px;">
                                        <div class="product-info">
                                            <!-- Make image clickable, linking to the show route -->
                                            <a href="{{ route('show', $product->id) }}">
                                                <div class="product-image" style="background-image: url('/images/{{ $product->image }}');">
                                                    <div class="overlay">
                                                        <h5>{{ $product->name }}</h5>
                                                        <p>{{ $product->detail }}</p>
                                                        <p><strong>By:</strong> {{ $product->User->name }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-actions">
                                                <form action="{{ route('destroy', $product->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('show', $product->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('edit', $product->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            
                            
                            
    
                        <div class="clear"></div>
                    </div>
                </section>
                <div class="sticky-container section np-bottom grid-container">
                    <!-- start: #sidebar -->
                    <aside id="sidebar" class="enable-sticky grid-30 tablet-grid-30 hide-on-tablet hide-on-mobile">







                        <!-- start: .widget-tag-cloud -->
                        <div class="widget widget_epcl_tag_list grid-33 tablet-grid-50 mobile-grid-100">
                            <h3 class="widget-title title medium bordered"><svg class="decoration">
                                    <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#title-decoration">
                                    </use>
                                </svg><span>Topics Index</span></h3>

                            <div class="clear"></div>
                            <div class="item item-1 open">
                                <h4 class="toggle-title underline-effect ctag ctag-1-fundamentals">
                                    <span class="epcl-number">1</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/1-fundamentals/"
                                        class=" title small" data-id="ctag-1-fundamentals">Fundamentals</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/fullwidth/"
                                            data-id="fullwidth">Unveiling the Web Browser: Gateway to the World Wide
                                            Web</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/nosidebar/"
                                            data-id="nosidebar">HTTP, Web Browsers, and Web Servers</a></li>
                                    <li><span class="fw-semibold">3.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/vertical/"
                                            data-id="vertical">Understanding how links works 🚀</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="item item-2 ">
                                <h4 class="toggle-title underline-effect ctag ctag-2-html">
                                    <span class="epcl-number">2</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/2-html/" class=" title small"
                                        data-id="ctag-2-html">HTML</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/introduction-to-html/"
                                            data-id="introduction-to-html">Introduction to HTML 📖</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/understanding-html-the-foundation-of-the-web/"
                                            data-id="understanding-html-the-foundation-of-the-web">Creating your first
                                            web page 🎉</a></li>
                                    <li><span class="fw-semibold">3.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/html-text-tags-understanding-blocks-and-inlines/"
                                            data-id="html-text-tags-understanding-blocks-and-inlines">Text Tags: Blocks,
                                            headings and Inlines a quick start ✍</a></li>
                                    <li><span class="fw-semibold">4.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/displaying-images-in-html-the-img-tag/"
                                            data-id="displaying-images-in-html-the-img-tag">Displaying Images in HTML:
                                            The img tag a masterclass</a></li>
                                    <li><span class="fw-semibold">5.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/mastering-html-essentials-for-your-tech-blog/"
                                            data-id="mastering-html-essentials-for-your-tech-blog">Mastering HTML
                                            Essentials to start your Tech Blog 🔥</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="item item-3 ">
                                <h4 class="toggle-title underline-effect ctag ctag-3-css">
                                    <span class="epcl-number">3</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/3-css/" class=" title small"
                                        data-id="ctag-3-css">CSS</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/css-basics/"
                                            data-id="css-basics">Introduction to CSS 🚀</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/advanced-css-selectors-class-and-id/"
                                            data-id="advanced-css-selectors-class-and-id">CSS Selectors: Class and ID
                                            basic filtering for HTML elements</a></li>
                                    <li><span class="fw-semibold">3.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/text-only/"
                                            data-id="text-only">Crafting Engaging CSS Animations step by step guide</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="item item-4 ">
                                <h4 class="toggle-title underline-effect ctag ctag-4-javascript">
                                    <span class="epcl-number">4</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/4-javascript/"
                                        class=" title small" data-id="ctag-4-javascript">Javascript</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/javascript-basics-literals-identifiers-and-variables/"
                                            data-id="javascript-basics-literals-identifiers-and-variables">JavaScript
                                            Basics: Literals, Identifiers, and Variables</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/classic/"
                                            data-id="classic">Unleashing the Power of JavaScript: multiple event
                                            techniques</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="item item-5 ">
                                <h4 class="toggle-title underline-effect ctag ctag-5-databases">
                                    <span class="epcl-number">5</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/5-databases/"
                                        class=" title small" data-id="ctag-5-databases">Databases</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/introduction-to-dbms-and-sql/"
                                            data-id="introduction-to-dbms-and-sql">Introduction to DBMS and SQL</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/how-to-insert-data-into-your-table/"
                                            data-id="how-to-insert-data-into-your-table">How to insert data into your
                                            Table, the correct way</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="item item-6 ">
                                <h4 class="toggle-title underline-effect ctag ctag-6-deployment">
                                    <span class="epcl-number">6</span>
                                    <a href="https://ghost.estudiopatagon.com/zento/tag/6-deployment/"
                                        class=" title small" data-id="ctag-6-deployment">Deployment</a>
                                </h4>
                                <span class="toggle-icon"><svg class="icon small" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                                            fill="currentColor"></path>
                                    </svg></span>
                                <ul class="post-list">
                                    <li><span class="fw-semibold">1.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/getting-started-with-netlify-deployment/"
                                            data-id="getting-started-with-netlify-deployment">Getting Started with
                                            Netlify Deployment</a></li>
                                    <li><span class="fw-semibold">2.</span> <a
                                            href="https://ghost.estudiopatagon.com/zento/netlify-deploy-to-netlify/"
                                            data-id="netlify-deploy-to-netlify">Final steps to Deploy on Netlify</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end: .widget-tag-cloud -->





                    </aside>
                    <!-- end: #sidebar -->
                    <div class="center left-content grid-70">

                        <!-- start: .articles -->
                        <div class="articles classic">

                            <article class="default classic-large bg-box ctag ctag-3-css no-image post-access-public ">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/3-css/"
                                                class="primary-tag ctag ctag-3-css" data-id="ctag-3-css">CSS</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-19">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 19, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            2 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating   star-3">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/text-only/">Crafting
                                                    Engaging CSS Animations step by step guide</a></h2>

                                        </header>
                                        <div class="post-excerpt">
                                            <p>In the realm of technology blogging, captivating your audience goes
                                                beyond just the written word. Incorporating eye-catching CSS animations
                                                can elevate your content and provide a dynamic...</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/code/"
                                                        class="ctag ctag-code" data-id="ctag-code">Code</a>
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/guides/"
                                                        class="ctag ctag-guides" data-id="ctag-guides">Guides</a>
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/tech/"
                                                        class="ctag ctag-tech" data-id="ctag-tech">Tech</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    2 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                            <article
                                class="default classic-large bg-box ctag ctag-1-fundamentals  post-access-public featured">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/1-fundamentals/"
                                                class="primary-tag ctag ctag-1-fundamentals"
                                                data-id="ctag-1-fundamentals">Fundamentals</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-18">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 18, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            2 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating star-1  ">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/vertical/">Understanding
                                                    how links works 🚀</a></h2>

                                            <a href="https://ghost.estudiopatagon.com/zento/vertical/"
                                                class="access-icon visibility-members meta-info tooltip hide-on-mobile"
                                                data-title="Featured Article" aria-label="Featured Article">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M11.9998 17L6.12197 20.5902L7.72007 13.8906L2.48926 9.40983L9.35479 8.85942L11.9998 2.5L14.6449 8.85942L21.5104 9.40983L16.2796 13.8906L17.8777 20.5902L11.9998 17Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </header>
                                        <div class="post-excerpt">
                                            <p>Within a web browser, the ability to move from one document to another is
                                                facilitated by links. These links consist of two main parts: the
                                                protocol and server address, followed by the document path....</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/tech/"
                                                        class="ctag ctag-tech" data-id="ctag-tech">Tech</a>
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/code/"
                                                        class="ctag ctag-code" data-id="ctag-code">Code</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    2 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                            <article class="default classic-large bg-box ctag ctag-4-javascript  post-access-public ">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/4-javascript/"
                                                class="primary-tag ctag ctag-4-javascript"
                                                data-id="ctag-4-javascript">Javascript</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-18">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 18, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            2 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating   star-3">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/classic/">Unleashing
                                                    the Power of JavaScript: multiple event techniques</a></h2>

                                        </header>
                                        <div class="post-excerpt">
                                            <p>Incorporating dynamic and interactive elements into your content can
                                                significantly elevate the user experience. In this tutorial, we'll
                                                explore the...</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/code/"
                                                        class="ctag ctag-code" data-id="ctag-code">Code</a>
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/2-html/"
                                                        class="ctag ctag-2-html" data-id="ctag-2-html">HTML</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    2 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                            <article class="default classic-large bg-box ctag ctag-1-fundamentals  post-access-public ">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/1-fundamentals/"
                                                class="primary-tag ctag ctag-1-fundamentals"
                                                data-id="ctag-1-fundamentals">Fundamentals</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-18">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 18, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            2 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating  star-2 ">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/nosidebar/">HTTP, Web
                                                    Browsers, and Web Servers</a></h2>

                                        </header>
                                        <div class="post-excerpt">
                                            <p>At the core of the internet lies a complex yet fascinating ecosystem
                                                known as the World Wide Web. To unravel its workings, we need to explore
                                                key concepts such as HTTP, web browsers...</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/tech/"
                                                        class="ctag ctag-tech" data-id="ctag-tech">Tech</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    2 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                            <article class="default classic-large bg-box ctag ctag-2-html no-image post-access-public ">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/2-html/"
                                                class="primary-tag ctag ctag-2-html" data-id="ctag-2-html">HTML</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-18">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 18, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            2 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating   star-3">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/mastering-html-essentials-for-your-tech-blog/">Mastering
                                                    HTML Essentials to start your Tech Blog 🔥</a></h2>

                                        </header>
                                        <div class="post-excerpt">
                                            <p>As a technology blogger, having a strong foundation in HTML is
                                                fundamental for crafting engaging and well-structured content. In this
                                                tutorial, we'll delve into the key HTML...</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/code/"
                                                        class="ctag ctag-code" data-id="ctag-code">Code</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    2 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                            <article
                                class="default classic-large bg-box ctag ctag-2-html no-image post-access-members ">

                                <div class="post-format-image epcl-flex">
                                    <div class="meta meta-data">
                                        <div class="tags fill-color">
                                            <a href="https://ghost.estudiopatagon.com/zento/tag/2-html/"
                                                class="primary-tag ctag ctag-2-html" data-id="ctag-2-html">HTML</a>
                                        </div>
                                        <time class="meta-info" datetime="2024-01-18">
                                            <svg class="icon main-color small">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#calendar-icon">
                                                </use>
                                            </svg>
                                            Jan 18, 2024
                                        </time>
                                        <div class="min-read meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                </use>
                                            </svg>
                                            1 min read
                                        </div>

                                        <div class="difficulty meta-info">
                                            <svg class="icon main-color">
                                                <use
                                                    xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#medal-icon">
                                                </use>
                                            </svg> <span class="name">Difficulty:</span>
                                            <div class="rating star-1  ">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <header>
                                            <h2 class="main-title title underline-effect"><a
                                                    href="https://ghost.estudiopatagon.com/zento/displaying-images-in-html-the-img-tag/">Displaying
                                                    Images in HTML: The img tag a masterclass</a></h2>
                                            <a href="https://ghost.estudiopatagon.com/zento/displaying-images-in-html-the-img-tag/"
                                                class="access-icon visibility-members meta-info tooltip hide-on-mobile"
                                                data-title="Members Article" aria-label="Members Article">
                                                <svg>
                                                    <use
                                                        xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#locked">
                                                    </use>
                                                </svg>
                                            </a>

                                        </header>
                                        <div class="post-excerpt">
                                            <p>Images play a crucial role in enhancing the visual appeal of a website,
                                                and in HTML, the img tag is the key to incorporating images into your
                                                web pages. This tag is straightforward yet powerful...</p>
                                            <div class="clear"></div>
                                        </div>
                                        <footer class="bottom">
                                            <div class="meta bottom epcl-flex">
                                                <div class="tags">
                                                    <a href="https://ghost.estudiopatagon.com/zento/tag/code/"
                                                        class="ctag ctag-code" data-id="ctag-code">Code</a>
                                                </div>
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>
                                            </div>
                                            <div class="meta inline hide-on-tablet hide-on-desktop">
                                                <a href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/"
                                                    class="author">
                                                    <img class="author-image cover" loading="lazy" fetchpriority="low"
                                                        decoding="async"
                                                        src="{{ asset('assets') }}/images/a-hiker-in-the-style-of-vibrant-illustrations-florianne-becker-light-violet-and-orange-deconstructed-tailoring-fauvismcore-minimal-1-65c0389ba903a-4.webp"
                                                        alt="Image of: Jonathan Doe">
                                                    <span class="author-name">Jonathan Doe</span>
                                                </a>

                                                <div class="min-read meta-info">
                                                    <svg class="icon main-color">
                                                        <use
                                                            xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#reading-icon">
                                                        </use>
                                                    </svg>
                                                    1 min read
                                                </div>
                                            </div>
                                        </footer>
                                    </div>

                                </div>

                                <div class="clear"></div>

                            </article>
                        </div>
                        <!-- end: .articles -->

                        <nav class="epcl-pagination section np-bottom">
                            <div class="nav">
                                <span class="page-number">Page 1 of 3</span>
                                <a class="next epcl-button"
                                    href="https://ghost.estudiopatagon.com/zento/cta-carousel/page/2/">Next</a>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
            <!-- end: .content-wrapper -->

        </main>


        <div class="clear"></div>
        <!-- start: .epcl-cta -->
        <div class="epcl-cta bg-box no-border-radius">
            <div class="grid-container epcl-flex">
                <div class="left grid-50 tablet-grid-50 np-mobile">
                    <h2 class="title ularge no-margin">Join to our community 👋</h2>
                    <p>Unlock full access to <b>Zento</b> and see the entire library of <b>paid-members</b> only posts.
                    </p>
                </div>
                <div class="right grid-50 tablet-grid-50 textcenter np-mobile">
                    <p>Try it for free for <b>7 days</b>, cancel at <b>anytime.</b></p>
                    <a href="https://ghost.estudiopatagon.com/zento/membership" class="epcl-button black large">See our
                        plans</a>
                </div>
            </div>
            <div class="clear"></div>
            <svg class="bg" width="284" height="453" viewBox="0 0 284 453" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="main-color"
                    d="M100.795 7.49467C105.015 -1.99852 118.025 -2.47329 123.123 6.07068L123.86 7.49467L136.88 36.7886C148.263 62.3995 167.185 83.8837 191.069 98.4068L195.095 100.762L218.221 113.77C226.323 118.328 226.773 129.596 219.571 134.898L218.221 135.769L195.095 148.778C170.668 162.518 151.059 183.378 138.846 208.521L136.88 212.751L123.86 242.045C119.641 251.538 106.63 252.013 101.531 243.469L100.795 242.045L87.7754 212.751C76.3928 187.141 57.4695 165.656 33.5855 151.133L29.5593 148.778L6.43298 135.769C-1.66775 131.213 -2.1179 119.945 5.08284 114.641L6.43298 113.77L29.5593 100.762C53.9866 87.0215 73.5964 66.162 85.8089 41.0183L87.7754 36.7886L100.795 7.49467Z"
                    fill="currentColor"></path>
                <path class="secondary-color"
                    d="M159.795 210.495C164.015 201.001 177.025 200.527 182.123 209.071L182.86 210.495L195.88 239.789C207.263 265.399 226.185 286.884 250.069 301.407L254.095 303.762L277.221 316.77C285.323 321.328 285.773 332.596 278.571 337.898L277.221 338.769L254.095 351.778C229.668 365.518 210.059 386.378 197.846 411.521L195.88 415.751L182.86 445.045C178.641 454.538 165.63 455.013 160.531 446.469L159.795 445.045L146.775 415.751C135.393 390.141 116.47 368.656 92.5855 354.133L88.5593 351.778L65.433 338.769C57.3322 334.213 56.8821 322.945 64.0828 317.641L65.433 316.77L88.5593 303.762C112.987 290.022 132.596 269.162 144.809 244.018L146.775 239.789L159.795 210.495Z"
                    fill="currentColor"></path>
            </svg>
            <svg class="bg2" width="284" height="453" viewBox="0 0 284 453" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path class="main-color"
                    d="M100.795 445.045C105.015 454.538 118.025 455.013 123.123 446.469L123.86 445.045L136.88 415.751C148.263 390.14 167.185 368.656 191.069 354.133L195.095 351.777L218.221 338.77C226.323 334.212 226.773 322.944 219.571 317.642L218.221 316.77L195.095 303.762C170.668 290.022 151.059 269.162 138.846 244.018L136.88 239.788L123.86 210.494C119.641 201.002 106.63 200.527 101.531 209.071L100.795 210.494L87.7754 239.788C76.3928 265.399 57.4695 286.884 33.5855 301.406L29.5593 303.762L6.43298 316.77C-1.66775 321.327 -2.1179 332.595 5.08284 337.898L6.43298 338.77L29.5593 351.777C53.9866 365.518 73.5964 386.378 85.8089 411.521L87.7754 415.751L100.795 445.045Z"
                    fill="currentColor"></path>
                <path class="secondary-color"
                    d="M159.795 242.045C164.015 251.538 177.025 252.013 182.123 243.469L182.86 242.045L195.88 212.751C207.263 187.14 226.185 165.656 250.069 151.133L254.095 148.777L277.221 135.77C285.323 131.212 285.773 119.944 278.571 114.642L277.221 113.77L254.095 100.762C229.668 87.0217 210.059 66.1616 197.846 41.0181L195.88 36.7884L182.86 7.49449C178.641 -1.99834 165.63 -2.473 160.531 6.07056L159.795 7.49449L146.775 36.7884C135.393 62.399 116.47 83.8839 92.5855 98.4062L88.5593 100.762L65.433 113.77C57.3322 118.327 56.8821 129.595 64.0828 134.898L65.433 135.77L88.5593 148.777C112.987 162.518 132.596 183.378 144.809 208.521L146.775 212.751L159.795 242.045Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!-- end: .epcl-cta -->
        <!-- start: #footer -->
        <footer id="footer">

            <div class="widgets grid-container">
                <div class="desktop-footer hide-on-mobile hide-on-tablet">

                    <!-- start: .widget-social -->
                    <div class="widget widget_epcl_social widget_menu grid-33 tablet-grid-50 mobile-grid-100">
                        <h3 class="widget-title title medium bordered"><svg class="decoration">
                                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#title-decoration">
                                </use>
                            </svg><span>Follow Us</span></h3>
                        <ul class="icons">
                            <li>
                                <a href="https://github.com/estudiopatagon" class="github" target="_blank">
                                    <span class="name">Contribute on <b>Github</b></span>
                                    <span class="icon"><svg class="icon">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#github-icon">
                                            </use>
                                        </svg></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/estudiopatagon/" class="whatsapp" target="_blank">
                                    <span class="name">Let's talk on <b>WhatsApp</b></span>
                                    <span class="icon"><svg class="icon">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#whatsapp-icon">
                                            </use>
                                        </svg></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/estudiopatagon/" class="instagram" target="_blank">
                                    <span class="name">Follow on <b>Instagram</b></span>
                                    <span class="icon"><svg class="icon">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#instagram-icon">
                                            </use>
                                        </svg></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/envato" class="facebook" target="_blank"
                                    rel="nofollow noopener">
                                    <span class="name">Follow on <b>Facebook</b></span>
                                    <span class="icon"><svg class="icon small">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#facebook-icon">
                                            </use>
                                        </svg></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/envato" class="twitter" target="_blank"
                                    rel="nofollow noopener">
                                    <span class="name">Follow on <b>Twitter</b></span>
                                    <span class="icon"><svg class="icon small">
                                            <use
                                                xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#twitter-icon">
                                            </use>
                                        </svg></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- end: .widget-social-->
                    <!-- start: .widget -->
                    <section class="widget widget_menu grid-33 tablet-grid-50 mobile-grid-100">
                        <h2 class="widget-title title medium bordered"><svg class="decoration">
                                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#title-decoration">
                                </use>
                            </svg><span>Quick Links</span></h2>
                        <nav class="secondary-nav grid-container grid-small textcenter">
                            <ul class="menu">
                                <li class="nav-membership"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/membership/">Membership</a></li>
                                <li class="nav-author-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/">Author
                                        Page</a></li>
                                <li class="nav-sign-in"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/signin/">Sign In</a></li>
                                <li class="nav-subscribe-sign-up"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/subscribe/">Subscribe / Sign Up</a>
                                </li>
                                <li class="nav-tag-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/tag/1-fundamentals/">#Tag page</a>
                                </li>
                                <li class="nav-404-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/404/">404 Page</a></li>
                            </ul>
                        </nav>


                        <div class="clear"></div>
                    </section>
                    <!-- end: .widget -->
                    <!-- start: .widget -->
                    <section class="widget widget_text grid-33 tablet-grid-50 mobile-grid-100">
                        <div class="logo"><a href="https://ghost.estudiopatagon.com/zento"><img src="{{ asset('assets') }}/images/logo-zento.svg"
                                    alt="Zento" width="170" height="60" decoding="async"></a></div>
                        <div class="textwidget">
                            <p>Subscribe to our email newsletter and unlock access to <b>members-only</b> content and
                                <b>exclusive updates.</b></p>
                        </div>
                        <br>
                        <form class="subscribe-form" data-members-form="subscribe">
                            <label class="title small">Let's connect</label>
                            <div class="form-group">
                                <input type="email" name="email" class="inputbox large" required=""
                                    placeholder="Enter your email address" data-members-email="">
                                <button class="epcl-button submit absolute" type="submit">Get Started<span
                                        class="loader"></span></button>
                            </div>
                            <p class="error-detail" data-members-error=""></p>
                            <p class="success-message">Subscription was sent successfully, check your email <i
                                    class="fa fa-envelope-o"></i></p>
                        </form>
                        <div class="clear"></div>
                    </section>
                    <!-- end: .widget -->
                    <div class="clear"></div>
                </div>

                <div class="mobile-footer hide-on-desktop">
                    <!-- start: .widget -->
                    <section class="widget widget_menu grid-33 tablet-grid-50 mobile-grid-100">
                        <h2 class="widget-title title medium bordered"><svg class="decoration">
                                <use xlink:href="/zento/assets/images/svg-icons.svg?v=1b89f44b98#title-decoration">
                                </use>
                            </svg><span>Quick Links</span></h2>
                        <nav class="secondary-nav grid-container grid-small textcenter">
                            <ul class="menu">
                                <li class="nav-membership"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/membership/">Membership</a></li>
                                <li class="nav-author-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/author/jonathan-doe/">Author
                                        Page</a></li>
                                <li class="nav-sign-in"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/signin/">Sign In</a></li>
                                <li class="nav-subscribe-sign-up"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/subscribe/">Subscribe / Sign Up</a>
                                </li>
                                <li class="nav-tag-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/tag/1-fundamentals/">#Tag page</a>
                                </li>
                                <li class="nav-404-page"><span class="sep"></span><a
                                        href="https://ghost.estudiopatagon.com/zento/404/">404 Page</a></li>
                            </ul>
                        </nav>


                        <div class="clear"></div>
                    </section>
                    <!-- end: .widget --> <!-- start: .widget -->
                    <section class="widget widget_text grid-33 tablet-grid-50 mobile-grid-100">
                        <div class="logo"><a href="https://ghost.estudiopatagon.com/zento"><img src="{{ asset('assets') }}/images/logo-zento.svg"
                                    alt="Zento" width="170" height="60" decoding="async"></a></div>
                        <div class="textwidget">
                            <p>Subscribe to our email newsletter and unlock access to <b>members-only</b> content and
                                <b>exclusive updates.</b></p>
                        </div>
                        <br>
                        <form class="subscribe-form" data-members-form="subscribe">
                            <label class="title small">Let's connect</label>
                            <div class="form-group">
                                <input type="email" name="email" class="inputbox large" required=""
                                    placeholder="Enter your email address" data-members-email="">
                                <button class="epcl-button submit absolute" type="submit">Get Started<span
                                        class="loader"></span></button>
                            </div>
                            <p class="error-detail" data-members-error=""></p>
                            <p class="success-message">Subscription was sent successfully, check your email <i
                                    class="fa fa-envelope-o"></i></p>
                        </form>
                        <div class="clear"></div>
                    </section>
                    <!-- end: .widget -->
                </div>

            </div>

            <p class="published underline-effect"><a href="https://estudiopatagon.com/projects/zento-for-ghost/"
                    target="_blank">Zento</a> Theme by <a href="https://estudiopatagon.com/"
                    target="_blank">EstudioPatagon</a> <span class="dot"></span> Powered by <a href="https://ghost.org/"
                    target="_blank">Ghost</a></p>
            <div class="clear"></div>

            <span id="back-to-top" class="epcl-button">
                <svg class="icon large" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m12 5l6 6m-6-6l-6 6m6-6v14"></path>
                </svg>
            </span>

        </footer>
        <!-- end: #footer -->
    </div>
    <!-- end: #wrapper -->

    <div class="epcl-demo-tool hide-on-mobile hide-on-tablet hide-on-desktop-sm">
        <div class="tool" title="Demo options">
            <svg class="icon ularge" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 21h-4l-.551-2.48a6.991 6.991 0 0 1-1.819-1.05l-2.424.763l-2-3.464l1.872-1.718a7.055 7.055 0 0 1 0-2.1L3.206 9.232l2-3.464l2.424.763A6.992 6.992 0 0 1 9.45 5.48L10 3h4l.551 2.48a6.992 6.992 0 0 1 1.819 1.05l2.424-.763l2 3.464l-1.872 1.718a7.05 7.05 0 0 1 0 2.1l1.872 1.718l-2 3.464l-2.424-.763a6.99 6.99 0 0 1-1.819 1.052L14 21z">
                    </path>
                    <circle cx="12" cy="12" r="3"></circle>
                </g>
            </svg>
        </div>
        <div class="title usmall">Change Styling:</div>
        <label><input type="color" value="#6A4EE9" data-target="--epcl-main-color"> Accent Color</label>
        <label><input type="color" value="#FF2AAC" data-target="--epcl-secondary-color"> Decoration Color</label>
        <label><input type="color" value="#FAF8FF" data-class="body" data-attr="background"> Background Color</label>
        <label><input type="color" value="#E9E8FF" data-target="--epcl-boxes-border-color"> Boxes Border Color</label>
        <label><input type="color" value="#E9E8FF" data-target="--epcl-border-color"> General Border Color</label>
        <p style="font-size: 12px; padding-top: 5px;"><b>Note:</b> All these options are included in the Ghost Admin.
        </p>
    </div>
    <a href="https://1.envato.market/ghost-zento-purchase-2" target="_blank"
        class="epcl-purchase hide-on-mobile hide-on-tablet hide-on-desktop-sm">Purchase - <b>$69</b></a>
    <a href="https://estudiopatagon.com/projects/?platform=ghost" target="_blank"
        class="epcl-themes epcl-purchase hide-on-mobile hide-on-tablet hide-on-desktop-sm">More <b>EstudioPatagon</b>
        Themes</a>

    <script defer="" src="{{ asset('assets') }}/js/scripts.min.js"></script>

    <script defer="" src="{{ asset('assets') }}/js/prism-core.min.js"></script>
    <script defer="" src="{{ asset('assets') }}/js/prism-autoloader.min.js"></script>
    <script defer="" src="{{ asset('assets') }}/js/prism-plugins.min.js"></script>




    <div id="ghost-portal-root"></div>
    <div id="sodo-search-root"></div><iframe name="__privateStripeMetricsController7640" frameborder="0"
        allowtransparency="true" scrolling="no" role="presentation" allow="payment *"
        src="./m-outer-3437aaddcdf6922d623e172c2d6f9278.html" aria-hidden="true" tabindex="-1"
        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
@endsection