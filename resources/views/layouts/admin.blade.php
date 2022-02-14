<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BOOMBEST.net</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('member/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('member/vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('member/webfonts/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pageadmin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tokosaya.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- endinject -->

    <!-- Jquery UI -->
    <link type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('assets/css/argon-design-system.min.css') }}" rel="stylesheet">

    <!-- Main CSS-->
    <link type="text/css" href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('member/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('member/css/style.css') }}">
    <!-- endinject -->


</head>
<body>
<div class="container-scroller">



    @yield('navbar')


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>



                @if(auth()->user()->role=="admin")
{{--             ADMIN SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-check menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Admin</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
{{--                            <li class="nav-item"> <a class="nav-link" href="{{ route('profileAdmin') }}">Profile</a></li>--}}
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableAdmin') }}">Data Admin</a></li>
{{--                            <li class="nav-item"> <a class="nav-link" href="{{ route('addAdmin') }}">Tambah Admin</a></li>--}}
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="admin")
{{--               IKLAN SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-arrange-bring-forward menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Iklan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableIklan') }}">Data Iklan</a></li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="creator")
{{--               IKLAN SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-arrange-bring-forward menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Iklan</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableIklan') }}">Data Iklan</a></li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="admin")
{{--                MEMBER SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-multiple menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Member</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('memberAktif') }}">Data Member </a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('pointMember') }}">Data Poin Member</a></li>
{{--                            <li class="nav-item"> <a class="nav-link" href="{{ route('memberExpired') }}">Data Member Expired</a></li>--}}
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="pegawai")
{{--                MEMBER SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-multiple menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Member</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('memberAktif') }}">Data Member </a></li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="admin")
{{--                TOKO SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-store menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Toko Member</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tokoAktif') }}">Data Toko Member </a></li>
{{--                            <li class="nav-item"> <a class="nav-link" href="{{ route('tokoExpired') }}">Data Toko Member Expired</a></li>--}}
                        </ul>
                    </div>
                </li>



{{--                BARANG SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-archive menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Barang</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableBarang') }}"> Master Barang </a></li>
                        </ul>
                    </div>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableCategory') }}"> Kategori </a></li>
                        </ul>
                    </div>
                </li>
                @endif

                @if(auth()->user()->role=="pegawai")
{{--                TOKO SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-store menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Toko Member</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tokoAktif') }}">Data Toko Member </a></li>
{{--                            <li class="nav-item"> <a class="nav-link" href="{{ route('tokoExpired') }}">Data Toko Member Expired</a></li>--}}
                        </ul>
                    </div>
                </li>



{{--                BARANG SECTION--}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="mdi mdi-archive menu-icon" aria-hidden="true"></i>
                        <span class="menu-title">Barang</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableBarang') }}"> Master Barang </a></li>
                        </ul>
                    </div>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('tableCategory') }}"> Kategori </a></li>
                        </ul>
                    </div>
                </li>
                @endif


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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright � 2021 <a href="http://boombest.net/" target="_blank">BOOMBEST.net</a></span>
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

</div>
    {{--    script bootsrap--}}

        <!-- plugins:js -->
        <script src="{{ asset('/member/vendors/base/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{ asset('/member/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{ asset('/member/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('/member/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{ asset('/member/js/off-canvas.js')}}"></script>
        <script src="{{ asset('/member/js/hoverable-collapse.js')}}"></script>
        <script src="{{ asset('/member/js/template.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('/member/js/dashboard.js')}}"></script>
        <script src="{{ asset('/member/js/data-table.js')}}"></script>
        <script src="{{ asset('/member/js/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('/member/js/dataTables.bootstrap4.js') }}"></script>
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
