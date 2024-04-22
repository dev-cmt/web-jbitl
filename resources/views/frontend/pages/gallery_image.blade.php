@extends('frontend.layouts.app')
@section('title', 'Gallery-Images')
@section('style')
    <!-- Gallery -->
    <link href="{{asset('public/frontend')}}/css/light-gallery.min.css" rel="stylesheet">
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <div style="background: url({{asset('public/images')}}/pages/gallery_img.jpg);min-height: 100%;background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <section id="contact" class="contact" style="padding-top: 120px">
        <div class="container">
            <div class="section-title">
                <h2>{{$posts->title}}</h2>
                <img src="{{asset('public/images')}}/section-img.png" alt="#">
                <p>{{$posts->description}}</p>
            </div>

            <!-- Gallery Slider -->
            <div id="lightgallery" class="row">
                @if (count($data)>0)
                    @foreach ($data as $img)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 my-2" data-responsive="{{asset('public/images/gallery')}}/img/{{ $img->image}}" data-src="{{asset('public/images/gallery')}}/img/{{ $img->image}}" data-sub-html="<h4>Bangladesh Agro Feed Ingredients</h4><p></p>">
                        <div class="thumbnail-classic">
                            <a href="" class="thumbnail-classic-figure"> <img class="img-responsive" src="{{asset('public/images/gallery')}}/img/{{ $img->image}}"></a>
                            <div class="thumbnail-classic-caption">
                                <h5 class="thumbnail-classic-title">BAFIITA</h5>
                                <time class="thumbnail-classic-time" datetime="{{date("j F, Y", strtotime($img->created_at))}}">{{date("j F, Y", strtotime($img->created_at))}}</time>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            <!-- End Gallery Slider -->

            <div class="text-center pb-3 my-5 mx-auto" style="max-width: 600px;">
                <a href="@if ($posts->drive_url){{$posts->drive_url}}@else{{route('dashboard-gallery.all')}}@endif" class="button">More Pictures</a>
            </div>

        </div>
    </section><!-- End Contact Section -->

    
@endsection

@section('script')
    <!-- Light Gallery -->
    <script src="{{asset('public/frontend')}}/js/light-gallery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#lightgallery').lightGallery(); 
        });
    </script>
@endsection
