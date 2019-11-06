@extends('layouts.app')
@section('title', 'Khôi phục mật khẩu')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
                    <div class="card-body">
                        <form class="m-form m-form--state m-form--fit m-form--label-align-right" method="POST"
                              action="javascript:void(0)"
                              id="m_form_reset_password">
                            @csrf
                            <div class="m-portlet__body">
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group m-form__group row">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ $email ?? old('email') }}" required autocomplete="email"
                                               autofocus>
                                        <div class="alert alert-danger d-none" id="msg_div">
                                            <span id="res_message"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password"
                                               required autocomplete="new-password">
                                        <div class="alert alert-danger d-none" id="msg_div">
                                            <span id="res_message"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                        <div class="alert alert-danger d-none" id="msg_div">
                                            <span id="res_message"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">

                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" onclick="resetPassword()" class="btn btn-primary">
                                                {{ __('Reset Password') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    @include('frontend.users.resetScript')
@endsection
