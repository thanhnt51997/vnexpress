<div class="header">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="header-left w-75">
                    <ul class="contact-header d-flex justify-content-between ">
                        <li class=""><h6>Thứ ba, 15/10/2019, 16:31 (GMT+7)</h6></li>
                        <span class="border-right"></span>
                        <li class=""><a href="#" title=""><h6>24h qua</h6></a></li>
                        <span class="border-right"></span>
                        <li class=""><a href="#" id=""><h6>RSS</h6></a></li>
                        <span class="border-right"></span>
                        <li class="">
                            <button class="btn-info btn-top"><span class="fa fa-thumbs-up"> Like</span></button>
                        </li>
                        <span class="border-right"></span>
                        <li class="">
                            <button class="btn-primary btn-top"><span class="fa fa-skype"> Skype</span></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-right">
                    <ul class="d-flex justify-content-between">
                        <li>
                            <form class="form-inline">
                                <input class="form-control" type="text" placeholder="Search"
                                       aria-label="Search">
                                <button type="submit" class="btn btn-block"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
{{--                       <section id="auth">--}}
                            @include('frontend.layouts.auth')
{{--                       </section>--}}
                    </ul>
                    <div id="modal_login"></div>
                    <div id="modal_register"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="logo pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 img-logo">
                <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/img_logo_vne_web.svg') }}"
                                 alt=""></a>
            </div>
            <div class="col-md-4 img-ads">
                <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/img_ads.png') }}" alt=""></a>
            </div>
            <div class="col-md-4 img-ads">
                <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/img_ads.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
@section('script')

    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
    {{--    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>--}}
    @include('master.indexScript')
@endsection
