<script type="text/javascript">
    $(document).ready(function () {
        initValidateComment();
    });
    function initValidateComment() {
        $("#form_comment_user").validate({
            rules: {
                content: {required: !0},
                // messages: {
                //     required: "Vui lòng nhập dữ liệu để comment."
                // },
            }, invalidHandler: function (e, r) {
            }, submitHandler: function (e) {
                comments();
            }
        })
    }

    function comments() {
        let url = "{{ route('frontend.comment.post') }}";
        $.ajax({
            type: "POST",
            url: url,
            data:  $('#form_comment_user').serialize() ,
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#list_data_comment').html(response.list_html)
                    $('#input-comment').val('')
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function showDeleteCommentModal(id) {
        let url = "{{ route('frontend.comment.getDeleteModal') }}";
        $.ajax({
            type: "GET",
            url: url,
            data:  {
                comment_id : id,
                post_id: $('#post-id').val()
            },
            success: function (response) {
                if (response.status == 1) {
                    $('#delete_cmt').html(response.modal_html)
                    $('#modal_delete_comment').modal('show')

                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function deleteComment(id) {
        let url = "{{ route('frontend.comment.destroy') }}";
        $.ajax({
            type: "POST",
            url: url,
            data:  {
                comment_id : id,
                post_id: $('#post-id').val()
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#list_data_comment').html(response.list_html);
                    $('#modal_delete_comment').modal('hide');
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }
</script>
