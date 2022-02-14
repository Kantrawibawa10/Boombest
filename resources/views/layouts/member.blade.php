<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Member</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/member/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/member/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="/member/webfonts/css/font-awesome.min.css">
  <link type="text/css" href="/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/pageadmin.css">
  <link rel="stylesheet" href="/assets/css/index-admin.css">
  <link rel="stylesheet" href="/assets/css/tokosaya.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/img/boombest.jpg">
  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- endinject -->

  <!-- Jquery UI -->
  <link type="text/css" href="assets/css/jquery-ui.css" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon-design-system.min.css" rel="stylesheet">

  <!-- Main CSS-->
  <link type="text/css" href="assets/css/style.css" rel="stylesheet">

  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/member/vendors/datatables.net-bs4/dataTables.bootstrap4.css">

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/member/css/style.css">
  <!-- endinject -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    @yield('navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboardMember') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account-check menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Member</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('poin') }}">Point Saya</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-archive menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Master Barang</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('produksaya') }}"> Produk Saya </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('tokosaya') }}">
              <i class="mdi mdi-store menu-icon"></i>
              <span class="menu-title">Toko Saya</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!--content-->
          @yield('content')
          <!--content-->


        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between pt-3">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2021 <a href="http://boombest.net/" target="_blank">BOOMBEST.net</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0  text-center"> <i class="mdi mdi-heart text-danger"></i>Gana IT Consultant</span>
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
  <script src="/member/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="/member/vendors/chart.js/Chart.min.js"></script>
  <script src="/member/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/member/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/member/js/off-canvas.js"></script>
  <script src="/member/js/hoverable-collapse.js"></script>
  <script src="/member/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/member/js/dashboard.js"></script>
  <script src="/member/js/data-table.js"></script>
  <script src="/member/js/jquery.dataTables.js"></script>
  <script src="/member/js/dataTables.bootstrap4.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    AOS.init();
  </script>


	<script>

		function bacaGambar(input) {

			if (input.files && input.files[0]) {

				var reader = new FileReader();



				reader.onload = function (e) {

					$('#gambar_nodin').attr('src', e.target.result);

				}



				reader.readAsDataURL(input.files[0]);

			}

		}



		$("#preview_gambar").change(function(){

			bacaGambar(this);

		});

	</script>
</body>

</html>
