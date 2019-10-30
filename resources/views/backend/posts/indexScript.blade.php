<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".alert-success").delay(1000).slideUp(500);

    });


    $(function () {
        $('body').on('click', '.pagination a', function (e) {
            e.preventDefault();

            $('#data_table_posts a').css('color', '#dfecf6');
            $('#data_table_posts').append('<img style="position: absolute; width: 100px; left: 50%; top: 50%; z-index: 100000;" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" />');

            var url = $(this).attr('href');
            getPosts(url);
            window.history.pushState("", "", url);
        });

        function getPosts(url) {
            $.ajax({
                url: url
            }).done(function (data) {
                $('.data-table-posts').html(data);
            }).fail(function () {
                alert('Posts could not be loaded.');
            });
        }
    });

    function showEditModal(id) {
        let url = "{{ route('posts.modal_edit', ':id') }}";
        url = url.replace(':id', id);

        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_edit').html(response.modal_html);
                    $('#modal_edit_post').modal('show');
                    initValidateUpdate();
                    initCKEditor('#content-edit');
                }
            },
            error: function (response) {
                if(response.status == 403) {
                    toastr.error('Bạn không thể sửa bài viết này!');
                }
            }
        });
    }

    function initValidateUpdate() {
        $("#m_form_edit_post").validate({
            rules: {
                title: {required: !0, minlength: 10},
                content: {required: !0},
                status: {required: !0},
                category_id: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                updatePost();
            }
        })
    }

    function updatePost() {
        let url = "{{ route('posts.update', ':id') }}";
        url = url.replace(':id', $("#post_id").val());
        var formData = new FormData($('#m_form_edit_post')[0]);
        formData.append('avatar', $('input[type=file]')[0].files[0]);
        formData.append('content_edit', $('#content-edit').val());

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_edit_post').modal('hide');
                    location.replace("{{ route('posts.index') }}");
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function deletePost() {
        $('td').on('click', '.delete-post', function (e) {
            e.preventDefault();
            var id = $(this).attr('post-id');
            if (confirm('Xác nhận xóa tin này ?')) {
                $(this).parent().parent().remove();
                let url = "{{ route('posts.destroy', 'id') }}";
                url = url.replace('id', id);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {id: id},
                    success: function (response) {
                        if (response.status == 0) {
                            toastr.error(response.message);
                        } else {
                            toastr.success(response.message);
                        }
                    },
                    error: function (response) {
                        toastr.error(response.message);
                    }
                })
            }
        });
    }


    function initCKEditor(el) {
        let options = {
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document', 'doctools']},
                {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                {name: 'clipboard', groups: ['redo', 'undo']},
                {name: 'links', groups: ['links']},
                {name: 'insert', groups: ['insert']},
                {name: 'styles', groups: ['styles']},
                {name: 'colors', groups: ['colors']},
                {name: 'tools', groups: ['tools']},
                {name: 'others', groups: ['others']},
                {name: 'about', groups: ['about']}
            ],
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            removeButtons: 'Source,Iframe,Flash,Anchor,Smiley,NewPage,Preview,Print,Save,Templates,Copy,Cut,Find,Replace,SelectAll,Scayt,Form,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Checkbox,CopyFormatting,RemoveFormat,CreateDiv,Blockquote,Language,BidiLtr,BidiRtl,Smiley,PageBreak,Styles,ShowBlocks,About,Paste,PasteText,PasteFromWord,Format',
        };
        $(el).ckeditor(options);
    }
</script>
