@extends('layouts.member')

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

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin">

                @foreach($mytoko as $item)
                    <section class="products-grid">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="col-12 mb-5">
                                        <div class="products-top bg-success">
                                            <div class="products-top-inner">
                                                <div class="products-found">
                                                    <p><span class="text-white">Edit Toko</span></p>
                                                </div>
                                                <div class="products-sort">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="justify-content-start p-2">

                                        <form action="/tokosaya/edittoko/post/{{ $item->id_member  }}" method="POST" enctype="multipart/form-data">

                                            <!--img upload--->
                                            <!--deleted img--><input type="hidden" name="fotolama" value="{{ url('foto_toko/'. $item->img_toko) }}">
                                            <p class="image_upload mb-5">
                                                <label class="img-upload">
                                                    <style media="screen">
                                                        .bg-img{
                                                            background: white;
                                                            border-radius: 50%;
                                                            border: 1px solid gray;
                                                        }
                                                    </style>
                                                    <img src="{{ url('foto_toko/'. $item->img_toko) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                                    <label class="btn-input">
                                                        <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_toko" id="preview_gambar">
                                                        <i class="fa fa-upload" aria-hidden="true"></i><br>
                                                        Choise your <br>file img
                                                    </label>
                                                </label>
                                            </p>

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <!--img upload--->


                                            <div class="mb-3 col-md-4">
                                                <label for="nama_toko" class="form-label">Nama Toko</label>
                                                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder=".." value="{{ $item->nama_toko }}">
                                            </div>



                                            <div class="mb-3 col-md-3">
                                                <label for="alamat_toko" class="form-label">Alamat Toko</label>
                                                <input type="text" class="form-control" name="alamat_toko" id="alamat_toko"  placeholder="Jl...." value="{{ $item->alamat_toko }}">
                                            </div>



                                            <div class="form-floating mb-3 col-md-6">
                                                <label for="deskripsi">Deskripsi Toko</label>
                                                <textarea class="form-control" placeholder="Toko ini...." name="deskripsi" id="deskripsi" style="height: 100px">{{ $item->deskripsi }}</textarea>
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
                                                            <h5 class="modal-title" id="staticBackdropLabel">{{ $item->nama_toko }}</h5>
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
                                                            <a href="{{route('tokosaya')}}" class="btn btn-success">Iya</a>
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

                @endforeach

            </div>
        </div>
    </div>
<div class="pt-5"></div>
<div class="pt-5"></div>
<div class="pt-2"></div>


@endsection
