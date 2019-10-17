<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Montserrat:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },   
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Page Vendors Styles -->
    <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->

    <!--begin::Base Styles -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="assets/demo/demo3/base/style.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/demo/demo3/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Base Styles -->
    <link rel="shortcut icon" href="assets/demo/demo3/media/img/logo/favicon.ico"/>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-37564768-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<!-- BEGIN: Header -->
@include('backend.layout.header')

<!-- END: Header -->

<!-- begin::Body -->

<!-- BEGIN: Left Aside -->
@include('backend.layout.left')
@yield('content')
<!-- end:: Body -->

<!-- begin::Footer -->
@include('backend.layout.footer')
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
@include('backend.layout.messenger')
<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->

<!-- begin::Quick Nav -->
{{--<ul class="m-nav-sticky" style="margin-top: 30px;">--}}
{{--    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">--}}
{{--        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"--}}
{{--           target="_blank">--}}
{{--            <i class="la la-cart-arrow-down"></i>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">--}}
{{--        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">--}}
{{--            <i class="la la-code-fork"></i>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">--}}
{{--        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">--}}
{{--            <i class="la la-life-ring"></i>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--</ul>--}}

<!-- begin::Quick Nav -->

<!--begin::Base Scripts -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/demo3/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Base Scripts -->

<!--begin::Page Vendors Scripts -->
<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Snippets -->
<script src="assets/app/js/dashboard.js" type="text/javascript"></script>

<!--end::Page Snippets -->
</body>

<!-- end::Body -->
</html>
