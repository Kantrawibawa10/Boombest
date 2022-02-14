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
                    <form action="{{ url("/searchtoko") }}" method="GET" class="search cari">
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
<style>

.block-7 {
    border-radius: 4px;
    margin-bottom: 30px;
    padding: 0;
    overflow: hidden;
    background: #fff;
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.05);
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
@media (max-width: 991.98px) {
    .block-7 {
        margin-top: 30px;
    }
}
.block-7 .img {
    height: 250px;
}
.block-7 .heading-2 {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}
.block-7 .price {
    margin: 0;
    padding: 0;
    display: block;
}
.block-7 .price sup {
    font-size: 24px;
    top: -1em;
    color: #b3b3b3;
}
.block-7 .price .number {
    font-size: 60px;
    font-weight: 600;
    color: #000000;
}
.block-7 .excerpt {
    margin-bottom: 0px;
    color: #00bd56;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
}
.block-7 .label2 {
    text-transform: uppercase;
}
.block-7 .pricing-text,
.block-7 .pricing-text li {
    padding: 0;
    margin: 0;
}
.block-7 .pricing-text li {
    list-style: none;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #000000;
}
.block-7 .pricing-text li:nth-child(odd) {
    background: rgba(0, 0, 0, 0.05);
}
.block-7 .pricing-text li span.fa {
    color: #207dff;
}
.block-7 .btn-primary {
    color: #fff;
    text-transform: uppercase;
    font-style: 16px;
    font-weight: 600;
    letter-spacing: 1px;
    width: 60%;
    margin: 0 auto;
}
.block-7 .btn-primary:hover,
.block-7 .btn-primary:focus {
    background: #00bd56 !important;
    color: #fff;
}
.block-7:hover,
.block-7:focus {
    -webkit-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    -moz-box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
    box-shadow: 0px 24px 48px -13px rgba(0, 0, 0, 0.11);
}
</style>

<section class="products-grid">
    <div class="container">
      <div class="row container">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h2>Halaman Data Toko Member</h2>
                <p class="mb-md-0">Berisi Data Dari Toko yang di Miliki Member.</p>
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
                        <i class="fa fa-archive icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                          <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Toko</small>
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


<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($toko as $item)
            <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                <div class="block-7">
                    @if($item->img_toko == "")
                    <div class="img" style="background-image: url('/assets/img/boombest.jpg');"></div>
                    @else
                    <div class="img" style="background-image: url('{{ url('foto_toko/'. $item->img_toko) }}');"></div>
                    @endif
                    <div class="text-center p-4">
                        <span class="excerpt d-block">{{ $item->nama_toko }}</span>
                        <!--span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span-->
                        <ul class="pricing-text mb-5 mt-2">
                            <li><span class="fa fa-check mr-2"></span>{{ $item->deskripsi }}</li>
                            <li><span class="fa fa-map-marker mr-2"></span>{{ $item->alamat_toko }}</li>
                            <li><span class="fa fa-user-circle mr-2"></span>{{ $item->name }}</li>
                        </ul>
                        <a type="button" data-toggle="modal" data-target="#detail{{ $item->id }}" class="btn btn-primary d-block px-2 py-3 text-white">Ubah</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>















    @foreach($toko as $item)
    <div class="modal fade" id="detail{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title text-white" id="staticBackdropLabel">{{ $item->nama_toko }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="mx-3" src="{{ url('foto_toko/'. $item->img_toko) }}" alt=""
              style="background-position: center;
              background-repeat: no-repeat;
              background-size: cover; border-radius: 50%;
              width: 150px;
              height: 150px;">
              <div class="mx-3 mt-4">
                <h2 class="text-dark" style="font-size: 30px; text-transform: capitalize; line-height: 25px;">{{ $item->nama_toko }}</h2>
                  <h4 class="text-dark" style="font-size: 15px; text-transform: capitalize; font-weight: 700;">{{ $item->alamat_toko }}</h4>
                <span class="text-dark" style="font-size: 15px; text-transform: capitalize;">{{ $item->deskripsi }}</span><br><br>

              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <a href="/tokoaktif/edittoko/{{ $item->id_member }}" class="btn btn-warning">Ubah</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

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


<!--<div class="container">
            <div class="row">
              <div class="d-flex row m-auto justify-content-center">
                {{--@foreach($toko as $item)

                <div class="mt-3 mx-2">
                  <div class="px-2 py-5" style="border-radius: 10px;
                  box-shadow:  -3px -3px 4px rgba(0,0,0,0.4);
                  border: 1px solid grey;
                  background: #2DAD29;">
                    <div class="col-lg-9">
                      <div class="m-auto">
                        <a type="button" data-toggle="modal" data-target="#detail{{-- $item->id }}" style="text-decoration: none;">
                          <div class="row">
                            <img class="mx-3" src="{{-- url('foto_toko/'. $item->img_toko) }}" alt=""
                            style="background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover; border-radius: 50%;
                            width: 150px;
                            height: 150px;">
                            <div class="mx-3 mt-4">
                              <h2 class="text-white" style="font-size: 30px; text-transform: capitalize; line-height: 25px;">{{ $item->nama_toko }}</h2>
                              <span class="text-white" style="font-size: 15px; text-transform: capitalize;">{{ $item->deskripsi }}</span><br><br>
                              <span class="text-white" style="font-size: 15px; text-transform: capitalize; font-weight: 700;">{{ $item->alamat_toko }}</span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach--}}
              </div>
            </div>
          </div>
    </section>-->
