@extends('frontend.layouts.app')
@section('title', 'Registered Product')
@section('content')

    <!-- Services 3-->
    <section class="section section-inset-5 bg-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 mb-4">
                    <article class="products-item d-flex">
                        <div class="col-md-4">
                            <h5><i class="mdi mdi-forward"></i>Flowric T</h5>
                        </div>
                        <div class="col-md-8">
                            <p>This technology adds Flowric-T as an auxiliary agent to improve workability in pavement concrete construction in the hot mid-summer period to reduce the sudden drop in slump.The use of this technology delays the hardening of concrete, thereby improving the workability of pavement concrete.</p>
                            <p>Registration date: August, R2<br>
                                Registration number: KT-200070-A</p>
                        </div>
                    </article>
                    <div class="download-pdf-catalog text-left">
                        <a href="#"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12 mb-4">
                    <article class="products-item d-flex">
                        <div class="col-md-4">
                            <h5><i class="mdi mdi-forward"></i>Thixotropic Reduce</h5>
                        </div>
                        <div class="col-md-8">
                            <p>By adding thixo-reduce to fresh concrete, it is expected to reduce stiffness, improve pumpability and fillability compared to conventional technology, and improve construction efficiency. It is easy to handle because the powder admixture is packed in a water-soluble paper bag and put into an agitator car or mixer.</p>
                            <p class="gt-block">Registration date: January 31<br>
                                Registration number: QS-180037-A</p>
                        </div>
                    </article>
                    <div class="download-pdf-catalog text-left">
                        <a href="#"><i class="mdi mdi-file-pdf"></i> Click here for PDF catalog</a>
                    </div>
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
                                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email"
                                        data-constraints="@Email @Required" />
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

