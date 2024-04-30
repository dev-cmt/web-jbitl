@extends('frontend.layouts.app')
@section('title', 'Career')
@section('content')

    <section class="section section-sm section-first bg-default">
        <div class="container">
            <h3 class="text-spacing-50 font-weight-bold">Application Form</h3>
            <div class="row row-lg justify-content-center">
                <div class="col-md-11 col-lg-9 col-xl-7">
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                        method="post" action="bat/rd-mailform.php">
                        <div class="row row-14 gutters-14">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name-2" type="text" name="name">
                                    <label class="form-label" for="contact-name-2">Your Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email-2" type="email" name="email">
                                    <label class="form-label" for="contact-email-2">Your E-mail*</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <!--Select 2-->
                                    <select class="form-input" data-minimum-results-for-search="Infinity">
                                        <option value="1">Select a Service</option>
                                        <option value="2">Oil Platforms</option>
                                        <option value="3">Gas Flares</option>
                                        <option value="4">Oil Pumps</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-3">Message</label>
                                    <textarea class="form-input" id="contact-message-3" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6">
                                <div class="form-wrap form-wrap-recaptcha">
                                    <!-- Google captcha-->
                                    <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                                </div>
                            </div>
                            <div class="col-sm-5 col-md-6">
                                <button class="button button-block button-primary button-winona" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

