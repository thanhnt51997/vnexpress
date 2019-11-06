<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function sendMailResetPassword() {
        let url = "{{ route('user.send_mail') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_send_mail_reset').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    // $('#modal_register_user').modal('hide');
                    {{--location.replace("{{ route('frontend') }}");--}}
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.responseJSON.message);
            }
        });
    }
</script>
