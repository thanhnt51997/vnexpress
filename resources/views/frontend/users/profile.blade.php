@extends('master.frontend')
@section('title', 'Thông tin người dùng')
@section('content')
    <div class="container">
        <div class="row">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="m-subheader__title ">Thông tin tài khoản</h3>
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
                                <span
                                    class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
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
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="m-portlet m-portlet--full-height  ">
                                <div class="m-portlet__body">
                                    <div class="m-card-profile">
                                        <div class="m-card-profile__title m--hide">
                                            Your Profile
                                        </div>
                                        <div class="m-card-profile__pic">
                                            <div class="m-card-profile__pic-wrapper">
                                                <img src="../assets/app/media/img/users/user4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="m-card-profile__details">
                                            <span class="m-card-profile__name">{{ Auth::user()->name }}</span>
                                            <a href=""
                                               class="m-card-profile__email m-link">{{ Auth::user()->email }}</a>
                                        </div>
                                    </div>
                                    <div class="m-widget1 m-widget1--paddingless">
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">Member Profit</h3>
                                                    <span class="m-widget1__desc">Awerage Weekly Profit</span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-brand">+$17,800</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">Orders</h3>
                                                    <span class="m-widget1__desc">Weekly Customer Orders</span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-danger">+1,800</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-widget1__item">
                                            <div class="row m-row--no-padding align-items-center">
                                                <div class="col">
                                                    <h3 class="m-widget1__title">Issue Reports</h3>
                                                    <span class="m-widget1__desc">System bugs and issues</span>
                                                </div>
                                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-success">-27,49%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                                            role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active show" data-toggle="tab"
                                                   href="#m_user_profile_tab_1" role="tab" aria-selected="true">
                                                    <i class="flaticon-share m--hide"></i>
                                                    Update Profile
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="m_user_profile_tab_1">
                                        <form class="m-form m-form--fit m-form--label-align-right">
                                            <div class="m-portlet__body">
                                                <div class="form-group m-form__group row">
                                                    <div class="col-10 ml-auto">
                                                        <h3 class="m-form__section">Thông tin cá nhân</h3>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Full
                                                        Name</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text"
                                                               value="Mark Andre">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input"
                                                           class="col-2 col-form-label">Occupation</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text" value="CTO">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Company
                                                        Name</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text"
                                                               value="Keenthemes">
                                                        <span class="m-form__help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Phone
                                                        No.</label>
                                                    <div class="col-7">
                                                        <input class="form-control m-input" type="text"
                                                               value="+456669067890">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions">
                                                    <div class="row">
                                                        <div class="col-2">
                                                        </div>
                                                        <div class="col-7">
                                                            <button
                                                                class="btn btn-primary">
                                                                Save
                                                                changes
                                                            </button>&nbsp;&nbsp;
                                                            <button type="reset"
                                                                    class="btn btn-default">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="m_user_profile_tab_2">
                                    </div>
                                    <div class="tab-pane" id="m_user_profile_tab_3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
