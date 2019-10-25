<div class="m-datatable m-datatable--default m-datatable--brand m-datatable--loaded" id="data_table_posts">
    <table class="table table-striped- table-bordered table-hover dtr-inline" id="html_table"
           width="100%"
           style="min-height: 300px; overflow-x: auto;">
        <thead class="m-datatable__head">
        <tr class="m-datatable__row" style="left: 0px;">
            <th title="Field #1" data-field="id"
                class="m-datatable__cell m-datatable__cell--sort"><span
                    style="width: 50px;">STT</span>
            </th>
            <th title="Field #2" data-field="title"
                class="m-datatable__cell m-datatable__cell--sort"><span
                    style="width: 133px;">Tiêu đề</span></th>
            <th title="Field #3" data-field="content"
                class="m-datatable__cell m-d    atatable__cell--sort"><span style="width: 203px;">Nội dung</span>
            </th>
            <th title="Field #4" data-field="avatar"
                class="m-datatable__cell m-datatable__cell--sort"><span style="width: 133px;">Ảnh bìa</span>
            </th>
            <th title="Field #5" data-field="view"
                class="m-datatable__cell m-datatable__cell--sort"><span style="width: 133px;">Lượt xem</span>
            </th>
            <th title="Field #6" data-field="user-id"
                class="m-datatable__cell m-datatable__cell--sort"><span style="width: 133px;">Tác giả</span>
            </th>
            <th title="Field #7" data-field="category-id"
                class="m-datatable__cell m-datatable__cell--sort"><span style="width: 133px;">Danh mục</span>
            </th>
            <th title="Field #8" data-field="status"
                class="m-datatable__cell m-datatable__cell--sort"><span
                    style="width: 133px;">Status</span></th>
            <th title="Field #9" data-field="action"
                class="m-datatable__cell m-datatable__cell--sort"
                aria-label="Actions">Actions
            </th>
        </tr>
        </thead>
        <tbody class="m-datatable__body" style="">
        @foreach($posts as $key => $post)
            <tr data-row="{{ $key++ }}" class="m-datatable__row" style="left: 0px;">
                <td data-field="id" class="m-datatable__cell"><span
                        style="width: 50px;">{{ $key++ }}</span></td>
                <td data-title="{{ $post->title }}" class="m-datatable__cell"><span
                        style="width: 133px;">{{ $post->title }}</span>
                </td>
                <td data-field="content" class="m-datatable__cell "><span class="content"
                                                                          style="width: 203px;">{!! substr($post->content, 0, 100) !!}</span>
                </td>
                <td data-field="avatar" class="m-datatable__cell text-center"><img class="img-fluid"
                                                                                   width="150px"
                                                                                   src="{{ asset('storage/'.$post->avatar ) }}"
                                                                                   alt=""></td>
                <td data-field="view" class="m-datatable__cell"><span
                        style="width: 133px;">{{ $post->view }}</span></td>
                <td data-field="user-id" class="m-datatable__cell"><span
                        style="width: 133px;">{{ $post['user']->name }}</span></td>
                <td data-field="category-id" class="m-datatable__cell"><span
                        style="width: 133px;">{{ $post['category']->name }}</span>
                </td>
                <td data-field="status" class="datatable__cell"><span
                        class="m-badge {{($post->status == config('app.active')) ? 'm-badge--primary' : ' m-badge--warning' }}  m-badge--wide"
                        style="width: 50px;">{{($post->status == config('app.active')) ? 'Active' : 'Disable' }}</span>
                </td>
                <td nowrap="">
                    <a class="btn btn-warning" data-toggle="modal"
                       data-target="" onclick="showEditModal({{ $post->id }})"
                       href="javascript:;"><i
                            class="la la-edit"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-info"><i class="la la-eye"></i></a>
                    <a class="btn btn-danger m-portlet__nav-link delete-post"
                       onclick="deletePost()"
                       href="javascript:;"
                       post-id="{{ $post->id }}"
                       title="Delete">
                        <i class="la la-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $posts->render() !!}
</div>
