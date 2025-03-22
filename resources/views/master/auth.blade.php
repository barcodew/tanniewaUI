<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanniewa Putra - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('AdminAssets/images/favicon.png') }}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/editor-katex.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/editor.atom-one-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/editor.quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/full-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/jquery-jvectormap-2.0.5.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/file-upload.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/lib/audioplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAssets/css/style.css') }}">
    <style>
        .img-responsive {
            max-width: 120px;
            height: auto;
        }
    </style>
</head>

<body>


    @yield('content')
    <script src="{{ asset('AdminAssets/js/lib/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/apexcharts.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/magnifc-popup.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/slick.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/prism.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/file-upload.js') }}"></script>
    <script src="{{ asset('AdminAssets/js/lib/audioplayer.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('AdminAssets/js/app.js') }}"></script>

    <script>
        // ================== Password Show Hide Js Start ==========
        function initializePasswordToggle(toggleSelector) {
            $(toggleSelector).on('click', function() {
                $(this).toggleClass("ri-eye-off-line");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        }
        // Call the function
        initializePasswordToggle('.toggle-password');
        // ========================= Password Show Hide Js End ===========================
    </script>

</body>

</html>
