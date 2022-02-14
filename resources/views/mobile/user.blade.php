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
    <meta property="og:image" content="/assets/img/logoshare.jpeg"> 
</head>
  <body>
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
            <img src="mobile/img/profile.png" class="d-block w-100" alt="..." style="opacity: 90%;">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="container" style="margin-top: -50px; z-index: 100; position: relative;">
        <div class="container bg-white px-3 pt-3 col-md-10"
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
	    height: 80px;
	
        }


        .img-view .foto-view{	
            border-radius: 50%;
            z-index: 2;
	    height: 80px;	
	    transition: 0.5s;
            background-position: center;
            background-size: cover;
	    background-image: url('/assets/img/member/profile.png');
        }

        .img-view .foto-view:hover{
            -webkit-transform: scale(1.08);
            transform: scale(1.30);
        }
        /*img view form end */

		</style>

		<p class="image_view">
                    <label class="img-view">
                       <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view img-fluid" width="80" height="80">
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
                  padding: 1px 0 0 0;
                  box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
                  border: 1px solid grey;
                  cursor: pointer;
                  color: blue;
                  transition: 0.5s;
		  text-decoration: none;
                }

                .btn-share:hover{
                  background: #2DAD29;
                  color: white;
                }

		 .btn-share p:hover{
		   color: black;
		 }

                .title,.desc{
                  color: white;
                }


              </style>
	      <a href="whatsapp://send?text=http://boombest.net/?referal={{$referal->register_no}}" data-action="share/whatsapp/share" class="btn-share float-right">
                <ion-icon name="share-social-sharp" style="font-size: 30px;"></ion-icon>
		<p style="font-size: 15px;" class="text-dark">share</p>
	      </a>	
	      	
   
             {{-- <div style="display: flex;align-items:center">

                <input type="text" style="height: 50px" value="http://boombest.net/?referal={{$referal->register_no}}" id="myInput">
                <button onclick="copyToClipboard()" style="height:50px;width:50px"><i class="fas fa-share-alt"></i></button>
              </div> --}}
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-10 m-auto">
        <div class="d-flex justify-content-between">
          <div class="mt-4 mx-2">
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
              <div class="d-flex">
                <div class="col-4 title">
                  <span>NIK</span> :
                </div>
                <span class="desc">{{ auth()->user()->nik }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Nama</span> :
                </div>
                <span class="desc">{{ auth()->user()->name }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Kelamin</span> :
                </div>
                <span class="desc">{{ auth()->user()->jenis_kelamin }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Email</span> :
                </div>
                <span class="desc">{{ auth()->user()->email }}</span>
              </div>

   
              <div class="d-flex">
                <div class="col-4 title">
                  <span>WhatsApp</span> :
                </div>
                <span class="desc">{{ auth()->user()->hp }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Alamat</span> :
                </div>
                <span class="desc">{{ auth()->user()->alamat }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Marketplace</span> :
                </div>
                <span class="desc">BOOMBEST.net</span>
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
              <div class="d-flex">
                <div class="col-4 title">
                  <span>Kota</span> :
                </div>
                <span class="desc">{{ auth()->user()->kota }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Kecamatan</span> :
                </div>
                <span class="desc">{{ auth()->user()->kecamatan }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Kabupaten</span> :
                </div>
                <span class="desc">{{ auth()->user()->kabupaten }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>Provinsi</span> :
                </div>
                <span class="desc">{{ auth()->user()->provinsi }}</span>
              </div>	
            </div>
          </div>
	  
	  <div class="mx-2 mt-2">
            <span class="text-white" style="font-size: 25px;">Rekening Member</span>
            <div class="d-flex">
              <div style="background: white; width: 70px; height: 5px;"></div>
              <div class="bg-warning" style="width: 70px; height: 5px;"></div>
              <div class="bg-danger" style="width: 70px; height: 5px;"></div>
            </div>
          </div>

	  <div class="mt-3 mb-3">
          <div class="container py-2">
            <div class="col-md-12">
              <div class="d-flex">
                <div class="col-4 title">
                  <span>Bank</span> :
                </div>
                <span class="desc">{{ auth()->user()->bank }}</span>
              </div>

              <div class="d-flex">
                <div class="col-4 title">
                  <span>No. Rekening</span> :
                </div>
                <span class="desc">{{ auth()->user()->no_rek }}</span>
              </div>
             
           </div>
        </div>

        </div>
        </div>
      </div>		

      <div class="mb-5">
        <br>
      </div>

    </div>


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

    <!--pop up detail-->
    <div class="modal fade" id="detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Detail</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex justify-content-between">
              <a type="button" class="navbar-brand d-flex pt-3">
                <p class="image_view">
                    <label class="img-view">
                       <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view" width="80" height="80">
                    </label>
                </p>

                <div class="d-block pt-4">
                  <h1 class="text-dark mx-3" style="text-transform: capitalize; line-height: 3px;">{{ auth()->user()->username }}</h1>
                  <span class="text-dark mx-3" style="font-size: 17px; font-weight: 400;">No Register: {{ auth()->user()->referal }}</span>
                </div>
              </a>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <a href="/user/editprofile/{{ auth()->user()->id }}" class="btn btn-warning text-white">Ubah</a>
          </div>
        </div>
      </div>
    </div>
    <!--pop up detail-->

    <!--pop up edit
    <div class="modal fade" id="edit{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/user/updateprofile/{referal}" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                img upload
                 <p class="image_upload">
                     <label class="img-upload">
                         <style media="screen">
                           .bg-img{
                             background: white;
                             border-radius: 50%;
                             border: 1px solid gray;
                           }
                         </style>
                         <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-upload bg-img">
                         <label class="btn-input">
                             <input type="file" accept="image/svg+xml, image/png, image/jpeg" name="image" id="img_gambar">
                             <i class="fa fa-upload" aria-hidden="true"></i><br>
                             Choise your <br>file img
                         </label>
                     </label>
                 </p>
              </div>

              <div class="d-flex justify-content-between">
                <div class="mb-2">
                  <span class="text-dark" style="font-size: 25px;">Data Diri</span>
                  <div class="d-flex">
                    <div style="background: black; width: 35px; height: 5px;"></div>
                    <div class="bg-warning" style="width: 35px; height: 5px;"></div>
                    <div class="bg-danger" style="width: 35px; height: 5px;"></div>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="recipient-name" name="username" value="{{ auth()->user()->username }}">
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama:</label>
                <input type="text" class="form-control" id="recipient-name" name="name" value="{{ auth()->user()->name }}" disabled>
                <input type="hidden" class="form-control" id="recipient-name" name="name" value="{{ auth()->user()->name }}">
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                <select type="text" id="recipient-name" name="jenis_kelamin" class="form-control dropdown-toggle" value="{{ auth()->user()->jenis_kelamin }}" disabled>
                  <option selected disabled class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ auth()->user()->jenis_kelamin }}</option>
                  <option selected type="hidden" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">{{ auth()->user()->jenis_kelamin }}</option>

                </select>
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id="recipient-name" name="email" value="{{ auth()->user()->email }}">
              </div>

              <div class="d-flex justify-content-between">
                <div class="mb-2">
                  <span class="text-dark" style="font-size: 25px;">Asal Wilayah</span>
                  <div class="d-flex">
                    <div style="background: black; width: 48px; height: 5px;"></div>
                    <div class="bg-warning" style="width: 48px; height: 5px;"></div>
                    <div class="bg-danger" style="width: 48px; height: 5px;"></div>
                  </div>
                </div>
              </div>


              <div class="mb-3 d-flex mx-1">
                <div class="col-7">
                  <label for="recipient-name" class="col-form-label">Alamat:</label>
                  <input type="text" class="form-control" id="recipient-name" name="alamat" value="{{ auth()->user()->alamat }}">
                </div>

                <div class="mx-2 col-5">
                  <label for="recipient-name" class="col-form-label">Kecamatan:</label>
                  <input type="text" class="form-control" id="recipient-name" name="kecamatan" value="{{ auth()->user()->kecamatan }}">
                </div>
              </div>

              <div class="mb-3 d-flex mx-1">
                <div class="col-6">
                  <label for="recipient-name" class="col-form-label">Kota:</label>
                  <input type="text" class="form-control" id="recipient-name" name="kota" value="{{ auth()->user()->kota }}">
                </div>

                <div class="mx-2 col-6">
                  <label for="recipient-name" class="col-form-label">Kabupaten:</label>
                  <input type="text" class="form-control" id="recipient-name" name="kabupaten" value="{{ auth()->user()->kabupaten }}">
                </div>
              </div>

              <div class="mb-3 d-flex mx-1">
                <div class="col-6">
                  <label for="recipient-name" class="col-form-label">Provinsi:</label>
                  <input type="text" class="form-control" id="recipient-name" name="provinsi" value="{{ auth()->user()->provinsi }}">
                </div>

                <div class="col-6 mx-2">
                  <label for="recipient-name" class="col-form-label">Negara:</label>
                  <input type="text" class="form-control" id="recipient-name" name="negara" value="{{ auth()->user()->negara }}">
                </div>
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="recipient-name" name="password" value="{{ auth()->user()->password }}">
              </div>

              <div class="d-flex justify-content-between">
                <div class="mb-2">
                  <span class="text-dark" style="font-size: 25px;">Rekening</span>
                  <div class="d-flex">
                    <div style="background: black; width: 35px; height: 5px;"></div>
                    <div class="bg-warning" style="width: 35px; height: 5px;"></div>
                    <div class="bg-danger" style="width: 35px; height: 5px;"></div>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Bank:</label>
                <input type="text" class="form-control" id="recipient-name" name="bank" value="{{ auth()->user()->bank }}" disabled>
                <input type="hidden" class="form-control" id="recipient-name" name="bank" value="{{ auth()->user()->bank }}">
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">No. Rekening:</label>
                <input type="text" class="form-control" id="recipient-name" name="no_rek" value="{{ auth()->user()->no_rek }}">
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <a type="button" data-toggle="modal" data-target="#simpan{{ auth()->user()->id }}" data-dismiss="modal" class="btn btn-warning text-white">Simpan</a>
            </div>

            pop up simpan
            <div class="modal fade" id="simpan{{ auth()->user()->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Simpan</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah yakin ingin menyimpan perubahan??</p>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" data-toggle="modal" data-target="#edit{{ auth()->user()->id }}" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <a type="submit" class="btn btn-warning text-white">Iya</a>
                  </div>
                </div>
              </div>
            </div>
            pop up simpan
          </form>
        </div>
      </div>
    </div>
    pop up edit-->

    <!--pop up batal
    <div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Apakah yakin membatalkan perubahan??</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" data-toggle="modal" data-target="#edit{{ auth()->user()->id }}" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <a type="button" data-dismiss="modal" class="btn btn-warning text-white">Iya</a>
          </div>
        </div>
      </div>
    </div>
    pop up batal-->


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
