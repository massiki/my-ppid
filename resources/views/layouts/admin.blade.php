<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!--  Icon css plugins -->
  <link rel="stylesheet" href="/assets/css/icons.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  {{-- session success --}}
  @if (session('success'))
    <div class="toasts-top-right fixed">
      <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"><strong class="mr-auto"> <i class="nav-icon fas fa-check mr-2"></i>
            {{ session('success') }}</strong><button data-dismiss="toast" type="button" class="ml-2 mb-1 close"
            aria-label="Close"><span aria-hidden="true">×</span></button></div>
      </div>
    </div>
  @endif

  {{-- session failed --}}
  @if (session('failed'))
    <div class="toasts-top-right fixed">
      <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header"><strong class="mr-auto"> <i class="nav-icon fas fa-check mr-2"></i>
            {{ session('failed') }}</strong><button data-dismiss="toast" type="button" class="ml-2 mb-1 close"
            aria-label="Close"><span aria-hidden="true">×</span></button></div>
      </div>
    </div>
  @endif

  <div class="wrapper">

    <!-- Navbar -->
    @include('components.nav-admin')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('components.sidebar-admin')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')

    @include('components.footer-admin')

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/plugins/moment/moment.min.js"></script>
  <script src="/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/dist/js/pages/dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/dist/js/app.js"></script>
  <!-- bs-custom-file-input -->
  <script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>

  {{-- ubah foto ketika di update dan ifrmae --}}
  <script>
    const imageInput = document.getElementById('imageInput');
    const previewImage = document.getElementById('previewImage');

    imageInput.addEventListener('change', function(event) {
      console.log(event.target.files[0])
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          previewImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
      }
    });

    function showIframe() {
      document.getElementById('iframeContainer').style.display = 'block';
    }
  </script>

  {{-- tutup success --}}
  <script>
    $(document).ready(function() {
      // Menutup toast saat tombol "x" diklik
      $('.toast').on('click', '.close', function() {
        $(this).closest('.toast').fadeOut();
      });
    });
  </script>
</body>

</html>
