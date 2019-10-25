@extends('master.layout')
@section('title', 'Danh sách bài viết')
@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
@endsection
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Quản lý bài viết</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">--</li>
                        <li class="m-nav__item">
                            <a href="{{ route('posts.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Posts</span>
                            </a>
                        </li>
                    </ul>
                </div>
                @include('backend.layout.flash_message')
            </div>
        </div>
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..."
                                                   id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left"><span>
																<i class="la la-search"></i>
															</span>
														</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="{{ route('posts.create') }}"
                                   class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                    <span><i class="la la-plus"></i><span>Thêm bài viết mới</span></span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>
                        </div>
                    </div>
                    @if (count($posts) > 0)
                        <section class="data-table-posts">
                            @include('backend.posts.dataTable')
                        </section>
                    @endif
                </div>

                <div id="modal_edit"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/demo/default/custom/crud/metronic-datatable/base/html-table.js')}}"
            type="text/javascript"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    @include('backend.posts.indexScript')
@endsection

