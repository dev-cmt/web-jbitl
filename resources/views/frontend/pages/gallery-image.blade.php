@extends('frontend.layouts.app')
@section('title', 'Gallery-Images')
@section('content')
    <!-- Grid Gallery-->
    <section class="section section-lg bg-default isotope-wrap p-0">
        <div class="container-fluid container-inset-0">
            <div class="row row-30 row-desktop-8 gutters-8 isotope hoverdir" data-isotope-layout="masonry"
                data-column-class=".col-1" data-lightgallery="group">
                <div class="col-1 isotope-item isotope-sizer"></div>
                @if (count($data)>0)
                    @foreach ($data as $img)
                    <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item">
                        <!-- Thumbnail Modern-->
                        <article class="thumbnail thumbnail-modern hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption">
                            <a class="thumbnail-modern-figure" href="{{asset('public/images/gallery')}}/img/{{ $img->image}}" data-lightgallery="item">
                                <img src="{{asset('public/images/gallery')}}/img/{{ $img->image}}" alt="" width="474" height="355" />
                            </a>
                            <div class="thumbnail-modern-caption">
                                <h5 class="thumbnail-modern-title">JBITL</h5>
                            </div>
                        </article>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="text-center my-5 mx-auto" style="max-width: 600px;">
            <a href="@if ($posts->drive_url){{$posts->drive_url}}@else{{route('dashboard-gallery.all')}}@endif" class="btn btn-primary">More Pictures</a>
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
                                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email"/>
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
