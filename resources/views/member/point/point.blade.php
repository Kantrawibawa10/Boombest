@extends('layouts.member')


@section('navbar')


    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="/assets/img/logo.png" alt="logo" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 18px; font-weight: 500; padding-right: 35px; padding-top: 15px;">Member
                    <br><span style="font-weight: 200; font-size: 15px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/assets/img/logo.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant text-white"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success">

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-4">

                    @include('layouts.notif', ['notif' => $notif])
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        @if(auth()->user()->image_profile == '')
			<img src="/assets/img/member/profile.png" alt="profile"/>
			@else
                        <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="profile"/>
			@endif
                        <span class="nav-profile-name text-white" style="text-transform: capitalize;">{{ auth()->user()->username }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a href="{{ route('home') }}" class="dropdown-item">
                            <i class="mdi mdi-logout text-primary"></i>
                            Kembali
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


@endsection

@section('content')
    <div class="container">

      <div class="row container">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h2>Halaman Point</h2>
                <p class="mb-md-0">Halaman Jumlah Point Anda.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/mobile/img/coin.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="container" style="margin-top: -60px;">
          <div class="container bg-white p-4 col-md-10"
          style="border-radius: 10px;
          box-shadow:  -4px -4px 8px rgba(0,0,0,0.4);
          border: 1px solid grey; opacity: 95%;">
            <div class="col-lg-12">
              <div class="d-flex">
                <div>
                  <img src="assets/img/logo/coin.png" alt="navbar-brand" style="max-width: 90px;">
                  <span class="text-dark mx-3" style="font-size: 20px;  position: absolute; text-transform:
                  capitalize; line-height: 50px;">My Point <br> <p style="font-size: 40px; font-weight:500;">+ {{ $totalPoin->count() }}</p> </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--<div class="mt-3">
        <div class="container py-5 px-4" style="border-radius: 20px; background: #2DAD29;">
          <div class="col-md-12">
            <div class="d-flex">
              <a href="#" class="">
                <img src="assets/img/logo/coin.png" alt="navbar-brand" style="max-width: 90px;">
                <span class="text-dark mx-3" style="font-size: 20px;  position: absolute; text-transform:
                capitalize; line-height: 50px;">My Point <br> <p style="font-size: 40px; font-weight:500;">+{{-- auth()->user()->point_sisa --}}</p> </span>
              </a>
            </div>
          </div>
        </div>
      </div>-->

      <div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-dark" style="font-size: 25px;">Detail Point</span>
          <div class="d-flex">
            <div class="bg-success" style="width: 40px; height: 5px;"></div>
            <div class="bg-warning" style="width: 40px; height: 5px;"></div>
            <div class="bg-danger" style="width: 40px; height: 5px;"></div>
          </div>
        </div>
      </div>

      <div class="mt-3 mx-2">
        <div class="container bg-primary px-2 py-4" style="border-radius: 10px;
        box-shadow:  -3px -3px 4px rgba(0,0,0,0.4);
        border: 1px solid grey;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between m-auto">
              <a href="#" class="d-flex" style="text-decoration: none;">
                  <span class="text-white mx-1" style="font-size: 20px; text-transform: capitalize;">Point Total</span>
              </a>
              <a href="#" class=" d-flex">
                <span class="text-white mx-2 text-truncate" style="font-size: 20px; text-decoration: none; font-weight:500;">+ {{ $totalPoin->count() }} </span>
                <img src="assets/img/logo/coin.png" alt="" width="30" height="30" style="margin-top: -3px;">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mx-2">
        <div class="container bg-primary px-2 py-4" style="border-radius: 10px;
        box-shadow:  -3px -3px 4px rgba(0,0,0,0.4);
        border: 1px solid grey;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between m-auto">
              <a href="#" class="d-flex" style="text-decoration: none;">
                  <span class="text-white mx-1" style="font-size: 20px; text-transform: capitalize;">Point Tukar</span>
              </a>
              <a href="#" class=" d-flex">
                <span class="text-white mx-2 text-truncate" style="font-size: 20px; text-decoration: none; font-weight:500;">- 0</span>
                <img src="assets/img/logo/coin.png" alt="" width="30" height="30" style="margin-top: -3px;">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mx-2">
        <div class="container bg-primary px-2 py-4" style="border-radius: 10px;
        box-shadow:  -3px -3px 4px rgba(0,0,0,0.4);
        border: 1px solid grey;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between m-auto">
              <a href="#" class="d-flex" style="text-decoration: none;">
                  <span class="text-white mx-1" style="font-size: 20px; text-transform: capitalize;">Point Sisa</span>
              </a>
              <a href="#" class=" d-flex">
                <span class="text-white mx-2 text-truncate" style="font-size: 20px; text-decoration: none; font-weight:500;">= {{ $totalPoin->count() }}</span>
                <img src="assets/img/logo/coin.png" alt="" width="30" height="30" style="margin-top: -3px;">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>



<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-2"></div>
@endsection
