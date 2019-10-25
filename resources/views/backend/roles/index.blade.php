@extends('master.layout')
@section('title', 'Danh sách quyền hạn')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Quản lý quyền người dùng</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">--</li>
                        <li class="m-nav__item">
                            <a href="{{ route('roles.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Danh sách quyền hạn
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a data-toggle="modal"
                                   data-target="" onclick="showCreateModal()"
                                   href="javascript:;"
                                   class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>Thêm mới</span>
												</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    @if (count($roles) > 0)
                        <section class="data-table-posts">
                            @include('backend.roles.dataTable')
                        </section>
                    @endif
                </div>
                <div id="modal_create"></div>
                <div id="modal_edit"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    @include('backend.roles.indexScript');
@endsection
