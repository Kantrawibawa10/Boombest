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
  <div class="row container">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2>Halaman Tambah Produk</h2>
            <p class="mb-md-0">Silakan Tambahkan Produk Anda.</p>
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

                            <form action="/produksaya/insert" method="POST" enctype="multipart/form-data">
                              @csrf
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
                                       <img src="/assets/img/produk.png {{-- url('products/'. $barang->img_barang) --}}" alt="" class="foto-upload bg-img" id="gambar_nodin">
                                       <label class="btn-input">
                                           <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_barang" id="preview_gambar" required>
                                           <i class="fa fa-upload" aria-hidden="true"></i><br>
                                           Choise your <br>file img
                                       </label>
                                   </label>
                               </p>
                               <!--img upload--->


                              <div class="mb-3 col-md-6 d-none">
                                <label for="id_member" class="form-label">ID Member</label>
                                <input type="hidden" class="form-control" name="id_member" id="id_member" placeholder="ID Member" value="{{ auth()->user()->id }}" required >
                              </div>


                              <div class="mb-3 col-md-6">
                                <label for="namabarang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="namabarang" placeholder="Nama barang" required>
                              </div>

			      
                              <div class="mb-3 col-md-4">
                                <label for="hargabarang" class="form-label">Harga Barang</label>
                                <input type="number" class="form-control mb-2" name="harga" id="hargabarang" placeholder="Rp:..." required>
				<span class="text-danger" style="font-size: 15px;">*Format harga harus angka!!!</span>
                              </div>

			      <div class="d-flex">
    				<div class="mb-3 col-md-4">
      				    <label for="instagram" class="form-label">Instagram</label>
      				    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram anda">
				    <div class="d-flex mt-2"> <p class="mr-2" style="font-size: 11px;">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="instagram" value="Belum ada"> <p style="font-size: 11px;">Tidak Ada</p></div>
    				</div>

			        <div class="mb-3 col-md-4">
      				    <label for="namabarang" class="form-label">Link Instagram</label>
      				    <input type="text" class="form-control" name="link_ig" id="namabarang" placeholder="https//:.....">
				    <div class="d-flex mt-2"> <p class="mr-2" style="font-size: 11px;">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="link_ig" value="Belum ada"> <p style="font-size: 11px;">Tidak Ada</p></div>
    				</div>
			      </div>

			      <div class="d-flex">
    				<div class="mb-3 col-md-4">
      				    <label for="namabarang" class="form-label">Facebook</label>
      				    <input type="text" class="form-control" name="facebook" id="namabarang" placeholder="Facebook anda" >
				    <div class="d-flex mt-2"> <p class="mr-2" style="font-size: 11px;">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="facebook" value="Belum ada"> <p style="font-size: 11px;">Tidak Ada</p></div>
    				</div>

			        <div class="mb-3 col-md-4">
      				    <label for="namabarang" class="form-label">Link Facebook</label>
      				    <input type="text" class="form-control" name="link_fb" id="namabarang" placeholder="https//:....." >
				    <div class="d-flex mt-2"> <p class="mr-2" style="font-size: 11px;">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="link_fb" value="Belum ada"> <p style="font-size: 11px;">Tidak Ada</p></div>
    				</div>
			      </div>
			     

			      <div class="mb-3 col-md-6">
                                <label for="wa" class="form-label">WhatsAap</label>
                                <input type="number" class="form-control" name="wa" id="wa" placeholder="+62,..." >
				<span class="text-danger" style="font-size: 15px;">*Format nomor sesuai WhatsAap anda!!! <br> contoh 6289685830987</span>
				<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="wa" value="Belum ada"> <p>Tidak Ada</p></div>
                              </div>



                              <div class="col-12 mt-5 mb-5">
                                  <div class="products-top bg-success">
                                      <div class="products-top-inner">
                                          <div class="products-found">
                                              <p><span class="text-white">Detail Produk</span></p>
                                          </div>
                                          <div class="products-sort">
                                              <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="mb-3 col-md-3">
                                <label for="namabarang" class="form-label">Kondisi</label>
                                <select type="text" id="kondisi" name="kondisi" class="form-control dropdown-toggle" value="">
                                    <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Kondisi</option>
                                    <option value="Baru" class="dropdown-item">Baru</option>
                                    <option value="Bekas" class="dropdown-item">Bekas</option>
                                </select>
                              </div>

                              <div class="mb-3 col-md-3">
                                <label for="namabarang" class="form-label">Berat Barang</label>
                                <input type="text" class="form-control" name="berat" id="berat" placeholder="...Gram/Kg">
				<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="berat" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                              </div>

                              <div class="mb-3 col-md-3">
                                <label for="namabarang" class="form-label">Kategori</label>
                                <select type="text" name="kategori" class="form-control dropdown-toggle" value="" required>
                                    <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Kategori</option>
                                    @foreach($inputkategori as $kategori)
                                    <option value="{{$kategori->kategori}}" class="dropdown-item">{{$kategori->nama}}</option>
                                    @endforeach
                                </select>
                              </div>

                                  <div class="mb-3 col-md-3">
                                      <label for="daerah" class="form-label">Wilayah</label>
                                      <select type="text" name="daerah" class="form-control dropdown-toggle" required>
                                          <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Pilih Wilayah!</option>
                                          @foreach($inputwilayah as $kategori)
                                              <option value="{{$kategori->daerah}}" class="dropdown-item">{{$kategori->nama_daerah}}</option>
                                          @endforeach
                                      </select>
                                  </div>

                              <div class="form-floating mb-3 col-md-6">
                                <label for="floatingTextarea2">Spesifikasi</label>
                                <textarea class="form-control" placeholder="Spesifikasi produk anda" name="spesifikasi" id="floatingTextarea2" style="height: 100px"></textarea>
		   		<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="spesifikasi" value="Tidak tersedia"> <p>Tidak Ada</p></div>
			      </div>

                              <div class="form-floating mb-3 col-md-6">
                                <label for="floatingTextarea2">Keunggulan</label>
                                <textarea class="form-control" placeholder="Keunggulan produk anda" name="keunggulan" id="floatingTextarea2" style="height: 100px"></textarea>
				<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="keunggulan" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                              </div>

                              <div class="form-floating mb-3 col-md-6">
                                <label for="floatingTextarea2">Ketentuan Garansi</label>
                                <textarea class="form-control" placeholder="Ketentuan Garansi produk anda" name="garansi" id="floatingTextarea2" style="height: 100px"></textarea>
				<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="garansi" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                              </div>

                              <div class="form-floating mb-3 col-md-6">
                                <label for="floatingTextarea2">Deskripsi Lainnya</label>
                                <textarea class="form-control" placeholder="Deskripsi Lain dari produk anda" name="lainnya" id="floatingTextarea2" style="height: 100px"></textarea>
				<div class="d-flex mt-2"> <p class="mr-2">Opsi Lain</p> <input type="checkbox" class="mr-1 mt-1" name="lainnya" value="Tidak tersedia"> <p>Tidak Ada</p></div>
                              </div>

                             <hr class="mt-5 bg-success">
                              <div class="d-flex mt-5">
                                <button type="button" class="btn btn-success col-md-3 mr-3" data-toggle="modal" data-target="#simpan">Simpan</button>
                                <a type="button" class="btn btn-danger col-md-3 text-white" data-toggle="modal" data-target="#batal">Batal</a>
                              </div>

                              <!--pop up simpan-->
                              <div class="modal fade" id="simpan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="staticBackdropLabel">Tambah Barang</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Yakin Ingin Menambahkan Barang Ini?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                      <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--pop up simpan-->

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

<!--pop up batal-->
<div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Batal Manambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Yakin Ingin Kembali?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        <a href="{{ route('produksaya') }}" class="btn btn-success">Ya</a>
      </div>
    </div>
  </div>
</div>
<!--pop up batal-->

@endsection
