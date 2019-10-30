<div id="data_table_roles" class="dataTables_wrapper dt-bootstrap4">
    <div class="row">
        <div class="col-sm-12">
            <table
                class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline"
                id="m_table_2" role="grid" aria-describedby="m_table_2_info" style="width: 1528px;">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 174.25px;"
                        aria-label="Status: activate to sort column ascending">Tên quyền hạn
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 174.25px;"
                        aria-label="Status: activate to sort column ascending">Vai trò
                    </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73.5px;"
                        aria-label="Actions">Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $key => $role)
                    <tr role="row" class="odd">
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td nowrap="">
                            <a href="javascript:;"
                               data-toggle="modal"
                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               title="Edit" onclick="showEditModal({{ $role->id }})">
                                <i class="la la-edit"></i>
                            </a>
                            <a href="javascript:;"
                               role-id="{{ $role->id }}"
                               role-name="{{ $role->name }}"
                               onclick="deleteRole()"
                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill delete-role"
                               title="Delete">
                                <i class="la la-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
