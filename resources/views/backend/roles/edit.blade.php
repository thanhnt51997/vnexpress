<div class="modal fade" id="modal_edit_role" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa bài viết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="m-form m-form--state m-form--fit m-form--label-align-right" method="POST"
                      action="javascript:void(0)"
                      enctype="multipart/form-data" id="m_form_edit_role">
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
                    <input type="hidden" name="role_id" id="role_id" value="{{ $role->id }}">
                    <div class="form-group m-form__group">
                        <label for="recipient-name" class="form-control-label">Tên quyền hạn *</label>
                        <input type="text" class="form-control m-input" name="name"
                               placeholder="Nhập quyền hạn...." value="{{ old('name', $role->name) }}">
                        <div class="alert alert-danger d-none" id="msg_div">
                            <span id="res_message"></span>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label  el col-lg-3 col-sm-12">Vai trò *</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <input type="text" class="form-control m-input" name="display_name"
                                   placeholder="Nhập dữ liệu...." value="{{ old('display_name', $role->display_name) }}">
                            <p class="font-weight-bold text-danger">{{ $errors->first('display_name') }}</p>
                            <div class="alert alert-danger d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-12 m-form__group">
                            <label for="recipient-name" class="col-form-label col-sm-12">Status *</label>
                            <div class="col-12">
                                <select class="form-control m-input" name="status">
                                    <option value="">Select</option>
                                    <option
                                        value="{{ (config('app.active')) }}" {{ (old('status', $role->status) == config('app.active')) ? 'selected' : ''}}>
                                        Active
                                    </option>
                                    <option
                                        value="{{ config('app.block') }}" {{ (old('status', $role->status) == config('app.block')) ? 'selected' : ''}}>
                                        Disable
                                    </option>
                                </select>
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
                                    <button id="submit_edit_role" type="submit" class="btn btn-accent">Lưu lại</button>
                                    <button type="button" onclick="reloadData()" class="btn btn-info">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

