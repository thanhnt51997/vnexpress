<div class="modal fade" id="modal_edit_post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                      enctype="multipart/form-data" id="m_form_edit_post">
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
                    <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                    <div class="form-group m-form__group">
                        <label for="recipient-name" class="form-control-label">Tiêu đề *</label>
                        <input type="text" class="form-control m-input" name="title"
                               placeholder="Nhập tiêu đề bài viết...." value="{{ old('title', $post->title) }}">
                        <div class="alert alert-danger d-none" id="msg_div">
                            <span id="res_message"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4 col-12 m-form__group">
                            <label for="recipient-name" class="col-form-label col-sm-12">Status *</label>
                            <div class="col-12">
                                <select class="form-control m-input" name="status">
                                    <option value="">Select</option>
                                    <option
                                        value="{{ (config('app.active')) }}" {{ (old('status', $post->status) == config('app.active')) ? 'selected' : ''}}>
                                        Active
                                    </option>
                                    <option
                                        value="{{ config('app.block') }}" {{ (old('status', $post->status) == config('app.block')) ? 'selected' : ''}}>
                                        Disable
                                    </option>
                                </select>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  m-form__group">
                            <label class="col-form-label">Ảnh bài viết *</label>
                            <div class="col-12">
                                <img src="{{ asset('storage/'.$post->avatar) }}" width="150px" alt="">
                                <input type="file" class="form-control m-input" name="avatar" id="avatarEdit"
                                       placeholder="Chọn ảnh bài viết">
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  m-form__group">
                            <label class="col-form-label">Chọn danh mục *</label>
                            <div class="col-12">
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{( $category->id == $post->category_id ) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="alert alert-danger d-none" id="msg_div">
                                    <span id="res_message"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-4 col-sm-12">Nội dung bài viết *</label>
                        <div class="col-lg-9 col-md-9 col-sm-12 mx-auto">
                            <textarea name="content" id="content-edit">{!!  $post->content  !!}</textarea>
                            <div class="alert alert-danger d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button id="submit_edit_post" type="submit" class="btn btn-accent">Lưu lại</button>
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

