@extends('master.frontend')
@section('title', 'Trang tin tức -- Vnexpress')
@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/post.css') }}">
@endsection
@section('content')
    <section class="container border">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-12 mt-3 border-right">
                <header class="clearfix">
                    <span class="time left">{{ $post->created_at }}</span>
                    <h1 class="title-news">{{ $post->title }}
                    </h1>
                    <div class="description"><p>{!!   substr( $post->content,0,300) !!}
                        </p></div>
                </header>
                <article class="content-post">
                    <p class="text-justify content-text">{!!  $post->content !!}
                    </p>
                </article>
                <div class="box_infographics topic_img clearfix pl-3">
                    <h5 class="header_toppic font-weight-bold"><a href="">{{ $post->category->name }}</a></h5>
                    <ul class="list_title">
                        @foreach($related_pots as $related)
                            <li>
                                <h6>
                                    <a href="{{ url('',['category'=>$related->category->slug, 'slug'=>convert_vi_to_en($related->title).'-'.$related->id]) }}"
                                       title="">{{ $related->title }}</a></h6></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="box-comment col-lg-8 col-12 ">
                <div class="header-comment p-2">
                    <strong rel="time">Ý kiến bạn đọc</strong> (<label for="">3</label>)
                </div>
                <div class="content-comment p-2 border-bottom bg-light">
                    <div class="comment-item">
                        <p class="full-content">Thập tự chinh diễn ra từ thế kỷ 11 đến thế kỷ 13" --> Những năm tháng
                            tang thương đen tối của châu Âu, và người ta gọi đó là Đêm trường Trung cổ (christian Dark
                            Ages</p>
                        <div class="user-comment">
                            <span><a href="">Nguyen Thanh</a> - 3 giờ trước</span>
                        </div>
                    </div>
                </div>
                <div class="content-comment p-2 border-bottom bg-light">
                    <div class="comment-item">
                        <p class="full-content">Thập tự chinh diễn ra từ thế kỷ 11 đến thế kỷ 13" --> Những năm tháng
                            tang thương đen tối của châu Âu, và người ta gọi đó là Đêm trường Trung cổ (christian Dark
                            Ages</p>
                        <div class="user-comment">
                            <span><a href="">Nguyen Thanh</a> - 3 giờ trước</span>
                        </div>
                    </div>
                </div>
                <div class="content-comment p-2 border-bottom bg-light">
                    <div class="comment-item">
                        <p class="full-content">Thập tự chinh diễn ra từ thế kỷ 11 đến thế kỷ 13" --> Những năm tháng
                            tang thương đen tối của châu Âu, và người ta gọi đó là Đêm trường Trung cổ (christian Dark
                            Ages</p>
                        <div class="user-comment">
                            <span><a href="">Nguyen Thanh</a> - 3 giờ trước</span>
                        </div>
                    </div>
                </div>
                <div class="input-comment">
                    <form action="" class="form-horizontal p-2">
                        <textarea onclick="{{ (!Auth::user()) ? 'showLoginModal()' : ''}}" placeholder="Ý kiến của bạn..."
                                  class="form-control" name="" id="" cols="10"
                                  rows="5"></textarea>
                        <div class="bottom-comment">
                            <div class="text-left">
                                <p>Hãy đăng nhập để comment</p>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    @include('frontend.pages.indexScript')
@endsection
