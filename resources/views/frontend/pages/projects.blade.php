@extends('frontend.layouts.app')
@section('title', 'Projects')
@section('content')

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="isotope-wrap">
                <div class="isotope-filters isotope-filters-horizontal">
                    <button
                        class="isotope-filters-toggle button button-sm button-icon button-icon-right button-gray-3"
                        data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true"><span
                            class="icon mdi mdi-chevron-down"></span>Filter</button>
                    <ul class="isotope-filters-list">
                        <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a>
                        </li>
                        <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">Reconstruction</a>
                        </li>
                        <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Architectural
                                Design</a></li>
                    </ul>
                </div>
                <div class="row isotope" data-isotope-layout="masonry" data-column-class=".col-1"
                    data-lightgallery="group">
                    <div class="col-1 isotope-item isotope-sizer"></div>
                    <div class="col-md-6 isotope-item" data-filter="Type 2">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-classic thumbnail-lg">
                            <a class="thumbnail-classic-figure" href="images/project-11-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('public/frontend')}}/images/project-1-570x299.jpg" alt="" width="570" height="299" /></a>
                            <div class="thumbnail-classic-caption">
                                <h6 class="thumbnail-classic-title"><a href="{{route('page.project-details')}}">Smith office center</a></h6>
                                <div class="thumbnail-classic-time">
                                    <time datetime="2021-04-05">April 05, 2021</time>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 isotope-item" data-filter="Type 1">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-classic thumbnail-lg">
                            <a class="thumbnail-classic-figure" href="images/project-12-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('public/frontend')}}/images/project-2-570x299.jpg" alt="" width="570" height="299" /></a>
                            <div class="thumbnail-classic-caption">
                                <h6 class="thumbnail-classic-title"><a href="{{route('page.project-details')}}">Deltatrans Warehouse</a></h6>
                                <div class="thumbnail-classic-time">
                                    <time datetime="2021-04-05">April 05, 2021</time>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 isotope-item" data-filter="Type 2">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-classic thumbnail-lg">
                            <a class="thumbnail-classic-figure" href="images/project-13-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('public/frontend')}}/images/project-3-570x299.jpg" alt="" width="570" height="299" /></a>
                            <div class="thumbnail-classic-caption">
                                <h6 class="thumbnail-classic-title"><a href="{{route('page.project-details')}}">Graham Bridge</a> </h6>
                                <div class="thumbnail-classic-time">
                                    <time datetime="2021-04-05">April 05, 2021</time>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 isotope-item" data-filter="Type 1">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-classic thumbnail-lg">
                            <a class="thumbnail-classic-figure" href="images/project-14-1200x800-original.jpg" data-lightgallery="item"><img src="{{asset('public/frontend')}}/images/project-4-570x299.jpg" alt="" width="570" height="299" /></a>
                            <div class="thumbnail-classic-caption">
                                <h6 class="thumbnail-classic-title"><a href="{{route('page.project-details')}}">Dallas Art park</a></h6>
                                <div class="thumbnail-classic-time">
                                    <time datetime="2021-04-05">April 05, 2021</time>
                                </div>
                            </div>
                        </article>
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
                            <form class="rd-form rd-mailform rd-form-inline oh-desktop rd-form-inline-lg wow slideInUp" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" data-wow-delay=".1s">
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
    

@endsection

