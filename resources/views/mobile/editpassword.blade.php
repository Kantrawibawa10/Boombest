<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">

    <!-- Bootstrap CSS -->
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>BOOMBEST.net</title>
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
    <nav class="navbar navbar-white bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/mobile/img/logo.png" alt="" width="65" height="65">
          <span class="text-dark" style="margin-left: -10px; font-size: 25px;">BOOMBEST</span>
        </a>

      </div>
    </nav>

    <div class=" container mt-5 pt-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/mobile/img/profile.png" class="d-block w-100" alt="..." style="opacity: 90%;">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="container" style="margin-top: -50px; z-index: 100; position: relative;">
        <div class="container bg-white p-4 col-md-10"
        style="border-radius: 10px;
        box-shadow:  -4px -4px 8px rgba(0,0,0,0.4);
        border: 1px solid grey; opacity: 95%;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between">
              <a type="button" data-toggle="modal" class="navbar-brand d-flex">
                <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" width="80" height="80"
                style="margin-left: -10px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; border-radius: 50%;">
                <div class="d-block pt-4">
                  <h1 class="text-dark mx-2" style="text-transform: capitalize; line-height: 3px;">{{ auth()->user()->username }}</h1>
                  <span class="text-dark mx-2" style="font-size: 17px; font-weight: 400;">Referal: {{ auth()->user()->referal }}</span>
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

      <form action="{{route('postubah1')}}" method="post">
	@csrf
      <div class="col-md-10 m-auto">
        <div class="d-flex justify-content-between">
          <div class="mt-4 mx-2">
            <span class="text-white" style="font-size: 25px;">Ubah Password</span>
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
                    <label for="pass" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="pass" name="password_lama" aria-describedby="pass">
                    <div id="pass" class="form-text text-warning">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3 col-md-6">
                    <label for="pass" class="form-label text-white">Password Baru</label>
                    <input type="password" class="form-control" id="pass" name="password" aria-describedby="pass">
                    <div id="pass" class="form-text text-warning">We'll never share your email with anyone else.</div>
                </div>

            </div>
          </div>
        </div>
	
	<div class="d-flex justify-content-start mt-3 mb-5">
	    <div class="px-2"><button class="btn btn-success" type="submit">Simpan</button></div>
	    <div class=""><a class="btn btn-danger" href="{{ route('member') }}" >Kembali</a></div>
	</div>

	<div class="mb-5"><br></div>
    </div>
    </form>


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
