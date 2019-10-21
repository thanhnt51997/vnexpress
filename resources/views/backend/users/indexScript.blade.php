<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('.delete-user').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('user-id');
            var name = $(this).attr('user-name');
            if (confirm('Xác nhận xóa ' + name + '?')) {
                $(this).parent().parent().remove();
                let url = "{{ route('users.destroy', 'id') }}";
                url = url.replace('id', id);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {id: id},
                    success: function (response) {
                        console.log(response.message);
                        if (response.status = 0) {
                            toastr.error(response.message);
                        } else {
                            toastr.success(response.message);
                            location.replace("{{ route('users.index') }}");
                        }
                    },
                    error: function (response) {
                        toastr.error(response.message);
                    }
                })
            }
        });
    });
</script>
