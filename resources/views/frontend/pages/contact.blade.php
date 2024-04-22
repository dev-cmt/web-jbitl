@extends('frontend.layouts.app')
@section('title', 'Contact-Us')
@section('content')

    <section class="section section-lg bg-default text-md-left">
        <div class="container">
            <div class="row row-60 justify-content-center">
                <div class="col-lg-8">
                    <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="row row-20 gutters-20">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-your-name-5" type="text" name="name">
                                    <label class="form-label" for="contact-your-name-5">Your Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email-5" type="email" name="email">
                                    <label class="form-label" for="contact-email-5">Your E-mail*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <select class="form-input" data-minimum-results-for-search="Infinity">
                                        <option value="1">Select a Service</option>
                                        <option value="2">Value Engineering</option>
                                        <option value="3">HVAC Design</option>
                                        <option value="4">Geospatial Design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone-5" type="text" name="phone">
                                    <label class="form-label" for="contact-phone-5">Your Phone*</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-5">Message</label>
                                    <textarea class="form-input textarea-lg" id="contact-message-5" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-secondary button-winona" type="submit">Contact us</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="aside-contacts">
                        <div class="row row-30">
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">Get social</p>
                                <ul class="list-inline contacts-social-list list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">Phone</p>
                                <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                    <div class="unit-body"><a class="phone" href="tel:#">+880-1327-704343</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">E-mail</p>
                                <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a class="mail" href="mailto:#">info@jbitl.net</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-12 aside-contacts-item">
                                <p class="aside-contacts-title">Address</p>
                                <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                    <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                    <div class="unit-body"><a class="address" href="#">Planners Tower (19th Floor), 13/A, <br
                                                class="d-md-none">Sonargaon Road, Dhaka, Bangladesh</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Form -->
    <form action="{{route('contact-us.store')}}" method="post" enctype="multipart/form-data" class="form"> 
        @csrf
        <div class="row g-3">
            <div class="col-md-6 form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" @guest value="{{ old('name')}}" @endguest @auth value="{{Auth::user()->name}}" @endauth  placeholder="Your Name" style="height: 55px;">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-md-6 form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" @guest value="{{old('email')}}" @endguest @auth value="{{Auth::user()->email}}" @endauth placeholder="Your Email" style="height: 55px;">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12 form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{old('subject')}}" placeholder="Subject" style="height: 55px;">
                @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12 form-group">
                <textarea class="form-control py-3 @error('description') is-invalid @enderror" name="description" value="{{old('description')}}" rows="4" placeholder="Message"></textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12">
                <div class="form-group login-btn">
                    <button class="btn" type="submit">Send</button>
                </div>
                <div class="checkbox">
                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
                </div>
            </div>
        </div>
    </form>
    <!--/ End Form --> --}}

    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your message was sent successfully.',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route("/") }}';
                }
            });
        </script>
    @endif
@endsection