@extends('layouts.admin')

@section('navbar')
    <link rel="stylesheet" href="/tabel/style.css">
    <link rel="stylesheet" href="/tabel/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="img-fluid" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 15px; font-weight: 500; padding-right: 35px; padding-top: 20px;">{{ auth()->user()->role }}
                    <br><span style="font-weight: 200; font-size: 13px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant text-white"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success">
            <ul class="navbar-nav mr-lg-4 w-100">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    <form action="{{ url("/searchmember") }}" method="GET" class="search cari">
                        <div class="input-group">
                            <div class="input-group-prepend">
                          <span class="input-group-text" id="search">
                            <i class="mdi mdi-magnify"></i>
                          </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search" value="{{Request::get('keyword')}}"  name="keyword">
                        </div>
                    </form>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="profile"/>
                            <span class="nav-profile-name text-white">{{ auth()->user()->username }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                            <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                                @csrf
                                <button type="submit"><i class="mdi mdi-logout text-primary"></i> Logout</button>
                            </form>
                        </div>

                    </li>
                </ul>
            @endauth
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


@endsection

@section('content')
<section class="products-grid">
    <div class="container">
      <div class="row container">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h2>Halaman Data Pegawai Boombest.net</h2>
                <p class="mb-md-0">Berisi Data Dari Pegawai Boombest.net.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body dashboard-tabs p-0">
                <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active">Data Preview</a>
                    </li>
                </ul>
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="fa fa-calendar icon-lg text-primary pt-2" style="font-size: 50px" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="text-muted" style="font-size: 18px;"><?php echo date('d  M  Y'); ?></small>
                          <style>

                            .jam-digital-malasngoding {
                                overflow: hidden;
                                width: 100px;
                            }
                            .kotak{
                                float: left;
                                width: 30px;
                                height: 30px;
                                background-color: #189fff;
                                border-radius: 30%;
                                margin-right: 5px;
                            }
                            .jam-digital-malasngoding p {
                                color: #fff;
                                font-size: 15px;
                                text-align: center;
                                margin-top: 5px;
                            }

                            .icon-aksi{
                                padding: 0 5px 5px 0;
                                font-size: 12px;
                            }

                            .icon-aksi box-icon{
                                padding: 4px;
                                border-radius: 10px;
                                color: #000;
                                background-color: yellow;
                            }

                            .add{
                                font-size: 18px;
                            }

                            .auto1{
                                display:block;
                                padding: 0 10 0 0 px;
                                margin-top:5px;
                                height: auto;
                                overflow:auto;
                            }


                        </style>
                          <div class="jam-digital-malasngoding d-flex">
                            <div class="kotak">
                                <p id="jam"></p>
                            </div>
                            <div class="kotak">
                                <p id="menit"></p>
                            </div>
                            <div class="kotak">
                                <p id="detik"></p>
                            </div>
                           </div>
                        </div>
                      </div>
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="fa fa-users icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                          <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Admin</small>
                          <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{-- $user->count() --}}1</h5>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <!--div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Table #08</h2>
            </div-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--h3 class="h5 mb-4 text-center">Collapsible Table</h3-->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="dropdown">

			<a href="{{-- route('memberAktif') --}}" class="btn btn-primary py-2 px-4 bg-success border-0 text-white shadow-none font-weight-medium">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Tambah Pegawai +</span>
                        </a>

                        <a href="{{-- route('memberAktif') --}}" class="btn btn-primary bg-primary py-2 px-4 bg-white border-0 text-white shadow-none font-weight-medium active">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Pegawai</span>
                        </a>

			<a href="{{-- route('memberAktif') --}}" class="btn btn-primary bg-white py-2 px-4 bg-white border-0 text-dark shadow-none font-weight-medium">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Creator</span>
                        </a>

			<a class="py-2 px-4 border-0 text-dark shadow-none font-weight-medium float-right" href="{{ route('memberAktif') }}">
                            <span class="mb-0 d-inline-block" style="font-size: 20px">Table Semua Pegawai</span>
                        </a>

                    </li>

                </ul>

                <div class="table-wrap auto1">
                    <table class="table myaccordion table-hover" id="accordion">
                      <thead>
                        <tr>
                          <th class="px-4 py-4 pb-4 ">#</th>
                          <th class="px-2 py-4 pb-4 ">Foto</th>
                          <th class="px-2 py-4 pb-4">Nama</th>
                          <th class="px-2 py-4 pb-4">Username</th>
                          <th class="px-2 py-4 pb-4">Group</th>
                          <th class="px-2 py-4 pb-4 ">Aksi</th>
                          <th class="px-3 py-4 pb-4 ">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($pegawai as $item)
                        
                        <tr data-toggle="collapse" data-target="#collapseTwo{{ $item->id }}" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                          <th scope="row" class="p-4 ">{{ $no++ }}</th>

                          <td class="p-2  pb-0">
                                @if($item->image_profile == "")
                                <img src="assets/img/member/profile.png" alt="" class="foto-view">
                                @else
                                <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view">
                                @endif
                          </td>
                          <td class="p-2 col-2" style="font-size: 12px;">{{ $item->name }}</td>
                          <td class="p-2 col-2" style="font-size: 12px;">{{ $item->username }}</td>
                          <td class="p-2 col-2" style="font-size: 12px;">{{ $item->role }}</td>

                          <td class="p-2" style="font-size: 12px;">
                            <!--edit-->
                            <a href="/tableadmin/editadmin/{{ auth()->user()->id }}" style="cursor:pointer;" class="icon-aksi"> <box-icon type='solid' name='pencil' class="bg-warnig text-white"></box-icon></a>
                          </td>

                          <td class="p-2">
                              <i class="fa" aria-hidden="false"></i>
                           </td>
                        </tr>
                        <tr>
                            <td colspan="12" id="collapseTwo{{ $item->id }}" class="collapse acc bg-white" data-parent="#accordion">
                                <div class="d-flex mx-5">
                                    <div class="">
                                        <h1>Tidak Ada Data</h1>
                                    </div>

                                </div>
                            </td>

                        </tr>
                     
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
	   
	   
        </div>
    </div>
</section>





<script>
    var myDropdown = document.getElementById('myDropdown')
        myDropdown.addEventListener('show.bs.dropdown', function () {
        // do something...
        })

        window.setTimeout("waktu()", 1000);
</script>
<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
<script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
</script>

@endsection
