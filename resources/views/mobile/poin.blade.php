<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">
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
    </style>
    <nav class="navbar fixed-top bg-success" style="box-shadow:inset 0 0 20px 0 rgba(0,0,0,0.2)">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="/mobile/img/logoatas.png" alt="" width="100" style="width: 150px">

        </a>

       
      </div>
    </nav>

    <div class="container mt-5 pt-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/mobile/img/coin.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="container" style="margin-top: -60px; z-index: 100; position: relative;">
        <div class="container bg-white p-4 col-md-10"
        style="border-radius: 10px;
        box-shadow:  -4px -4px 8px rgba(0,0,0,0.4);
        border: 1px solid grey; opacity: 95%;">
          <div class="col-md-12">
            <div class="d-flex">
              <a href="#" class="navbar-brand">
                <img src="/mobile/icon/coin.png" alt="" width="80" height="80">
                <span class="text-dark mx-3" style="font-size: 35px; padding: 10px 0 0 0; position: absolute;">My Point</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px;">Detail Point</span>
          <div class="d-flex">
            <div style="background: white; width: 40px; height: 5px;"></div>
            <div class="bg-warning" style="width: 40px; height: 5px;"></div>
            <div class="bg-danger" style="width: 40px; height: 5px;"></div>
          </div>
        </div>
      </div>

      <!--<div class="mt-4 mx-2">
        <p class="text-white" style="font-size: 20px;"><i class="fas fa-user-check"></i> 3 member</p>
      </div>-->

        @foreach($totalPoin as $sisa)

      <div class="mt-3 mx-2">
        <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between">
              <a href="#" class="navbar-brand">
                  <span class="text-dark mx-1" style="font-size: 25px;">Total Point</span>
              </a>
              <a href="#" class="navbar-brand d-flex py-2 mr-5">
{{--                <span class="text-dark mx-2" style="font-size: 20px;">@foreach($totalPoin as $total) {{$total->point_reg }} @endforeach</span>--}}
                <!-- <span class="text-dark mx-2" style="font-size: 20px;">{{ $totalPoin->count() }} </span> -->
                <span class="text-dark mx-2" style="font-size: 20px;">{{ $sisa -> point_reg}} </span>
{{--                <span class="text-dark mx-2" style="font-size: 20px;">@foreach($totalPoin as $poin) {{ $poin->point_reg }} @endforeach </span>--}}
                <img src="/mobile/icon/coin.png" alt="" width="30" height="30">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mx-2">
        <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between">
              <a href="#" class="navbar-brand">
                  <span class="text-dark mx-1" style="font-size: 25px;">Point Ditukar</span>
              </a>
              <a href="#" class="navbar-brand d-flex py-2 mr-5">
                <!-- <span class="text-dark mx-2" style="font-size: 20px;">-</span> -->
{{--              <span class="text-dark mx-2" style="font-size: 20px;">{@foreach($totalPoin as $total) {{$total->point_reg }} @endforeach</span>--}}
               <span class="text-dark mx-2" style="font-size: 20px;">{{ $sisa->point_tarik }}</span>
                <img src="/mobile/icon/coin.png" alt="" width="30" height="30">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3 mx-2">
        <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
          <div class="col-md-12">
            <div class="d-flex justify-content-between">
              <a href="#" class="navbar-brand">
                  <span class="text-dark mx-1" style="font-size: 25px;">Point Sisa</span>
              </a>
              <a href="#" class="navbar-brand d-flex py-2 mr-5">
                <span class="text-dark mx-2" style="font-size: 20px;"> {{$sisa -> point_sisa}}</span>
{{--                <span class="text-dark mx-2" style="font-size: 20px;"> @foreach($sisaPoin as $sisa) @foreach($totalPoin as $total) {{ $total->point_reg-$sisa->point_out }} @endforeach  @endforeach</span>--}}
                <img src="/mobile/icon/coin.png" alt="" width="30" height="30">
              </a>
            </div>
          </div>
        </div>
      </div>
        @endforeach

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

    <!-- Option 1: Bootstrap Bundle with Popper -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
