<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>BOOMBEST.net</title>
  </head>
  <body>
    @foreach($user as $users)	
    <style media="screen">
      body{
        background: #2DAD29;
      }

      .count{
        background: red;
        font-size: 13px;
        color: white;
        padding: 2px 7px 2px 7px;
        border-radius: 50%;
        position: absolute;
        margin-left: -12px;
      }

      /*img uplod form input start */
      .image_upload{
          position: relative;
          overflow: hidden;
          width: 200px;
          height: 200px;
          border-radius: 50%;
      }


      .img-upload .foto-upload{
          border-radius: 50%;
          z-index: 2;
          width: 200px;
          height: 200px;
          transition: 0.5s;
          position: absolute;
          background-position: center;
          background-size: cover;
          cursor: pointer;
      }

      .img-upload .foto-upload:hover{
          -webkit-transform: scale(1.08);
          transform: scale(1.30);
          opacity: 10%;
      }

      .img-upload .btn-input input[type="file"] {
          display: none;
      }

      .img-upload .btn-input{
          width: 200px;
          height: 200px;
          border-radius: 50% ;
          background: #C3C3C3;
          position: relative;
          display: inline-block;
          cursor: pointer;
      }

      .img-upload .btn-input{
          font-size: 20px;
          color: #ffffff;
          padding: 60px 37px;
          text-align: center;
          line-height: 25px;
      }
      /*img uplod form input end */
    </style>
    <nav class="navbar fixed-top bg-success" style="box-shadow:inset 0 0 20px 0 rgba(0,0,0,0.2)">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="/mobile/img/logoatas.png" alt="" width="100" style="width: 150px">

        </a>

      </div>
    </nav>

    <div class=" container mt-5 pt-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/mobile/img/editprofile.jpg" class="d-block w-100" alt="..." style="opacity: 90%;">
          </div>
        </div>
      </div>
    </div>
   
   <form action="/user/updateprofile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
      <div class="container" style="margin-top: -50px; z-index: 100; position: relative;">
        <div class="container bg-white px-4 pt-3 col-md-10"
        style="border-radius: 10px;
        box-shadow:  -4px -4px 8px rgba(0,0,0,0.4);
        border: 1px solid grey; opacity: 95%;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between">
              <a type="button" data-toggle="modal" data-target="#detail" class="navbar-brand d-flex">
                		
		<style>
			/*img view form start */
        .image_view{
            position: relative;
            overflow: hidden;	
            border-radius: 50%;
        }


        .img-view .foto-view{
            border-radius: 50%;
            z-index: 2;
	    transition: 0.5s;
            background-position: center;
            background-size: cover;
	    background-image: url('/assets/img/member/profile.png');
	    border: 1px solid gray;
        }

        .img-view .foto-view:hover{
            -webkit-transform: scale(1.08);
            transform: scale(1.30);
        }
        /*img view form end */

	/*img edit form input start */
        .image_edit{
            position: relative;
            overflow: hidden;
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }


        .img-edit .foto-edit{
            border-radius: 50%;
            z-index: 2;
            width: 200px;
            height: 200px;
            transition: 0.5s;
            position: absolute;
            background-position: center;
            background-size: cover;
	    background-image: url('/assets/img/member/profile.png');
            border: 1px solid gray;
            cursor: pointer;
        }

        .img-edit .foto-edit:hover{
            -webkit-transform: scale(1.08);
            transform: scale(1.30);
            opacity: 50%;
        }

        .img-edit .btn-input input[type="file"] {
            display: none;
        }

        .img-edit .btn-input{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: black;
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .img-edit .btn-input{
            font-size: 30px;
            color: #ffffff;
            padding: 60px 37px;
            text-align: center;
            line-height: 30px;
        }
        /*img edit form input end */
		</style>

	  
		<p class="image_view">
                    <label class="img-view">
                       <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view" width="80" height="80">
                    </label>
                </p>
                		
		<div class="d-block pt-4">
                  <h1 class="text-dark mx-2" style="text-transform: capitalize; line-height: 20px; width: 10px;">{{ auth()->user()->username }}</h1>
                  <h6 class="text-dark mx-2" style="font-size: 17px; font-weight: 400; width: 10px; padding-left: 2px;">No Register: {{ $referal->register_no }}</h6>
                </div>
              </a>

              <style media="screen">
                .btn-share{
                  font-size: 20px;
                  background: white;
                  border-radius: 50%;
                  width: 35px; height: 35px;
                  padding: 1px 8px 6px;
                  box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
                  border: 1px solid grey;
                  cursor: pointer;
                  color: blue;
                  transition: 0.5s;
                }

                .btn-share:hover{
                  background: #2DAD29;
                  color: white;
                }

                .title,.desc{
                  color: white;
                }


              </style>

            </div>
          </div>
        </div>
      </div>


      <div class="col-md-10 m-auto">
	<div class="d-flex justify-content-between">
          <div class="mt-4 mx-2">
            <span class="text-white" style="font-size: 25px;">Foto Member</span>
            <div class="d-flex">
              <div style="background: white; width: 50px; height: 5px;"></div>
              <div class="bg-warning" style="width: 50px; height: 5px;"></div>
              <div class="bg-danger" style="width: 50px; height: 5px;"></div>
            </div>
          </div>
        </div>
	
	<div class="container py-2">
            <div class="col-md-12 mt-4">
	       <p class="image_edit">
                  <label class="img-edit">
                     <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-edit">
                     <label class="btn-input">
                        <input type="file" name="image_profile">
                        <i class="fa fa-camera" style="text-align: center" aria-hidden="true"></i>
                        Upload
                     </label>
                  </label>
                </p>
	    </div>
	</div>

        <div class="d-flex justify-content-between">
          <div class="mt-3 mx-2">
            <span class="text-white" style="font-size: 25px;">Detail Member</span>
            <div class="d-flex">
              <div style="background: white; width: 55px; height: 5px;"></div>
              <div class="bg-warning" style="width: 55px; height: 5px;"></div>
              <div class="bg-danger" style="width: 55px; height: 5px;"></div>
            </div>
          </div>
        </div>

        <div class="mt-3 mb-3">
          <div class="container py-2">
            <div class="col-md-12">
		<div class="mb-3 col-md-6">
                 <label for="name" class="form-label text-white">Nama</label>
    		 <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ auth()->user()->name }}"> 
    	       	 <div id="name" class="form-text text-warning">Ubah nama anda disini.</div>
  	       </div>
		
		<div class="mb-3 col-md-6">
                 <label for="name" class="form-label text-white">Kelamin</label>
    		 <div class="d-flex">
		    <span class="d-flex"><input type="radio" name="jenis_kelamin" value="Laki-laki" class="mt-2" id="jenis_kelamin" {{$users->jenis_kelamin == 'Laki-laki'? 'checked' : ''}}><p class="text-white px-2 pt-1"> Laki-laki </p></span>
		    <span class="d-flex px-3"><input type="radio" name="jenis_kelamin" value="Perempuan" class="mt-2" id="jenis_kelamin" {{$users->jenis_kelamin == 'Perempuan'? 'checked' : ''}}><p class="text-white px-2 pt-1"> Perempuan </p></span>
		 </div>
    	       	 <div id="name" class="form-text text-warning">Ubah Gender anda disini.</div>
  	       </div>

		
	       <div class="mb-3 col-md-6">
                 <label for="username" class="form-label text-white">Username</label>
    		 <input type="text" class="form-control" id="username" name="username" aria-describedby="username" value="{{ auth()->user()->username }}"> 
    	       	 <div id="username" class="form-text text-warning">Ubah username anda disini..</div>
  	       </div>

		<div class="mb-3 col-md-6">
                 <label for="email" class="form-label text-white">Email</label>
    		 <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="{{ auth()->user()->email }}"> 
    	       	 <div id="email" class="form-text text-warning">Ubah email anda disini.</div>
  	       </div>

		<div class="mb-3 col-md-6">
                 <label for="wa" class="form-label text-white">Whatsapp</label>
    		 <input type="text" class="form-control" id="wa" name="hp" aria-describedby="email" value="{{ auth()->user()->hp }}"> 
    	       	 <div id="wa" class="form-text text-warning">Ubah no. handphone anda disini.</div>
  	       </div>

		<div class="mb-3 col-md-6">
                  <label for="password" class="form-label text-white">Password</label><br>
                  <input type="hidden" name="password" value="{{ $users->password }}">
                  <a href="{{ route('editpassword') }}" class="btn btn-warning">Edit Password</a>
                </div>


              
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <div class="mx-2">
            <span class="text-white" style="font-size: 25px;">Asal Wilayah</span>
            <div class="d-flex">
              <div style="background: white; width: 48px; height: 5px;"></div>
              <div class="bg-warning" style="width: 48px; height: 5px;"></div>
              <div class="bg-danger" style="width: 48px; height: 5px;"></div>
            </div>
          </div>
        </div>

        <div class="mt-3 mb-3">
          <div class="container py-2">
            <div class="col-md-12">
              <div class="mb-3 col-md-6">
                 <label for="alamat" class="form-label text-white">Alamat</label>
    		 <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" value="{{ auth()->user()->alamat }}"> 
    	       	 <div id="alamat" class="form-text text-warning">Ubah alamat anda di sini.</div>
  	       </div>

               <div class="mb-3 col-md-6">
                 <label for="kota" class="form-label text-white">Kota</label>
    		 <input type="text" class="form-control" id="kota" name="kota" aria-describedby="kota" value="{{ auth()->user()->kota }}"> 
    	       	 <div id="kota" class="form-text text-warning">Ubah kota anda disini.</div>
  	       </div>

	       <div class="mb-3 col-md-6">
                 <label for="kec class="form-label text-white">Kecamatan</label>
    		 <input type="text" class="form-control" id="kec" name="kecamatan" aria-describedby="kec" value="{{ auth()->user()->kecamatan }}"> 
    	       	 <div id="kec" class="form-text text-warning">Ubah kecamatan anda disini.</div>
  	       </div>


              <div class="mb-3 col-md-6">
                 <label for="kab" class="form-label text-white">Kabupaten</label>
    		 <input type="text" class="form-control" id="kab" name="kabupaten" aria-describedby="kab" value="{{ auth()->user()->kabupaten }}"> 
    	       	 <div id="kab" class="form-text text-warning">Ubah kabupaten anda disini.</div>
  	       </div>

              <div class="mb-3 col-md-6">
                 <label for="prov" class="form-label text-white">Provinsi</label>
    		 <input type="text" class="form-control" id="prov" name="provinsi" aria-describedby="prov" value="{{ auth()->user()->provinsi }}"> 
    	       	 <div id="prov" class="form-text text-warning">Ubah provinsi anda disini.</div>
  	       </div>

	       <div class="mb-3 col-md-6">
                 <label for="negara" class="form-label text-white">Negara</label>
    		 <input type="text" class="form-control" id="negara" name="negara" aria-describedby="negara" value="{{ auth()->user()->negara }}"> 
    	       	 <div id="negara" class="form-text text-warning">Ubah negara anda disini.</div>
  	       </div>
	
	    <!---tidak dipakai----->		
	     <div class="mb-3 col-md-6 d-none">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" name="nik" id="nik" placeholder="nik" value="{{ $users->nik }}">
              </div>

              <div class="mb-3 col-md-6 d-none">
                  <label for="referal" class="form-label">Kode Referal</label>
                  <input type="text" class="form-control" name="referal" id="referal" placeholder="referal" value="{{ $users->referal }}">
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

              <div class="mb-3 col-md-6 d-none">
                  <label for="no_register" class="form-label">RegisterNoAktif</label>
                  <input type="text" class="form-control" name="no_register" id="no_register" placeholder="no_register" value="{{ $users->no_register }}">
              </div>
	      <!---tidak dipakai----->
		  
	    </div>
          </div>
        </div>
	
	<div class="d-flex justify-content-between">
          <div class="mx-2">
            <span class="text-white" style="font-size: 25px;">Rekening Member</span>
            <div class="d-flex">
              <div style="background: white; width: 70px; height: 5px;"></div>
              <div class="bg-warning" style="width: 70px; height: 5px;"></div>
              <div class="bg-danger" style="width: 70px; height: 5px;"></div>
            </div>
          </div>
        </div>

	<div class="mt-3 mb-5">
          <div class="container py-2">
            <div class="col-md-12">
              <div class="mb-3 col-md-6">
                 <label for="bank" class="form-label text-white">Bank</label>
    		 <input type="text" class="form-control" id="bank" name="bank" aria-describedby="bank" value="BNI"> 
    	       	 <div id="bank" class="form-text text-warning"Ubah bank anda disini.</div>
  	       </div>

              <div class="mb-3 col-md-6">
                 <label for="no_rek" class="form-label text-white">No. Rekening</label>
    		 <input type="text" class="form-control" id="no_rek" name="no_rek" aria-describedby="no_rek" value="{{ auth()->user()->no_rek }}"> 
    	       	 <div id="no_rek" class="form-text text-warning">Ubah no. rekening anda disini.</div>
  	       </div>
	
	    		
	      
	      <div class="d-flex justify-content-end mt-5">
	      	<div class="px-2"><button class="btn btn-success" type="submit">Simpan</button></div>
		<div class=""><a class="btn btn-danger" href="{{ route('member') }}" >Kembali</a></div>
	      </div>
            </div>
          </div>
        </div>

	
	
      </div>
     </form>

      <div class="mb-2">
        <br>
      </div>

    </div>

    @endforeach	
    <!---------------------------------------------------------------menu bar---------------------------------------------------------->
    <div class="container fixed-bottom" style=" z-index: 100; background-color: white; margin-bottom: -5px; border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <div class="d-flex justify-content-around pt-2 mt-1">
            <div style="font-size: 30px; cursor: pointer; line-height: 15px; text-decoration: none;" class="text-center"><a href="/" class="text-success" style="text-decoration: none;"><ion-icon name="home-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Home</p></a>
            </div>
            <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{ route('info') }}" class="text-primary" style="text-decoration: none;"><ion-icon name="information-circle-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Info</p></a>
            </div>

            @auth
	    <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{ route('merchant') }}" class="text-danger" style="text-decoration: none;"><ion-icon name="pricetags-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Merchant</p></a>
            </div>

            <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{route('poinMember')}}" class="text-warning" style="text-decoration: none;"><ion-icon name="wallet-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Point</p></a>
            </div>
            <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{ route('member') }}" class="text-primary" style="text-decoration: none;"><ion-icon name="person-circle-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Profile</p></a>
            </div>
            @endauth

            @guest
	    <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{ route('merchant') }}" class="text-danger" style="text-decoration: none;"><ion-icon name="pricetags-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Merchant</p></a>
            </div>

            <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{route('login')}}" class="text-secondary" style="text-decoration: none;"><ion-icon name="wallet-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Point</p></a>
            </div>
            <div style="font-size: 30px; cursor: pointer; line-height: 15px;" class="text-center"><a href="{{ route('login') }}" class="text-secondary" style="text-decoration: none;"><ion-icon name="person-circle-outline"></ion-icon>
                <p style="font-size: 12px; font-weight: 600;" class="text-center">Profile</p></a>
            </div>
            @endguest
        </div>
    </div>
    <!---------------------------------------------------------------menu bar---------------------------------------------------------->

	


    <script>
function copyToClipboard() {
  const text = document.getElementById('myInput').value;
    if (window.clipboardData && window.clipboardData.setData) {
        // IE specific code path to prevent textarea being shown while dialog is visible.
        return clipboardData.setData("Text", text); 

    } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
        var textarea = document.createElement("textarea");
        textarea.textContent = text;
        textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
        document.body.appendChild(textarea);
        textarea.select();
        try {
            return document.execCommand("copy");  // Security exception may be thrown by some browsers.
        } catch (ex) {
            console.warn("Copy to clipboard failed.", ex);
            return false;
        } finally {
            document.body.removeChild(textarea);
            alert('Success copy to clipboard')
        }
    }
}

</script>
    <!-- plugins:js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="/member/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="/member/vendors/chart.js/Chart.min.js"></script>
    <script src="/member/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/member/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/member/js/off-canvas.js"></script>
    <script src="/member/js/hoverable-collapse.js"></script>
    <script src="/member/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/member/js/dashboard.js"></script>
    <script src="/member/js/data-table.js"></script>
    <script src="/member/js/jquery.dataTables.js"></script>
    <script src="/member/js/dataTables.bootstrap4.js"></script>
  </body>
</html>
