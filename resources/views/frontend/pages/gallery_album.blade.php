@section('style')
<style>
    .new-arrival-product .new-arrivals-img-contnent {
        overflow: hidden;
    }
    .new-arrival-product:hover .new-arrivals-img-contnent img {
        transform: scale(1.5) translateY(12%);
        -moz-transform: scale(1.5) translateY(12%);
        -webkit-transform: scale(1.5) translateY(12%);
        -ms-transform: scale(1.5) translateY(12%);
        -o-transform: scale(1.5) translateY(12%);
    }
    .new-arrival-product .new-arrivals-img-contnent img {
        width: 100%;
        -webkit-transition: all 0.5s;
        -ms-transition: all 0.5s;
        transition: all 0.5s;
    }
</style>
@endsection
@extends('frontend.layouts.app')
@section('title', 'Photo-Album')
@section('content')
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title">
                <h2>Gallery</h2>
                <img src="{{asset('public/images')}}/section-img.png" alt="#">
            </div>
            <div class="row g-5">
                @foreach ($posts as $key=> $row )
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-arrival-product">
                                <div class="new-arrivals-img-contnent">
                                    <a href="{{route('page.gallery-show', $row ->id)}}"><img class="img-fluid" src="{{asset('public/images')}}/gallery/{{ $row->cover }}" alt=""></a>
                                </div>
                                <div class="new-arrival-content mt-2">
                                    <h4>{{$row->title}}</h4>
                                    <p class="text-uppercase description_2 mb-2"></p>
                                    <div class="d-flex justify-content-between">
                                        <label class="text-success">Event Date:</label><span>{{date("j F, Y", strtotime($row->date))}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <label class="text-success">Published Date:</label><span>{{date("j F, Y", strtotime($row->created_at))}}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <label class="text-success">Publisher Name:</label>BAFIITA
                                    </div>
                                    @if ($row->description)
                                        <hr>
                                    @endif
                                    <p class="text-uppercase description_2 m-0">{{$row->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End-->










    <!-- Grid Gallery-->
    <section class="section section-lg bg-default isotope-wrap">
        <div class="container">
            <div class="isotope-filters isotope-filters-horizontal">
                <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-gray-3"
                    data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true"><span
                        class="icon mdi mdi-chevron-down"></span>Filter</button>
                <ul class="isotope-filters-list">
                    <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">All</a></li>
                    <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">Reconstruction</a>
                    </li>
                    <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">Architectural
                            Design</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid container-inset-0">
            <div class="row row-30 row-desktop-8 gutters-8 isotope hoverdir" data-isotope-layout="masonry"
                data-column-class=".col-1" data-lightgallery="group">
                <div class="col-1 isotope-item isotope-sizer"></div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/project-11-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-1-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Smith office Center</a>
                            </h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-2-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Deltatrans Warehouse</a>
                            </h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/project-3-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-3-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">fitpower Gym</a></h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-4-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Beyer Concert Hall</a>
                            </h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/project-13-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-5-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Graham Bridge</a></h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/project-14-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-6-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Dallas Art Park</a></h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/project-6-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-7-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">wilson co.
                                    Headquarters</a></h5>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern hoverdir-item"
                        data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure"
                            href="images/grid-gallery-8-1200x800-original.jpg" data-lightgallery="item"><img
                                src="images/grid-gallery-8-474x355.jpg" alt="" width="474" height="355" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="project-page.html">Abington University</a>
                            </h5>
                        </div>
                    </article>
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