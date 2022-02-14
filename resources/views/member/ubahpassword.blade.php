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






        <div class="container">

            <div class="row">
                <div class="col-md-12 grid-margin">
                    <section class="products-grid">
                        <div class="container">

                            <div class="row">
                              <div class="row container mx-2">
                                <div class="col-md-12 grid-margin">
                                  <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-end flex-wrap">
                                      <div class="mr-md-3 mr-xl-5">
                                        <h2>Halaman Ubah Password </h2>
                                        <p class="mb-md-0">Silakan Ubah Password Anda di sini.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="col-lg-12 col-md-8 col-12">

                                    <div class="justify-content-start p-2">

                                        <form action="{{route('postubah')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                              <div class="col-12 mb-5">
                                                  <div class="products-top bg-success">
                                                      <div class="products-top-inner">
                                                          <div class="products-found">
                                                              <p><span class="text-white">Rubah Password </span></p>
                                                          </div>
                                                          <div class="products-sort">
                                                              <br>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="mb-3 col-md-6">
                                                  <label for="password" class="form-label">Password Lama</label>
                                                  <div class="d-flex">
						  <input type="password" class="form-control" name="password_lama" id="password" placeholder="password">
						  <div class="eye" onclick="myFunction()" style="margin-top: -20px;">
                        			     <span class="input-group-text mt-3 bg-transparent" style="height: 57px; position: absolute; margin-left: -55px; border: none;">
                        				<svg id="openeye" style="display: none; fill: gray;" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                            				  <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                                			  c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                                			  C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                                			  c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                                			  M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                                			  c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                                			  c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                        				</svg>

                        				<svg id="slasheye" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481; fill: gray;">
                            				  <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                            				  <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                                			  C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                                			  c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                            				  <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                                			  c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                                			  c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                                			  l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                                			  C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                                			  c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>
                        				</svg>
                        			    </span>
                    				 </div>

						  </div>
                                              </div>

                                              <div class="mb-3 col-md-6">
                                                  <label for="password" class="form-label">Password Baru</label>
                                                  <div class="d-flex">
						  <input type="password" class="form-control" name="password" id="passwordnew" placeholder="password baru">
						  <div class="eye" onclick="myFunction1()" style="margin-top: -20px;">
                        			     <span class="input-group-text mt-3 bg-transparent" style="height: 57px; position: absolute; margin-left: -55px; border: none;">
                        				<svg id="openeye1" style="display: none; fill: gray;" width="20px" height="20px" viewBox="0 0 98.48 98.48" style="enable-background:new 0 0 98.48 98.48;">
                            				  <path d="M97.204,45.788c-0.865-1.02-21.537-24.945-47.963-24.945c-26.427,0-47.098,23.925-47.965,24.946
                                			  c-1.701,2-1.701,4.902,0.001,6.904c0.866,1.02,21.537,24.944,47.964,24.944c26.426,0,47.098-23.926,47.964-24.946
                                			  C98.906,50.691,98.906,47.789,97.204,45.788z M57.313,35.215c1.777-0.97,4.255,0.143,5.534,2.485
                                			  c1.279,2.343,0.875,5.029-0.902,5.999c-1.776,0.971-4.255-0.143-5.535-2.485C55.132,38.871,55.535,36.185,57.313,35.215z
                                			  M49.241,68.969c-18.46,0-33.995-14.177-39.372-19.729c3.631-3.75,11.898-11.429,22.567-16.021
                                			  c-2.081,3.166-3.301,6.949-3.301,11.021c0,11.104,9.001,20.105,20.105,20.105s20.106-9.001,20.106-20.105
                                			  c0-4.072-1.219-7.855-3.3-11.021C76.715,37.812,84.981,45.49,88.612,49.24C83.235,54.795,67.7,68.969,49.241,68.969z"/>
                        				</svg>

                        				<svg id="slasheye1" width="20px" height="20px" viewBox="0 0 98.48 98.481" style="enable-background:new 0 0 98.48 98.481; fill: gray;">
                            				  <path d="M69.322,44.716L49.715,64.323C60.438,64.072,69.071,55.438,69.322,44.716z"/>
                            				  <path d="M97.204,45.789c-0.449-0.529-6.245-7.23-15.402-13.554l-6.2,6.2c5.99,3.954,10.559,8.275,13.011,10.806
                                			  C83.235,54.795,67.7,68.969,49.241,68.969c-1.334,0-2.651-0.082-3.952-0.222l-7.439,7.438c3.639,0.91,7.449,1.451,11.391,1.451
                                			  c26.426,0,47.098-23.927,47.964-24.946C98.906,50.692,98.906,47.79,97.204,45.789z"/>
                            				  <path d="M90.651,15.901c0-0.266-0.104-0.52-0.293-0.707l-7.071-7.07c-0.391-0.391-1.022-0.391-1.414,0L66.045,23.952
                                			  c-5.202-1.893-10.855-3.108-16.804-3.108c-26.427,0-47.098,23.926-47.965,24.946c-1.701,2-1.701,4.902,0.001,6.903
                                			  c0.517,0.606,8.083,9.354,19.707,16.319l-12.86,12.86c-0.188,0.188-0.293,0.441-0.293,0.707c0,0.267,0.105,0.521,0.293,0.707
                                			  l7.071,7.07c0.195,0.194,0.451,0.293,0.707,0.293c0.256,0,0.512-0.099,0.707-0.293l73.75-73.75
                                			  C90.546,16.421,90.651,16.167,90.651,15.901z M9.869,49.241C13.5,45.49,21.767,37.812,32.436,33.22
                                			  c-2.081,3.166-3.301,6.949-3.301,11.021c0,4.665,1.601,8.945,4.27,12.352l-6.124,6.123C19.129,58.196,12.89,52.361,9.869,49.241z"/>
                        				</svg>
                        			    </span>
                    				  </div>
						  </div>
                                              </div>



                                            <hr class="mt-5 bg-success">
                                            <div class="d-flex mt-5">
                                                <button type="button" data-toggle="modal" data-target="#simpan" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                                <a type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger col-md-3 text-white">Batal</a>
                                            </div>

                                            <!-- Modal simpan-->
                                            <div class="modal fade" id="simpan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel"></h5>
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

<script>
    function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("openeye");
        var z = document.getElementById("slasheye");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script>

<script>

    function myFunction1() {
        var x = document.getElementById("passwordnew");
        var y = document.getElementById("openeye1");
        var z = document.getElementById("slasheye1");

        if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else {
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        }
    }

</script>





@endsection
