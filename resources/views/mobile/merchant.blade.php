<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">

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
            <img src="/assets/img/merchant.jpg" class="d-block w-100" alt="...">
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
                <img src="/assets/img/boombest.jpg" alt="" width="80" height="80" style="border-radius: 50%;">
                <span class="text-dark mx-3" style="font-size: 35px; padding: 10px 0 0 0; position: absolute;">Merchant %</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px;">Detail Merchant</span>
          <div class="d-flex">
            <div style="background: white; width: 60px; height: 5px;"></div>
            <div class="bg-warning" style="width: 60px; height: 5px;"></div>
            <div class="bg-danger" style="width: 60px; height: 5px;"></div>
          </div>
        </div>

<div class="dropdown btn-group dropstart mt-4 pt-1 mx-3">
  <button class="btn btn-white bg-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
    Kategori
  </button>
  <ul class="dropdown-menu" style="min-width: 30px;" aria-labelledby="dropdownMenuButton1">
    <li class="list active" data-filter="all"><a class="dropdown-item" href="#" style="font-size: 12px;">Semua</a></li>
    <li class="list" data-filter="tradisional"><a class="dropdown-item" href="#" style="font-size: 12px;">Tradisional Mart</a></li>
    <li class="list" data-filter="modern"><a class="dropdown-item" href="#" style="font-size: 12px;">Modern Mart</a></li>
    <li class="list" data-filter="jasa"><a class="dropdown-item" href="#" style="font-size: 12px;">Jasa</a></li>
    <li class="list" data-filter="villa"><a class="dropdown-item" href="#" style="font-size: 12px;">Hotel & Villa</a></li>
    <li class="list" data-filter="kuliner"><a class="dropdown-item" href="#" style="font-size: 12px;">Kuliner</a></li>

   </ul>

</div>

      </div>

<style>
#pot::-webkit-scrollbar {
    width: 0;
    height: 12px;
}
</style>

      <div class="mt-3 mx-2 d-flex" style="overflow-x : auto; min-width: 6rem;" id="pot">
	     <div class="list2" data-filter2="sembako"><a href="" class="btn btn-white bg-white itemBox tradisional" style="font-size: 12px;">Sembako</a></div>
	     <a href="" class="btn btn-white bg-white itemBox modern mx-1" data-filter2="minimarket" style="font-size: 12px;">Minimarket</a>
	     <a href="" class="btn btn-white bg-white itemBox modern mx-1" data-filter2="supermarket" style="font-size: 12px;">Supermarket</a>
             <a href="" class="btn btn-white bg-white itemBox villa mx-1" data-filter2="vila" style="font-size: 12px;">Villa</a>
             <a href="" class="btn btn-white bg-white itemBox villa mx-1" data-filter2="hotel" style="font-size: 12px;">Hotel</a>
             <a href="" class="btn btn-white bg-white itemBox kuliner mx-1" data-filter2="makanan" style="font-size: 12px;">makanan</a>
	     <a href="" class="btn btn-white bg-white itemBox kuliner mx-1" data-filter2="minuman" style="font-size: 12px;">minuman</a>
	     <a href="" class="btn btn-white bg-white itemBox jasa mx-1" data-filter2="bengkel" style="font-size: 12px;">Bengkel</a>
             <a href="" class="btn btn-white bg-white itemBox jasa mx-1" data-filter2="catering" style="font-size: 12px;">Catering</a>
             <a href="" class="btn btn-white bg-white itemBox jasa mx-1" data-filter2="penyewaan" style="font-size: 12px;">Penyewaan</a>
      </div>



     <div class="itemBox itemBox2 kuliner catering">
        <div class="container mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/mahkota.jpg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Mahkota Catering</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">5</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail1" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>


     <div class="itemBox itemBox2 kuliner minuman">
        <div class="container mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/coffee.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Coffee House</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">10</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail4" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>


     <div class="itemBox itemBox2 tradisional sembako">
        <div class="container mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/srimaya5kg.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Beras Srimaya 5kg</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">2</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail5" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>

     
      <div class="itemBox itemBox2 tradisional sembako">
        <div class="container mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/srimaya10kg.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Beras Srimaya 10kg</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">2</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail6" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>



      <div class="itemBox itemBox2 tradisional sembako">
        <div class="container mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/sripuspa.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Beras Sri Puspa 5kg</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">2</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail8" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>



      <div class="itemBox itemBox2 jasa penyewaan">
        <div class="container mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/manikberlian.png" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Manik Berlian</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">10</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>


     <div class="itemBox itemBox2 jasa penyewaan">
        <div class="container mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/merchant2.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Q-ANO</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">5</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail2" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>


      <div class="itemBox itemBox2 jasa penyewaan">
        <div class="container mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/img/merchant3.jpeg" class="d-block w-100 h-25" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
            <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
              <div class="col-md-12">
                <div class="d-flex justify-content-between">
                  <a href="#" class="navbar-brand">
                      <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Trimana Transport</span>
                  </a>

                  <a href="#" class="navbar-brand d-flex  mr-5">
                    <span style="font-size: 20px;" class="text-danger">Discount</span>
                    <span class="text-danger mx-2" style="font-size: 20px;">5</span>
                    <span style="font-size: 20px;" class="text-danger">%</span>
                  </a>
                </div>
                <a type="button" data-toggle="modal" data-target="#detail3" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
              </div>
            </div>
          </div>
      </div>


        <div class="itemBox itemBox2 jasa penyewaan">
            <div class="container mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/bintangmas.png" class="d-block w-100 h-25" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
                <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="navbar-brand">
                                <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Bintang Mas, Bengkel Las</span>
                            </a>

                            <a href="#" class="navbar-brand d-flex  mr-5">
                                <span style="font-size: 20px;" class="text-danger">Discount</span>
                                <span class="text-danger mx-2" style="font-size: 20px;">10</span>
                                <span style="font-size: 20px;" class="text-danger">%</span>
                            </a>
                        </div>
                        <a type="button" data-toggle="modal" data-target="#bintangmas" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="itemBox itemBox2 jasa penyewaan">
            <div class="container mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/dapuralam.png" class="d-block w-100 h-25" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
                <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="navbar-brand">
                                <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Dapur Alam</span>
                            </a>

                            <a href="#" class="navbar-brand d-flex  mr-5">
                                <span style="font-size: 20px;" class="text-danger">Discount</span>
                                <span class="text-danger mx-2" style="font-size: 20px;">15</span>
                                <span style="font-size: 20px;" class="text-danger">%</span>
                            </a>
                        </div>
                        <a type="button" data-toggle="modal" data-target="#dapuralam" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="itemBox itemBox2 jasa penyewaan">
            <div class="container mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/duwurstudio.png" class="d-block w-100 h-25" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-2" style="margin-top: -20px; z-index: 100; position: relative;">
                <div class="container bg-white px-3 py-2" style="border-radius: 10px;">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="navbar-brand">
                                <span class="text-dark mx-1 pt-1" style="font-size: 20px;">Duwur Studio</span>
                            </a>

                            <a href="#" class="navbar-brand d-flex  mr-5">
                                <span style="font-size: 20px;" class="text-danger">Discount</span>
                                <span class="text-danger mx-2" style="font-size: 20px;">10</span>
                                <span style="font-size: 20px;" class="text-danger">%</span>
                            </a>
                        </div>
                        <a type="button" data-toggle="modal" data-target="#duwurstudio" class="btn text-white bg-success text-center mt-2" style="padding: 5px; width: 100%;">Cek Sekarang</a>
                    </div>
                </div>
            </div>
        </div>








        <!--pop up detail-->
        <div class="modal fade" id="duwurstudio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-between">
                            <a type="button" class="navbar-brand d-flex pt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/assets/img/duwurstudio.png" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between">
                                <div class="pt-2" style="line-height: 5px;">
                                    <h2 class="text-danger">Discount 10%</h2>
                                    <p>Bagi Member BOOMBEST.net</p>
                                </div>
                                <div style="line-height: 1px;">
                                    <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                                    <a href=" {{--route('barcode')--}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pop up detail-->


        <!--pop up detail-->
        <div class="modal fade" id="dapuralam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-between">
                            <a type="button" class="navbar-brand d-flex pt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/assets/img/dapuralam.png" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between">
                                <div class="pt-2" style="line-height: 5px;">
                                    <h2 class="text-danger">Discount 15%</h2>
                                    <p>Bagi Member BOOMBEST.net</p>
                                </div>
                                <div style="line-height: 1px;">
                                    <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                                    <a href=" {{--route('barcode')--}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pop up detail-->


        <!--pop up detail-->
        <div class="modal fade" id="bintangmas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-between">
                            <a type="button" class="navbar-brand d-flex pt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="/assets/img/bintangmas.png" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between">
                                <div class="pt-2" style="line-height: 5px;">
                                    <h2 class="text-danger">Discount 10%</h2>
                                    <p>Bagi Member BOOMBEST.net</p>
                                </div>
                                <div style="line-height: 1px;">
                                    <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                                    <a href=" {{--route('barcode')--}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--pop up detail-->



    <!--pop up detail-->
    <div class="modal fade" id="detail1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/mahkota.jpg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 5%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{--route('barcode')--}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->

    <!--pop up detail-->
    <div class="modal fade" id="detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/manikberlian.png" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 5%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->

    <!--pop up detail-->
    <div class="modal fade" id="detail2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/merchant2.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 5%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->


    <!--pop up detail-->
    <div class="modal fade" id="detail3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/merchant3.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 5%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->


     <!--pop up detail-->
    <div class="modal fade" id="detail4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/coffee.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 10%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->


      <!--pop up detail-->
    <div class="modal fade" id="detail5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/srimaya5kg.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 2%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->


      <!--pop up detail-->
    <div class="modal fade" id="detail6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/srimaya10kg.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 2%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->



    <!--pop up detail-->
    <div class="modal fade" id="detail8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <div class="row justify-content-between">
                <a type="button" class="navbar-brand d-flex pt-3">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/assets/img/sripuspa.jpeg" class="d-block w-100 h-25" alt="...">
                          </div>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-between">
                    <div class="pt-2" style="line-height: 5px;">
                        <h2 class="text-danger">Discount 2%</h2>
                        <p>Bagi Member BOOMBEST.net</p>
                    </div>
                    <div style="line-height: 1px;">
                        <p style="font-size: 50px"><ion-icon name="qr-code-outline"></ion-icon></p>
                        <a href=" {{-- route('barcode') --}} #" class="btn btn-primary" style="font-size: 12px; margin-top: -15px;">Klaim</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--pop up detail-->





      <div class="mb-5">
        <br><br><br>
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

    <!---script---------->
	<script src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.list').click(function(){
				const value = $(this).attr('data-filter');
				if (value == 'all'){
					$('.itemBox').show('1000');
				}
				else{
					$('.itemBox').not('.'+value).hide('1000');
					$('.itemBox').filter('.'+value).show('1000');
				}
			})

			// add active class on selected item

			$('.list').click(function(){
				$(this).addClass('active').siblings().removeClass('active');
			})
		})
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.list2').click(function(){
				const value = $(this).attr('data-filter2');
				if (value == 'all'){
					$('.itemBox2').show('1000');
				}
				else{
					$('.itemBox2').not('.'+value).hide('1000');
					$('.itemBox2').filter('.'+value).show('1000');
				}
			})

			// add active class on selected item

			$('.list').click(function(){
				$(this).addClass('active').siblings().removeClass('active');
			})
		})
	</script>

    </body>
</html>
