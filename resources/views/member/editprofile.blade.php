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



    @foreach($user as $users)


        <div class="container">
          <div class="row container">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Halaman Edit Profile </h2>
                    <p class="mb-md-0">Silakan Edit Profile Anda di sini.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <section class="products-grid">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-md-8 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="products-top bg-success">
                                                <div class="products-top-inner">
                                                    <div class="products-found">
                                                        <p><span class="text-white">Account Member</span></p>
                                                    </div>
                                                    <div class="products-sort">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="justify-content-start p-2">

                                        <form action="/profile/updateprofile/{{$users->id}}" method="POST" enctype="multipart/form-data">

                                            <div class="d-flex">

                                                <div>
                                                    <label for="foto" class="form-label">Foto Member</label>
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
                                                            <img src="{{ url('/profPicMember/'.auth()->user()->image_profile ) }}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                                            <label class="btn-input">
                                                                <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="image_profile" id="preview_gambar">
                                                                <i class="fa fa-upload" aria-hidden="true"></i><br>
                                                                Choise your <br>file img
                                                            </label>
                                                        </label>
                                                    </p>
                                                </div>



                                            </div>


                                            <!--img upload--->
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ $users->name }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{ $users->username }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ $users->email }}">
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="telp" class="form-label">Telpon</label>
                                                <input type="text" class="form-control" name="telp" id="telp" placeholder="telp" value="{{ $users->telp }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="hp" class="form-label">Whatsapp</label>
                                                <input type="text" class="form-control" name="hp" id="hp" placeholder="hp" value="{{ $users->hp }}">
                                            </div>

                                            <div class="mb-3 col-md-6">

                                                <label for="password" class="form-label">Password</label><br>
                                                <input type="hidden" name="password" value="{{ $users->password }}">
                                                <a href="{{ route('ubahpassword') }}" class="btn btn-success">Edit Password</a>
                                            </div>



                                            <div class="col-12 mt-5 mb-5">
                                                <div class="products-top bg-success">
                                                    <div class="products-top-inner">
                                                        <div class="products-found">
                                                            <p><span class="text-white">Detail Member </span></p>
                                                        </div>
                                                        <div class="products-sort">
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mb-3 col-md-6">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" value="{{ $users->alamat }}">
                                            </div>

                                            <div class="mb-3 col-md-3 d-none">
                                                <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                                                <select type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control dropdown-toggle" value="{{$users->jenis_kelamin}}">
                                                    <option selected value="{{$users->jenis_kelamin}}" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{$users->jenis_kelamin}}</option>
                                                    <option value="Laki-laki" class="dropdown-item">Laki-laki</option>
                                                    <option value="Perempuan" class="dropdown-item">Perempuan</option>
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="nik" value="{{ $users->nik }}">
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="referal" class="form-label">Kode Referal</label>
                                                <input type="text" class="form-control" name="referal" id="referal" placeholder="referal" value="{{ $users->referal }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="kota" class="form-label">Kota</label>
                                                <input type="text" class="form-control" name="kota" id="kota" placeholder="kota" value="{{ $users->kota }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="kecamatan" value="{{ $users->kecamatan }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                                <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="kabupaten" value="{{ $users->kabupaten }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="provinsi" value="{{ $users->provinsi }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="negara" class="form-label">Negara</label>
                                                <input type="text" class="form-control" name="negara" id="negara" placeholder="negara" value="{{ $users->negara }}">
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="point_total" class="form-label">Point Total</label>
                                                <input type="text" class="form-control" name="point_total" id="point_total" placeholder="point_total" value="{{ $users->point_total }}">
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="point_tarik" class="form-label">Point Tarik</label>
                                                <input type="text" class="form-control" name="point_tarik" id="point_tarik" placeholder="point_tarik" value="{{ $users->point_tarik }}">
                                            </div>

                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="point_sisa" class="form-label">Point Sisa</label>
                                                <input type="text" class="form-control" name="point_sisa" id="point_sisa" placeholder="point_sisa" value="{{ $users->point_sisa }}">
                                            </div>

                                            <div class="col-12 mt-5 mb-5">
                                                <div class="products-top bg-success">
                                                    <div class="products-top-inner">
                                                        <div class="products-found">
                                                            <p><span class="text-white">Rekening Member </span></p>
                                                        </div>
                                                        <div class="products-sort">
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="bank" class="form-label">Bank</label>
                                                <input type="text" class="form-control" name="bank" id="bank" placeholder="bank" value="{{ $users->bank }}" disabled>
                                                <input type="hidden" class="form-control" name="bank" id="bank" placeholder="bank" value="{{ $users->bank }}">
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="no_rek" class="form-label">No Rekening</label>
                                                <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="no_rek" value="{{ $users->no_rek }}">
                                            </div>


                                            <div class="mb-3 col-md-6 d-none">
                                                <label for="no_register" class="form-label">RegisterNoAktif</label>
                                                <input type="text" class="form-control" name="no_register" id="no_register" placeholder="no_register" value="{{ $users->no_register }}">
                                            </div>



                                            <hr class="mt-5 bg-success">
                                            <div class="d-flex mt-5">
                                                <button type="button" data-toggle="modal" data-target="#simpan{{$users->id}}" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                                <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                            </div>

                                            <!-- Modal simpan-->
                                            <div class="modal fade" id="simpan{{$users->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                            <a href="{{route('profile')}}" class="btn btn-success">Iya</a>
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
        <div class="pt-5"></div>
        <div class="pt-5"></div>
        <div class="pt-2"></div>



    @endforeach



@endsection
