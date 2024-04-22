<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
            data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px"
            data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
                <div class="rd-navbar-aside">
                    <div class="rd-navbar-aside-inner">
                        <ul class="rd-navbar-contacts-2">
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a class="phone" href="tel:#">+880-1327-704343</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xs">
                                    <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                    <div class="unit-body"><a class="address" href="https://maps.app.goo.gl/J6MyYFtRbzzkjgiX7">Planners Tower (19th Floor), 13/A, Sonargaon Road, Dhaka, Bangladesh</a></div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-share-2">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                    </div>
                </div>
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{asset('public/frontend')}}/images/cropped-logo-2-1536x554.png" alt="" width="219" height="39" /></a></div>
                    </div>
                    <div class="rd-navbar-right rd-navbar-nav-wrap">
                        <div class="rd-navbar-aside d-xl-none">
                            <div class="rd-navbar-aside-inner">
                                <ul class="rd-navbar-contacts-2">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                            <div class="unit-body"><a class="phone" href="tel:#">+880-1327-704343</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                            <div class="unit-body"><a class="address" href="#">Planners Tower (19th Floor), 13/A, Sonargaon Road, Dhaka, Bangladesh</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-share-2">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                                <a href="{{route('login')}}" class="btn btn-primary mt-4">Login</a>
                            </div>
                        </div>

                        <div class="rd-navbar-main">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item {{ (Route::currentRouteName() == '/') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('/')}}">Home</a></li>
                                <li class="rd-nav-item {{ (Route::currentRouteName() == 'page.products-category') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('page.products-category')}}">Products</a></li>
                                <li class="rd-nav-item {{ in_array(Route::currentRouteName(), ['page.about-us', 'page.project-info', 'page.contact-us']) ? 'active' : '' }}">
                                    <a class="rd-nav-link" href="about-us.html">Information</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.about-us')}}">Company</a></li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.project-info')}}">Projects</a></li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.contact-us')}}">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item {{ in_array(Route::currentRouteName(), ['page.download-profile', 'page.download-product']) ? 'active' : '' }}">
                                    <a class="rd-nav-link" href="#">Downloads</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.download-profile')}}">Profile</a></li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.download-product')}}">Product</a></li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item {{ in_array(Route::currentRouteName(), ['page.gallery-cover', 'page.gallery-video', 'page.blog']) ? 'active' : '' }}">
                                    <a class="rd-nav-link" href="#">Media & Gallery</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-menu rd-navbar-dropdown">
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.gallery-cover')}}">Photo Gallery</a></li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.gallery-video')}}">Video Gallery</a></li>
                                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('page.blog')}}">News & Events</a></li>
                                    </ul>
                                </li>
                                <li class="rd-nav-item {{ (Route::currentRouteName() == 'page.career') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('page.career')}}">Career</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
                        data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap"
                        data-multitoggle-isolate="data-multitoggle-isolate">
                        <div class="project-hamburger">
                            <span class="project-hamburger-arrow"></span>
                            <span class="project-hamburger-arrow"></span>
                            <span class="project-hamburger-arrow"></span>
                        </div>
                    </div>
                    <div class="rd-navbar-project">
                        <div class="rd-navbar-project-header">
                            <h5 class="rd-navbar-project-title">Latest Projects</h5>
                            <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
                                data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap"
                                data-multitoggle-isolate="data-multitoggle-isolate">
                                <div class="project-close"><span></span><span></span></div>
                            </div>
                        </div>
                        <div class="rd-navbar-project-content rd-navbar-content">
                            <div>
                                <div class="row gutters-20" data-lightgallery="group">
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-1-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-1-195x164.jpg" alt="" width="195" height="164"/></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-2-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-2-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-3-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-3-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-4-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-4-195x164.jpg" alt="" width="195"height="164" /></div>
                                                <div class="thumbnail-creative-caption"><spanclass="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-5-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-5-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span> </div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="{{asset('public/frontend')}}/images/project-6-195x164.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="{{asset('public/frontend')}}/images/project-6-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span  class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>