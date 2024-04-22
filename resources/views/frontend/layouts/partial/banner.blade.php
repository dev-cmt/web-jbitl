<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">@yield('title')</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{asset('public/frontend')}}/images/bg-typography.jpg);"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{route('/')}}">Home</a></li>
            <li class="active">@yield('title')</li>
        </ul>
    </div>
</section>