@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <!-- About Company-->
    <section class="section section-md bg-gray-100 text-md-left section-relative">
        <div class="container">
            <div class="row row-40 row-lg-50 row-xl-60">
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-hammer-wrench"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Japanese Technology</a></h5>
                                <p class="box-icon-classic-text">We provide trusted and dependable technologies from Japan. We ensure 0% compromise with quality.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-users2"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Professional Services</a></h5>
                                <p class="box-icon-classic-text">We provide professional and timely services. Our experts always provide pocket friendly solutions.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-apartment"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Powerful Equipment</a></h5>
                                <p class="box-icon-classic-text">We use modern &amp; powerful equipment to create efficient and reliable infrastructure.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-pencil-ruler"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Quality Materials</a></h5>
                                <p class="box-icon-classic-text">High-quality materials are the absolute guarantee of building dependable facilities.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-coin-dollar"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Affordable Prices</a></h5>
                                <p class="box-icon-classic-text">At JBITL, we provide all our services and solutions at quite reasonable prices.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-headset"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">24/7 Support</a></h5>
                                <p class="box-icon-classic-text">Any client of our company receives full 24/7 support by our experienced consultants.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- What we offer-->
    <section class="section section-lg bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">What we offer</span></h3>
            <div class="owl-carousel owl-style-3 dots-style-2" data-items="1" data-sm-items="2" data-lg-items="3"
                data-margin="30" data-autoplay="true" data-dots="true" data-animation-in="fadeIn"
                data-animation-out="fadeOut">
                <!-- Services Creative-->
                <article class="services-creative">
                    <a class="services-creative-figure" href="single-service.html"><img src="{{asset('public/frontend')}}/images/services/our-products.jpg" alt="" width="370" height="230" /></a>
                    <div class="services-creative-caption">
                        <h5 class="services-creative-title"><a href="single-service.html">Our Products</a></h5>
                        <p class="services-creative-text description_3">JBITL offers ECO 5000 for concrete Brick technology and FLAT PLAG JBITL for dampproof roof and wall. In addition to eco-friendly bricks, JBITL also offers a range of sustainable construction materials such as insulation, roofing materials, and flooring options.</p>
                        <span class="services-creative-counter box-ordered-item">01</span>
                    </div>
                </article>
                <!-- Services Creative-->
                <article class="services-creative">
                    <a class="services-creative-figure" href="single-service.html"><img src="{{asset('public/frontend')}}/images/services/eco-5000.jpg" alt="" width="370" height="230" /></a>
                    <div class="services-creative-caption">
                        <h5 class="services-creative-title"><a href="single-service.html">What is ECO 5000?</a></h5>
                        <p class="services-creative-text description_3">ECO-5000 is a unique chemical treatment specially formulated to improve the durability of reinforced concrete structures exposed to harsh conditions. This additive is added to the concrete mix at the time of batching to provide a range of features and benefits.</p>
                        <span class="services-creative-counter box-ordered-item">02</span>
                    </div>
                </article>
                <!-- Services Creative-->
                <article class="services-creative">
                    <a class="services-creative-figure" href="single-service.html"><img src="{{asset('public/frontend')}}/images/services/project-planning.jpg" alt="" width="370" height="230" /></a>
                    <div class="services-creative-caption">
                        <h5 class="services-creative-title"><a href="single-service.html">Consulting Services</a></h5>
                        <p class="services-creative-text description_3">JBITL also offers consulting services to help construction companies and developers make the switch to more sustainable and eco-friendly construction practices. JBITL team of experts can provide guidance on everything from raw material selection to installation and maintenance.</p>
                        <span class="services-creative-counter box-ordered-item">03</span>
                    </div>
                </article>
                <!-- Services Creative-->
                <article class="services-creative">
                    <a class="services-creative-figure" href="single-service.html"><img src="{{asset('public/frontend')}}/images/services/value-engineering.jpg" alt="" width="370" height="230" /></a>
                    <div class="services-creative-caption">
                        <h5 class="services-creative-title"><a href="single-service.html">Value Engineering</a></h5>
                        <p class="services-creative-text description_3">Value engineering is used to solve problems and eliminate any unwanted costs.</p>
                        <span class="services-creative-counter box-ordered-item">04</span>
                    </div>
                </article>
                <!-- Services Creative-->
                <article class="services-creative">
                    <a class="services-creative-figure" href="single-service.html"><img src="{{asset('public/frontend')}}/images/services/quality-control.jpg" alt="" width="370" height="230" /></a>
                    <div class="services-creative-caption">
                        <h5 class="services-creative-title"><a href="single-service.html">Quality Control</a></h5>
                        <p class="services-creative-text description_3">We control the quality of all our projects, especially the most complex ones.</p>
                        <span class="services-creative-counter box-ordered-item">05</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Section CTA-->
    <section class="section parallax-container" data-parallax-img="{{asset('public/frontend')}}/images/bg-cta.jpg">
        <div class="parallax-content section-lg context-dark text-md-left">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 col-md-6 col-lg-5">
                        <div class="cta-classic">
                            <h4 class="cta-classic-title wow fadeInLeft">Sustainable Construction and Eco-friendly Products</h4>
                            <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">Creating efficient infrastructure since 1994</p>
                            <a class="button button-lg button-primary button-winona wow fadeInUp" href="services.html" data-wow-delay=".2s">Our Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mining machinery-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">OUR Gallery</span></h3>
        </div>
        <div class="container-fluid container-inset-0">
            <div class="row row-30 row-desktop-8 gutters-8 hoverdir" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption">
                            <a class="thumbnail-modern-figure" href="{{asset('public/frontend')}}/images/project-11-1200x800-original.jpg" data-lightgallery="item">
                                <img src="{{asset('public/frontend')}}/images/grid-gallery-1-474x355.jpg" alt="" width="474" height="355" />
                            </a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Smith office Center</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-2-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Deltatrans
                                        Warehouse</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/project-3-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-3-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">fitpower Gym</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-4-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Beyer Concert
                                        Hall</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/project-13-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-5-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Graham Bridge</a>
                                </h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/project-14-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-6-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Dallas Art Park</a>
                                </h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/project-6-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-7-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">wilson co. Headquarters</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="oh-desktop">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item"
                            data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                                href="{{asset('public/frontend')}}/images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img
                                    src="{{asset('public/frontend')}}/images/grid-gallery-8-474x355.jpg" alt="" width="474" height="355" /></a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title"><a href="project-page.html">Abington University</a></h5>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Project-->
    <section class="section section-inset-8 bg-image-5 context-dark text-center">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Featured projects</span></h3>
            <div class="owl-style-4">
                <div class="owl-carousel dots-style-2" data-items="1" data-md-items="2" data-margin="30" data-md-margin="0" data-nav="true" data-dots="true" data-smart-speed="400" data-autoplay="true">
                    <!-- Project Classic-->
                    <article class="project-classic">
                        <a class="project-classic-figure" href="project-page.html">
                            <img src="{{asset('public/frontend')}}/images/project-7-570x370.jpg" alt="" width="570" height="370" />
                        </a>
                        <div class="project-classic-caption">
                            <h5 class="project-classic-title"><a href="project-page.html">Wilson &amp; Taylor Concert Hall and Entertainment Center (2021)</a></h5>
                            <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>florida</span></div>
                            <p class="project-classic-text">JBITL provided engineering design and planning for this project completed in early 2021.</p>
                        </div>
                    </article>
                    <!-- Project Classic-->
                    <article class="project-classic">
                        <a class="project-classic-figure" href="project-page.html">
                            <img src="{{asset('public/frontend')}}/images/project-8-570x370.jpg" alt="" width="570" height="370" />
                        </a>
                        <div class="project-classic-caption">
                            <h5 class="project-classic-title"><a href="project-page.html">West Oakland Bridge: Project Design and Initial Planning (2021)</a></h5>
                            <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>California</span></div>
                            <p class="project-classic-text">Our team of engineers cooperated with Dynamics construction company on this ambitious project.</p>
                        </div>
                    </article>
                    <!-- Project Classic-->
                    <article class="project-classic">
                        <a class="project-classic-figure" href="project-page.html">
                            <img src="{{asset('public/frontend')}}/images/project-7-570x370.jpg" alt="" width="570" height="370" />
                        </a>
                        <div class="project-classic-caption">
                            <h5 class="project-classic-title"><a href="project-page.html">Wilson &amp; Taylor Concert Hall and Entertainment Center (2021)</a></h5>
                            <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>florida</span></div>
                            <p class="project-classic-text">JBITL provided engineering design and planning for this project completed in early 2021.</p>
                        </div>
                    </article>
                    <!-- Project Classic-->
                    <article class="project-classic">
                        <a class="project-classic-figure" href="project-page.html">
                            <img src="{{asset('public/frontend')}}/images/project-8-570x370.jpg" alt="" width="570" height="370" />
                        </a>
                        <div class="project-classic-caption">
                            <h5 class="project-classic-title"><a href="project-page.html">West Oakland Bridge: Project Design and Initial Planning (2021)</a></h5>
                            <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>California</span></div>
                            <p class="project-classic-text">Our team of engineers cooperated with Dynamics construction company on this ambitious project.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-->
    <section class="section section-xl bg-gray-100 text-md-left">
        <div class="container">
            <div class="row row-60 justify-content-center flex-lg-row-reverse">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="offset-left-xl-70">
                        <h3 class="oh-desktop"><span class="d-inline-block wow slideInLeft">Our clients</span></h3>
                        <div class="slick-quote">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true"
                                data-items="1" data-child="#child-carousel-2" data-for="#child-carousel-2"
                                data-slide-effect="true">
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">The quality of the non-fired bricks exceeded my expectations. They are sturdy, well-crafted, and perfectly suited for the purpose. The natural texture and color of the bricks added a charming rustic touch to my garden, making it a standout feature.</span></h5>
                                        <h5 class="quote-modern-author">Md. Ruhul Amin,</h5>
                                        <!-- <p class="quote-modern-status">“ICON ISL”, Lead HR Manager</p> -->
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">What impressed me the most was the exceptional customer service I received from them. The team was knowledgeable, friendly, and helped me choose the right type and quantity of bricks for my project. They even provided useful tips on installation and maintenance.</span></h5>
                                        <h5 class="quote-modern-author">Warash Hossain,</h5>
                                        <!-- <p class="quote-modern-status">“STC Management”, Sales Manager</p> -->
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">They offer a fantastic selection, excellent customer service, and a commitment to sustainability. Their experts made the job easier and visible to me. I’m thrilled with the outcome of my project and will definitely be a returning customer for future ventures.</span></h5>
                                        <h5 class="quote-modern-author">Md. Alamgir,</h5>
                                        <!-- <p class="quote-modern-status">“STC Management”, Sales Manager</p> -->
                                    </article>
                                </div>
                            </div>
                            <div class="slick-slider child-carousel" id="child-carousel-2" data-arrows="true"
                                data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4"
                                data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                                <div class="item">
                                    <img class="img-circle" src="{{asset('public/frontend')}}/images/clients/Md.-Ruhul-Amin.jpg" alt="" width="83" height="83" />
                                </div>
                                <div class="item">
                                    <img class="img-circle" src="{{asset('public/frontend')}}/images/clients/Warash-Hossain.jpg" alt="" width="83" height="83" />
                                </div>
                                <div class="item">
                                    <img class="img-circle" src="{{asset('public/frontend')}}/images/clients/Md.-Alamgir.jpg" alt="" width="83" height="83" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <!-- Clients Classic-->
                    <div class="clients-classic-wrap">
                        <div class="row no-gutters">
                            <div class="col-sm-6 wow fadeInLeft">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-1-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-2-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-sm-6 wow fadeInLeft">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-3-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-4-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-sm-6 wow fadeInLeft">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-5-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic">
                                    <a class="clients-classic-figure" href="#"><img src="{{asset('public/frontend')}}/images/clients-6-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section parallax-container" data-parallax-img="{{asset('public/frontend')}}/images/bg-counter-3.jpg">
        <div class="parallax-content section-inset-9 context-dark">
            <div class="container">
                <div class="row row-30 justify-content-center justify-content-xl-between align-items-lg-end">
                    <div class="col-sm-6 col-md-3">
                        <div class="counter-classic">
                            <h3 class="counter-classic-number"><span class="counter">100</span>+</h3>
                            <h6 class="counter-classic-title">Project</h6>
                            <div class="counter-classic-decor"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="counter-classic">
                            <h3 class="counter-classic-number"><span class="counter">25</span></h3>
                            <h6 class="counter-classic-title">Certification & Award</h6>
                            <div class="counter-classic-decor"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="counter-classic">
                            <h3 class="counter-classic-number"><span class="counter">1000</span>+</h3>
                            <h6 class="counter-classic-title">Products</h6>
                            <div class="counter-classic-decor"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="counter-classic">
                            <h3 class="counter-classic-number"><span class="counter">87</span></h3>
                            <h6 class="counter-classic-title">Value Clients</h6>
                            <div class="counter-classic-decor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-->
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-5 col-lg-4 col-xl-3">
                    <div class="box-team">
                        <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Our team</span></h3>
                        <h6 class="title-style-1 wow fadeInLeft" data-wow-delay=".1s">Professional Civil engineering
                        </h6>
                        <p class="wow fadeInRight" data-wow-delay=".2s">We are a team of dedicated and professional
                            engineers and project managers ready to help.</p>
                        <div class="group-sm oh-desktop">
                            <div class="button-style-1 wow slideInLeft"><span
                                    class="icon mdi mdi-email-outline"></span><span class="button-style-1-text"><a
                                        href="contacts.html">Contact us</a></span></div>
                            <div class="wow slideInRight">
                                <div class="owl-custom-nav" id="owl-custom-nav-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="owl-carousel owl-style-5" data-items="1" data-sm-items="2" data-lg-items="3"
                        data-margin="30" data-autoplay="false" data-animation-in="fadeIn"
                        data-animation-out="fadeOut" data-navigation-class="#owl-custom-nav-1">
                        <!-- Team Modern-->
                        <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/team-18-270x236.jpg" alt="" width="270" height="236" /></a>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Frank McMillan</a></h6>
                                <div class="team-modern-status">CEO, Managing Director</div>
                                <ul class="list-inline team-modern-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Team Modern-->
                        <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/team-19-270x236.jpg" alt="" width="270" height="236" /></a>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">John Smith</a></h6>
                                <div class="team-modern-status">Construction Manager</div>
                                <ul class="list-inline team-modern-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Team Modern-->
                        <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/team-3-270x236.jpg" alt="" width="270" height="236" /></a>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Ben Wilson</a></h6>
                                <div class="team-modern-status">Estimating Manager</div>
                                <ul class="list-inline team-modern-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Team Modern-->
                        <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/team-20-270x236.jpg" alt="" width="270" height="236" /></a>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">Ben Fitzgerald</a></h6>
                                <div class="team-modern-status">Quantity Surveyor</div>
                                <ul class="list-inline team-modern-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Team Modern-->
                        <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/team-21-270x236.jpg" alt="" width="270" height="236" /></a>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">John Tuff</a></h6>
                                <div class="team-modern-status">Health &amp; Safety Manager</div>
                                <ul class="list-inline team-modern-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe to Our Newsletter-->
    <section class="section parallax-container" data-parallax-img="{{asset('public/frontend')}}/images/bg-forms-1.jpg">
        <div class="parallax-content section-md context-dark text-md-left">
            <div class="container">
                <div class="row row-30 justify-content-center align-items-center">
                    <div class="col-lg-4 col-xl-3">
                        <h5 class="oh-desktop"><span class="d-inline-block wow slideInUp">Newsletter</span></h5>
                        <p class="oh-desktop"><span class="d-inline-block wow slideInDown">Sign up to our newsletter
                                to receive the latest news.</span></p>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <!-- RD Mailform-->
                        <div class="block-center">
                            <form class="rd-form rd-mailform rd-form-inline oh-desktop rd-form-inline-lg"
                                data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                action="bat/rd-mailform.php">
                                <div class="form-wrap wow slideInUp">
                                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email"/>
                                    <label class="form-label" for="subscribe-form-0-email">Your E-mail*</label>
                                </div>
                                <div class="form-button wow slideInRight">
                                    <button class="button button-winona button-lg button-primary" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest news-->
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="tabs-custom tabs-post" id="tabs-9">
                <div class="row align-items-md-end align-items-xl-start">
                    <div class="col-md-6 tab-content-3 wow fadeInUp">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-9-1">
                                <div class="post-amy-figure"><img src="{{asset('public/frontend')}}/images/post-1-570x505.jpg" alt="" width="570"
                                        height="505" /><a href="blog-post.html"><span
                                            class="icon linearicons-link2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-9-2">
                                <div class="post-amy-figure"><img src="{{asset('public/frontend')}}/images/post-2-570x505.jpg" alt="" width="570"
                                        height="505" /><a href="blog-post.html"><span
                                            class="icon linearicons-link2"></span></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-9-3">
                                <div class="post-amy-figure"><img src="{{asset('public/frontend')}}/images/post-3-570x505.jpg" alt="" width="570"
                                        height="505" /><a href="blog-post.html"><span
                                            class="icon linearicons-link2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 index-1">
                        <h3 class="tabs-post-title oh-desktop"><span class="d-inline-block wow slideInDown">Latest
                                news</span></h3>
                        <ul class="nav nav-tabs">
                            <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link active"
                                    href="#tabs-9-1" data-toggle="tab"></a>
                                <div class="post-amy">
                                    <h5 class="post-amy-title"><a href="blog-post.html">Repairs To Commercial
                                            Buildings: What To Think About</a></h5>
                                    <ul class="post-amy-info list-inline">
                                        <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2021-05-26">May 26, 2021</time>
                                        </li>
                                        <li class="post-amy-autor"><span
                                                class="icon mdi mdi-account-outline"></span><a href="#">Jane
                                                Williams</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link"
                                    href="#tabs-9-2" data-toggle="tab"></a>
                                <div class="post-amy">
                                    <h5 class="post-amy-title"><a href="blog-post.html">Questions To Ask Your
                                            Contractor Before Carrying Out Road Maintenance</a></h5>
                                    <ul class="post-amy-info list-inline">
                                        <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2021-05-26">May 26, 2021</time>
                                        </li>
                                        <li class="post-amy-autor"><span
                                                class="icon mdi mdi-account-outline"></span><a href="#">Jane
                                                Williams</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item wow fadeInRight" role="presentation"><a class="nav-link"
                                    href="#tabs-9-3" data-toggle="tab"></a>
                                <div class="post-amy">
                                    <h5 class="post-amy-title"><a href="blog-post.html">8 Useful Tips on Preparing
                                            For Drainage Construction</a></h5>
                                    <ul class="post-amy-info list-inline">
                                        <li class="post-amy-time"><span class="icon mdi mdi-clock"></span>
                                            <time datetime="2021-05-26">May 26, 2021</time>
                                        </li>
                                        <li class="post-amy-autor"><span
                                                class="icon mdi mdi-account-outline"></span><a href="#">Jane
                                                Williams</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
