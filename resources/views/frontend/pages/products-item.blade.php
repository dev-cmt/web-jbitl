@extends('frontend.layouts.app')
@section('title', 'Product Item')
@section('content')

    <section class="section section-inset-5 bg-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <article class="products-item">
                        <h5><i class="mdi mdi-forward"></i>Flowric SF500U</h5>
                        <p>Main Ingredient:</p>
                        <ul>
                            <li><i class="mdi mdi-check-all"></i> Polycarboxylic acid compound.</li>
                            <li><i class="mdi mdi-check-all"></i> Ultra high strength concrete.</li>
                        </ul>
                    </article>
                    <div class="download-pdf-catalog">
                        <a href="#"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <article class="products-item">
                        <h5><i class="mdi mdi-forward"></i>Flowric VP900M</h5>
                        <p>Main Ingredient:</p>
                        <ul>
                            <li><i class="mdi mdi-check-all"></i> Polycarboxylic acid compound.</li>
                            <li><i class="mdi mdi-check-all"></i> Ultra high strength concrete.</li>
                        </ul>
                    </article>
                    <div class="download-pdf-catalog">
                        <a href="#"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

