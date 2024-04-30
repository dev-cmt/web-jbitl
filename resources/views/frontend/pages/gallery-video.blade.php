
@extends('frontend.layouts.app')
@section('title', 'Video Gallery')
@section('content')
    <section class="section section-lg bg-default isotope-wrap">
        <div class="container container-inset-0">
            <div class="row">    
                <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                    <div class="card">
                        <div class="card-image">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/SC1XE85BC9o" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div><!-- card image -->
                        
                        <div class="card-content">
                            <span class="card-title">Will my credits transfer?</span>
                        </div><!-- card content -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                    <div class="card">
                        <div class="card-image">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/VNYwx5KBoYY" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div><!-- card image -->           
                        <div class="card-content">
                            <span class="card-title">Do I have to live on campus?</span>                    
                        </div><!-- card content -->              
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                    <div class="card">
                        <div class="card-image">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/oJhPYmw21fw" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div><!-- card image -->           
                        <div class="card-content">
                            <span class="card-title">Do I have to live on campus?</span>                    
                        </div><!-- card content -->              
                    </div>
                </div>
            </div>

        </div>
    </section>


    <style>
        .card .card-image{
            overflow: hidden;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }


        .card{
            margin-top: 10px;
            position: relative;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .card .card-content {
            padding: 10px;    
        }

        .card .card-content .card-title, .card-reveal .card-title{
            font-size: 24px;
            font-weight: 200;    
        }

        .card .card-action{
            padding: 20px;
            border-top: 1px solid rgba(160, 160, 160, 0.2);
        }
        .card .card-action a{
            font-size: 15px;
            color: #ffab40;
            text-transform:uppercase;
            margin-right: 20px;    
            -webkit-transition: color 0.3s ease;
            -moz-transition: color 0.3s ease;
            -o-transition: color 0.3s ease;
            -ms-transition: color 0.3s ease;
            transition: color 0.3s ease;
        }
        .card .card-action a:hover{    
            color:#ffd8a6;
            text-decoration:none;
        }

        .card .card-reveal{    
            padding: 20px;
            position: absolute;
            background-color: #FFF;
            width: 100%;
            overflow-y: auto;
            /*top: 0;*/
            left:0;
            bottom:0;
            height: 100%;
            z-index: 1;
            display: none;    
        }

        .card .card-reveal p{
            color: rgba(0, 0, 0, 0.71);
            margin:20px ;
        }

        .btn-custom{
            background-color: transparent;
            font-size:18px;
        }
    </style>
@endsection