@extends('frontend.layouts.app')
@section('title', 'Notice-Details')
@section('content')
    <!-- Grid Blog-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-60 row-xl-75">
                <div class="col-lg-8">
                    <div class="single-post section-style-2">
                        <h5 class="text-spacing-50 font-weight-normal text-transform-none">Repairs To Commercial
                            Buildings: What To Think About</h5>
                        <div class="group-md group-middle">
                            <time class="post-classic-time" datetime="2021-04-05">April 05, 2021</time>
                            <div>
                                <ul class="list-inline list-inline-xl post-classic-info">
                                    <li class="post-classic-author"><span
                                            class="icon mdi mdi-account-outline"></span><span>by <a href="#">Harry
                                                Burns</a></span></li>
                                    <li class="post-classic-views"><span
                                            class="icon mdi mdi-eye"></span><span>3678</span></li>
                                    <li class="post-classic-comments"><span
                                            class="icon mdi mdi-comment-outline"></span><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                            consequat. Duis autem vel eum iriure dolor</p><img src="{{asset('public/frontend')}}/images/post-16-770x403.jpg"
                            alt="" width="770" height="403" />
                        <p>Eu scelerisque felis imperdiet proin fermentum leo vel orci. Vulputate enim nulla aliquet
                            porttitor lacus luctus accumsan tortor posuere. Cursus eget nunc scelerisque viverra
                            mauris in aliquam sem fringilla. Viverra nibh cras pulvinar mattis nunc sed. Amet
                            consectetur adipiscing elit pellentesque. Ut consequat semper viverra nam libero justo
                            laoreet sit. Nullam vehicula ipsum a arcu cursus vitae congue. Nunc pulvinar sapien et
                            ligula ullamcorper.</p>
                        <!-- Quote Classic-->
                        <article class="quote-classic">
                            <div class="quote-classic-text">
                                <p class="q">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                    nt ium doloremque laudantium totam rem aperiam</p>
                            </div>
                        </article>
                        <div class="unit unit-spacing-xl flex-column flex-md-row flex-lg-column flex-xl-row">
                            <div class="unit-left"><img src="{{asset('public/frontend')}}/images/post-17-333x243.jpg" alt="" width="333"
                                    height="243" />
                            </div>
                            <div class="unit-body">
                                <p>Adipiscing elit ut aliquam purus sit amet. Ut porttitor leo a diam sollicitudin
                                    tempor. Iaculis eu non diam phasellus vestibulum. Tristique senectus et netus
                                </p>
                                <p>Aliquet eget sit amet tellus cras. Id eu nisl nunc mi ipsum faucibus vitae
                                    aliquet. At volutpat diam ut venenatis tellus in metus vulputate. Enim ut sem
                                    viverra aliquet. Molestie a iaculis at erat pellentesque adipiscing commodo elit
                                    at. Vitae congue mauris rhoncus aenean vel elit scelerisque. </p>
                            </div>
                        </div>
                        <div class="single-post-footer">
                            <div class="group-lg group-sm-justify">
                                <h6 class="text-transform-none font-weight-normal">Share this post</h6>
                                <div>
                                    <ul class="list-inline single-post-social-list list-inline-md">
                                        <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                        <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                        <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                        <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-post-title">Related Posts</div>
                    <div class="row row-lg row-30 justify-content-center">
                        <div class="col-sm-6">
                            <!-- Post Classic-->
                            <article class="post post-classic post-classic-2">
                                <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-6-370x365.jpg" alt=""
                                        width="370" height="365" />
                                </div>
                                <div class="post-classic-content">
                                    <p class="post-classic-title"><a href="blog-post.html">Questions To Ask Your
                                            Contractor Before Carrying Out Road Maintenance</a>
                                    </p>
                                </div>
                                <time class="post-classic-time" datetime="2021-06-06">June 06, 2021</time>
                            </article>
                        </div>
                        <div class="col-sm-6">
                            <!-- Post Classic-->
                            <article class="post post-classic post-classic-2">
                                <div class="post-classic-figure"><img src="{{asset('public/frontend')}}/images/post-4-370x365.jpg" alt=""
                                        width="370" height="365" />
                                </div>
                                <div class="post-classic-content">
                                    <p class="post-classic-title"><a href="blog-post.html">How To Keep Plot
                                            Foundations Waterproof: 10 Useful Tips</a>
                                    </p>
                                </div>
                                <time class="post-classic-time" datetime="2021-06-11">June 11, 2021</time>
                            </article>
                        </div>
                    </div>
                    <div class="single-post-title"><span>3</span>Comments</div>
                    <div class="box-comment box-comment-post">
                        <div class="unit flex-column flex-md-row">
                            <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                        src="{{asset('public/frontend')}}/images/user-2-66x66.jpg" alt="" width="66" height="66" /></a></div>
                            <div class="unit-body">
                                <div class="group-md group-justify">
                                    <div>
                                        <div class="group-md group-middle">
                                            <p class="box-comment-author"><a href="#">Edward</a></p>
                                        </div>
                                    </div>
                                    <div class="box-comment-days-ago">1 day ago</div>
                                </div>
                                <p class="box-comment-text">Posuere sollicitudin aliquam ultrices sagittis orci.
                                    Lacinia quis vel eros donec ac odio tempor orci dapibus. Aliquet lectus proin
                                    nibh nisl condimentum. Ultrices in iaculis nunc sed augue. Hendrerit dolor magna
                                    eget est lorem ipsum dolor sit. Pretium viverra suspendisse potenti nullam ac
                                    tortor vitae. Eget nunc scelerisque viverra mauris in aliquam sem fringilla.
                                    Nunc scelerisque viverra mauris in aliquam sem.</p>
                                <div class="group-xl group-middle justify-content-start">
                                    <div class="box-comment-like"><span
                                            class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></div>
                                    <div class="box-comment-reply"><span
                                            class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="box-comment box-comment-post">
                            <div class="unit flex-column flex-md-row">
                                <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                            src="{{asset('public/frontend')}}/images/user-3-66x66.jpg" alt="" width="66" height="66" /></a></div>
                                <div class="unit-body">
                                    <div class="group-md group-justify">
                                        <div>
                                            <div class="group-md group-middle">
                                                <p class="box-comment-author"><a href="#">Nina</a></p>
                                            </div>
                                        </div>
                                        <div class="box-comment-days-ago">3 days ago</div>
                                    </div>
                                    <p class="box-comment-text">Vel pretium lectus quam id leo. Amet commodo nulla
                                        facilisi nullam vehicula ipsum a. Amet commodo nulla facilisi nullam
                                        vehicula ipsum. Fusce id velit ut tortor pretium viverra suspendisse. Sed
                                        augue lacus viverra vitae congue. </p>
                                    <div class="group-xl group-middle justify-content-start">
                                        <div class="box-comment-like"><span
                                                class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a>
                                        </div>
                                        <div class="box-comment-reply"><span
                                                class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-comment box-comment-post">
                        <div class="unit flex-column flex-md-row">
                            <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                        src="{{asset('public/frontend')}}/images/user-4-66x66.jpg" alt="" width="66" height="66" /></a></div>
                            <div class="unit-body">
                                <div class="group-md group-justify">
                                    <div>
                                        <div class="group-md group-middle">
                                            <p class="box-comment-author"><a href="#">John</a></p>
                                        </div>
                                    </div>
                                    <div class="box-comment-days-ago">1 days ago</div>
                                </div>
                                <p class="box-comment-text">Volutpat odio facilisis mauris sit. Commodo viverra
                                    maecenas accumsan lacus vel facilisis volutpat est velit. Vitae tortor
                                    condimentum lacinia quis vel eros donec ac odio. Massa id neque aliquam
                                    vestibulum morbi. Ipsum consequat nisl vel pretium lectus quam id leo. Tortor
                                    aliquam nulla facilisi cras fermentum odio eu feugiat. Elementum facilisis leo
                                    vel fringilla. Purus in mollis nunc sed id semper risus. Massa sapien faucibus
                                    et </p>
                                <div class="group-xl group-middle justify-content-start">
                                    <div class="box-comment-like"><span
                                            class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></div>
                                    <div class="box-comment-reply"><span
                                            class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unit flex-column flex-md-row box-comment-form">
                        <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                    src="{{asset('public/frontend')}}/images/user-5-66x66.jpg" alt="" width="66" height="66" /></a></div>
                        <div class="unit-body">
                            <p class="box-comment-author"><a href="#">Miranda</a></p>
                            <form class="rd-form rd-mailform form-comment-post">
                                <div class="form-wrap">
                                    <label class="form-label" for="form-comment-post">Your comment</label>
                                    <textarea class="form-input textarea-lg" id="form-comment-post" name="message"></textarea>
                                </div>
                                <button class="button button-lg button-primary button-winona"
                                    type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inset-left-xl-40">
                        <div class="aside row row-60 row-xl-75">
                            <div class="aside-item col-12">
                                <!-- RD Search Form-->
                                <form class="form-search rd-search form-search" action="search-results.html"
                                    method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="search-form-2">Search the blog...</label>
                                        <input class="form-input" id="search-form-2" type="text" name="s"
                                            autocomplete="off">
                                        <button class="button-search fl-bigmug-line-search74"
                                            type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <div class="aside-item col-md-6 col-lg-12">
                                <h6 class="aside-title">Category</h6>
                                <ul class="list-marked-2 list-category-2">
                                    <li><a href="#">News</a><span class="list-category-number">12</span></li>
                                    <li><a href="#">Exploration</a><span class="list-category-number">10</span></li>
                                    <li><a href="#">Drilling</a><span class="list-category-number">11</span></li>
                                    <li><a href="#">Refining</a><span class="list-category-number">14</span></li>
                                </ul>
                            </div>
                            <div class="aside-item col-md-6 col-lg-12">
                                <h6 class="aside-title">Popular Posts</h6>
                                <div class="list-popular-post">
                                    <div class="list-popular-post-item">
                                        <!-- Post Minimal-->
                                        <article class="post post-minimal">
                                            <div class="unit unit-spacing-2 align-items-center unit-spacing-md">
                                                <div class="unit-left"><a class="post-minimal-figure"
                                                        href="blog-post.html"><img src="{{asset('public/frontend')}}/images/post-13-106x104.jpg"
                                                            alt="" width="106" height="104" /></a></div>
                                                <div class="unit-body">
                                                    <p class="post-minimal-title"><a href="blog-post.html">Main
                                                            Differences in Products from the Natural Gas
                                                            Industry</a></p>
                                                    <div class="post-minimal-time">
                                                        <time datetime="2021-03-15">March 15, 2021</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="list-popular-post-item">
                                        <!-- Post Minimal-->
                                        <article class="post post-minimal">
                                            <div class="unit unit-spacing-2 align-items-center unit-spacing-md">
                                                <div class="unit-left"><a class="post-minimal-figure"
                                                        href="blog-post.html"><img src="{{asset('public/frontend')}}/images/post-14-106x104.jpg"
                                                            alt="" width="106" height="104" /></a></div>
                                                <div class="unit-body">
                                                    <p class="post-minimal-title"><a href="blog-post.html">Blue
                                                            Energy Signals US Oil Drilling Revival</a></p>
                                                    <div class="post-minimal-time">
                                                        <time datetime="2021-03-15">March 15, 2021</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="list-popular-post-item">
                                        <!-- Post Minimal-->
                                        <article class="post post-minimal">
                                            <div class="unit unit-spacing-2 align-items-center unit-spacing-md">
                                                <div class="unit-left"><a class="post-minimal-figure"
                                                        href="blog-post.html"><img src="{{asset('public/frontend')}}/images/post-15-106x104.jpg"
                                                            alt="" width="106" height="104" /></a></div>
                                                <div class="unit-body">
                                                    <p class="post-minimal-title"><a href="blog-post.html">Oil
                                                            Prices: Here Come The Bulls</a></p>
                                                    <div class="post-minimal-time">
                                                        <time datetime="2021-03-15">March 15, 2021</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Blog Archive</h6>
                                <ul class="list-marked-2">
                                    <li><a href="#">September 2021</a></li>
                                    <li><a href="#">August 2021</a></li>
                                </ul>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Tags</h6>
                                <div class="group-xxs group-middle justify-content-start"><a class="button-tags"
                                        href="#">News</a><a class="button-tags" href="#">Gas</a><a
                                        class="button-tags" href="#">Drilling</a><a class="button-tags"
                                        href="#">Exploration</a><a class="button-tags" href="#">Processing</a><a
                                        class="button-tags" href="#">Oil</a></div>
                            </div>
                        </div>
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
                                        data-constraints="" />
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

