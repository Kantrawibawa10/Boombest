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
                <h2>Tambah Kategori Produk</h2>
                <p class="mb-md-0">Silakan Tambahkan Kategori di Sini.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        <div class="row">
            <div class="col-md-12 grid-margin">
                <section class="products-grid ">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-md-8 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="products-top bg-success">
                                            <div class="products-top-inner">
                                                <div class="products-found">
                                                    <p><span class="text-white">Kategori Produk</span></p>
                                                </div>
                                                <div class="products-sort">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="justify-content-start p-2">

                                    <form action="{{ route('postCategory') }}" method="POST" enctype="multipart/form-data">


                                        <!--img upload--->
                                        <label for="namabarang" class="form-label">Foto Kategori:</label>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <p class="image_upload mb-5">
                                            <label class="img-upload">
                                                <style media="screen">
                                                    .bg-img{
                                                        background: white;
                                                        border-radius: 50%;
                                                        border: 1px solid gray;
                                                    }
                                                </style>
                                                <img src="../assets/img/produk.png" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                                <label class="btn-input">
                                                    <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_kategori" id="preview_gambar" value="" required>
                                                    <i class="fa fa-upload" aria-hidden="true"></i><br>
                                                    Choise your <br>file img
                                                </label>
                                            </label>
                                        </p>
                                        <!--img upload--->

                                        <div class="mb-3 col-md-3">
                                            <label for="kode" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori" required style="text-transform: lowercase;">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="namatoko" class="form-label">Nama Kategori</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kategori" required style="text-transform: capitalize;"> 
                                        </div>

					<div class="mb-3 col-md-6">
                                            <label for="namatoko" class="form-label">Level Member</label>
                                            <select type="text" id="level" name="level" class="form-control dropdown-toggle">
                                                <option selected disabled class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Pilih Jenis Kategori!!!</option>
                                                <option value="platinum" class="dropdown-item">Platinum</option>
                                                <option value="member" class="dropdown-item">Member</option>
                                            </select> 
                                        </div>


                                        <hr class="mt-5 bg-success">
                                        <div class="d-flex mt-5">
                                            <button type="button" data-toggle="modal" data-target="#simpan" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                            <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                        </div>

                                        <!-- Modal simpan-->
                                        <div class="modal fade" id="simpan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menyimpan perubahan??</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success" >Iya</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                </section>

                <!-- Modal batal-->
                <div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Kembali</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin ingin kembali??</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                <a href="{{route('tableCategory')}}" class="btn btn-success">Iya</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
