<div class="m-grid m-grid--hor m-grid--root m-page">
    <header id="m_header" class="m-grid__item m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-stack__item--center m-brand__logo">
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="{{ asset('assets/demo/demo3/media/img/logo/logo.png') }}">
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>


                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="
	m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light"
                                    m-dropdown-toggle="click" m-dropdown-persistent="1" id="m_quicksearch"
                                    m-quicksearch-mode="dropdown">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon">
													<i class="flaticon-search-1"></i>
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper" style="z-index: 101;">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner ">
                                            <div class="m-dropdown__header">
                                                <form class="m-list-search__form">
                                                    <div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off"
                                                                           type="text" name="q"
                                                                           class="m-list-search__form-input" value=""
                                                                           placeholder="Search...">
																</span>
                                                        <span class="m-list-search__form-icon-close"
                                                              id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__scrollable m-scrollable m-scroller ps"
                                                     data-scrollable="true" data-height="300" data-mobile-height="200"
                                                     style="height: 300px; overflow: hidden;">
                                                    <div class="m-dropdown__content">
                                                    </div>
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                             style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y" style="top: 0px; right: 4px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                             style="top: 0px; height: 0px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span
                                            class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                        <span class="m-nav__link-icon">
													<i class="flaticon-clipboard"></i>
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                                                <div class="m-dropdown__content">
                                                    <div class="m-scrollable" data-scrollable="false" data-height="380"
                                                         data-mobile-height="200">
                                                        <div class="m-nav-grid m-nav-grid--skin-light">
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-file"></i>
                                                                    <span
                                                                        class="m-nav-grid__text">Generate Report</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-time"></i>
                                                                    <span class="m-nav-grid__text">Add New Event</span>
                                                                </a>
                                                            </div>
                                                            <div class="m-nav-grid__row">
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                    <span
                                                                        class="m-nav-grid__text">Create New Task</span>
                                                                </a>
                                                                <a href="#" class="m-nav-grid__item">
                                                                    <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                    <span
                                                                        class="m-nav-grid__text">Completed Tasks</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{ asset('assets/app/media/img/users/user3.jpg') }}"
                                                         alt="">
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span
                                            class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center"
                                                 style="background: {{  url('assets/app/media/img/misc/user_profile_bg.jpg')}}; background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="{{  asset('assets/app/media/img/users/user3.jpg') }}"
                                                             alt="">
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span
                                                            class="m-card-user__name m--font-weight-500">{{ auth()->user()->name }}</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">{{ auth()->user()->email }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{ route('profile.index') }}" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">My Profile</span>
																				<span class="m-nav__link-badge">
																					<span
                                                                                        class="m-badge m-badge--success">2</span>
																				</span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Activity</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="profile.html" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit">
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{ route('logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom
                                                                m-btn--label-brand m-btn--bolder" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                              method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
@section('script')
    <script src="{{ asset('assets/demo/demo3/base/scripts.bundle.js') }}" type="text/javascript"></script>
@endsection
