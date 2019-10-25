<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace('content');</script>
<script>
    var FormControls = {
        init: function () {
            $("#m_form_create_post").validate({
                rules: {
                    title: {required: !0, minlength: 10},
                    avatar: {required: !0},
                    status: {required: !0},
                    category_id: {required: !0},
                    content: {required: !0},
                }, invalidHandler: function (e, r) {
                    $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
                }
            })
        }
    };
    jQuery(document).ready(function () {
        FormControls.init()
    });

</script>
