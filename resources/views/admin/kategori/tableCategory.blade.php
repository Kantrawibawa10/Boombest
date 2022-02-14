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
                    <form action="{{ url("/searchkategori") }}" method="GET" class="search cari">
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
                <h2>Halaman Data Kategori Produk</h2>
                <p class="mb-md-0">Berisi Data Kategori Produk Barang Marketplace Boombest.net.</p>
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
			
			  .auto1{
                                display:block;
                                padding: 0 10 0 0 px;
                                margin-top:5px;
                                height: 500px;
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
                      <i class="fa fa-archive icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                      <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                        <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Kategori</small>
                        <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $allKategori->count() }}</h5>
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

    <section class="ftco-section">
        <div class="container">
            @if(session()->get('success'))
            <div class="alert bg-success alert-block">
                <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
                <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('success') }}.
            </div>
            @endif

            @if(session()->get('deleted'))
            <div class="alert bg-danger alert-block">
               <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
               <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('deleted') }}.
            </div>
            @endif

            <a href="{{ route('addCategory') }}" class="btn btn-primary mb-2"> Tambah Kategori </a>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap auto1">
                        <table class="table">
                          <thead class="thead-primary fixed">
                            <tr>
                              <th>&nbsp;</th>
                              <th>Gambar</th>
                              <th>Nama Kategori</th>
                              <th>Aksi</th>
                              <th>&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($allKategori as $item)

                            <tr class="alert" role="alert">
                                <td>
                                    <label class="checkbox-wrap checkbox-primary">
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                        </label>
                                </td>
                                <td>
                                    <div class="img" style="background-image: url('{{ url('foto_kategori/'. $item->img_kategori) }}');"></div>
                                </td>
                              <td>
                                  <div class="email text-dark">
                                      <span class="text-dark">{{ $item->nama }} </span>
                                  </div>
                              </td>
                          <td class="text-dark" style="font-size: 15px;"><a href="" class="text-primary" style="font-size: 15px;">Detail</a></td>
                              <td>
                                <button type="button" class="close"data-toggle="modal" data-target="#hapus{{ $item->id  }}" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-close"></i></span>
                              </button>
                            </td>
                            </tr>

                            <!--Modal hapus-->
                            <div class="modal fade" id="hapus{{ $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menhapus kategori ini??</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                            <a href="/tablecategory/destroycategory/{{ $item->id }}" class="btn btn-success">Iya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <table class="d-flex justify-content-center">
                                <h2 class="text-center">Produk Kosong!!</h2>
                            </table>
                            @endforelse


                          </tbody>
                        </table>

                        {{--<div class="row mt-2">
                            <div class="col-12">
                              @include('layouts.paginate', ['paginator' => $allKategori])
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

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


<!--<div class="">
  <div class="row container">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Halaman Data Kategori Produk</h2>
            <p class="mb-md-0">Berisi Data Dari Kategori Produk Member.</p>
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
                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                  </li>
                </ul>
                <div class="tab-content py-0 px-0">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="d-flex flex-wrap justify-content-xl-between">
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="fa fa-calendar icon-lg text-primary" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted" style="font-size: 20px;">{<?php //echo date('d - M - Y'); ?></small>

                          <h5 class="mr-2 mb-0"></h5>
                        </div>
                      </div>
                      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                        <i class="fa fa-filter icon-lg text-success" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around">
                          <small class="mb-1 text-muted" style="font-size: 20px;">Jumlah Kategori</small>
                          <h5 class="mr-2 mb-0"></h5>
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

    <a href="{{-- route('addCategory') }}" class="btn btn-primary"> Tambah Kategori </a>

    <div class="row mt-3">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Tabel Kategori</p>
            <div class="table-responsive">
              <table id="recent-purchases-listing" class="table table-stripped table-hover datatab">
                <thead>
                  <tr>
                    <th>Img Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{--@foreach($allKategori as $item)
                  <tr>
                      <td class="text-center col-lg-2"><img src="{{ url('foto_kategori/'. $item->img_kategori) }}" alt="imgKategori" style="background-size: cover; background-position: center; width: 60px; height: 60px;"></td>
                      <td>{{ $item->nama }}</td>
                      <td class="col-lg-1 text-center">
                          <a type="button" data-toggle="modal" data-target="#hapus{{ $item->id  }}" class="btn btn-danger p-2 mr-1 text-white">Hapus</a>
                      </td>
                  </tr>

                  Modal hapus
                  <div class="modal fade" id="hapus{{-- $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama }}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p>Apakah anda yakin ingin menhapus kategori ini??</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                  <a href="/tablecategory/destroycategory/{{--$item->id--}}" class="btn btn-success">Iya</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  {{--@endforeach--}}
                </tbody>
              </table>
              deleted
            </div>
          </div>
        </div>
      </div>
    </div>-->
