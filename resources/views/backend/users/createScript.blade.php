<script>
    var FormControls = {
        init: function () {
            $("#m_form_create_user").validate({
                rules: {
                    email: {required: !0, email: !0, minlength: 10},
                    url: {required: !0},
                    name: {required: !0},
                    role_id: {required: !0},
                    password: {required: !0},
                    status: {required: !0},
                    phone: {required: !0, number: !0, maxlength: 11},
                    digits: {required: !0, digits: !0},
                    option: {required: !0},
                    options: {required: !0, minlength: 2, maxlength: 4},
                    memo: {required: !0, minlength: 10, maxlength: 100},
                    checkbox: {required: !0},
                    checkboxes: {required: !0, minlength: 1, maxlength: 2},
                    radio: {required: !0}
                }, invalidHandler: function (e, r) {
                    $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
                }, submitHandler: function (e) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/admin/users/create-user',
                        type: 'POST',
                        data: $('#m_form_create_user').serialize(),
                        success: function (response) {
                            if (response.status == 1) {
                                toastr.success(response.message);
                                location.replace("{{ route('users.index') }}");
                            } else {
                                toastr.error(response.message);
                            }
                        },
                        error: function (response) {
                            toastr.error(response.message);
                        }
                    });
                }
            })
        }
    };
    jQuery(document).ready(function () {
        FormControls.init()
    });

</script>
