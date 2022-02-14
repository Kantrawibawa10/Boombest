@extends('layouts.admin')

@section('navbar')

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 18px; font-weight: 500; padding-right: 35px; padding-top: 15px;">Member
                    <br><span style="font-weight: 200; font-size: 15px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo"/></a>
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
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="" alt="profile"/>
                        <span class="nav-profile-name text-white">  </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        
                        <a href="" class="dropdown-item">
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
    <section class=" section-shaped ">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-light shadow border-0">
                        <div class="card-header bg-white ">
                            <div class="btn-wrapper text-center justify-content-center d-flex">
                                <h1 class="mt-3">Create New Admin</h1>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <form action="{{ route('register') }}" method="post">
                                @csrf

                                <input type="hidden" name="img_admin" value="{{asset('assets/img/member/profile.png')}}" accept="image/jpeg, image/png">

                                <div class="d-flex pt-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('nama_admin') border-red-500 @enderror"
                                                       value="{{ old('nama_admin') }}" placeholder="Nama" type="text" name="nama_admin" id="nama_admin" required>
                                                @error('nama_admin')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                                                       value="{{ old('username') }}" placeholder="Username" type="text" name="username" id="username" required>
                                                @error('username')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                                                       value="{{ old('email') }}" placeholder="Email" type="text" name="email" id="email">
                                                @error('email')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group focused">
                                            <div class="input-group input-group-alternative">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                                                       value="{{ old('password') }}" placeholder="Password" type="password" name="password" id="password">
                                                @error('password')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group focused">
                                            <div class="input-group input-group-alternative">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                                                       value="{{ old('password_confirmation') }}" placeholder="Confirm password" type="password" name="password_confirmation" id="password_confirmation">
                                                @error('password_confirmation')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">

                                                <input class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg @error('kode_admin') border-red-500 @enderror"
                                                       value="{{ old('kode_admin') }}" placeholder="Kode Admin" type="text" name="kode_admin" id="kode_admin" required>
                                                @error('kode_admin')
                                                <div class="text-red-500 mt-2 text-sm">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <input type="hidden" name="level" value="Admin">
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
