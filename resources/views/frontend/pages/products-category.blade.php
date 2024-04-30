@extends('frontend.layouts.app')
@section('title', 'Product Category')
@section('content')

    <section class="section section-inset-5 bg-default">
        <div class="container">
            <div class="row no-md-gutters justify-content-center bordered-2">
                @foreach ($data as $row)
                <div class="col-sm-6 col-lg-4">
                    <div class="services-modern">
                        <div class="box-icon-modern-icon {{$row->icon}} "></div>
                        <p class="text-info mb-4">Catgory-Code: <strong>{{$row->code}}</strong></p>

                        <article class="box-icon-modern">
                            <h5 class="box-icon-modern-title"><a href="{{route('page.products-item', $row->id)}}">{{$row->title}}</a></h5>
                            <p class="box-icon-modern-text">{{$row->description}}</p>
                            <a class="box-icon-modern-link" href="{{route('page.products-item', $row->id)}}">Read More<span class="icon mdi mdi-arrow-right"></span></a>
                        </article>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection

