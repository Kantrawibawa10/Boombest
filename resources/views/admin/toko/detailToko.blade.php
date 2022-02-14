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
                    @foreach($detailtoko as $item)
                    <form action="{{ url("/searchbarangtoko/$item->referal") }}" method="GET" class="search cari">
                        @endforeach
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
                                <ul><button type="submit"><i class="mdi mdi-logout text-primary"></i> Logout</button></ul>
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


    <div class="col-md-12 grid-margin">
        @forelse($detailtoko as $item)

                <div class="container">
                    <div class="justify-content-between flex-wrap p-5 bg-success" style="border-radius: 15px;">
                        <div class="d-flex align-items-end">
                            <div class="d-flex">
                                <div class="my-auto" style="background-size: cover; background-position: center; width: 200px;">
                                    <img src="{{ url('foto_toko/'. $item->img_toko) }}" alt="" class="rounded-circle" style="background-size: cover; background-position: center; width: 200px; height: 200px;">
                                </div>
                                <div class="w-100 ml-2 p-2 my-auto">
                                    <h1 style="color: #fff;">{{ $item->nama_toko }} </h1>
                                    <h4 style="color: #fff;">{{ $item->alamat_toko }}</h4>
                                    <span style="color: #fff;">{{ $item->deskripsi_toko }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        @empty
            <div class="container p-auto mt-5">
                <h1 class="text-center text-underline">Anda Belum Mempunyai Toko!!</h1>
            </div>
        @endforelse


        <section class="products-grid mt-4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="products-top bg-success">
                                    <div class="products-top-inner">
                                        <div class="products-found">
                                            <p><span class="text-white">Semua Kategori</span></p>
                                        </div>
                                        <div class="products-sort">
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center m-auto mx-auto pt-0 col-lg-12">


                            <!--produk-->
                            @forelse($barang as $item)

                                    <div class="card bg-white m-2 p-2" style="width: 15rem;">

                                        <a href="/tablebarang/detailbarang/{{ $item->id }}">

                                            <div class="product-img">
                                                <img src="{{ url('products/'. $item->img_barang) }}" class="card-img-top" alt="" style="width: 13.8rem;">
                                            </div>
                                            <h6 class="hnya card-title text-start mt-4 mb-2 text-truncate">{{ $item->nama_barang }}  </h6>
                                            <span class="hnya card-title text-start">@currency($item->harga)</span>
                                        </a>

                                        <div class="d-flex mt-auto justify-content-end mb-2 ">
                                            <a href="/tablebarang/editbarang/{{ $item->id }}" class="btn btn-warning p-2 mr-2">Edit</a>
                                            <a href="/tablebarang/destroybarang/{{ $item->id }}" class="btn btn-danger p-2">Hapus</a>
                                        </div>
                                    </div>

                            @empty
                                <div class="container p-auto mt-5">
                                    <h1 class="text-center text-underline">Tidak Ada Produk!!</h1>
                                </div>
                        @endforelse
                        <!--produk-->


                        </div>


                    </div>
                </div>
            </div>
        </section>


    </div>

    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-2"></div>
@endsection
