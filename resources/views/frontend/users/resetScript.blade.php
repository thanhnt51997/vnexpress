<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function resetPassword() {
        let url = "{{ route('user.reset_password', $token) }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_reset_password').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    location.replace("{{ route('frontend') }}");
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                let error_msg = '';
                $.each(response.responseJSON.errors, function( index, value ) {
                    error_msg +=  value + '<br>';
                });
                toastr.error(error_msg);

            }
        });
    }
</script>
