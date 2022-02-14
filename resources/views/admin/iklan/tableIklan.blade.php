@extends('layouts.admin')

@section('navbar')
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="/tabel/style.css">

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
                    <form action="{{ url("/searchbarang") }}" method="GET" class="search cari">
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
                            <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="profile"/>
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
                    <h2>Halaman Data Iklan Marketplace Boombest.net</h2>
                    <p class="mb-md-0">Berisi Data Iklan yang di Pasang Boombest.net.</p>
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
                            <i class="fa fa-picture-o icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                            <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                              <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                              <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $hitung->count() }}</h5>
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

        <section class="container mb-3">
            <div>
                <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2"> Pasang Iklan <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Pertama</h2>
                            <p class="mb-md-0">Berada di posisi teratas Level 1.</p>
                          </div>
                        </div>

                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklan1->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklan1 as $key => $row)
                                    @if($row->level == 'Home1')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide" >
                                            </div>
                                            </a>
                                        </div>
                                      @else

                                    @endif
                                @endforeach


                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>
                @if (count($dataIklan1) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif
            </div>
        </section>

        <div class="container mt-5">
            <hr style="height:3px;border:none;color:#333;background-color:#333;">
        </div>

        <section class="ftco-section mt-3">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Kedua</h2>
                            <p class="mb-md-0">Berada di posisi 2 teratas Level 2.</p>
                          </div>
                        </div>
                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklan2->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklan2 as $key => $row)
                                    @if($row->level == 'Home2')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100"  src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide" >
                                            </div>
                                            </a>
                                        </div>
                                      @else

                                    @endif
                                @endforeach


                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>
                @if (count($dataIklan2) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif
            </div>
        </section>

        <div class="container mt-5">
            <hr style="height:3px;border:none;color:#333;background-color:#333;">
        </div>

        <section class="ftco-section mt-3">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Ketiga</h2>
                            <p class="mb-md-0">Berada di posisi 3 teratas Level 3.</p>
                          </div>
                        </div>
                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklan3->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <style>
                                .bg-img{
                                    background-image: url('/assets/img/iklan.png');
                                    background-size: cover;
                                    background-position: center;
                                }
                            </style>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklan3 as $key => $row)
                                    @if($row->level == 'Home3')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}">
                                            </div>
                                            </a>
                                        </div>


                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>

                @if (count($dataIklan2) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif

            </div>
        </section>

        <div class="container mt-5">
            <hr style="height:3px;border:none;color:#333;background-color:#333;">
        </div>

        <section class="ftco-section mt-3">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Keempat</h2>
                            <p class="mb-md-0">Berada di posisi bawah Level 4.</p>
                          </div>
                        </div>
                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklan4->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <style>
                                .bg-img{
                                    background-image: url('/assets/img/iklan.png');
                                    background-size: cover;
                                    background-position: center;
                                }
                            </style>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklan4 as $key => $row)
                                    @if($row->level == 'Home4')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}">
                                            </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>

                @if (count($dataIklan2) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif

            </div>
        </section>

        <div class="container mt-5">
            <hr style="height:3px;border:none;color:#333;background-color:#333;">
        </div>

        <section class="ftco-section mt-3">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Halaman Terbaru</h2>
                            <p class="mb-md-0">Berada di posisi atas Halaman Terbaru Level New.</p>
                          </div>
                        </div>
                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklanNew->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <style>
                                .bg-img{
                                    background-image: url('/assets/img/iklan.png');
                                    background-size: cover;
                                    background-position: center;
                                }
                            </style>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklanNew as $key => $row)
                                    @if($row->level == 'New')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}">
                                            </div>
                                            </a>
                                        </div>


                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>
                @if (count($dataIklan2) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif
            </div>
        </section>

        <div class="container mt-5">
            <hr style="height:3px;border:none;color:#333;background-color:#333;">
        </div>

        <section class="ftco-section mt-3">
            <div class="container">
                <div class="row container mb-0">
                    <div class="col-md-12 grid-margin">
                      <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-end flex-wrap">
                          <div class="mr-md-3 mr-xl-5">
                            <h2 style="line-height: 35px;">Iklan Halaman Kategori</h2>
                            <p class="mb-md-0">Berada di posisi atas halaman kategori Level kategori.</p>
                          </div>
                        </div>
                        <div class="text-primary pt-3 d-flex">
                            <div style="text-align: right; line-height: 7px;" class="pt-3 mx-3">
                                <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Iklan</small>
                                <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklanCategory->count() }} Iklan</h5>
                            </div>
                            <i class="fa fa-picture-o" aria-hidden="true" style="font-size: 70px;" ></i>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 w-auto mx-auto rounded ">
                        <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">


                            </ol>
                            <style>
                                .bg-img{
                                    background-image: url('/assets/img/iklan.png');
                                    background-size: cover;
                                    background-position: center;
                                }
                            </style>
                            <div id="carouselatur1" class="carousel-inner shadow-sm rounded bg-img">

                                @foreach($dataIklanCategory as $key => $row)
                                    @if($row->level == 'Category')
                                        <div class="itemlah carousel-item {{$key == 0 ? 'active' : '' }} d-flex" >
                                            <a href="/tableiklan/dataiklan/{{ $row->level }}" >
                                            <div>
                                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}">
                                            </div>
                                            </a>
                                        </div>


                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End Slider IKLAN -->
                    </div>
                </div>
                @if (count($dataIklan2) <= 10)
                <div class="mt-3">
                    <a href="{{ route('addIklan') }}" class="btn btn-primary mx-2">  Pasang cepat <i class="fa fa-plus" style="font-size: 12px;" aria-hidden="true"></i> </a>
                </div>
                @else
                <div>
                    <span>Iklan Sudah Penuh</span>
                </div>
                @endif
            </div>
        </section>


    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-2"></div>

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



