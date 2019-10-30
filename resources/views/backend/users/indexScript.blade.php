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
    });


    $(function () {
        $('body').on('click', '.pagination a', function (e) {
            e.preventDefault();

            $('#data_table_users a').css('color', '#dfecf6');
            $('#data_table_users').append('<img style="background-repeat: no-repeat; position: absolute; width: 100px; left: 50%; top: 50%; z-index: 100000;" src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif" />');

            var url = $(this).attr('href');
            getPosts(url);
            window.history.pushState("", "", url);
        });

        function getPosts(url) {
            $.ajax({
                url: url
            }).done(function (data) {
                $('.data-table-users').html(data);
            }).fail(function () {
                alert('Posts could not be loaded.');
            });
        }
    });
</script>
