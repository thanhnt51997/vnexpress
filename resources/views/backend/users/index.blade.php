@extends('master.layout')
@section('title', 'Danh sách người dùng')
@section('style')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Select Examples</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">DataTables</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Extensions</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">-</li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">Select</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div
                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                        m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                <span class="m-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">Activity</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">Messages</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">FAQ</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">Support</span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit">
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                Select DataTable
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-cart-plus"></i>
													<span>New Order</span>
												</span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div
                                    class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Create Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Send Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                <span class="m-nav__link-text">Upload File</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
                                                            <span class="m-nav__section-text">Useful Links</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                        </li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#"
                                                               class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <div id="m_table_2_wrapper" class="dataTables_wrapper dt-bootstrap4">
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
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>61715-075</td>
                                        <td>China</td>
                                        <td>Tieba</td>
                                        <td>746 Pine View Junction</td>
                                        <td>Nixie Sailor</td>
                                        <td>Gleichner, Ziemann and Gutkowski</td>
                                        <td>2/12/2018</td>
                                        <td><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>63629-4697</td>
                                        <td>Indonesia</td>
                                        <td>Cihaur</td>
                                        <td>01652 Fulton Trail</td>
                                        <td>Emelita Giraldez</td>
                                        <td>Rosenbaum-Reichel</td>
                                        <td>8/6/2017</td>
                                        <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>68084-123</td>
                                        <td>Argentina</td>
                                        <td>Puerto Iguazú</td>
                                        <td>2 Pine View Park</td>
                                        <td>Ula Luckin</td>
                                        <td>Kulas, Cassin and Batz</td>
                                        <td>5/26/2016</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>67457-428</td>
                                        <td>Indonesia</td>
                                        <td>Talok</td>
                                        <td>3050 Buell Terrace</td>
                                        <td>Evangeline Cure</td>
                                        <td>Pfannerstill-Treutel</td>
                                        <td>7/2/2016</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>31722-529</td>
                                        <td>Austria</td>
                                        <td>Sankt Andrä-Höch</td>
                                        <td>3038 Trailsway Junction</td>
                                        <td>Tierney St. Louis</td>
                                        <td>Dicki-Kling</td>
                                        <td>5/20/2017</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>64117-168</td>
                                        <td>China</td>
                                        <td>Rongkou</td>
                                        <td>023 South Way</td>
                                        <td>Gerhard Reinhard</td>
                                        <td>Gleason, Kub and Marquardt</td>
                                        <td>11/26/2016</td>
                                        <td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>43857-0331</td>
                                        <td>China</td>
                                        <td>Baiguo</td>
                                        <td>56482 Fairfield Terrace</td>
                                        <td>Englebert Shelley</td>
                                        <td>Jenkins Inc</td>
                                        <td>6/28/2016</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>64980-196</td>
                                        <td>Croatia</td>
                                        <td>Vinica</td>
                                        <td>0 Elka Street</td>
                                        <td>Hazlett Kite</td>
                                        <td>Streich LLC</td>
                                        <td>8/5/2016</td>
                                        <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>0404-0360</td>
                                        <td>Colombia</td>
                                        <td>San Carlos</td>
                                        <td>38099 Ilene Hill</td>
                                        <td>Freida Morby</td>
                                        <td>Haley, Schamberger and Durgan</td>
                                        <td>3/31/2017</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td tabindex="0" class="sorting_1">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>52125-267</td>
                                        <td>Thailand</td>
                                        <td>Maha Sarakham</td>
                                        <td>8696 Barby Pass</td>
                                        <td>Obed Helian</td>
                                        <td>Labadie, Predovic and Hammes</td>
                                        <td>1/26/2017</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>54092-515</td>
                                        <td>Brazil</td>
                                        <td>Canguaretama</td>
                                        <td>32461 Ridgeway Alley</td>
                                        <td>Sibyl Amy</td>
                                        <td>Treutel-Ratke</td>
                                        <td>3/8/2017</td>
                                        <td><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>0185-0130</td>
                                        <td>China</td>
                                        <td>Jiamachi</td>
                                        <td>23 Walton Pass</td>
                                        <td>Norri Foldes</td>
                                        <td>Strosin, Nitzsche and Wisozk</td>
                                        <td>4/2/2017</td>
                                        <td><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>21130-678</td>
                                        <td>China</td>
                                        <td>Qiaole</td>
                                        <td>328 Glendale Hill</td>
                                        <td>Myrna Orhtmann</td>
                                        <td>Miller-Schiller</td>
                                        <td>6/7/2016</td>
                                        <td><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>40076-953</td>
                                        <td>Portugal</td>
                                        <td>Burgau</td>
                                        <td>52550 Crownhardt Court</td>
                                        <td>Sioux Kneath</td>
                                        <td>Rice, Cole and Spinka</td>
                                        <td>10/11/2017</td>
                                        <td><span class="m-badge  m-badge--success m-badge--wide">Success</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>36987-3005</td>
                                        <td>Portugal</td>
                                        <td>Bacelo</td>
                                        <td>548 Morrow Terrace</td>
                                        <td>Christa Jacmar</td>
                                        <td>Brakus-Hansen</td>
                                        <td>8/17/2017</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>67510-0062</td>
                                        <td>South Africa</td>
                                        <td>Pongola</td>
                                        <td>02534 Hauk Trail</td>
                                        <td>Shandee Goracci</td>
                                        <td>Bergnaum, Thiel and Schuppe</td>
                                        <td>7/24/2016</td>
                                        <td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>36987-2542</td>
                                        <td>Russia</td>
                                        <td>Novokizhinginsk</td>
                                        <td>19427 Sloan Road</td>
                                        <td>Jerrome Colvie</td>
                                        <td>Kreiger, Glover and Connelly</td>
                                        <td>3/4/2016</td>
                                        <td><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>11673-479</td>
                                        <td>Brazil</td>
                                        <td>Conceição das Alagoas</td>
                                        <td>191 Stone Corner Road</td>
                                        <td>Michaelina Plenderleith</td>
                                        <td>Legros-Gleichner</td>
                                        <td>2/21/2018</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>47781-264</td>
                                        <td>Ukraine</td>
                                        <td>Yasinya</td>
                                        <td>1481 Sauthoff Place</td>
                                        <td>Lombard Luthwood</td>
                                        <td>Haag LLC</td>
                                        <td>1/21/2016</td>
                                        <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>42291-712</td>
                                        <td>Indonesia</td>
                                        <td>Kembang</td>
                                        <td>9029 Blackbird Point</td>
                                        <td>Leonora Chevin</td>
                                        <td>Mann LLC</td>
                                        <td>9/6/2017</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>64679-154</td>
                                        <td>Mongolia</td>
                                        <td>Sharga</td>
                                        <td>102 Holmberg Park</td>
                                        <td>Tannie Seakes</td>
                                        <td>Blanda Group</td>
                                        <td>7/31/2016</td>
                                        <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
                                        <td><span class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-accent">Direct</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>49348-055</td>
                                        <td>China</td>
                                        <td>Guxi</td>
                                        <td>45 Butterfield Street</td>
                                        <td>Yardley Wetherell</td>
                                        <td>Gerlach-Schultz</td>
                                        <td>4/3/2017</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>47593-438</td>
                                        <td>Portugal</td>
                                        <td>Viso</td>
                                        <td>97 Larry Center</td>
                                        <td>Bryn Peascod</td>
                                        <td>Larkin and Sons</td>
                                        <td>5/22/2016</td>
                                        <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>54569-0175</td>
                                        <td>Japan</td>
                                        <td>Minato</td>
                                        <td>077 Hoffman Center</td>
                                        <td>Chrissie Jeromson</td>
                                        <td>Brakus-McCullough</td>
                                        <td>11/26/2017</td>
                                        <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span></td>
                                        <td><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-danger">Online</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1" tabindex="0">
                                            <label
                                                class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                                <input type="checkbox" value="" class="m-checkable">
                                                <span></span>
                                            </label></td>
                                        <td>0093-1016</td>
                                        <td>Indonesia</td>
                                        <td>Merdeka</td>
                                        <td>3150 Cherokee Center</td>
                                        <td>Gusti Clamp</td>
                                        <td>Stokes Group</td>
                                        <td>4/12/2018</td>
                                        <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></td>
                                        <td><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
                                                class="m--font-bold m--font-primary">Retail</span></td>
                                        <td nowrap="">
                        <span class="dropdown">
                            <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                            </div>
                        </span>
                                            <a href="#"
                                               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                                               title="View">
                                                <i class="la la-edit"></i>
                                            </a></td>
                                    </tr>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    <!--end::Page Vendors Scripts -->

    <!--begin::Page Resources -->
    <script src="{{ asset('/assets/demo/default/custom/crud/datatables/extensions/select.js') }}"
            type="text/javascript"></script>
@endsection
