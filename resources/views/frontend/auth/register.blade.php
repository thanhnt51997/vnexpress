<div class="modal fade" id="modal_register_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tạo tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="m-form m-form--state m-form--fit m-form--label-align-right form-register"
                      id="m_form_register" method="POST" action="javascript:void(0)">
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
                            <label class="col-form-label  el col-lg-3 col-sm-12">Tên tài khoản *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="name"
                                       placeholder="Nhập tên tài khoản...">
                                <p class="font-weight-bold text-danger">{{ $errors->first('name') }}</p>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label  el col-lg-3 col-sm-12">Email *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="email"
                                       placeholder="Nhập email của bạn...">
                                <p class="font-weight-bold text-danger">{{ $errors->first('email') }}</p>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label  el col-lg-3 col-sm-12">Số điện thoại *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control m-input" name="phone"
                                       placeholder="Nhập số điện thoại của bạn...">
                                <p class="font-weight-bold text-danger">{{ $errors->first('phone') }}</p>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label  el col-lg-3 col-sm-12">Mật khẩu *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input placeholder="Nhập mật khẩu..." id="password" type="password" class="m-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <p class="font-weight-bold text-danger">{{ $errors->first('password') }}</p>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label  el col-lg-3 col-sm-12">Nhập lại mật khẩu *</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Xác nhận mật khẩu..." name="confirmpassword" required autocomplete="new-password">
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary">Đăng ký
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
