@extends('layouts.app')

@section('content')

<section class="">


<style>
    *{
      scroll-behavior: smooth;
    }
    .kontener {
        background-color: #37B629;
    }
    .hovera{
        background-color:#ff3709 ;
    }
    .hovera:hover {
        background-color: #1a174d;
    }
</style>

<section class="slider-section mt-5 mb-3 d-none d-lg-block" style="padding-top: 11.5em;">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-lg-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded w-100 h-25">
                          @foreach($dataIklan1 as $key => $row)
                            @if($row->level == "Home1")
                              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                  <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
                              </div>
                            @else
                              "tes"
                            @endif
                          @endforeach

                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider-section mt-5 mb-3 d-md-none d-lg-none d-xl-none" style="padding-top: 7.5em;">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-lg-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded w-100 h-25">
                          @foreach($dataIklan1 as $key => $row)
                            @if($row->level == "Home1")
                              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                  <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
                              </div>
                            @else
                              "tes"
                            @endif
                          @endforeach

                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>



<style>
.section-title h2::before {
    position: absolute;
    content: "";
    height: 2px;
    width: 100px;
    background: #37B629;
    left: 40px;
    bottom: 0;
    margin-left: -25px;
}
#pot::-webkit-scrollbar {
    width: 0;
    height: 12px;
}
</style>

 <div class="container col-md-12 mt-4 mb-4" style="border-radius: 10px;">
      {{-- <div class="row">
          <div class="col-12">
              <div class="section-title">
                  <h2 class="d-inline-success float-left">Kategori</h2>
              </div>
          </div>
      </div> --}}

        <div class=" pt-3">
            <div style="display: flex; overflow-x : auto;" id="pot">
                @foreach($kategorihome as $item)
                    <div  class=" card mx-auto border-0 " style="min-width: 6rem; height: 7rem; line-height: 2rem; min-height: 2rem; display: block;">

                        <a class="px-auto" href="{{route('detailkategori', $item->kategori)}}">

                            <img src="{{ url('/foto_kategori/'. $item->img_kategori) }}" class="card-img-top img-fluid my-3 mx-3" alt="#"
                                style="background-size: cover; background-position: center; max-height: 50px; max-width: 60px;">
                            <div class="m-auto">
                                <h6 class="hnya card-title text-center font-weight-600" style="font-size: 10px;">{{ $item->nama }}</h6>
                            </div>

                        </a>

                    </div>

                @endforeach
            </div>
        </div>
  </div>
</section>

<!--    trending-->
<section class="container products-grids trending pb-4 pt-2">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-8">
            <div class="section-title">
                <h2>Trending</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!--produk-->
        @foreach($trending as $item)
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
        @endforeach
    </div>
  </div>
</section>

<!--    kategori 2-->




<section class="slider-section mt-3 mb-3">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded">
                          @foreach($dataIklan2 as $key => $row)
                          @if($row->level == 'Home2')
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
                            </div>
                            @else
                          @endif
                          @endforeach

                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>


<!--    Pilihan Hari Ini-->
<section class="container products-grids trending pb-4 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h2>Pilihan Hari Ini</h2>
                </div>
            </div>
        </div>

        <div class="row">
          <!--produk-->
          @foreach($pilihanHariIni as $item)
          <div class="col-xl-3 col-lg-4 col-md-4 col-6 mt-3 p-1">
            <a href="home/detail/{{ $item->id }}">
              <div class="single-product">
                  <div class="product-img m-1">
                      <a href="home/detail/{{ $item->id }}">
                          <p class="image_view">
                            <label class="img-view">
                               <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-view img-fluid">
                            </label>
                          </p>
                      </a>
                  </div>
                  <div class="product-content" style="z-index: 100; margin-top: -20px;">
                      <h3 class="text-truncate"><a href="home/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
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
          @endforeach
      </div>
    </div>
</section>






<section class="slider-section mt-3 mb-3" id="rekomendasi">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded">
                          @foreach($dataIklan3 as $key => $row)
                          @if($row->level == 'Home3')
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
                            </div>
                            @else
                          @endif
                          @endforeach

                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>


<!--    Rekomendasi-->
<section class="container products-grids trending pb-4 pt-5" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h2>Rekomendasi</h2>
                </div>
            </div>
        </div>

        <div class="row">
          <!--produk-->
          @foreach($rekomendasi as $item)
          <div class="col-xl-3 col-lg-4 col-md-4 col-6 mt-3 p-1">
            <a href="home/detail/{{ $item->id }}">
              <div class="single-product">
                  <div class="product-img m-1">
                      <a href="home/detail/{{ $item->id }}">
                          <p class="image_view">
                            <label class="img-view">
                               <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-view img-fluid">
                            </label>
                          </p>
                      </a>
                  </div>
                  <div class="product-content" style="margin-top: -20px;">
                      <h3 class="text-truncate"><a href="home/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
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
          @endforeach
      </div>
    </div>
</section>


<section class="slider-section mt-3 mb-3">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded">
                          @foreach($dataIklan4 as $key => $row)
                          @if($row->level == 'Home4')
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img class="d-block w-100" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
                            </div>
                            @else
                          @endif
                          @endforeach

                        </div>
                    </div>
                    <!-- End Slider -->
                </div>
            </div>
        </div>
    </div>
</section>


<!--produk-->
<section class="container products-grids trending pb-3 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h2>Lainnya</h2>
                </div>
            </div>
        </div>

        <div class="row">
          <!--produk-->
          @foreach($lainnya as $item)
          <div class="col-xl-3 col-lg-4 col-md-4 col-6 mt-3 p-1">
            <a href="home/detail/{{ $item->id }}">
              <div class="single-product">
                  <div class="product-img m-1">
                      <a href="home/detail/{{ $item->id }}">
                          <p class="image_view">
                            <label class="img-view">
                               <img src="{{ url('products/'. $item->img_barang) }}" alt="" class="foto-view img-fluid">
                            </label>
                          </p>
                      </a>
                  </div>
                  <div class="product-content" style="margin-top: -20px;">
                      <h3 class="text-truncate"><a href="home/detail/{{ $item->id }}">{{ $item->nama_barang }}</a></h3>
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
          @endforeach
      </div>
    </div>
</section>



</section>

@endsection
