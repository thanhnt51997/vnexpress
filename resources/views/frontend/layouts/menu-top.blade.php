<div class="menu-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="btn btn-info navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContentLG" aria-controls="navbarSupportedContentLG"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="d-mobile">
                        <a class="navbar-brand" href="#"><img class="img-fluid" src="img/logo-responsive.png"
                                                              alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <ul class="navbar-nav mr-auto d-flex justify-content-between font-weight-bold">
                                    <li class="nav-item border-right">
                                        <a class="nav-link link-menu" href="{{ route('frontend') }}">Trang chủ <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    @foreach($category_desktop as $desktop)
                                        <li class="nav-item border-right">
                                            <a class="nav-link link-menu"
                                               href="{{ url('category',['slug'=>$desktop->slug]) }}">{{ $desktop->name }}</a>
                                        </li>
                                    @endforeach
                                    @foreach($category_mobile as $mobile)
                                        <li class="nav-item border-right d-desktop">
                                            <a class="nav-link link-menu"
                                               href="{{ url('category',['slug'=>$mobile->slug]) }}">{{ $mobile->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-6 d-mobile">
                                <ul class="navbar-nav mr-auto d-flex justify-content-between">
                                    <li class="nav-item border-right d-desktop">
                                        <a class="nav-link link-menu" href="#">Trang chủ <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    @foreach($category_mobile as $mobile)
                                        <li class="nav-item border-right d-desktop">
                                            <a class="nav-link link-menu"
                                               href="{{ url('category',['slug'=>$mobile->slug]) }}">{{ $mobile->name }}</a>
                                        </li>
                                    @endforeach
                                    @foreach($category_desktop as $desktop)
                                        <li class="nav-item border-right">
                                            <a class="nav-link link-menu"
                                               href="{{ url('category',['slug'=>$desktop->slug]) }}">{{ $desktop->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="breadcrumb-top">
    <div class="container">
        <div class="row">
{{--            <div class="col-md-2">--}}
{{--                <ul class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item active breadcrumb-first" aria-current="page"><h5><a href="#">Trang--}}
{{--                                nhất</a></h5>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="col-md-12 text-right">
                    <span class="breadcrumb-right"><i
                            class="fa fa-phone"></i> <strong>083.888.0123</strong> (HN) - <strong>082.233.3555</strong> (TP HCM)</span>
                <span class="bg-light breadcrumb-ads">Ad</span>
                <a href="#" title="quảng cáo" class="box_ad_vne">
                    090 293 9644
                </a>
            </div>
        </div>
    </div>
</section>
