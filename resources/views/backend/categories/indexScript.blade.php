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
        let url = "{{ route('categories.modal_create') }}";
        $.ajax({
            type: "GET",
            url: url,
            data: {},
            success: function (response) {
                if (response.status == 0) {
                    toastr.error(response.message);
                } else {
                    $('#modal_create').html(response.modal_html);
                    $('#modal_create_category').modal('show');
                    initValidateCreate();
                }
            },
            error: function (response) {
            }
        });
    }


    function initValidateCreate() {
        $("#m_form_create_category").validate({
            rules: {
                name: {required: !0},
                slug: {required: !0},
                status: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                createCategory();
            }
        })
    }

    function createCategory() {
        let url = "{{ route('categories.store') }}";
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_create_category').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_create_category').modal('hide');
                    location.replace("{{ route('categories.index') }}");
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
        let url = "{{ route('categories.modal_edit', ':id') }}";
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
                    $('#modal_edit_category').modal('show');
                    initValidateUpdate();
                }
            },
            error: function (response) {
            }
        });
    }

    function initValidateUpdate() {
        $("#m_form_edit_category").validate({
            rules: {
                name: {required: !0},
                slug: {required: !0},
                status: {required: !0},
            }, invalidHandler: function (e, r) {
                $("#m_form_1_msg").removeClass("m--hide").show(), mUtil.scrollTop()
            }, submitHandler: function (e) {
                updateCategory();
            }
        })
    }


    function updateCategory() {
        let url = "{{ route('categories.update', ':id') }}";
        url = url.replace(':id', $("#category_id").val());
        $.ajax({
            type: "POST",
            url: url,
            data: $('#m_form_edit_category').serialize(),
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_edit_category').modal('hide');
                    $('#data-table-category').html(response.list_html);
                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function showDeleteCategoryModal(id) {
        let url = "{{ route('categories.modal_delete') }}";
        $.ajax({
            type: "GET",
            url: url,
            data:  {
                category_id : id,
            },
            success: function (response) {
                if (response.status == 1) {
                    $('#delete_category').html(response.modal_html);
                    $('#modal_delete_category').modal('show');

                } else {
                    toastr.error(response.message);
                }
            },
            error: function (response) {
                toastr.error(response.message);
            }
        });
    }

    function deleteCategory(id) {
        let url = "{{ route('categories.destroy') }}";
        $.ajax({
            type: "POST",
            url: url,
            data:  {
                category_id : id,
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    $('#modal_delete_category').modal('hide');
                    $('#data-table-category').html(response.list_html);
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
