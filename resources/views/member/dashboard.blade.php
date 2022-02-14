@extends('layouts.member')

@section('navbar')


    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo"><img src="/assets/img/logo.png" alt="logo" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 18px; font-weight: 500; padding-right: 35px; padding-top: 15px;">Member
                    <br><span style="font-weight: 200; font-size: 15px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini"><img src="/assets/img/logo.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant text-white"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success">
            <ul class="navbar-nav mr-lg-4 w-100">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    <div class="input-group">
                        <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0 text-white"></i>
                        <span class="count"></span>
                    </a>
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
  <div class="row">
    <div class="col-md-12 grid-margin pt-5">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="align-items-end flex-wrap">
          <div class="w-25">
	    @if(auth()->user()->image_profile == '')
	    <img src="/assets/img/member/profile.png" alt="" class="rounded-circle" style="width: 250px; height: 250px;">
	    @else
            <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="rounded-circle" style="width: 250px; height: 250px;">
	    @endif
          </div>
          <div class="mr-md-3 mr-xl-5 p-3 mt-4">
            <h1 class="fs-1" style="text-transform: capitalize;">Selamat Datang {{ auth()->user()->username }} </h1>
            <span class="mb-md-0">Kelola toko anda dengan baik.</span >
          </div>
        </div>
      </div>

      <div class="p-3 mt-4">
        <a href="{{ route('tokosaya') }}" class="btn btn-success">Kelola Toko Anda</a>
      </div>
    </div>
  </div>
</div>
<div class="pt-5"></div>

@endsection
