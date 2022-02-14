@extends('layouts.admin')

@section('navbar')
    <link rel="stylesheet" href="/tabel/style.css">
    <link rel="stylesheet" href="/tabel/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

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
                    <form action="{{ url("/searchmember") }}" method="GET" class="search cari">
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
                <h2>Halaman Data Member Boombest.net</h2>
                <p class="mb-md-0">Berisi Data Dari Member Boombest.net.</p>
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

                            .icon-aksi{
                                padding: 0 5px 5px 0;
                                font-size: 12px;
                            }

                            .icon-aksi box-icon{
                                padding: 4px;
                                border-radius: 10px;
                                color: #000;
                                background-color: yellow;
                            }

                            .add{
                                font-size: 18px;
                            }

                            .auto1{
                                display:block;
                                padding: 0 10 0 0 px;
                                margin-top:5px;
                                height: 500px;
                                overflow:auto;
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
                        <i class="fa fa-users icon-lg text-success pt-2" style="font-size: 50px" aria-hidden="true"></i>
                        <div class="d-flex flex-column justify-content-around pt-3" style="line-height: 6px">
                          <small class="mb-0 text-muted" style="font-size: 18px;">Jumlah Member</small>
                          <h5 class="mr-2 mb-0 text-success" style="font-size: 25px;">{{ $user->count() }}</h5>
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
        <div class="row justify-content-center">
            <!--div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Table #08</h2>
            </div-->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--h3 class="h5 mb-4 text-center">Collapsible Table</h3-->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="dropdown">

                        <a href="{{ route('memberAktif') }}" class="btn btn-secondary py-2 px-4 bg-white border-0 text-dark shadow-none font-weight-medium active">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Semua</span>
                        </a>


                        <a class="btn btn-secondary bg-white py-2 px-4  border-0 text-dark shadow-none font-weight-medium" href="{{ route('memberPlatinum') }}">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Platinum</span>
                        </a>

                        <a class="btn btn-secondary py-2 px-4 bg-primary border-0 text-white shadow-none font-weight-medium" href="{{ route('memberBiasa') }}">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Member</span>
                        </a>

			<a class="btn btn-secondary py-2 px-4 bg-white border-0 text-dark shadow-none font-weight-medium" href="{{ route('memberExpired') }}">
                            <span class="mb-0 d-inline-block" style="font-size: 12px">Member Proses</span>
                        </a>

                        <a class="py-2 px-4 border-0 text-dark shadow-none font-weight-medium float-right" href="{{ route('memberBiasa') }}">
                            <span class="mb-0 d-inline-block" style="font-size: 20px">Table Member Normal</span>
                        </a>

                    </li>

                </ul>

		<div class="d-flex">
                    <div class="col-3" style="margin-left: -15px;">
                        <form action="{{ url("/memberaktif/namamember") }}" method="GET" class="d-flex">
                            <input style="font-size: 12px" type="text" class="form-control" placeholder="Nama member" aria-label="search" aria-describedby="search" value="{{Request::get('namamember')}}"  name="namamember">
                            <button type="submit" class="py-0 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: -5px;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-2" style="margin-left: -25px;">
                        <form action="{{ url("/memberaktif/noregister") }}" method="GET" class="d-flex">
                            <input style="font-size: 12px" type="text" class="form-control" placeholder="No. register" aria-label="search" aria-describedby="search" value="{{Request::get('noregister')}}"  name="noregister">
                            <button type="submit" class="py-0 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: -5px;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-2" style="margin-left: -25px;">
                        <form action="{{ url("/memberaktif/noreferal") }}" method="GET" class="d-flex">
                            <input style="font-size: 12px" type="text" class="form-control" placeholder="No. referal" aria-label="search" aria-describedby="search" value="{{Request::get('noreferal')}}"  name="noreferal">
                            <button type="submit" class="py-0 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: -5px;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-2" style="margin-left: -25px;">
                        <form action="{{ url("/memberaktif/daftar") }}" method="GET" class="d-flex">
                            <input style="font-size: 12px" type="date" class="form-control px-2" id="date-picker" placeholder="Tgl. Daftar" aria-label="search" aria-describedby="search" value="{{Request::get('daftar')}}"  name="daftar">
                            <button type="submit" class="py-0 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: -5px;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-2" style="margin-left: -3px;">
                        <form action="{{ url("/memberaktif/expired") }}" method="GET" class="d-flex">
                            <input style="font-size: 12px" type="date" class="form-control px-2" id="date-picker" placeholder="Tgl. Expired" aria-label="search" aria-describedby="search" value="{{Request::get('expired')}}"  name="expired">
                            <button type="submit" class="py-0 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: -5px;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-2" style="margin-left: -3px;">
                        <form action="{{ url("/memberaktif/group") }}" method="GET" class="d-flex">
                            {{-- <input style="font-size: 12px" type="text" class="form-control px-2" placeholder="Group" aria-label="search" aria-describedby="search" value="{{Request::get('group')}}"  name="group"> --}}
                            <style>
                                .dropdown-menu .dropdown-item{
                                    display: none;
                                }
                            </style>
                            <select type="text" class="form-control" placeholder="Group" aria-label="search" aria-describedby="search" style="font-size: 12px" value="{{Request::get('group')}}" name="group">
                                <option selected disabled class="dropdown-menu">Group</option>
                                <option value="1" class="dropdown-item">Platinum</option>
                                <option value="0" class="dropdown-item">Member</option>
                            </select>

                            <button type="submit" class="pt-1 px-2 bg-primary" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px; margin-left: 130px; position: absolute;">
                                <i class="fa fa-search text-white" aria-hidden="true" style="font-size: 15px"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="table-wrap auto1">
                    <table class="table myaccordion table-hover" id="accordion">
                      <thead>
                        <tr>
                          <th class="px-4 py-4 pb-4 col-1">#</th>
                          <th class="px-2 py-4 pb-4 col-1">Foto</th>
                          <th class="px-2 py-4 pb-4">Nama</th>
                          <th class="px-2 py-4 pb-4">No. Register</th>
                          <th class="px-2 py-4 pb-4">No. Referal</th>
                          <th class="px-2 py-4 pb-4">Tgl Daftar</th>
                          <th class="px-2 py-4 pb-4">Tgl. Expired</th>
                          {{--<th class="px-2 py-4 pb-4">Point</th>--}}
                          <th class="px-2 py-4 pb-4">Group</th>
                          <th class="px-2 py-4 pb-4">Status</th>
                          <th class="px-2 py-4 pb-4 col-1">Aksi</th>
                          <th class="px-3 py-4 pb-4 ">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @foreach($user as $item)
                        @if($item->tgl_expired < NOW())
                        @elseif($item->role =="member")                        <tr data-toggle="collapse" data-target="#collapseTwo{{ $item->id }}" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                          <th scope="row" class="p-4 col-1">{{ $no++ }}</th>

                          <td class="p-2 col-1 pb-0">
                                @if($item->image_profile == "")
                                <img src="/assets/img/member/profile.png" alt="" class="foto-view">
                                @else
                                <img src="{{ url('profPicMember/'. $item->image_profile) }}" alt="" class="foto-view">
                                @endif
                          </td>
                          <td class="p-2 col-2" style="font-size: 12px;">{{ $item->name }}</td>
                          <td class="p-2" style="font-size: 12px;">{{ $item->register_no }}</td>
                          <td class="p-2" style="font-size: 12px;">{{ $item->reg_reff }}</td>
                          <td class="p-2" style="font-size: 12px;">{{ $item->tgl_daftar }}</td>
                          <td class="p-2" style="font-size: 12px;">{{ $item->tgl_expired }}</td>
                          {{--<td class="p-2 text-warning" style="font-size: 30px;">{{ $item->point_reg }}</td>--}}
                          <td class="p-2" style="font-size: 12px;">
                            @if ($item->root_flag == '1')
                            PLATINUM
                            @else
                            MEMBER
                            @endif
                          </td>

                          <td class="p-2" style="font-size: 12px;">
                            @if ($item->tgl_expired > NOW())
                            Aktif
                            @elseif($item->tgl_expired < NOW())
                            Expired
                            @else
                            tidak ditemukan
                            @endif
                          </td>

                          <td class="p-2" style="font-size: 12px;">
                            <!--edit-->
                            <a href="/memberaktif/editmember/{{ $item->id }}" style="cursor:pointer;" class="icon-aksi"> <box-icon type='solid' name='pencil' class="bg-warnig text-white"></box-icon></a>
                          </td>

                          <td class="p-2">
                              <i class="fa" aria-hidden="false"></i>
                           </td>
                        </tr>
                        <tr>
                            <td colspan="12" id="collapseTwo{{ $item->id }}" class="collapse acc bg-white" data-parent="#accordion">
                                <div class="d-flex">
                                    <div class="">
                                        @if( $item->image  == '')
                                        <div class="img" style="background-image: url('/assets/img/test.png'); background-size: cover; background-position: center; width: 500px; height: 300px; border-radius: none;"></div>
                                        @else
                                        <div class="img" type="button" data-toggle="modal" data-target="#ktppreview{{ $item->id  }}" style="background-image: url('{{ url('http://member.boombest.net/thumbnails/'. $item->image) }}'); background-size: cover; background-position: center; width: 500px; height: 300px; border-radius: none;"></div>
                                        <div class="img" type="button" data-toggle="modal" data-target="#ktppreview{{ $item->id  }}" style="background-image: url('{{ url('/ktpMember/'. $item->image) }}'); background-size: cover; background-position: center; width: 500px; height: 300px; border-radius: none; margin-top: -300px;"></div>

					@endif
                                    </div>
                                    <div class="row">
                                        <div class="ml-5">
                                            <label class="col-form-label">Nama:</label>
                                            @if ($item->name == '')
                                            <h6 style="font-size: 12px">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px">{{ $item->name }}</h6>
                                            @endif

                                            <label class="col-form-label">Email:</label>
                                            @if ($item->email == '')
                                            <h6 style="font-size: 12px width: 100px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px">{{ $item->email }}</h6>
                                            @endif

                                            <label class="col-form-label">NIK:</label>
                                            @if ($item->nik == '')
                                            <h6 style="font-size: 12px">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px">{{ $item->nik }}</h6>
                                            @endif

                                            <label class="col-form-label">Bank:</label>
                                            @if ($item->bank == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->bank }}</h6>
                                            @endif
                                        </div>

                                        <div class="ml-5">
                                            <label class="col-form-label">Username:</label>
                                            @if ($item->username == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->username }}</h6>
                                            @endif

                                            <label class="col-form-label">Jenis Kelamin:</label>
                                            @if ($item->jenis_kelamin == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->jenis_kelamin }}</h6>
                                            @endif

                                            <label class="col-form-label">Whatsapp:</label>
                                            @if ($item->hp == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->hp }}</h6>
                                            @endif

                                            <label class="col-form-label">No. Rekening:</label>
                                            @if ($item->no_rek == '')
                                            <h6 style="font-size: 12px">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->no_rek }}</h6>
                                            @endif
                                        </div>

                                        <div class="ml-5">
                                            <label class="col-form-label">Kota:</label>
                                            @if ($item->kota == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->kota }}</h6>
                                            @endif

                                            <label class="col-form-label">Kecamatan:</label>
                                            @if ($item->kecamatan == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->kecamatan }}</h6>
                                            @endif

                                            <label class="col-form-label">Provinsi:</label>
                                            @if ($item->provinsi == '')
                                            <h6 style="font-size: 12px;">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->provinsi }}</h6>
                                            @endif

                                            <label class="col-form-label">Negara:</label>
                                            @if ($item->negara == '')
                                            <h6 style="font-size: 12px">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px; width: 150px;">{{ $item->negara }}</h6>
                                            @endif

                                        </div>
                                        <div class="col-12" style="margin-left: 33px;">
                                            <label class="col-form-label">Alamat:</label>
                                            @if ($item->alamat == '')
                                            <h6 style="font-size: 12px">Belum terdaftar</h6>
                                            @else
                                            <h6 style="font-size: 12px;">{{ $item->alamat }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>

<div class="modal fade" id="ktppreview{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
	<img src="{{ url('http://member.boombest.net/thumbnails/'. $item->image) }}" style="width: 500px;">
	<img src="{{ url('/ktpMember/'. $item->image) }}" style="width: 500px;">
      </div>
    </div>
  </div>
</div>

                        @endif
                        @endforeach
                      </tbody>
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
    var myDropdown = document.getElementById('myDropdown')
        myDropdown.addEventListener('show.bs.dropdown', function () {
        // do something...
        })

        window.setTimeout("waktu()", 1000);
</script>
<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
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
