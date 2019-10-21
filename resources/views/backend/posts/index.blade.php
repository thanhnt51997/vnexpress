@extends('master.layout')
@section('title', 'Danh sách bài viết')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">Quản lý người dùng</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">--</li>
                        <li class="m-nav__item">
                            <a href="{{ route('users.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">Users</span>
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
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
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
                    <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="m_table_1_length"><label>Show <select
                                            name="m_table_1_length" aria-controls="m_table_1"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="m_table_1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                          class="form-control form-control-sm"
                                                                                                          placeholder=""
                                                                                                          aria-controls="m_table_1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_scroll">
                                    <div class="dataTables_scrollHead"
                                         style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                        <div class="dataTables_scrollHeadInner"
                                             style="box-sizing: content-box; width: 1513px; padding-right: 17px;">
                                            <table
                                                class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer"
                                                role="grid" style="margin-left: 0px; width: 1513px;">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 62.25px;"
                                                        aria-sort="ascending"
                                                        aria-label="Record ID: activate to sort column descending">
                                                        Record ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 56.25px;"
                                                        aria-label="Order ID: activate to sort column ascending">Order
                                                        ID
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 106.25px;"
                                                        aria-label="Country: activate to sort column ascending">Country
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 135.25px;"
                                                        aria-label="Ship City: activate to sort column ascending">Ship
                                                        City
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 168.25px;"
                                                        aria-label="Ship Address: activate to sort column ascending">
                                                        Ship Address
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 129.25px;"
                                                        aria-label="Company Agent: activate to sort column ascending">
                                                        Company Agent
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 202.25px;"
                                                        aria-label="Company Name: activate to sort column ascending">
                                                        Company Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 64.25px;"
                                                        aria-label="Ship Date: activate to sort column ascending">Ship
                                                        Date
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 55.25px;"
                                                        aria-label="Status: activate to sort column ascending">Status
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="m_table_1"
                                                        rowspan="1" colspan="1" style="width: 33.25px;"
                                                        aria-label="Type: activate to sort column ascending">Type
                                                    </th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 71.5px;" aria-label="Actions">Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="dataTables_scrollBody"
                                         style="position: relative; overflow: auto; width: 100%; max-height: 50vh;">
                                        <table
                                            class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer"
                                            id="m_table_1" role="grid" aria-describedby="m_table_1_info"
                                            style="width: 1511px;">
                                            <thead>
                                            <tr role="row" style="height: 0px;">
                                                <th class="sorting_asc" aria-controls="m_table_1" rowspan="1"
                                                    colspan="1"
                                                    style="width: 62.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-sort="ascending"
                                                    aria-label="Record ID: activate to sort column descending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Record ID
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 56.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Order ID: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Order ID
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 106.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Country: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Country
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 135.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Ship City: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Ship City
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 168.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Ship Address: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Ship Address
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 129.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Company Agent: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Company Agent
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 202.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Company Name: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Company Name
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 64.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Ship Date: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Ship Date
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 55.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Status: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Status
                                                    </div>
                                                </th>
                                                <th class="sorting" aria-controls="m_table_1" rowspan="1" colspan="1"
                                                    style="width: 33.25px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Type: activate to sort column ascending">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Type
                                                    </div>
                                                </th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 71.5px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;"
                                                    aria-label="Actions">
                                                    <div class="dataTables_sizing"
                                                         style="height: 0px; overflow: hidden;">Actions
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">1</td>
                                                <td>61715-075</td>
                                                <td>China</td>
                                                <td>Tieba</td>
                                                <td>746 Pine View Junction</td>
                                                <td>Nixie Sailor</td>
                                                <td>Gleichner, Ziemann and Gutkowski</td>
                                                <td>2/12/2018</td>
                                                <td><span
                                                        class="m-badge  m-badge--primary m-badge--wide">Canceled</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">2</td>
                                                <td>63629-4697</td>
                                                <td>Indonesia</td>
                                                <td>Cihaur</td>
                                                <td>01652 Fulton Trail</td>
                                                <td>Emelita Giraldez</td>
                                                <td>Rosenbaum-Reichel</td>
                                                <td>8/6/2017</td>
                                                <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">3</td>
                                                <td>68084-123</td>
                                                <td>Argentina</td>
                                                <td>Puerto Iguazú</td>
                                                <td>2 Pine View Park</td>
                                                <td>Ula Luckin</td>
                                                <td>Kulas, Cassin and Batz</td>
                                                <td>5/26/2016</td>
                                                <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">4</td>
                                                <td>67457-428</td>
                                                <td>Indonesia</td>
                                                <td>Talok</td>
                                                <td>3050 Buell Terrace</td>
                                                <td>Evangeline Cure</td>
                                                <td>Pfannerstill-Treutel</td>
                                                <td>7/2/2016</td>
                                                <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">5</td>
                                                <td>31722-529</td>
                                                <td>Austria</td>
                                                <td>Sankt Andrä-Höch</td>
                                                <td>3038 Trailsway Junction</td>
                                                <td>Tierney St. Louis</td>
                                                <td>Dicki-Kling</td>
                                                <td>5/20/2017</td>
                                                <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">6</td>
                                                <td>64117-168</td>
                                                <td>China</td>
                                                <td>Rongkou</td>
                                                <td>023 South Way</td>
                                                <td>Gerhard Reinhard</td>
                                                <td>Gleason, Kub and Marquardt</td>
                                                <td>11/26/2016</td>
                                                <td><span class="m-badge  m-badge--info m-badge--wide">Info</span></td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">7</td>
                                                <td>43857-0331</td>
                                                <td>China</td>
                                                <td>Baiguo</td>
                                                <td>56482 Fairfield Terrace</td>
                                                <td>Englebert Shelley</td>
                                                <td>Jenkins Inc</td>
                                                <td>6/28/2016</td>
                                                <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">8</td>
                                                <td>64980-196</td>
                                                <td>Croatia</td>
                                                <td>Vinica</td>
                                                <td>0 Elka Street</td>
                                                <td>Hazlett Kite</td>
                                                <td>Streich LLC</td>
                                                <td>8/5/2016</td>
                                                <td><span class="m-badge  m-badge--danger m-badge--wide">Danger</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">9</td>
                                                <td>0404-0360</td>
                                                <td>Colombia</td>
                                                <td>San Carlos</td>
                                                <td>38099 Ilene Hill</td>
                                                <td>Freida Morby</td>
                                                <td>Haley, Schamberger and Durgan</td>
                                                <td>3/31/2017</td>
                                                <td><span class="m-badge  m-badge--metal m-badge--wide">Delivered</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
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
                                                <td class="sorting_1">10</td>
                                                <td>52125-267</td>
                                                <td>Thailand</td>
                                                <td>Maha Sarakham</td>
                                                <td>8696 Barby Pass</td>
                                                <td>Obed Helian</td>
                                                <td>Labadie, Predovic and Hammes</td>
                                                <td>1/26/2017</td>
                                                <td><span class="m-badge m-badge--brand m-badge--wide">Pending</span>
                                                </td>
                                                <td><span
                                                        class="m-badge m-badge--accent m-badge--dot"></span>&nbsp;<span
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
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 50 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="m_table_1_previous">
                                            <a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0"
                                               class="page-link"><i class="la la-angle-left"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                                                        aria-controls="m_table_1"
                                                                                        data-dt-idx="1" tabindex="0"
                                                                                        class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                  data-dt-idx="2" tabindex="0"
                                                                                  class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                  data-dt-idx="3" tabindex="0"
                                                                                  class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                  data-dt-idx="4" tabindex="0"
                                                                                  class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1"
                                                                                  data-dt-idx="5" tabindex="0"
                                                                                  class="page-link">5</a></li>
                                        <li class="paginate_button page-item next" id="m_table_1_next"><a href="#"
                                                                                                          aria-controls="m_table_1"
                                                                                                          data-dt-idx="6"
                                                                                                          tabindex="0"
                                                                                                          class="page-link"><i
                                                    class="la la-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/demo/default/custom/crud/metronic-datatable/locked/html-table.js') }}"
            type="text/javascript"></script>
@endsection
