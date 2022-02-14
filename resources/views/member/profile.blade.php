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
                    @include('layouts.notif', ['notif' => $notif])
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

	@if(session()->get('success'))
  	   <div class="alert alert-block col-md-3 float-right" data-dismiss="alert" data-aos="fade-up" data-aos-duration="1000" style="background: rgba(3, 121, 3, 0.582);">
      	      <button type="button" class="close" data-dismiss="alert" style="margin-top: -3px;"><i class="fa fa-times" aria-hidden="true"></i></button>
      	      <strong>Hore, {{ auth()->user()->username }}!!!</strong> {{ session()->get('success') }}.
  	   </div>
  	 @endif  

  <div class="row container">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Profile Member </h2>
            <p class="mb-md-0">Berisi Profile Data Member.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
	  @if(auth()->user()->image_profile == '')
	  <img src="/assets/img/member/profile.png" alt="" class="rounded-circle m-auto"
          style="width: 200px; background-size: cover; background-repeat:no-repeat;
          background-position: center;
          height: 200px;
          box-shadow:  4px 4px 8px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
	  @else
          <img src="{{ url('/profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="rounded-circle m-auto"
          style="width: 200px; background-size: cover; background-repeat:no-repeat;
          background-position: center;
          height: 200px;
          box-shadow:  4px 4px 8px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
	  @endif
        </div>

        <div class="mt-3 col-lg-9">
          <div class="container bg-success py-5"
          style="border-radius: 10px;
          box-shadow:  3px 3px 4px rgba(0,0,0,0.4);
          border: 1px solid grey;
          ">
            <div class="container">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <div href="#" class="navbar-brand row pt-3 pb-3">
                    <div class="d-block" style="line-height: 2px;">
                      <h1 class="text-white mx-1" style="text-transform: capitalize; font-size: 30px;">{{ auth()->user()->username }}</h1>
                      <span class="text-white mx-1" style="font-size: 17px; font-weight: 400;">No Register: {{ auth()->user()->referal }}</span>
                    </div>
                  </div>

                  <style media="screen">
                    .btn-share{
                      font-size: 30px;
                      background: white;
                      border-radius: 50%;
                      width: 50px; height: 50px;
                      padding: 5px 8px 6px;
                      box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
                      border: 1px solid grey;
                      cursor: pointer;
                      color: blue;
                      transition: 0.5s;
                    }

                    .btn-share:hover{
                      background: orange;
                      color: white;
                    }

                    .title,.desc{
                      color: #000;
                    }


                  </style>

                  <a href="whatsapp://send?text=http://boombest.net/?referal={{auth()->user()->referal}}" class="btn-share mt-3">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mb-5" style="margin-left: -20px;">
        <div class="container py-2">
          <div class="col-lg-12">

            <div class="">
              <div class="d-flex justify-content-between">
                <div class="mt-4 mx-2">
                  <span class="text-dark" style="font-size: 25px;">Detail Member</span>
                  <div class="d-flex">
                    <div class="bg-success" style="width: 55px; height: 5px;"></div>
                    <div class="bg-warning" style="width: 55px; height: 5px;"></div>
                    <div class="bg-danger" style="width: 55px; height: 5px;"></div>
                  </div>
                </div>
              </div>

              <div class="d-flex mt-4">
                <div class="col-5 title">
                  <span>NIK</span> :
                </div>
                <span class="desc">{{ auth()->user()->nik }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Nama</span> :
                </div>
                <span class="desc">{{ auth()->user()->name }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Kelamin</span> :
                </div>
                <span class="">{{ auth()->user()->jenis_kelamin }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Email</span> :
                </div>
                <span class="">{{ auth()->user()->email }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Whatsapp</span> :
                </div>
                <span class="desc">{{ auth()->user()->hp }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Telepon</span> :
                </div>
                <span class="desc">{{ auth()->user()->telp }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Alamat</span> :
                </div>
                <span class="desc">{{ auth()->user()->alamat }}</span>
              </div>

              <div class="d-flex">
                <div class="col-5 title">
                  <span>Marketplace</span> :
                </div>
                <span class="desc">BOOMBEST.net</span>
              </div>
            </div>

            <div class="row">
              <div class="d-block col-lg-5">
                <div class="d-flex justify-content-between">
                  <div class="mt-4 mx-2">
                    <span class="text-dark" style="font-size: 25px;">Wilayah Asal</span>
                    <div class="d-flex">
                      <div class="bg-success" style="width: 48px; height: 5px;"></div>
                      <div class="bg-warning" style="width: 48px; height: 5px;"></div>
                      <div class="bg-danger" style="width: 48px; height: 5px;"></div>
                    </div>
                  </div>
                </div>

                <div class="d-flex mt-4">
                  <div class="col-5 title">
                    <span>Kota</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kota }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Kecamatan</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kecamatan }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Kabupaten</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->kabupaten }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Provinsi</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->provinsi }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Negara</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->negara }}</span>
                </div>
              </div>

              <div class="d-block col-lg-7 col-12">
                <div class="d-flex justify-content-between">
                  <div class="mt-4 mx-2">
                    <span class="text-dark" style="font-size: 25px;">Rekening</span>
                    <div class="d-flex">
                      <div class="bg-success" style="width: 35px; height: 5px;"></div>
                      <div class="bg-warning" style="width: 35px; height: 5px;"></div>
                      <div class="bg-danger" style="width: 35px; height: 5px;"></div>
                    </div>
                  </div>
                </div>

                <div class="d-flex mt-4">
                  <div class="col-5 title">
                    <span>Bank</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->bank }}</span>
                </div>

                <div class="d-flex">
                  <div class="col-5 title">
                    <span>Rekening</span> :
                  </div>
                  <span class="desc">{{ auth()->user()->no_rek }}</span>
                </div>
              </div>
            </div>

            <div class="p-3 mt-3 float-right">
              <a href="/profile/editprofile/{{ auth()->user()->id }}" class="btn btn-success">Edit Profile</a>
            </div>
          </div>
        </div>
      </div>



      <div class="mb-5">
        <br>
      </div>

</div>
@endsection
