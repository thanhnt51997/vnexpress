@extends('master.layout')
@section('title', 'Thêm bài viết mới ')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('posts.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Posts</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">Thêm mới</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div
                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                        m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                <span class="m-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">Support</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit">
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-content">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Thêm bài viết mới
                            </h3>
                        </div>
                    </div>
                </div>
                <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="m_form_create_post"
                      method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="m-form__content">
                            <div class="m-alert m-alert--icon alert alert-warning m--hide" role="alert"
                                 id="m_form_1_msg">
                                <div class="m-alert__icon">
                                    <i class="la la-warning"></i>
                                </div>
                                <div class="m-alert__text">
                                    Ohh có gì đó sai sai ở đâu! Vui lòng kiểm tra lại.
                                </div>
                                <div class="m-alert__close">
                                    <button type="button" class="close" data-close="alert" aria-label="Close">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-2 col-md-2 col-12">Tiêu đề *</label>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" class="form-control m-input" name="title"
                                       placeholder="Nhập tiêu đề bài viết....">
                                <p class="font-weight-bold text-danger">{{ $errors->first('title') }}</p>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="m-form__group col-lg-4 col-md-6 col-12">
                                <label class="col-form-label w-25">Ảnh bài viết
                                    *</label>
                                <div class="w-50">
                                    <input type="file" class="form-control m-input" name="avatar"
                                           placeholder="Chọn ảnh bài viết">
                                    <p class="font-weight-bold text-danger">{{ $errors->first('avatar') }}</p>
                                </div>
                            </div>
                            <div class="m-form__group col-lg-4 col-md-6 col-12">
                                <label class="w-50 col-form-label ">Chọn danh mục
                                    *</label>
                                <div class="w-50">
                                    <select name="category_id" id="category_id" class="form-control m-input">
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{ ($category->id ==  old('category_id')) ? 'selected' : '' }}>
                                                {{($category->id==$category->category_id)?"-":"" }}  {{$category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <p class="font-weight-bold text-danger">{{ $errors->first('category_id') }}</p>
                                </div>
                            </div>
                            <div class="m-form__group col-lg-4 col-md-2 col-sm-12">
                                <label class="col-form-label w-50">Status *</label>
                                <div class="w-50">
                                    <select class="form-control m-input" name="status">
                                        <option value="">Select</option>
                                        <option value="{{ config('app.active') }}">Active</option>
                                        <option value="{{ config('app.block') }}">Disable</option>
                                    </select>
                                </div>
                                <p class="font-weight-bold text-danger">{{ $errors->first('status') }}</p>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-4 col-sm-12 col-form-label">Nội dung bài viết *</label>
                            <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
                                <textarea class="form-control m-input" name="content"
                                          id="content">{{ old('content') }}</textarea>
                                <p class="font-weight-bold text-danger">{{ $errors->first('content') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-accent">Thêm mới
                                    </button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @include('backend.posts.createScript')
@endsection
