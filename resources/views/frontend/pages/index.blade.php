@extends('master.frontend')
@section('title', 'Trang tin tức -- Vnexpress')
@section('content')
    <section class="front-page">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6 news-page">
                    <div class="thumb-big">
                        <a href=""><img class="img-fluid" src="{{ asset('storage/'.$hot_news->avatar) }}" alt=""></a>
                    </div>
                    <h1 class="title-news"><a
                            href="{{ url('', ['category'=>$hot_news->category->slug,'slug'=>convert_vi_to_en($hot_news->title).'-'.$hot_news->id]) }}">{{ $hot_news->title }}</a>
                    </h1>
                    <p class="description">{!! getShortenSentence($hot_news->content, 30) !!}</p>
                </div>
                <div class="col-md-2 related-news flex-column d-ipad" data-spy="scroll" data-offset="7">
                    @foreach($related_news as $related)
                        <div class="p-2 border-bottom">
                            <a href="{{ url('',['category'=>$related->category->slug, 'slug'=>convert_vi_to_en($related->title).'-'.$related->id]) }}"><span>{{ $related->title }}</span></a>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 front-page-ads d-flex flex-column justify-content-around">
                    <div class="text-center">
                        <a href=""><img class="img-fluid" src="{{ asset('frontend/img/front-ads.JPG') }}" alt=""></a>
                    </div>
                    <div class="text-center">
                        <a href=""><img class="img-fluid" src="{{ asset('frontend/img/front-ads.JPG') }}" alt=""></a>
                    </div>
                    <div class="text-center">
                        <a href=""><img class="img-fluid" src="{{ asset('frontend/img/front-ads.JPG') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 border-right">
                    @if(count($latest_posts) > 0)
                        @foreach($latest_posts as $latest_post)
                            @if(!empty($latest_post->latestPost))
                                <article class="list-news pt-2 pb-2 border-bottom">
                                    <h5 class="title-news "><a class="title"
                                                               href="{{ url('', ['category'=>$latest_post->slug,'slug'=>convert_vi_to_en($latest_post->latestPost->title).'-'.$latest_post->latestPost->id]) }}">{{ $latest_post->latestPost->title }}</a>
                                        @if($latest_post->count_comment > 0)
                                            <a class="icon-comment"
                                               href=""><i
                                                    class="fa fa-comment"><span>{{ $latest_post->count_comment }}</span></i></a>
                                        @endif
                                    </h5>
                                    <div class="thumb-art">
                                        <a class="float-left mr-2"
                                           href="{{ url('', ['category'=>$latest_post->slug,'slug'=>convert_vi_to_en($latest_post->latestPost->title).'-'.$latest_post->latestPost->id]) }}"><img
                                                class="img-fluid"
                                                src="{{ asset('storage/'.$latest_post->latestPost->avatar) }}"
                                                alt=""></a>
                                        <div class="description">
                                            <p>{!!  getShortenSentence($latest_post->latestPost->content, 30) !!}
                                            </p></div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    @endif
                    <div class="list-category img-slide">
                        <nav class="nav category">
                            <h5><a class="nav-category nav-link first" href="#">Ảnh</a></h5>
                        </nav>
                        <div class="category-news d-flex justify-content-around pt-2 pb-2">
                            <article class="list-news">
                                <div class="thumb-art">
                                    <a class="float-left mr-2" href=""><img class="img-fluid "
                                                                            src="{{ asset('frontend/img/slide_anh_1.JPG') }}"
                                                                            alt=""></a>
                                </div>
                                <h5 class="title-news "><a class="title" href="">7 món phải thử trong ngày lạnh ở Sa
                                        Pa
                                    </a>
                                    <a class="icon-comment"
                                       href=""><i class="fa fa-comment"><span>328</span></i></a>
                                </h5>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 border-right pt-2">
                    @foreach($categories as $category)
                        @if(count($category->latest_posts)>0)
                            <div class="list-category">
                                <nav class="nav category">
                                    <h5><a class="nav-category nav-link first"
                                           href="{{ url('', ['category'=>$category->slug]) }}">{{ $category->name }}</a>
                                    </h5>
                                    <h6><a class="nav-category nav-link border-right" href="#">Bóng đá</a></h6>
                                    <h6><a class="nav-category nav-link border-right" href="#">Tennis</a></h6>
                                    <h6><a class="nav-category nav-link border-right" href="#">F1</a></h6>
                                    <h6><a class="nav-category nav-link border-right" href="#">Chuyển nhượng</a></h6>
                                    <h6><a class="nav-category nav-link border-right" href="#">World cup</a></h6>
                                    <h6><a class="nav-category nav-link" href="#">Tennis</a></h6>
                                </nav>
                                <div class="category-news pt-2 pb-2 row">
                                    <article class="col-lg-8 list-news">
                                        <h5 class="title-news"><a class="title"
                                                                  href="{{ url('', ['category'=>$category->slug,'slug'=>convert_vi_to_en($category->latest_posts[0]->title).'-'.$category->latest_posts[0]->id]) }}">{{$category->latest_posts[0]->title}}</a>
                                            @if($category->latest_posts[0]->count_comment > 0)
                                                <a class="icon-comment"
                                                   href=""><i
                                                        class="fa fa-comment"><span>{{ $category->latest_posts[0]->count_comment }}</span></i></a>
                                            @endif
                                        </h5>
                                        <div class="thumb-art row">
                                            <a class="float-left col-lg-6 col-sm-6 col-12"
                                               href="{{ url('', ['category'=>$category->slug,'slug'=>convert_vi_to_en($category->latest_posts[0]->title).'-'.$category->latest_posts[0]->id]) }}"><img
                                                    class="img-fluid"
                                                    src="{{ asset('storage/'.$category->latest_posts[0]->avatar) }}"
                                                    alt=""></a>
                                            <div
                                                class="description col-lg-6 col-sm-6 col-12">{!! getShortenSentence($category->latest_posts[0]->content, 30) !!}</div>
                                        </div>
                                    </article>
                                    <div class="related-category col-lg-4">
                                        <ul class="d-flex flex-column justify-content-center">
                                            @foreach($category->latest_posts as $key => $post_of_category)
                                                @if($key != 0)
                                                    <li>
                                                        <a href="{{ url('', ['category'=>$category->slug,'slug'=>convert_vi_to_en($post_of_category->title).'-'.$post_of_category->id]) }}">{{ $post_of_category->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-12">
                            <hgroup class="title-sponsor mb-2">
                                <h5 class="border-primary">Tài trợ</h5>
                            </hgroup>

                            <div class="sponsor-news m-1">
                                <img class="img-thumbnail" src="{{asset('frontend/img/taitro_1.jpeg')}}" alt="">
                                <a href=""><b>Làm nghề phải nói nhiều mà tôi thường bị khản tiếng, mất tiếng</b></a>
                            </div>
                            <div class="sponsor-news m-1">
                                <img class="img-thumbnail" src="{{asset('frontend/img/taitro_1.jpeg')}}" alt="">
                                <a href=""><b>Làm nghề phải nói nhiều mà tôi thường bị khản tiếng, mất tiếng</b></a>
                            </div>
                            <div class="sponsor-news m-1">
                                <img class="img-thumbnail" src="{{asset('frontend/img/taitro_1.jpeg')}}" alt="">
                                <a href=""><b>Làm nghề phải nói nhiều mà tôi thường bị khản tiếng, mất tiếng</b></a>
                            </div>
                            <div class="sponsor-news m-1">
                                <img class="img-thumbnail" src="{{asset('frontend/img/taitro_1.jpeg')}}" alt="">
                                <a href=""><b>Làm nghề phải nói nhiều mà tôi thường bị khản tiếng, mất tiếng</b></a>
                            </div>

                            <hgroup class="title-sponsor mt-3 mb-2">
                                <h5 class="border-primary">Quà tặng</h5>
                            </hgroup>
                            <div class="sponsor-news m-1">
                                <img class="img-fluid" src="{{asset('frontend/img/taitro_1.jpeg')}}" alt="">
                                <a href=""><b>Mách bạn cách phối vòng tay và đồng hồ chuẩn thời trang</b></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 col-sm-12">
                            <div class="center-ads">
                                <div class="text-center">
                                    <img class="img-fluid" src="{{asset('frontend/img/center_ads.JPG') }}" alt="">
                                </div>
                                <div class="best-news pt-3 pb-3">
                                    <div class="list-category">
                                        <nav class="nav category">
                                            <h5><a class="nav-category nav-link first" href="#">Xem nhiều
                                                    nhất</a>
                                            </h5>
                                        </nav>
                                        <ul class="d-flex flex-column justify-content-center">
                                            @foreach($most_view_posts as $most_view_post)
                                                <li>
                                                    <a href="{{ url('', ['category'=>$most_view_post->category->slug,'slug'=>convert_vi_to_en($most_view_post->title).'-'.$most_view_post->id]) }}">
                                                        <h5>{{ $most_view_post->title }}
                                                            <span
                                                                class="fa fa-eye text-info">{{ $most_view_post->view }}</span>
                                                        </h5>
                                                    </a>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img class="img-fluid" src="{{asset('frontend/img/center_ads.JPG')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-ads col-lg-2 pt-2 flex-column justify-content-around">
                    <div class="text-center">
                        <img src="{{asset('frontend/img/right-ads.JPG')}}" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('frontend/img/right-ads.JPG')}}" alt="">
                    </div>
                    <div class="text-center">
                        <img src="{{asset('frontend/img/right-ads.JPG')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="news-other container mt-3">
        <div class="row list-other">
            <div class="col-md-6 col-sm-12 col-12 list-other-left pr-5">
                <div class="thumb-art">
                    <a class="float-left mr-2" href=""><img class="img-fluid" src="img/img_ource_other.JPG" alt=""></a>
                    <a href=""><h4>Ảnh cưới của Đông Nhi - Ông Cao Thắng</h4></a>
                    <p class="description">Cô dâu diện 6 chiếc váy cưới mang vẻ lộng lẫy, còn chú rể thay đến 5 bộ
                        vest lịch
                        lãm đều đến từ NTK Chung Thanh Phong.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-ipad list-other-right pl-5">
                <div class="thumb-art">
                    <a class="float-left mr-2" href=""><img class="img-fluid" src="img/img_ource_other.JPG" alt=""></a>
                    <a href=""><h4>Ảnh cưới của Đông Nhi - Ông Cao Thắng</h4></a>
                    <p class="description">Cô dâu diện 6 chiếc váy cưới mang vẻ lộng lẫy, còn chú rể thay đến 5 bộ
                        vest lịch
                        lãm đều đến từ NTK Chung Thanh Phong.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="business-information container mt-3 border">
        <div class="row">
            <nav class="nav category d-flex justify-content-between">
                <h5><a class="nav-category nav-link first" href="#">Thông tin doanh nghiệp</a></h5>
                <div id="slider-control" class="p-2">
                    <a class="carousel-left pr-3" href="#carouselControls" role="button" data-slide="prev"><span
                            class="fa fa-backward"></span></a>
                    <a class="carousel-right pl-3" href="#carouselControls" role="button" data-slide="next"><span
                            class="fa fa-forward"></span></a>
                </div>
            </nav>
        </div>
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="business-information container mt-3 border">
        <div class="row">
            <nav class="nav category d-flex justify-content-between">
                <h5><a class="nav-category nav-link first" href="#">Thông tin doanh nghiệp</a></h5>
                <div id="slider-control-under" class="p-2">
                    <a class="carousel-left-under pr-3" href="#carouselControls" role="button"
                       data-slide="prev"><span
                            class="fa fa-backward"></span></a>
                    <a class="carousel-right-under pl-3" href="#carouselControls" role="button"
                       data-slide="next"><span
                            class="fa fa-forward"></span></a>
                </div>
            </nav>
        </div>
        <div id="CarouselUnder" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="item active col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div class="">
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 col-sm-6">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 col-md-4 d-ipad">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-3 d-desktop">
                            <div>
                                <a href="#"><img src="img/img-business-information.JPG" class="img-fluid"></a>
                                <a href=""><h5 class="mt-2">Đồng hồ Tissot tặng quà phái đẹp ngày 20/10
                                    </h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
