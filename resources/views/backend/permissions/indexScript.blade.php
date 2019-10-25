<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $(".alert-success").delay(1000).slideUp(500);

    });

    function showCreateModal() {
        let url = "{{ route('permissions.modal_create') }}";
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_create').html(response.modal_html);
                    $('#modal_create_permission').modal('show');
                    initValidateCreate();
                }
            },
            error: function (response) {
            }
        });
    }


    function initValidateCreate() {
        $("#m_form_create_permission").validate({
            rules: {
                name: {required: !0},
                display_name: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                createPermission();
            }
        })
    }

    function createPermission() {
        let url = "{{ route('permissions.store') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_create_permission').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_create_permission').modal('hide');
                    location.replace("{{ route('permissions.index') }}");
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function showEditModal(id) {
        let url = "{{ route('permissions.modal_edit', ':id') }}";
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
                    $('#modal_edit_permission').modal('show');
                    initValidateUpdate();
                }
            },
            error: function (response) {
            }
        });
    }

    function initValidateUpdate() {
        $("#m_form_edit_permission").validate({
            rules: {
                name: {required: !0},
                display_name: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                updatePermission();
            }
        })
    }


    function updatePermission() {
        let url = "{{ route('permissions.update', ':id') }}";
        url = url.replace(':id', $("#permission_id").val());
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_edit_permission').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_edit_permission').modal('hide');
                    location.replace("{{ route('permissions.index') }}");
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function deletePermission() {
        $('td').on('click', '.delete-permission', function (e) {
            e.preventDefault();
            var id = $(this).attr('permission-id');
            var name = $(this).attr('permission-name');
            if (confirm('Xác nhận xóa quyền ' + name + '?')) {
                    $(this).parent().parent().remove();
                    let url = "{{ route('permissions.destroy', 'id') }}";
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

</script>
