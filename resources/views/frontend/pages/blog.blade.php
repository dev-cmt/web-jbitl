@extends('frontend.layouts.app')
@section('title', 'Notice & News')
@section('content')
    <!-- Grid Blog-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-40 row-lg-60 justify-content-center">
                <div class="col-sm-6 col-lg-4 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-1-370x210.jpg" alt="" width="370"
                                height="210" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">Repairs To Commercial Buildings:
                                    What To Think About</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-04-30">April 30, 2021</time>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic post-classic-2">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-2-370x365.jpg" alt="" width="370"
                                height="365" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">Questions To Ask Your Contractor
                                    Before Carrying Out Road Maintenance</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-04-25">April 25, 2021</time>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 order-md-3 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-3-370x210.jpg" alt="" width="370"
                                height="210" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">How To Keep Plot Foundations
                                    Waterproof: 10 Useful Tips</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-04-05">April 05, 2021</time>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 order-md-2 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic post-classic-2">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-4-370x365.jpg" alt="" width="370"
                                height="365" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">What To Expect From Civil
                                    Engineering Team at Civil Group</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-06-11">June 11, 2021</time>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 order-md-4 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-5-370x210.jpg" alt="" width="370"
                                height="210" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">8 Useful Tips on Preparing For
                                    Drainage Construction</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-06-06">June 06, 2021</time>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 order-md-5 order-lg-1">
                    <!-- Post Classic-->
                    <article class="post post-classic post-classic-2">
                        <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-6-370x365.jpg" alt="" width="370"
                                height="365" />
                        </div>
                        <div class="post-classic-content">
                            <p class="post-classic-title"><a href="{{route('page.blog-details')}}">Super-hydrophobic Cement: Its
                                    Applications and Advantages</a>
                            </p>
                        </div>
                        <time class="post-classic-time" datetime="2021-06-06">June 06, 2021</time>
                    </article>
                </div>
            </div>
            <div class="pagination-wrap">
                <!-- Bootstrap Pagination-->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item page-item-control disabled"><a class="page-link" href="#"
                                aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item page-item-control"><a class="page-link" href="#"
                                aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                    </ul>
                </nav>
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

