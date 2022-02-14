@extends("layouts.admin")

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

@section("content")


    @foreach($data as $item)
    <section>



        <!------------------------------------------
        Page Header
        ------------------------------------------->


        <div class="container mb-5 mt-2">
          <div class="row container">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Detail Produk</h2>
                    <p class="mb-md-0">Detail Dari Produk <span style="font-weight: 500;">{{ $item->nama_barang }}</span>.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <section class="product-page ">
                <div class="container">
                    <div class="row product-detail-inner justify-content-center" style="min-height: 160px;">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div id="product-images" class="carousel slide" data-ride="carousel" style="height: 20rem;">
                                <!-- slides -->
                                <div class="carousel-inner" style="height: 20rem; background-size: cover;">
                                    <div class="carousel-item active"> <img src="{{ url('products/'. $item->img_barang) }}" alt=""
                                                                            style="height: 20rem; background-size: cover; background-position: center;"> </div>

                                </div> <!-- Left right -->

                            </div>

                            <div class="product-short-desc mt-4">
                                <style>
                                    .desc-title-1 h2{
                                        font-size: 30px;
                                        border-bottom: 3px green solid;
                                        width: 105px;
                                    }

                                    .desc{
                                        font-weight: bold;
                                    }
                                </style>
                                <div class="desc-title-1 mb-4">
                                    <h2>Kontak</h2>
                                </div>

                                <p>Contact Person : <span class="font-weight-500"> {{ $item->name }} </span></p>

                                <hr style="border: 1.5px solid black; background: black;">

                                <p>
                                    Toko : <span class="font-weight-500"> {{ $item->nama_toko }}</span> <br>
                                    Mobile1 : <span class="font-weight-500"></span>{{ $item->telp }} <br>
                                    No Wa : <span class="font-weight-500"></span>{{ $item->hp }} <br>
                                </p>

                                <hr style="border: 1.5px solid black; background: black;">
                                <p>
                                    Alamat Toko : <span class="font-weight-500">{{ $item->alamat_toko }}</span>
                                </p>

                            </div>
                        </div>

                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="product-detail p-4" style="background: #37b631; height: 20rem; ">
                                <div class="m-auto p-5">
                                    <h2 class="product-name text-white" style="margin-top: auto; margin-bottom: auto; text-transform: capitalize;">{{ $item->nama_barang }}</h2>
                                    <div class="product-price ">
                                        <span class="price text-white">@currency($item->harga)</span>
                                    </div>
                                </div>

                            </div>
                            <div class="product-short-desc mt-4">
                                <style>
                                    .desc-title h2{
                                        font-size: 30px;
                                        border-bottom: 3px green solid;
                                        width: 90px;
                                    }
                                </style>
                                <div class="desc-title mb-4">
                                    <h2>Detail</h2>
                                </div>

                                <p class="font-weight-600">
                                    Kondisi : <span class="font-weight-normal">{{$item->kondisi}}</span> <br>
                                    Berat  : <span class="font-weight-normal">{{$item->berat}}</span> <br>
{{--                                    @foreach($inputkategori as $kategori)--}}
{{--                                        @if($kategori->kategori == $barang->kategori)--}}
                                            Kategori : <span class="font-weight-normal">{{ $item->nama }}</span> <br>
{{--                                        @endif--}}
{{--                                    @endforeach--}}
                                </p>




                                <br>

                                <p class="font-weight-600">Spesifikasi :<br>
                                <p class="text-justify">
                                    {{$item->spesifikasi}}
                                </p>
                                </p>






                                <br>

                                <p class="font-weight-600">Keunggulan :<br>
                                <p class="text-justify">
                                    {{$item->keunggulan}}
                                </p>
                                </p>



                                <br>

                                <p class="font-weight-600">Ketentuan Garansi :<br>
                                <p class="text-justify">
                                    {{$item->garansi}}
                                </p>
                                </p>



                            </div>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="product-details" style="border: none;">

                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Deskripsi</h2>
                                    </div>
                                </div>
                                <div class="p-1" style="border: none;">
                                    <div class="form-floating">
                                        <p class="bg-transparent p-2 text-justify" type="disabled" style="height: 100px border: none;">{{$item->lainnya}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 mb-5 text-center w-auto d-flex">
                    <a href="/tablebarang/editbarang/{{ $item->id }}" style="width: 100vh; right: 100%; background-color: gray; padding: 10px;" class=" p-3 bg-success text-white mr-3 rounded ui-state-hover"> <span >Edit</span> </a>
                    <a href="{{route('tableBarang')}}" style="width: 100vh; right: 100%; background-color: gray; padding: 10px;" class=" p-3 bg-danger text-white rounded ui-state-hover"> <span >Kembali</span> </a>
                </div>
    </section>
    </div>








    </section>

    @endforeach

@endsection
