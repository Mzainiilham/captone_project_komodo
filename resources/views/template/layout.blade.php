<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('tamplat/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplat/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplat/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplat/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplat/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('tamplat/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('tamplat/css/components.css') }}">
    <script src="{{ asset('tamplat/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('tamplat/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('tamplat/modules/moment.min.js') }}"></script>
    <script src="{{ asset('tamplat/modules/cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('tamplat/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('tamplat/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('tamplat/js/highcharts.js') }}"></script>
    <style>
        .fas, .far, .fab, .fal {
            font-size: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
    </head>

<body style="background-color: #f3f3f3;">
 
        <!-- Main Content -->
        @yield('content')



        <footer class="main-footer" style="border-top: 3px solid #6777ef;background-color: #ffffff;margin-bottom: -20px">
            <div class="footer-left">
                © <strong>KOMODO</strong> .
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('tamplat/modules/popper.js') }}"></script>
<script src="{{ asset('tamplat/modules/tooltip.js') }}"></script>
<script src="{{ asset('tamplat/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('tamplat/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('tamplat/js/stisla.js') }}"></script>
<script src="{{ asset('tamplat/modules/select2/dist/js/select2.full.min.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('tamplat/js/scripts.js') }}"></script>
<script src="{{ asset('tamplat/js/custom.js') }}"></script>
</body>
</html>
