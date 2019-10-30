<div class="modal fade" id="modal_delete_comment" role="dialog" aria-labelledby="exampleModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xóa bình luận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Bạn có chắc chắn muốn xóa bình luận?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="deleteComment({{$comment->id}})">Xóa</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

