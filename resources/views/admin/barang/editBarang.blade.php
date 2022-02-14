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
                <h2>Edit Produk</h2>
                <p class="mb-md-0">Silakan Edit Produk di Sini.</p>
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
                                                    <p><span class="text-white">Tampilan Utama</span></p>
                                                </div>
                                                <div class="products-sort">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="justify-content-start p-2">

                                    @foreach($barang as $item)
                                    <form action="/tablebarang/updatebarang/{{$item->id}}" method="POST" enctype="multipart/form-data">

                                        <!--img upload--->
                                        <p class="image_upload mb-5">
                                            <label class="img-upload">
                                                <style media="screen">
                                                    .bg-img{
                                                        background: white;
                                                        border-radius: 50%;
                                                        border: 1px solid gray;
                                                    }
                                                </style>
                                                <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                                <label class="btn-input">
                                                    <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_barang" id="preview_gambar">
                                                    <i class="fa fa-upload" aria-hidden="true"></i><br>
                                                    Choise your <br>file img
                                                </label>
                                            </label>
                                        </p>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <!--img upload--->


                                        <div class="mb-3 col-md-6">
                                            <label for="namabarang" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" id="namabarang" placeholder="Nama barang" value="{{ $item->nama_barang }}">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label for="hargabarang" class="form-label">Harga Barang</label>
                                            <input type="text" class="form-control" name="harga" id="hargabarang" placeholder="Rp:..." value="{{ $item->harga }}">
                                        </div>

                                        <div class="col-12 mt-5 mb-5">
                                            <div class="products-top bg-success">
                                                <div class="products-top-inner">
                                                    <div class="products-found">
                                                        <p><span class="text-white">Detail Produk</span></p>
                                                    </div>
                                                    <div class="products-sort">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="namabarang" class="form-label">Kondisi</label>
                                            <select type="text" id="kondisi" name="kondisi" class="form-control dropdown-toggle">
                                                <option selected value="{{$item->kondisi}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{$item->kondisi}}</option>
                                                <option value="Baru" class="dropdown-item">Baru</option>
                                                <option value="Bekas" class="dropdown-item">Bekas</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="namabarang" class="form-label">Berat Barang</label>
                                            <input type="text" class="form-control" name="berat" id="berat" placeholder="...Gram/Kg" value="{{ $item->berat }}">
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="namabarang" class="form-label">Kategori</label>
                                            <select type="text" name="kategori" class="form-control dropdown-toggle" >
                                                <option selected value="{{$item->kategori}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ $item->kategori }}</option>
                                                @foreach($inputkategori as $kategori)
                                                    <option value="{{$kategori->kategori}}" class="dropdown-item">{{$kategori->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="daerah" class="form-label">Wilayah</label>
                                            <select type="text" name="daerah" class="form-control dropdown-toggle" >
                                                <option selected value="{{$item->daerah}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ $item->daerah }}</option>
                                                @foreach($inputwilayah as $kategori)
                                                    <option value="{{$kategori->daerah}}" class="dropdown-item">{{$kategori->nama_daerah}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-floating mb-3 col-md-6">
                                            <label for="floatingTextarea2">Spesifikasi</label>
                                            <textarea class="form-control" placeholder="Spesifikasi produk anda" name="spesifikasi" id="floatingTextarea2" style="height: 100px">{{ $item->spesifikasi }}</textarea>
                                        </div>

                                        <div class="form-floating mb-3 col-md-6">
                                            <label for="floatingTextarea2">Keunggulan</label>
                                            <textarea class="form-control" placeholder="Keunggulan produk anda" name="keunggulan" id="floatingTextarea2" style="height: 100px">{{ $item->keunggulan }}</textarea>
                                        </div>

                                        <div class="form-floating mb-3 col-md-6">
                                            <label for="floatingTextarea2">Ketentuan Garansi</label>
                                            <textarea class="form-control" placeholder="Ketentuan Garansi produk anda" name="garansi" id="floatingTextarea2" style="height: 100px">{{ $item->garansi }}</textarea>
                                        </div>

                                        <div class="form-floating mb-3 col-md-6">
                                            <label for="floatingTextarea2">Deskripsi Lainnya</label>
                                            <textarea class="form-control" placeholder="Deskripsi Lain dari produk anda" name="lainnya" id="floatingTextarea2" style="height: 100px">{{ $item->lainnya }}</textarea>
                                        </div>

                                        <hr class="mt-5 bg-success">
                                        <div class="d-flex mt-5">
                                            <button type="button" data-toggle="modal" data-target="#simpan{{ $item->id  }}" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                            <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                        </div>

                                        <!-- Modal simpan-->
                                        <div class="modal fade" id="simpan{{ $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_barang }}</h5>
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

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-2"></div>

    @foreach($barang as $item)
    <!-- Modal batal-->
    <div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_barang }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin kembali??</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <a href="{{route('tableBarang')}}" class="btn btn-success">Iya</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
