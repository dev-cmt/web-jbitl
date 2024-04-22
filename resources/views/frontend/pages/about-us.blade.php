@extends('frontend.layouts.app')
@section('title', 'About-JBITL')
@section('content')
    
    <!-- About-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left"
                id="tabs-4">
                <div class="col-lg-4 col-xl-3">
                    <h5 class="text-spacing-200">25+ years of experience</h5>
                    <ul class="nav list-category list-category-down-md-inline-block">
                        <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay="0s"><a
                                class="active" href="#tabs-4-1" data-toggle="tab">About us</a></li>
                        <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".1s"><a
                                href="#tabs-4-2" data-toggle="tab">Our Mission</a></li>
                        <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".2s"><a
                                href="#tabs-4-3" data-toggle="tab">Our Goals</a></li>
                        <li class="list-category-item wow fadeInRight" role="presentation" data-wow-delay=".3s"><a
                                href="#tabs-4-4" data-toggle="tab">Company values</a></li>
                    </ul><a class="button button-lg button-primary button-winona" href="contacts.html">Contact
                        us</a>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <!-- Tab panes-->
                    <div class="tab-content tab-content-1">
                        <div class="tab-pane fade show active" id="tabs-4-1">
                            <h4>A few words about us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Mattis molestie a iaculis at erat
                                pellentesque adipiscing. </p>
                            <p>Est ullamcorper eget nulla facilisi etiam dignissim diam quis enim. Nisl condimentum
                                id venenatis a condimentum vitae sapien pellentesque habitant. Arcu non odio euismod
                                lacinia at quis risus sed vulputate. Pharetra sit amet aliquam id diam maecenas
                                ultricies mi. Ut tellus elementum sagittis vitae et leo. Sagittis id consectetur
                                purus ut faucibus. </p><img src="{{asset('public/frontend')}}/images/about-1-835x418.jpg" alt="" width="835"
                                height="418" />
                        </div>
                        <div class="tab-pane fade" id="tabs-4-2">
                            <h4>Providing quality services</h4>
                            <p>Tristique et egestas quis ipsum. Sagittis vitae et leo duis ut diam quam nulla
                                porttitor. Sit amet nulla facilisi morbi tempus. Nunc congue nisi vitae suscipit
                                tellus mauris a. </p>
                            <p>Mi ipsum faucibus vitae aliquet nec. Dolor magna eget est lorem ipsum dolor sit amet.
                                Velit sed ullamcorper morbi tincidunt. Euismod lacinia at quis risus sed vulputate
                                odio. Leo vel orci porta non. In nibh mauris cursus mattis. Vitae et leo duis ut
                                diam. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Dignissim diam quis
                                enim lobortis scelerisque fermentum dui.</p><img src="{{asset('public/frontend')}}/images/about-2-835x418.jpg"
                                alt="" width="835" height="418" />
                        </div>
                        <div class="tab-pane fade" id="tabs-4-3">
                            <h4>creating Better Infrastructure</h4>
                            <p>Iaculis at erat pellentesque adipiscing commodo elit at imperdiet dui. Integer enim
                                neque volutpat ac tincidunt. Diam volutpat commodo sed egestas egestas fringilla
                                phasellus faucibus scelerisque.</p>
                            <p>Vitae turpis massa sed elementum tempus egestas sed. Ipsum dolor sit amet consectetur
                                adipiscing elit ut aliquam. Nisl vel pretium lectus quam id leo in vitae. Duis
                                convallis convallis tellus id interdum. Suspendisse interdum consectetur libero id
                                faucibus nisl tincidunt.</p><img src="{{asset('public/frontend')}}/images/about-3-835x418.jpg" alt="" width="835"
                                height="418" />
                        </div>
                        <div class="tab-pane fade" id="tabs-4-4">
                            <h4>Integrity, quality, and reliability</h4>
                            <p>Eu facilisis sed odio morbi quis. Justo nec ultrices dui sapien. Viverra justo nec
                                ultrices dui sapien eget mi proin sed. Mattis aliquam faucibus purus in. Libero enim
                                sed faucibus turpis in eu mi bibendum.</p>
                            <p>Tellus in metus vulputate eu scelerisque felis imperdiet. Sapien nec sagittis aliquam
                                malesuada bibendum arcu vitae elementum. Donec ac odio tempor orci dapibus ultrices.
                                At elementum eu facilisis sed odio morbi quis. Porta non pulvinar neque laoreet
                                suspendisse interdum consectetur. Sagittis eu volutpat odio facilisis. </p><img
                                src="{{asset('public/frontend')}}/images/about-4-835x418.jpg" alt="" width="835" height="418" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Icon Classic-->
    <section class="section section-lg bg-gray-100">
        <div class="container">
            <div class="row row-md row-50">
                <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="0s">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-hammer-wrench"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Modern
                                        Technology</a></h5>
                                <p class="box-icon-classic-text">Our team uses the latest technologies to design
                                    high-quality civil objects.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".1s">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-apartment"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Powerful
                                        Equipment</a></h5>
                                <p class="box-icon-classic-text">We use modern &amp; powerful equipment to create
                                    efficient and reliable infrastructure.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".2s">
                    <article class="box-icon-classic">
                        <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon linearicons-pencil-ruler"></div>
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="single-service.html">Quality
                                        Materials</a></h5>
                                <p class="box-icon-classic-text">High-quality materials are the absolute guarantee
                                    of building dependable facilities.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team-->
    <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
            <h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">Our team</span></h3>
            <div class="row row-lg row-40 justify-content-center">
                <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                    <!-- Team Modern-->
                    <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                src="{{asset('public/frontend')}}/images/team-1-270x236.jpg" alt="" width="270" height="236" /></a>
                        <div class="team-modern-caption">
                            <h6 class="team-modern-name"><a href="#">Jane McMillan</a></h6>
                            <div class="team-modern-status">Vice President</div>
                            <ul class="list-inline team-modern-social-list">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
                    <!-- Team Modern-->
                    <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                src="{{asset('public/frontend')}}/images/team-2-270x236.jpg" alt="" width="270" height="236" /></a>
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
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".1s" data-wow-duration="1s">
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
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                    <!-- Team Modern-->
                    <article class="team-modern"><a class="team-modern-figure" href="#"><img
                                src="{{asset('public/frontend')}}/images/team-4-270x236.jpg" alt="" width="270" height="236" /></a>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Our History-->
    <section class="section section-lg bg-gray-100 text-left section-relative">
        <div class="container">
            <div class="row row-60 justify-content-center justify-content-xxl-between">
                <div class="col-lg-6 col-xxl-5 position-static">
                    <h3>Our history</h3>
                    <div class="tabs-custom" id="tabs-5">
                        <div class="tab-content tab-content-1">
                            <div class="tab-pane fade" id="tabs-5-1">
                                <h5 class="font-weight-normal text-transform-none text-spacing-75">Establishment of
                                    Civil Group & first successful projects</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Suspendisse interdum consectetur
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tabs-5-2">
                                <h5 class="font-weight-normal text-transform-none text-spacing-75">Partnering with
                                    national construction companies</h5>
                                <p>Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Blandit
                                    cursus risus at ultrices mi tempus imperdiet. A cras semper auctor neque vitae.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tabs-5-3">
                                <h5 class="font-weight-normal text-transform-none text-spacing-75">First
                                    governmental projects and engineering solutions awards</h5>
                                <p>Eu scelerisque felis imperdiet proin fermentum leo vel orci. Vulputate enim nulla
                                    aliquet porttitor lacus luctus accumsan tortor posuere. </p>
                            </div>
                            <div class="tab-pane fade show active" id="tabs-5-4">
                                <h5 class="font-weight-normal text-transform-none text-spacing-75">Celebrating 25
                                    years of Civil Group’s success</h5>
                                <p>Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Viverra
                                    nibh cras pulvinar mattis nunc sed. Amet consectetur adipiscing </p>
                            </div>
                        </div>
                        <div class="list-history-wrap">
                            <ul class="nav list-history">
                                <li class="list-history-item" role="presentation"><a href="#tabs-5-1"
                                        data-toggle="tab">
                                        <div class="list-history-circle"></div>1994
                                    </a></li>
                                <li class="list-history-item" role="presentation"><a href="#tabs-5-2"
                                        data-toggle="tab">
                                        <div class="list-history-circle"></div>2002
                                    </a></li>
                                <li class="list-history-item" role="presentation"><a href="#tabs-5-3"
                                        data-toggle="tab">
                                        <div class="list-history-circle"></div>2010
                                    </a></li>
                                <li class="list-history-item" role="presentation"><a class="active" href="#tabs-5-4"
                                        data-toggle="tab">
                                        <div class="list-history-circle"></div>2021
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6 position-static index-1">
                    <div class="bg-image-right-1 bg-image-right-lg"><img src="{{asset('public/frontend')}}/images/about-5-1110x710.jpg" alt=""
                            width="1110" height="710" />
                        <div class="link-play-modern"><a class="icon mdi mdi-play" data-lightbox="iframe"
                                href="https://www.youtube.com/watch?v=1UWpbtUupQQ"></a>
                            <div class="link-play-modern-title">How we<span>Work</span></div>
                            <div class="link-play-modern-decor"></div>
                        </div>
                        <div class="box-transform" style="background-image: url(images/about-5-1110x710.jpg);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our clients-->
    <section class="section section-lg bg-default text-md-left">
        <div class="container">
            <div class="row row-60 justify-content-center flex-lg-row-reverse">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="offset-left-xl-70">
                        <h3>Our clients</h3>
                        <div class="slick-quote">
                            <!-- Slick Carousel-->
                            <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true"
                                data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5"
                                data-slide-effect="true">
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">Torus accelerares, tanquam
                                                ferox cacula. Fluctuss experimentum in burdigala! Ubi est peritus
                                                classis? Peregrinatione superbe ducunt ad magnum verpa.</span></h5>
                                        <h5 class="quote-modern-author">Stephen Adams,</h5>
                                        <p class="quote-modern-status">“AlphaIndustry”, CEO</p>
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">Gluten, fluctus, et galatae.
                                                Germanus classiss ducunt ad brodium. Pol, a bene cedrium. Tabess
                                                unda in neuter avenio! Orexiss sunt adelphiss de rusticus
                                                parma.</span></h5>
                                        <h5 class="quote-modern-author">Sam Peterson,</h5>
                                        <p class="quote-modern-status">“Digitex”, CFO</p>
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">Pol, silva! Grandis contencios
                                                ducunt ad torus. Monss congregabo in nobilis tectum! Velox, fatalis
                                                victrixs sapienter talem de emeritis, festus torus.</span></h5>
                                        <h5 class="quote-modern-author">Jane McMillan,</h5>
                                        <p class="quote-modern-status">“South East Technologies”, Lead HR Manager
                                        </p>
                                    </article>
                                </div>
                                <div class="item">
                                    <!-- Quote Modern-->
                                    <article class="quote-modern">
                                        <h5 class="quote-modern-text"><span class="q">Fluctuss sunt eras de neuter
                                                plasmator. Heuretes noster brabeuta est. Nixus, visus, et mensa.
                                                Primus, magnum tatas rare locus de altus, camerarius
                                                clabulare.</span></h5>
                                        <h5 class="quote-modern-author">Will Jones,</h5>
                                        <p class="quote-modern-status">“STC Ltd.”, Sales Manager</p>
                                    </article>
                                </div>
                            </div>
                            <div class="slick-slider child-carousel" id="child-carousel-5" data-arrows="true"
                                data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4"
                                data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                                <div class="item"><img class="img-circle" src="{{asset('public/frontend')}}/images/team-5-83x83.jpg" alt=""
                                        width="83" height="83" />
                                </div>
                                <div class="item"><img class="img-circle" src="{{asset('public/frontend')}}/images/team-6-83x83.jpg" alt=""
                                        width="83" height="83" />
                                </div>
                                <div class="item"><img class="img-circle" src="{{asset('public/frontend')}}/images/team-7-83x83.jpg" alt=""
                                        width="83" height="83" />
                                </div>
                                <div class="item"><img class="img-circle" src="{{asset('public/frontend')}}/images/team-8-83x83.jpg" alt=""
                                        width="83" height="83" />
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
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-1-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-2-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-sm-6 wow fadeInLeft">
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-3-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-4-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-sm-6 wow fadeInLeft">
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-5-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeInRight">
                                <div class="clients-classic"><a class="clients-classic-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/clients-6-200x90.png" alt="" width="200" height="90" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe to Our Newsletter-->
    <section class="section section-md bg-gray-8 context-dark text-md-left">
        <div class="container">
            <div class="row row-30 justify-content-center align-items-center">
                <div class="col-lg-4 col-xl-3 wow fadeInLeft" data-wow-delay="0s">
                    <h5>Newsletter</h5>
                    <p class="text-white-05">Sign up to our newsletter and follow us on social media</p>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="oh">
                        <!-- RD Mailform-->
                        <div class="block-center">
                            <form
                                class="rd-form rd-mailform rd-form-inline oh-desktop rd-form-inline-lg wow slideInUp"
                                data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                action="bat/rd-mailform.php" data-wow-delay=".1s">
                                <div class="form-wrap wow slideInUp">
                                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email"
                                        data-constraints="" />
                                    <label class="form-label" for="subscribe-form-0-email">Your E-mail*</label>
                                </div>
                                <div class="form-button wow slideInRight">
                                    <button class="button button-winona button-lg button-primary"
                                        type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

