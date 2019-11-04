@extends('master.frontend')
@section('title', 'Trang tin tức -- Vnexpress')
@section('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/post.css') }}">
@endsection
@section('content')
    <section class="container border">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-12 mt-3 border-right">
                <header class="clearfix">
                    <span class="time left">{{ $post->created_at }}</span>
                    <h1 class="title-news">{{ $post->title }}
                    </h1>
                    <i>Lượt xem: {{ $post->view }}</i>
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
            <div class="box-comment col-lg-8 col-12">
                <div class="header-comment p-2">
                    <strong rel="time">Ý kiến bạn đọc</strong>
                </div>
                <div id="list_data_comment">
                    @include('frontend.pages.dataComment')
                </div>
                @include('frontend.pages.inputComent')
                <div id="delete_cmt"></div>
                <div id="edit_comment"></div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
    @include('frontend.pages.commentScript')

@endsection
