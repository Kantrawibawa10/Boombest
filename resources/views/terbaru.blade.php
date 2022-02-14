@extends('layouts.app')

@section('content')
<!------------------------------------------
SLIDER IKLAN
------------------------------------------->
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
</style>

<section>
  <section class="slider-section mt-5 mb-3" style="padding-top: 11.5em;">
      <div class="container">
          <div class="">
              <div class="">
                  <div class="col-md-12 col-12">
                      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                          <div class="carousel-inner shadow-sm rounded">
                            @foreach($dataIklanNew as $key => $row)
                            @if($row->level == 'New')
                              <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                  <img class="d-block w-100 img-fluid" src="{{ asset('/slider/'. $row->iklanpict) }}" alt="First slide">
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

<section class="">
<!------------------------------------------
Page Header
------------------------------------------->

    <section class="products-grid">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-8 col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="products-top" style="background: #37B629;">
                                <div class="products-top-inner">
                                    <div class="products-found">
                                        <p class="text-white"><span>Pilih Wilayah!</span></p>
                                    </div>
                                    <div class="products-sort">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div style="display: flex; overflow-x : auto;" id="pot">
                              @foreach($wilayah as $item)
                                <div  class=" card mx-auto border-0 " style="min-width: 6rem; height: 7rem; line-height: 2rem; min-height: 2rem; display: block;">

                                    <a class="px-auto" href="/terbaru/daerah/{{$item->daerah}}">

                                        <img src="{{ url('/assets/img/kab/'. $item->img_daerah ) }}" class="card-img-top img-fluid my-3 mx-1" alt="#"
                                            style="background-size: cover; background-position: center; max-height: 50px; max-width: 60px;">
                                        <div class="m-auto text-center">
                                            <h6 class="hnya card-title text-center font-weight-600" style="font-size: 10px; width: 70px;">{{ $item->nama_daerah }}</h6>
                                        </div>

                                    </a>

                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-grid mt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-8 col-12">
              <div class="container">
               
    		<div class="row">
        		<div class="col-lg-12 col-md-8">
            			<div class="section-title">
                		<h2>Semua Produk</h2>
            		</div>
        	</div>
    	  </div>


                  <div class="row">
                    <!--produk-->
                    @forelse($terbaru as $item)
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
        <!--end produk-->		    @empty
            	   <div class="container p-auto mt-5 pt-5">
                      <p class="text-center mx-auto mb-3 text-white bg-warning" style="font-size: 40px; width: 70px;
              	      border: 1px solid gray; border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);">!</p>
                      <p class="text-center" style="font-size: 18px; font-weight: 400;">Maaf Produk Belum <br> Tersedia Pada Wilayah ini!!</p>
            	   </div>
                    <!--end produk-->
                    @endforelse
                </div>

            <div class="row">
              <div class="col-12 container">
                @include('layouts.paginate', ['paginator' => $terbaru])
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

</section>

@endsection
