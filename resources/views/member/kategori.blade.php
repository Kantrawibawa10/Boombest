@extends('layouts.member')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 grid-margin">
          <section class="products-grid mt-5">
              <div class="container">
                  <div class="row">

                      <div class="col-lg-12 col-md-8 col-12">
                        <div class="row">
                              <div class="col-12">
                                  <div class="products-top bg-success">
                                      <div class="products-top-inner">
                                          <div class="products-found">
                                              <p><span class="text-white">Kategori Produk</span></p>
                                          </div>
                                          <div class="products-sort">
                                              <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="justify-content-start p-2">

                            <form action="{{ route('kategori') }}" method="POST" enctype="multipart/form-data">


                              <!--img upload--->
                              <label for="namabarang" class="form-label">Foto Kategori:</label>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <p class="image_upload mb-5">
                                   <label class="img-upload">
                                       <style media="screen">
                                         .bg-img{
                                           background: white;
                                           border-radius: 50%;
                                           border: 1px solid gray;
                                         }
                                       </style>
                                       <img src="../assets/img/produk.png" alt="" class="foto-upload bg-img">
                                       <label class="btn-input">
                                           <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_kategori" id="img_kategori" value="" required>
                                           <i class="fa fa-upload" aria-hidden="true"></i><br>
                                           Choise your <br>file img
                                       </label>
                                   </label>
                               </p>
                               <!--img upload--->

                              <div class="mb-3 col-md-3">
                                <label for="kode" class="form-label">Kategori</label>
                                <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori" required>
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="namatoko" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kategori" required>
                              </div>

                             <hr class="mt-5 bg-success">
                             <div class="d-flex mt-5">
                                <button type="submit" class="btn btn-success col-md-3 mr-3">Simpan</button>
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
@endsection
