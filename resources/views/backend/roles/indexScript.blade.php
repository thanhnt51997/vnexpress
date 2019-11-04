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
        let url = "{{ route('roles.modal_create') }}";
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_create').html(response.modal_html);
                    $('#modal_create_role').modal('show');
                    initValidateCreate();
                }
            },
            error: function (response) {
            }
        });
    }


    function initValidateCreate() {
        $("#m_form_create_role").validate({
            rules: {
                name: {required: !0},
                status: {required: !0},
                display_name: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                createRole();
            }
        })
    }

    function createRole() {
        let url = "{{ route('roles.store') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_create_role').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_create_role').modal('hide');
                    $('#data-table-roles').html(response.list_html);
                    {{--location.replace("{{ route('roles.index') }}");--}}
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
        let url = "{{ route('roles.modal_edit', ':id') }}";
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
                    $('#modal_edit_role').modal('show');
                    initValidateUpdate();
                }
            },
            error: function (response) {
            }
        });
    }

    function initValidateUpdate() {
        $("#m_form_edit_role").validate({
            rules: {
                name: {required: !0},
                status: {required: !0},
                display_name: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                updateRole();
            }
        })
    }


    function updateRole() {
        let url = "{{ route('roles.update', ':id') }}";
        url = url.replace(':id', $("#role_id").val());
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_edit_role').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_edit_role').modal('hide');
                    $('#data-table-roles').html(response.list_html);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function showDeleteRoleModal(id) {
        let url = "{{ route('roles.modal_delete') }}";
        $.ajax({
            type: "GET",
            url: url,
            data:  {
                role_id : id,
            },
            success: function (response) {
                if (response.status == 1) {
                    $('#delete_role').html(response.modal_html);
                    $('#modal_delete_role').modal('show');

                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function deleteRole(id) {
        let url = "{{ route('roles.destroy') }}";
        $.ajax({
            type: "POST",
            url: url,
            data:  {
                role_id : id,
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_delete_role').modal('hide');
                    $('#data-table-roles').html(response.list_html);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    {{--function deleteRole() {--}}
    {{--    $('td').on('click', '.delete-role', function (e) {--}}
    {{--        e.preventDefault();--}}
    {{--        var id = $(this).attr('role-id');--}}
    {{--        if (id == 1) {--}}
    {{--            return toastr.error('Bạn không thể xóa quyền quản trị!');--}}
    {{--        }--}}
    {{--        var name = $(this).attr('role-name');--}}
    {{--        if (confirm('Xác nhận xóa quyền ' + name + '?')) {--}}
    {{--                $(this).parent().parent().remove();--}}
    {{--                let url = "{{ route('roles.destroy', 'id') }}";--}}
    {{--                url = url.replace('id', id);--}}
    {{--                $.ajax({--}}
    {{--                    url: url,--}}
    {{--                    type: 'POST',--}}
    {{--                    data: {id: id},--}}
    {{--                    success: function (response) {--}}
    {{--                        if (response.status == 0) {--}}
    {{--                            toastr.error(response.message);--}}
    {{--                        } else {--}}
    {{--                            toastr.success(response.message);--}}
    {{--                        }--}}
    {{--                    },--}}
    {{--                    error: function (response) {--}}
    {{--                        toastr.error(response.message);--}}
    {{--                    }--}}
    {{--                })--}}
    {{--            }--}}
    {{--    });--}}
    {{--}--}}

</script>
