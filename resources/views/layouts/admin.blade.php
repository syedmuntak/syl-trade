<!DOCTYPE html>
<html>
<head>
    <title>Syl Trade</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/main5739.css?version=4.5.0" rel="stylesheet">
    <link href="{{ asset('/') }}css/custom.css" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w">
            @include('layouts.partial.admin.sidebar')
            <div class="content-w">
                @include('layouts.partial.admin.header')
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">

                        @yield('content')

                       @include('layouts.partial.admin.customizer')
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="{{ asset('/') }}bower_components/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('/') }}bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('/') }}bower_components/moment/moment.js"></script>
    <script src="{{ asset('/') }}bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('/') }}bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="{{ asset('/') }}bower_components/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('/') }}bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="{{ asset('/') }}bower_components/dropzone/dist/dropzone.js"></script>
    <script src="{{ asset('/') }}bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="{{ asset('/') }}bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('/') }}bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="{{ asset('/') }}bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('/') }}bower_components/tether/dist/js/tether.min.js"></script>
    <script src="{{ asset('/') }}bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/util.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/button.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="{{ asset('/') }}bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="{{ asset('/') }}js/demo_customizer5739.js?version=4.5.0"></script>
    <script src="{{ asset('/') }}js/main5739.js?version=4.5.0"></script>
    @stack('js')
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42863888-9', 'auto');
        ga('send', 'pageview');</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 19:06:16 GMT -->

</html>
