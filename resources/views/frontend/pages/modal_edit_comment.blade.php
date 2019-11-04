<div class="modal fade" id="modal_edit_comment" role="dialog" aria-labelledby="exampleModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa bình luận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" id="m_form_edit_comment" class="m-form m-form--state m-form--fit m-form--label-align-right">
                <div class="modal-body">
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
                    <div class="form-group m-form__group">
                        <input type="text" class="form-control m-input" name="content" id="content-update"
                               placeholder="Nhập ý kiến của bạn" value="{{ old('content', $comment->content) }}">
                        <div class="alert alert-danger d-none" id="msg_div">
                            <span id="res_message"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" onclick="updateComment({{ $comment->id }})">Lưu lại</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

