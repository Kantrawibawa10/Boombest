@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5" style="padding-top: 11.5em;">
  <div class="row">
    <div class="col-md-12 grid-margin">
          <section class="products-grid mt-5">
              <div class="container">
                  <div class="row">

                      <div class="col-lg-12 col-md-8 col-12">
                        <h1>Buat Toko Anda Disini</h1>
                        <div class="row">
                              <div class="col-12">
                                  <div class="products-top bg-success">
                                      <div class="products-top-inner">
                                          <div class="products-found">
                                              <p><span class="text-white">Tampilan Toko</span></p>
                                          </div>
                                          <div class="products-sort">
                                              <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="justify-content-start p-2">

                            <form action="{{ route('buattoko') }}" method="POST" enctype="multipart/form-data">


                              <!--img upload--->
                              <label for="namabarang" class="form-label">Foto Toko</label>

                               <p class="image_upload mb-5">
                                <label class="img-upload">
                                    <style media="screen">
                                        .bg-img{
                                            background: white;
                                            border-radius: 50%;
                                            border: 1px solid gray;
                                        }
                                    </style>
                                    <img src="../assets/img/produk.png" alt="" class="foto-upload bg-img img-fluid" id="gambar_nodin">
                                    <label class="btn-input">
                                        <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="img_toko" id="preview_gambar">
                                        <i class="fa fa-upload" aria-hidden="true"></i><br>
                                        Choise your <br>file img
                                    </label>
                                </label>
                               </p>

                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <!--img upload--->

                              <div class="mb-3 col-md-3">
                                <label for="referal" class="form-label">ID Member</label>
                                <input type="text" class="form-control" name="id_member" id="id_member" placeholder="Ref" value="{{ auth()->user()->id }}" required disabled>
                                <input type="hidden" class="form-control" name="id_member" id="id_member" placeholder="Ref" value="{{ auth()->user()->id }}" required>
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="namatoko" class="form-label">Nama Toko</label>
                                <input type="text" class="form-control" name="nama_toko" id="nama_toko" placeholder="Nama toko/usaha anda" required>
                              </div>

                              <div class="mb-3 col-md-6">
                                <label for="alamattoko" class="form-label">Alamat Toko</label>
                                <input type="text" class="form-control" name="alamat_toko" id="alamattoko" placeholder="Alamat toko anda" required>
                              </div>

                              <div class="form-floating mb-3 col-md-6">
                                <label for="floatingTextarea2">Deskripsi Toko</label>
                                <textarea class="form-control" placeholder="Deskripsi Lain dari toko anda" name="deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
                              </div>

                             <hr class="mt-5 bg-success">
                             <div class="d-flex mt-5 mb-5">
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

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<script>

		function bacaGambar(input) {

			if (input.files && input.files[0]) {

				var reader = new FileReader();



				reader.onload = function (e) {

					$('#gambar_nodin').attr('src', e.target.result);

				}



				reader.readAsDataURL(input.files[0]);

			}

		}



		$("#preview_gambar").change(function(){

			bacaGambar(this);

		});

	</script>
@endsection
