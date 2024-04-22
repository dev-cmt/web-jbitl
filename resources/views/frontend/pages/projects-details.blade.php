@extends('frontend.layouts.app')
@section('title', 'Projects Details')
@section('content')

    <!-- Project Page-->
    <section class="section section-lg bg-default text-md-left">
        <div class="container">
            <div class="row row-60 flex-lg-row-reverse">
                <div class="col-lg-6 col-xl-7">
                    <div class="slick-project">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" data-arrows="true" data-autoplay="true"
                            data-swipe="true" data-items="1" data-child="#child-carousel-7"
                            data-for="#child-carousel-7" data-slide-effect="true">
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-5-670x477.jpg" alt="" width="670"
                                    height="477" />
                                <div class="slick-project-caption">
                                    <div class="slick-project-title">Photo #1</div>
                                </div>
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-6-670x477.jpg" alt="" width="670"
                                    height="477" />
                                <div class="slick-project-caption">
                                    <div class="slick-project-title">Photo #2</div>
                                </div>
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-7-670x477.jpg" alt="" width="670"
                                    height="477" />
                                <div class="slick-project-caption">
                                    <div class="slick-project-title">Photo #3</div>
                                </div>
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-8-670x477.jpg" alt="" width="670"
                                    height="477" />
                                <div class="slick-project-caption">
                                    <div class="slick-project-title">Photo #4</div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent"
                            data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4"
                            data-slide-to-scroll="1">
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-5-670x477.jpg" alt="" width="670"
                                    height="477" />
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-6-670x477.jpg" alt="" width="670"
                                    height="477" />
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-7-670x477.jpg" alt="" width="670"
                                    height="477" />
                            </div>
                            <div class="item"><img src="{{asset('public/frontend')}}/images/project-8-670x477.jpg" alt="" width="670"
                                    height="477" />
                            </div>
                        </div>
                    </div>
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-primary table-project">
                            <tbody>
                                <tr>
                                    <td><span class="icon icon-26 mdi mdi-account"></span></td>
                                    <td><span>Client:</span> Smith Ltd.</td>
                                </tr>
                                <tr>
                                    <td><span class="icon mdi mdi-calendar-today"></span></td>
                                    <td><span>Year:</span> 2010</td>
                                </tr>
                                <tr>
                                    <td><span class="icon mdi mdi-map-marker"></span></td>
                                    <td><span>Location:</span> Los Angeles</td>
                                </tr>
                                <tr>
                                    <td><span class="icon icon-28 mdi mdi-cash"></span></td>
                                    <td><span>Value:</span> $1.299.525,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="project-page">
                        <h4>Smith office center</h4>
                        <p>Lanistas accelerare in secundus rugensis civitas! Heu, castus lamia! Eheu. Pol. Tolerare
                            inciviliter ducunt ad ferox devirginato. Genetrixs accelerare in cubiculum! Dominas
                            ortum in vasa! Gabaliums velum in tolosa!</p>
                        <p>Primus repressors ducunt ad buxum. Fluctuis sunt boreass de audax lixa. Fidess messis!
                            Navis volares, tanquam emeritis decor. Sunt quadraes resuscitabo noster, nobilis
                            victrixes. Extum de germanus luna, locus silva! Habitios crescere, tanquam fatalis
                            contencio. Cum lacta manducare, omnes bromiumes aperto salvus, bi-color parmaes. Rector,
                            heuretes, et scutum. Abactuss messis in gratis chremisa!</p>
                        <p>Nunquam experientia consilium. Ridetis vix ducunt ad fidelis devirginato. Demolitiones
                            favere, tanquam rusticus extum. Coordinatae potuss, tanquam azureus accola.</p>
                        <p>Finis de gratis historia, attrahendam vortex! Ubi est brevis guttus? Nunquam contactus
                            nomen. Credere aliquando ducunt ad albus calcaria. Cannabiss manducare! Nunquam captis
                            fides. Cur hydra ridetis? Cum abactus studere, omnes demolitionees attrahendam velox,
                            alter extumes.</p>
                        <div class="group-sm group-middle"><span class="project-page-social-title">Share</span>
                            <div>
                                <ul class="list-inline project-page-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div><a class="button button-lg button-primary button-winona" href="contacts.html">Contact
                            Us</a>
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
                                    <input class="form-input" id="subscribe-form-0-email" type="email" name="email"/>
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

