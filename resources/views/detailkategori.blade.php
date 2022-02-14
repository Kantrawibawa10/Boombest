<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BOOMBEST.net</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/index-admin.css">

    <!-- Jquery UI -->
    <link type="text/css" href="/assets/css/jquery-ui.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="/assets/css/argon-design-system.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link type="text/css" href="/assets/css/style.css" rel="stylesheet">

    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">





</head>

<body>
<header class="header clearfix fixed-top" style="background: #37B629;">
    <div class="top-bar d-none d-sm-block bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <ul class="top-links contact-info">
                        <li><i class="fa fa-envelope-o text-danger"></i> <a href="#">boombest@example.com</a></li>
                        <li><i class="fab fa-whatsapp text-success"></i class="text-white"> +1 5589 55488 55</li>
                    </ul>
                </div>

                <div class="col-6 text-right">

                    <ul class="top-links account-links d-flex justify-content-end">
                        <li><i class="far fa-calendar-alt text-primary"></i> <a href="#"><?php echo date('d F Y') ?></a></li>
                        @auth
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><i class="fas fa-sign-out-alt text-warning"></i> <button type="submit">Logout</button></li>
                            </form>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6 mt-2">
                    <a class="navbar-brand" href="index.php">
                        <img src="/assets/img/logo.png" class="fa-3x logo" style="width: 60px; height: 60px; margin-top:-10px;" alt=""> <span class="logo">BOOMBEST</span>
                    </a>
                </div>

                <div class="col-lg-6 col-sm-6">
                    @foreach($barang as $item)
                        <form action="{{ url("/searchbarangkategori/$item->kategori") }}" method="GET" class="search cari">
                    @endforeach
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search..." value="{{Request::get('keyword')}}"  name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-white btn-outline-success" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class='col-lg-3 col-sm-6'>

                    <style>
                            /*img view form start */



                         .foto-view1{
                            border-radius: 50%;
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
                            background-image: url('/assets/img/member/profile.png');
                            width: 40px;
                            height: 40px;
                        }

			.foto-view1{
                            border-radius: 50%;
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
                            background-image: url('/assets/img/member/profile.png');
                            width: 40px;
                            height: 40px;
                        }

                        .foto-view2{
                            border-radius: 50%;
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
                            background-image: url('/assets/img/member/profile.png');
                            width: 30px;
                            height: 30px;
                        }



                        /*img view form end */

                        </style>

                        @auth
                                <div class='right-icons ml-4 d-none d-lg-block'>
                                    <div class='single-icon shopping-cart'>
                                        @if (auth()->user()->image_profile == '')
                                        <img src="/assets/img/member/profile.png" alt="" class="foto-view1">
                                        @else
                                        <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view1">
                                        @endif
                                        <span class='text-white text-capitalize'>{{ auth()->user()->username }}</span>
                                    </div>
                                    <div class='single-icon wishlist'>
                                        <a href='#'><i class='fas fa-coins fa-2x text-yellow'></i></a>
                                        <span class='badge badge-default'>{{ auth()->user()->point_sisa }}</span>
                                    </div>
                                </div>

                        @endauth

                    @guest
                        <div class='right-icons ml-4 d-none d-lg-block'>
                            <div class='single-icon shopping-cart'>

                                <a href="{{ route('login') }}"><span class='text-white'>Login</span></a>
                                <span> | </span>
                                <a href="{{ route('register') }}"><span class='text-white'>Register</span></a>

                            </div>
                        </div>
                    @endguest
                </div>


            </div>
        </div>
    </div>

	{{-- hp --}}
        <div class="header-main d-md-none d-lg-none d-xl-none">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="d-flex">
                        <div class="col-lg-3 col-sm-6 mt-2 mb-1">
                            <a class="navbar-brand" href="index.php">
                                <img src="/assets/img/logo.png" class="fa-3x logo" style="width: 40px; height: 40px; margin-top: -10px;" alt=""> <span style="font-size: 20px" class="logo">BOOMBEST</span>
                            </a>
                        </div>

                        <div class="">
				@auth
                                <div class='d-flex'>

				    

                                    <div class='single-icon shopping-cart d-flex mt-1 ml-2'>
					<div class='single-icon wishlist mt-1 ml-1 px-2'>
                                      		<span class='text-white'>{{ auth()->user()->username }}</span>
                                    	</div>
                                        @if (auth()->user()->image_profile == '')
                                        <img src="/assets/img/member/profile.png" alt="" class="foto-view2">
                                        @else
                                        <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view2">
                                        @endif
                                    </div>
      

                                    <div class='single-icon wishlist mt-1 ml-2'>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit"><ion-icon name="log-out" class="fa-2x text-danger" style="font-size: 30px;"></ion-icon></button>
                                        </form>
                                    </div>
                                </div>

                        @endauth

                        @guest
                            <div class='right-icons mt-2'>
                                <div class='single-icon shopping-cart d-flex'>

                                    <a href="{{ route('login') }}" class="mr-1"><span class='text-white d-flex' style="font-size: 15px;"><ion-icon name="log-in" style="margin-top: 4px; margin-right: 2px;"></ion-icon>Login</span></a>
                                    <span>|</span>
                                    <a href="http://member.boombest.net/?referal={{app('request')->input('referal')}}" class="ml-1"><span class='text-white d-flex' style="font-size: 15px;"><ion-icon name="people-circle" style="margin-top: 4px; margin-right: 2px;"></ion-icon>Register</span></a>

                                </div>
                            </div>
                        @endguest
			</div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                    @foreach($barang as $item)
                        <form action="{{ url("/searchbarangkategori/$item->kategori") }}" method="GET" class="search cari">
                    @endforeach
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search..." value="{{Request::get('keyword')}}"  name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-white btn-outline-success" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
               	   </div>

                    <div class='col-lg-3 col-sm-6'>
                        <style>
                            /*img view form start */



                         .foto-view1{
                            border-radius: 50%;
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
                            background-image: url('/assets/img/member/profile.png');
                            width: 40px;
                            height: 40px;
                        }


                        /*img view form end */

                        </style>



                        @auth
                                <div class='right-icons ml-4 d-none d-lg-block'>
                                    <div class='single-icon shopping-cart'>
                                        @if (auth()->user()->image_profile == '')
                                        <img src="/assets/img/member/profile.png" alt="" class="foto-view1">
                                        @else
                                        <img src="{{ url('profPicMember/'. auth()->user()->image_profile ) }}" alt="" class="foto-view1">
                                        @endif
                                        <span class='text-white text-capitalize'>{{ auth()->user()->username }}</span>
                                    </div>
                                    <div class='single-icon wishlist'>
                                        <a href='#'><i class='fas fa-coins fa-2x text-yellow'></i></a>
                                        <span class='badge badge-default'>{{ auth()->user()->point_sisa }}</span>
                                    </div>
                                </div>

                        @endauth

                        @guest
                            <div class='right-icons ml-4 d-none d-lg-block'>
                                <div class='single-icon shopping-cart'>

                                    <a href="{{ route('login') }}"><span class='text-white'>Login</span></a>
                                    <span> | </span>
                                    <a href="#"><span class='text-white'>Register</span></a>

                                </div>
                            </div>
                        @endguest
                    </div>


                </div>


            </div>
        </div>
        {{-- hp --}}


    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom d-none d-lg-block">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('homepage')}}">Mobile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('terbaru') }}">Terbaru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}#rekomendasi">Rekomendasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allcategory') }}">Semua Kategori</a>
                    </li>
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

	<!---------------------------------------------------------------menu bar---------------------------------------------------------->
        <div class="container d-md-none d-lg-none d-xl-none fixed-bottom" style=" z-index: 100; background-color: #37B629; margin-bottom: -5px;">
            <div class="d-flex justify-content-around pt-2 mt-1">
                <div style="font-size: 27px; cursor: pointer; line-height: 5px;" class="text-center"><a href="{{route('home')}}" class="text-white"><ion-icon name="home-sharp"></ion-icon>
                    <p style="font-size: 10px; font-weight: 500;" class="text-center">Home</p></a>
                </div>
                <div style="font-size: 27px; cursor: pointer; line-height: 5px;" class="text-center"><a href="{{ route('terbaru') }}" class="text-white"><ion-icon name="bag-outline"></ion-icon>
                    <p style="font-size: 10px; font-weight: 500;" class="text-center">Terbaru</p></a>
                </div>
                <div style="font-size: 27px; cursor: pointer; line-height: 5px;" class="text-center"><a href="{{route('home')}}#rekomendasi" class="text-white"><ion-icon name="bag-check-outline"></ion-icon>
                    <p style="font-size: 10px; font-weight: 500;" class="text-center">Rekomendasi</p></a>
                </div>
                <div style="font-size: 27px; cursor: pointer; line-height: 5px;" class="text-center"><a href="{{ route('allcategory') }}" class="text-white"><ion-icon name="albums-outline"></ion-icon>
                    <p style="font-size: 10px; font-weight: 500;" class="text-center">Kategori</p></a>
                </div>
                <div style="font-size: 27px; cursor: pointer; line-height: 5px;" class="text-center"><a href="{{ route('homepage') }}" class="text-white"><ion-icon name="phone-portrait-outline"></ion-icon>
                    <p style="font-size: 10px; font-weight: 500;" class="text-center">Mobile</p></a>
                </div>
            </div>
        </div>
        <!---------------------------------------------------------------menu bar---------------------------------------------------------->
</header>


<section class="">

    <!------------------------------------------
    Page Header
    ------------------------------------------->

    <section class="products-grid mt-5 mb-3 d-none d-lg-block" style="padding-top: 11.5em;">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="products-top">
                                <div class="products-top-inner">

                                    <div class="products-found">

                                        <p><span>Produk</span></p>

                                    </div>

                                    <div class="products-sort">
                                        <span>.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-auto">
                        <!--produk-->
                        @forelse ($barang as $item)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-6 mt-3 p-1">
          <a href="home/detail/{{ $item->id }}">
            <div class="single-product">
                <div class="product-img m-1" id="product-images">
                    <div style="background-size: cover; background-position: center;">
                      <a href="/home/detail/{{ $item->id }}">
                        <style>
                            /*img view form start */
                        .image_view{
                            position: relative;
                            overflow: hidden;
                        }


                        .img-view .foto-view{
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
			    height: 200px;
                        }

                        .img-view .foto-view:hover{
                            -webkit-transform: scale(1.08);
                            transform: scale(1.30);
                        }
                        /*img view form end */
                        </style>
                        <p class="image_view">
                            <label class="img-view">
                               <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-view img-fluid">
                            </label>
                        </p>

                      </a>                    
		    </div>
                </div>
                <div class="product-content" style="z-index: 100; margin-top: -20px;">
                    <h3 class="text-truncate"><a href="/home/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
                    <div class="product-price mb-2">
                        <span>@currency($item->harga)</span>
                    </div>
                    <div class="d-flex justify-content-end pb-2">
                      <span>{{ $item->daerah }}</span>
                    </div>
                </div>
            </div>
          </a>
        </div>
        <!--end produk-->
                        @empty
                        <div class="container p-auto mt-5 pt-5">
                          <p class="text-center mx-auto mb-3 text-white bg-warning" style="font-size: 40px; width: 70px;
                          border: 1px solid gray; border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);">!</p>
                          <p class="text-center" style="font-size: 18px; font-weight: 400;">Barang Tidak Ditemukan <br> Atau Masih Kosong!!</p>
                        </div>
                        @endforelse
                    </div>


                </div>
            </div>
        </div>
    </section>

</section>

<section class="products-grid mt-5 mb-5 d-md-none d-lg-none d-xl-none" style="padding-top: 6.5em;">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="products-top">
                                <div class="products-top-inner">

                                    <div class="products-found">

                                        <p><span>Produk</span></p>

                                    </div>

                                    <div class="products-sort">
                                        <span>.</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-auto mb-5">
                        <!--produk-->
                        @forelse ($barang as $item)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-6 mt-3 p-1">
          <a href="home/detail/{{ $item->id }}">
            <div class="single-product">
                <div class="product-img m-1" id="product-images">
                    <div style="background-size: cover; background-position: center;">
                      <a href="/home/detail/{{ $item->id }}">
                        <style>
                            /*img view form start */
                        .image_view{
                            position: relative;
                            overflow: hidden;
                        }


                        .img-view .foto-view{
                            z-index: 2;
                            transition: 0.5s;
                            background-position: center;
                            background-size: cover;
			    height: 200px;
                        }

                        .img-view .foto-view:hover{
                            -webkit-transform: scale(1.08);
                            transform: scale(1.30);
                        }
                        /*img view form end */
                        </style>
                        <p class="image_view">
                            <label class="img-view">
                               <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-view img-fluid">
                            </label>
                        </p>

                      </a>                    
		    </div>
                </div>
                <div class="product-content" style="z-index: 100; margin-top: -20px;">
                    <h3 class="text-truncate"><a href="/home/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
                    <div class="product-price mb-2">
                        <span>@currency($item->harga)</span>
                    </div>
                    <div class="d-flex justify-content-end pb-2">
                      <span>{{ $item->daerah }}</span>
                    </div>
                </div>
            </div>
          </a>
        </div>
        <!--end produk-->
                        @empty
                        <div class="container p-auto mt-5 pt-5">
                          <p class="text-center mx-auto mb-3 text-white bg-warning" style="font-size: 40px; width: 70px;
                          border: 1px solid gray; border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);">!</p>
                          <p class="text-center" style="font-size: 18px; font-weight: 400;">Barang Tidak Ditemukan <br> Atau Masih Kosong!!</p>
                        </div>
                        @endforelse
                    </div>


                </div>
            </div>
        </div>
    </section>

</section>


<footer class="footer bg-white mt-5 d-none d-lg-block">
    <div class="footer-top ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-12 mx-auto mt-3">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="single-footer links">
                            <h4 class="text-dark">Layanan Pelanggan</h4>
                            <ul>
                                <li><p class="text-dark">Bantuan</p></li>
                                <li><p class="text-dark">Kebijakan Privasi</p></li>
                                <li><p class="text-dark">Tentang Kami</p></li>
                                <li><p class="text-dark">Hubungi Kami</p></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>

                <div class="col-lg-3 col-md-6 col-12 mx-auto mt-3">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4 class="text-dark">Pengiriman</h4>
                        <img src="/assets/img/pengiriman.png" style="height: 60px;" alt="">
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 mx-auto mt-3">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="single-footer links">
                            <h4 class="text-dark">Ikuti Kami</h4>
                            <!-- Single Widget -->
                            <div class="contact row d-flex m-auto">
                                <ul class="mr-4">
                                    <li><i class="fab fa-facebook-square text-primary mr-2 mb-3" style="font-size: 20px;"></i> <span class="text-dark">Facebook</span></li>
                                    <li><i class="fab fa-whatsapp text-success mr-2" style="font-size: 20px;"></i> <span class="text-dark">Whatsapp</span></li>
                                </ul>

                                <ul>
                                    <li><i class="fa fa-envelope-o text-warning mr-2 mb-3" style="font-size: 20px; "></i> <span class="text-dark">Email</span></li>
                                    <li><i class="fab fa-instagram text-danger mr-2" style="font-size: 20px;"></i> <span class="text-dark">Instagram</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <!-- End Single Widget -->
                </div>

                <!--                    SUPPORT-->
                <div class="col-lg-3 col-md-6 col-12 mx-auto mt-3">

                    <div class="single-footer about">
                        <div class="single-footer">

                            <h4 class="text-dark">Support By</h4>
                            <div class="contact row d-flex m-auto">
                                <ul class="mr-4 d-flex">
                                    <li><img src="/assets/img/logo/logoganait.png" alt="logoganait"></li>
                                    <li class="ml-2 mb-3">
                                        <h3 class="h5">Gana IT Consultant</h3>
                                    </li>
                                </ul>

                                <ul>
                                    <li class="mb-3"><span class="text-dark">Tentang Kami</span></li>
                                    <li class="mb-3"><span class="text-dark">Tentang Web Ini</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-lg-12 col-12 text-center pt-5">
                <div>
                    <h1 style="color: rgb(161, 161, 161); font-size: 1.2em; font-weight: 500; text-decoration: none;">© BOOMBEST 2021 PT BOOMBEST</h1>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Core -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="/assets/js/core/jquery.min.js"></script>
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/core/jquery-ui.min.js"></script>

<!-- Optional plugins -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Argon JS -->
<script src="/assets/js/argon-design-system.js"></script>

<!-- Main JS-->
<script src="/assets/js/main.js"></script>

</body>

</html>
