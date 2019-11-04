@extends('master.layout')
@section('title', 'Sửa thông tin người dùng ')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Thêm mới người dùng</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="{{ route('users.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Users</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
                                <span class="m-nav__link-text">Sửa thông tin user</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="m-content">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Sửa thông tin người dùng
                            </h3>
                        </div>
                    </div>
                </div>
                <form class="m-form m-form--state m-form--fit m-form--label-align-right form-user" id="m_form_edit_user" method="POST" action="javascript:void(0)">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="m-form__content">
                            <div class="m-alert m-alert--icon alert alert-warning m--hide" role="alert" id="m_form_1_msg">
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
                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label  el col-lg-3 col-sm-12">Tên hiển thị *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="name" value="{{ old('name', $user->name) }}"
                                       placeholder="Enter username">
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label el col-lg-3 col-sm-12">Email *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="email"
                                       placeholder="Enter email" value="{{ old('email', $user->email) }}">
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label el col-lg-3 col-sm-12">Mật khẩu *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="password" class="form-control m-input" name="password"
                                       placeholder="Enter password" value="{{ old('password', $user->password) }}">
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label el col-lg-3 col-sm-12">Số điện thoại *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control m-input" name="phone"
                                           placeholder="Enter phone" value="{{ old('phone', $user->phone) }}">
                                    <div class="input-group-append">
                                        <a href="#" class="btn btn-brand">
                                            <i class="la la-phone"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label el col-lg-3 col-sm-12">Quyền hạn *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select name="role_id" id="role_id" class="form-control m-input">
                                    <option value="">Select</option>
                                    @foreach ($roles as $role_item)
                                        <option
                                            value="{{ $role_item->id }}" @foreach($user->roles as $role)  {{ ($role_item->id == $role->id) ? 'selected' : '' }} @endforeach>
                                            {{ $role_item->display_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <p class="text-danger">{{ $errors->first('department_id')}}</p>
                            <div class="alert alert-danger d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Status *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <select class="form-control m-input" name="status">
                                    <option value="">Select</option>
                                    <option  value="{{ (config('app.active')) }}" {{ (old('status', $user->status) == config('app.active')) ? 'selected' : ''}}>Active</option>
                                    <option  value="{{ (config('app.block')) }}" {{ (old('status', $user->status) == config('app.block')) ? 'selected' : ''}}>Block</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button id="submit_edit_user" type="submit" class="btn btn-accent">Lưu lại</button>
                                    <button type="button" onclick="reloadData()" class="btn btn-warning">Reset</button>
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
    @include('backend.users.updateScript')
@endsection
