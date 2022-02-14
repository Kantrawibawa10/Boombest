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
                        
        </div>
    </nav>


@endsection

@section('content')

    @foreach($user as $users)


        <div class="container">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <section class="products-grid">
                        <div class="container">
                          <div class="row container">
                            <div class="col-md-12 grid-margin">
                              <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex align-items-end flex-wrap">
                                  <div class="mr-md-3 mr-xl-5">
                                    <h2>Halaman Edit Admin </h2>
                                    <p class="mb-md-0">Silakan Edit Admin di Sini.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

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

                                        <form action="/tableadmin/updateadmin/{{$users->id}}" method="POST" enctype="multipart/form-data">

                                            <label for="foto" class="form-label">Foto Admin</label>
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
                                                    <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                                    <label class="btn-input">
                                                        <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="image_profile" id="preview_gambar">
                                                        <i class="fa fa-upload" aria-hidden="true"></i><br>
                                                        Choise your <br>file img
                                                    </label>
                                                </label>
                                            </p>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <!--img upload--->

                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ $users->name }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{ $users->username }}">
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ $users->password }}">
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <label for="role" class="form-label">Role</label>
                                                <input type="text" class="form-control" name="role" id="role" placeholder="Role" value="{{ $users->role }}" disabled>
                                                <input type="hidden" class="form-control" name="role" id="role" placeholder="Role" value="{{ $users->role }}">
                                            </div>


                                            <hr class="mt-5 bg-success">
                                            <div class="d-flex mt-5">
                                                <button type="button" data-toggle="modal" data-target="#simpan{{ $users->id }}" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                                <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                            </div>

                                            <!-- Modal simpan-->
                                            <div class="modal fade" id="simpan{{ $users->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">{{ $users->username }}</h5>
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

                </div>
            </div>
        </div>

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
                        <a href="{{route('tableAdmin')}}" class="btn btn-success">Iya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5"></div>
        <div class="pt-5"></div>
        <div class="pt-2"></div>



    @endforeach

@endsection
