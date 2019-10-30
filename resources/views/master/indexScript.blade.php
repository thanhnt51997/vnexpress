<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    });

    function showRegisterModal() {
        let url = "{{ route('frontend.getRegister') }}";
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_register').html(response.modal_html);
                    $('#modal_register_user').modal('show');
                    initValidateRegister();
                }
            },
            error: function (response) {
            }
        });
    }

    function initValidateRegister() {
        $("#m_form_register").validate({
            rules: {
                name: {required: !0},
                email: {required: !0},
                password: {required: !0},
                confirmpassword: {
                    equalTo: "#password"
                },
                messages: {
                    confirmpassword: " Enter Confirm Password Same as Password"
                }
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                register();
            }
        })
    }

    function register() {
        let url = "{{ route('frontend.register') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_register').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_register_user').modal('hide');
                    location.replace("{{ route('frontend') }}");
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function showLoginModal() {
        let url = "{{ route('frontend.getLogin') }}";
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_login').html(response.modal_html);
                    $('#modal_login_user').modal('show');
                    initValidateLogin();
                }
            },
            error: function (response) {
            }
        });
    }

    function initValidateLogin() {
        $("#m_form_login").validate({
            rules: {
                email: {required: !0},
                password: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                login();
            }
        })
    }

    function login() {
        let url = "{{ route('frontend.login') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_login').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_login_user').modal('hide');
                    location.reload(true);
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
