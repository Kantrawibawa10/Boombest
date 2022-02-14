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
                    <h2>Halaman Deatil Iklan Level 1</h2>
                    <p class="mb-md-0">Berisi Data Iklan Level 1.</p>
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
                            <i class="fa fa-picture-o icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                            <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                              <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Produk</small>
                              <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $dataIklan->count() }}</h5>
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
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table">
                              <thead class="thead-primary">
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>Iklan</th>
                                  <th>Harga</th>
                                  <th>Tgl. Ditambah</th>
                                  <th>Tgl. Berakhir</th>
                                  <th>Aksi</th>
                                  <th>&nbsp;</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse($dataIklan as $item)

                                <tr class="alert" role="alert">
                                    <td>
                                        <label class="checkbox-wrap checkbox-primary">
                                              <input type="checkbox">
                                              <span class="checkmark"></span>
                                            </label>
                                    </td>
                                    <td>
                                        <div class="img" style="background-image: url('{{ asset('/slider/'. $item->iklanpict) }}');"></div>
                                    </td>
                                   <td>
                                      <div class="email text-dark">
                                          <span>{{ $item->level }} </span>
                                          <span>{{ $item->description }}</span>
                                      </div>
                                  </td>
                                  <td class="text-dark">Rp. 150.000,00</td>
                                  <td class="text-white"><span class="bg-success p-2" style="border-radius: 10px; font-size: 12px;">{{ $item->date_add }}</span></td>
                                  <td class="text-white"><span class="bg-danger p-2" style="border-radius: 10px; font-size: 12px;">{{ $item->date_end }}</span></td>

                                <td class="text-dark" style="font-size: 15px;"><a href="/tableiklan/dataiklan/editiklan/{{ $item->id }}" style="font-size: 15px;" class="text-warning">Edit</a></td>
                                  <td>
                                      <button type="button" class="close" data-toggle="modal" data-target="#hapus{{ $item->id  }}" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                  </button>
                                </td>
                                </tr>


                           <!-- Modal hapus-->
                            <div class="modal fade" id="hapus{{ $item->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Iklan {{ $item->level}}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menhapus barang ini??</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                            <a href="/tableiklan/destroyiklan/{{ $item->id }}" class="btn btn-success">Iya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              </tbody>
                              @empty
                            <table class="d-flex justify-content-center">
                                <h2 class="text-center">Iklan Kosong!!</h2>
                            </table>


                            @endforelse
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </section>


    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-2"></div>

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



