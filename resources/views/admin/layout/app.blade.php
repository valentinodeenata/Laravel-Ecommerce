<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tempest Store</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('adminassets/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminassets') }}/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('adminassets') }}/assets/css/style.css">
  <link href="{{ asset('swal/dist/sweetalert2.min.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('adminassets') }}/assets/images/logo_title.jpeg" />
  <link href="{{ asset('table/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('adminassets') }}/assets/images/rsz_logo_icon_new.jpg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('adminassets') }}/assets/images/rsz_logo_icon_new.jpg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="{{ asset('shopper') }}/images/default.png" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black text-capitalize">{{ Auth::user()->name }}</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      @if(Auth::user()->role == 'admin' && Auth::user()->is_seller != 1)
      @include('admin.layout.admin-nav')
      @else
      @include('admin.layout.seller-nav')
      @endif
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 by <a href="https://github.com/valentinodeenata" target="_blank">Saintnettaaa</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made with <i class="mdi mdi-heart text-danger"></i>and affection</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('adminassets') }}/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('adminassets') }}/assets/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('adminassets') }}/assets/js/off-canvas.js"></script>
  <script src="{{ asset('adminassets') }}/assets/js/hoverable-collapse.js"></script>
  <script src="{{ asset('adminassets') }}/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{ asset('adminassets') }}/assets/js/dashboard.js"></script>
  <script src="{{ asset('adminassets') }}/assets/js/todolist.js"></script>
  <!-- <script src="{{ asset('table/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('table/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('table/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('table/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('table/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('swal/dist/sweetalert2. min.js') }}"></script>
  <!-- End custom js for this page -->
  @if(session('status'))
  <script type="text/javascript">
    Swal.fire({
      title: 'Horee ...',
      icon: 'success',
      text: '{{ session("status") }}',
      showClass: {
        popup: 'animated bounceInDown slow'
      },
      hideClass: {
        popup: 'animated bounceOutDown slow'
      }
    })
  </script>
  @endif
  <script>
    var t = $('#table').DataTable({
      "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": 0
      }],
      "order": [
        [1, 'asc']
      ],
      "language": {
        "sProcessing": "Sedang memproses ...",
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecord": "Maaf data tidak tersedia",
        "info": "Menampilkan _PAGE_ halaman dari _PAGES_ halaman",
        "infoEmpty": "Tidak ada data yang tersedia",
        "infoFiltered": "(difilter dari _MAX_ total data)",
        "sSearch": "Cari",
        "oPaginate": {
          "sFirst": "Pertama",
          "sPrevious": "Sebelumnya",
          "sNext": "Selanjutnya",
          "sLast": "Terakhir"
        }
      }
    });
    t.on('order.dt search.dt', function() {
      t.column(0, {
        search: 'applied',
        order: 'applied'
      }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  </script>
  @yield('js')
</body>

</html>