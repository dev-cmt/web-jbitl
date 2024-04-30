@extends('frontend.layouts.app')
@section('title', 'Product Item')
@section('content')

    <section class="section section-inset-5 bg-default">
        <div class="container">
            <div class="row">
                @foreach ($data as $row)
                    <div class="col-sm-6 col-lg-4">
                        <article class="products-item">
                            <p class="text-center mb-3"><u>Product Code: <strong style="color:blueviolet">{{ $row->code }}</strong></u></p>
                            <h5><i class="mdi mdi-forward"></i>{{ $row->title }}</h5>
                            @if(isset($row->ingredient))
                                @php
                                    $ingredients = json_decode($row->ingredient, true);
                                @endphp
                                <p>Main Ingredient</p>
                                <ul>
                                    @foreach ($ingredients as $ingredient)
                                        <li><i class="mdi mdi-check-all"></i> {{ $ingredient['name'] }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </article>
                        <div class="download-pdf-catalog">
                            <a href="{{route('product-item.download', $row->id)}}"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection

