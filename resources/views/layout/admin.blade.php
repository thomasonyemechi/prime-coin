<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">

    <link href="{{ asset('admin/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/dragula/dist/dragula.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/prismjs/themes/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/%40yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/tippy.js/dist/tippy.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">




    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}">
    <title>Primecoin Admin</title>

    <style>
        .al_bg {
            background: linear-gradient(to right, #b04300, #ff0000) !important;
        }
    </style>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        @include('layout.inc.admin_side')
        <div id="page-content">
            <div class="header">
                @include('layout.inc.admin_nav')
            </div>
            @yield('page_content')


            @if ($errors->any())
                <div id="refresh" class="alert al_bg" style="position:fixed; top:10px; right:10px; z-index:10000; width: auto;">
                <i class="text-white" >
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                    </i>
                </div>
            @endif

        </div>
    </div>
    <!-- Script -->
    <!-- Libs JS -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/libs/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/libs/inputmask/dist/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('admin/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js') }}"></script>
    <script src="{{ asset('admin/libs/dragula/dist/dragula.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bs-stepper/dist/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('admin/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jQuery.print/jQuery.print.js') }}"></script>
    <script src="{{ asset('admin/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('admin/libs/prismjs/components/prism-scss.min.js') }}"></script>
    <script src="{{ asset('admin/libs/%40yaireo/tagify/dist/tagify.min.js') }}"></script>
    <script src="{{ asset('admin/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('admin/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('admin/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>




    {{-- <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script> --}}


    <script src="{{ asset('admin/js/theme.min.js') }}"></script>


    @if (session('error'))
        <script>
            Toastify({
                text: "<?= session('error') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #b04300, #ff0000)",
                },
            }).showToast();
        </script>
    @endif


    @if (session('success'))
        <script>
            Toastify({
                text: "<?= session('success') ?>",
                duration: 5000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #01ff01)",
                },
            }).showToast();
        </script>
    @endif


    <script>
        $(function() {
            setTimeout(() => {
                $('#refresh').hide('slow');
            }, 5000);
        })
    </script>


    @stack('scripts')
</body>


</html>
