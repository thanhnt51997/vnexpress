<div id="data_table_users" class="dataTables_wrapper dt-bootstrap4">
    <div class="row">
        <div class="col-sm-12">
            <table
                class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline"
                id="m_table_2" role="grid" aria-describedby="m_table_2_info" style="width: 1528px;">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" rowspan="1" colspan="1" style="width: 44.25px;"
                        aria-label="Record ID">
                        <label
                            class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                            <input type="checkbox" value="" class="m-group-checkable">
                            <span></span>
                        </label></th>
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 59.25px;"
                        aria-label="Name: activate to sort column ascending">Tên người dùng
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 109.25px;"
                        aria-label="Email: activate to sort column ascending">Email
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 139.25px;"
                        aria-label="Phone: activate to sort column ascending">Số điện thoại
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="m_table_2" rowspan="1"
                        colspan="1" style="width: 174.25px;"
                        aria-label="Status: activate to sort column ascending">Trạng thái
                    </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 73.5px;"
                        aria-label="Actions">Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr role="row" class="odd">
                        <td tabindex="0" class="sorting_1">
                            <label
                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                <input type="checkbox" value="" class="m-checkable">
                                <span></span>
                            </label>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <span class="m-badge {{($user->status == config('app.active')) ? 'm-badge--primary' : ' m-badge--warning' }} m-badge--wide">{{($user->status == config('app.active')) ? 'Active' : 'Disable' }}</span>
                        </td>
                        <td nowrap="">
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               title="View">
                                <i class="la la-edit"></i>
                            </a>
                            <a href=""
                               user-id="{{ $user->id }}"
                               user-name="{{ $user->name }}"
                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill delete-user"
                               title="Delete">
                                <i class="la la-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Record ID</th>
                    <th rowspan="1" colspan="1">Tên người dùng</th>
                    <th rowspan="1" colspan="1">Email</th>
                    <th rowspan="1" colspan="1">Số điện thoại</th>
                    <th rowspan="1" colspan="1">Trạng thái</th>
                    <th rowspan="1" colspan="1">Actions</th>
                </tr>
                </tfoot>
            </table>
            {!! $users->render() !!}
        </div>
    </div>
</div>
