@extends("layouts.member")


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
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0 text-white"></i>
                        <span class="count"></span>
                    </a>
                    {{--@include('layouts.notif', ['notif' => $notif])--}}
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

@section("content")


    <!------------------------------------------
    Page Header
    ------------------------------------------->


<div class="container mb-5 mt-4">
  <section class='product-page '>
      <div class='container'>
          <div class='row product-detail-inner justify-content-center' style='min-height: 160px;'>
                    <div class='col-lg-4 col-md-4 col-12'>
                        <div id='product-images' style='height: 20rem;'>
                            <!-- slides -->
                            <div class='carousel-inner' style='height: 20rem; background-size: cover; background-position: center;'>
                                <div class='carousel-item active'> <img src="{{ url('products/'. $barang->img_barang) }}" alt='' style='height: 20rem; background-size: cover; background-position: center;'> </div>

                            </div> <!-- Left right -->

                        </div>
                    </div>


                    <div class='col-lg-8 col-md-6 col-12'>

                      <div class="product-detail py-4">
                          <div class="mt-2">
                              <h2 class="product-name text-dark" style="font-size: 30px;">{{ $barang->nama_barang }}</h2>
			      <p class="font-weight-600">
                           	@foreach($inputkategori as $kategori)
                              	@if($kategori->kategori == $barang->kategori)
                                <span class="font-weight-normal">{{ $kategori->nama }}</span> <br>
                              	@endif
                            	@endforeach
                              </p>
                              <div class="product-price py-2 px-4" style="background: #37B629;">
                                  <span class="price text-white" style="font-size: 2em">@currency($barang->harga)</span>
                              </div>

			      <p class="font-weight-600 d-flex float-right mt-5">

                                <span class="font-weight-normal" style="font-size: 15px;">{{ $barang->nama_toko }}</span>&nbsp; <span style="font-size: 16px;"> - </span>&nbsp;
                                <span class="font-weight-normal" style="font-size: 15px;">{{ $barang->daerah }}</span>
				<span><i class="fas fa-map-marker-alt text-warning ml-2"></i></span>

                              </p>

                          </div>
                      </div>
                    </div>


                </div>

          <div class="row">
            <div class="col-lg-4 mb-5">
              <div class='product-short-desc mt-4'>
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
                  <div class='desc-title-1 mb-4'>
                      <h2>Kontak</h2>
                  </div>

                  <p>Contact Person : <span class='font-weight-500'>{{$barang->username}}</span></p>

                  <hr style='border: 1.5px solid black; background: black;'>

                  <p>
                  Toko : <span class='font-weight-500'> {{$barang->nama_toko}} </span> <br>
                  @if( $barang->wa  == '')
			WhatsApp : <span class='font-weight-500'><a class="text-success"><ion-icon name="logo-whatsapp"></ion-icon> Tidak ada</a></span> <br>
			@else
                        WhatsApp : <span class='font-weight-500'><a href="https://api.whatsapp.com/send?phone={{$barang->wa}}" target="blank" class="text-success"><ion-icon name="logo-whatsapp"></ion-icon> {{$barang->wa}}</a></span> <br>
			@endif

			@if( $barang->instagram  == '')
			Instagram : <span class='font-weight-500'><a target="blank" class="text-warning"><ion-icon name="logo-instagram"></ion-icon> Belum ada</a></span> <br>
			@else
                        Instagram : <span class='font-weight-500'><a href="{{$barang->link_ig}}" target="blank" class="text-warning"><ion-icon name="logo-instagram"></ion-icon> {{$barang->instagram}}</a></span> <br>
                       	@endif

			@if( $barang->facebook  == '')
			Facebook : <span class='font-weight-500'><ion-icon name="logo-facebook"></ion-icon> Belum ada</span> <br>
			@else
			Facebook : <span class='font-weight-500'><a href="{{$barang->link_fb}}" target="blank"><ion-icon name="logo-facebook"></ion-icon> {{$barang->facebook}}</a></span> <br>                        </p>
			@endif                  </p>

                  <hr style='border: 1.5px solid black; background: black;'>
                  <p>
                      Alamat Toko : <span class="font-weight-500">{{$barang->alamat_toko}}</span>
                  </p>

              </div>
            </div>


            <div class="col-lg-8">
              <div class='product-short-desc mt-4'>
                  <style>
                      .desc-title h2{
                          font-size: 30px;
                          border-bottom: 3px green solid;
                          width: 90px;
                      }
                  </style>
                  <div class='desc-title mb-4'>
                      <h2>Detail</h2>
                  </div>

                  <p class="font-weight-600">
                      Kondisi : <span class="font-weight-normal">{{$barang->kondisi}}</span> <br>
                      Berat  : <span class="font-weight-normal">{{$barang->berat}}</span> <br>

                      @foreach($inputkategori as $kategori)
                        @if($kategori->kategori == $barang->kategori)
                          Kategori : <span class="font-weight-normal">{{ $kategori->nama }}</span> <br>
                        @endif
                      @endforeach
                  </p>




                  <br>

                  <p class="font-weight-600">Spesifikasi :<br>
                      <p class="text-justify">
                        {{$barang->spesifikasi}}
                      </p>
                  </p>






                  <br>

                  <p class="font-weight-600">Keunggulan :<br>
                      <p class="text-justify">
                        {{$barang->keunggulan}}
                      </p>
                  </p>



                  <br>

                  <p class="font-weight-600">Ketentuan Garansi :<br>
                      <p class="text-justify">
                        {{$barang->garansi}}
                      </p>
                  </p>
              </div>
            </div>
          </div>



          <div class="row mt-4">
            <div class="col-12">
                <div class="product-details">

                    <div class="col-12">
                        <div class="section-title">
                            <h2>Deskripsi</h2>
                        </div>
                    </div>

                    <div class="table-responsive">
                      <div class="border p-0">
                        <div class="form-floating">
                          <p class="form-control bg-transparent p-2 text-justify" type="disabled" style="height: 100px">{{$barang->lainnya}}</p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>

          
	<div class="mt-5 mb-5 text-center w-auto d-flex">
              <!--a href="/produksaya/edit/{{ $barang->id }}" style="width: 100vh; right: 100%; background-color: gray; padding: 10px;" class=" p-3 bg-success text-white mr-3 rounded ui-state-hover"> <span >Edit</span> </a-->
              <a href="{{route('produksaya')}}" style="width: 200vh; right: 100%; background-color: gray; padding: 10px;" class=" p-3 bg-danger text-white rounded ui-state-hover"> <span >Kembali</span> </a>
          </div>
      </div>
  </section>
</div>



@endsection
