@extends('frontend.layouts.app')
@section('title', 'Product Category')
@section('content')

    <section class="section section-inset-5 bg-default">
        <div class="container">
            <div class="row no-md-gutters justify-content-center bordered-2">
                @foreach ($data as $row)
                <div class="col-sm-6 col-lg-4">
                    <div class="services-modern">
                        <div class="box-icon-modern-icon mdi mdi-chemical-weapon mb-4"></div>
                        <article class="box-icon-modern">
                            <h5 class="box-icon-modern-title"><a href="{{route('page.products-item')}}">{{$row->title}}</a></h5>
                            <p class="box-icon-modern-text">It is a good AE water reducer mainly composed of lignin and increases the durability of concrete.</p>
                            <a class="box-icon-modern-link" href="{{route('page.products-item')}}">Read More<span class="icon mdi mdi-arrow-right"></span></a>
                        </article>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

