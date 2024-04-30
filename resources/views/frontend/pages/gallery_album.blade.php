
@extends('frontend.layouts.app')
@section('title', 'Photo-Album')
@section('content')
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            @foreach ($posts as $key=> $row )
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 my-2">
                <div class="thumbnail-classic">
                    <a href="{{route('page.gallery-show', $row ->id)}}" class="thumbnail-classic-figure"><img class="img-responsive" src="{{asset('public/images')}}/gallery/{{ $row->cover }}"></a>
                    <div class="thumbnail-classic-caption">
                        <h5 class="thumbnail-classic-title">{{$row->title}}</h5>
                        <time class="thumbnail-classic-time" datetime="{{date("j F, Y", strtotime($row->date))}}">{{date("j F, Y", strtotime($row->date))}}</time>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Service End-->
    
@endsection