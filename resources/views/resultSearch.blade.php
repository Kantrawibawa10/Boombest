@extends('layouts.app')

@section('content')
{{--dd($barang)--}}


<!------------------------------------------
SLIDER IKLAN
------------------------------------------->

<section class="container products-grids trending pb-4 pt-5 d-none d-lg-block" style="margin-top: 11.5em;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h2>Hasil Pencarian</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!--produk-->
            @forelse($barang as $item)
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
        <!--end produk-->            @empty
            <div class="container p-auto mt-5 pt-5">
              <p class="text-center mx-auto mb-3 text-white bg-warning" style="font-size: 40px; width: 70px;
              border: 1px solid gray; border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);">!</p>
              <p class="text-center" style="font-size: 18px; font-weight: 400;">Maaf Produk Yang <br> Anda Cari Tidak Ada!!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="container products-grids trending pb-4 pt-5 d-md-none d-lg-none d-xl-none" style="margin-top: 7.5em;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="section-title">
                    <h2 class="d-inline-success">Hasil Pencarian</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!--produk-->
            @forelse($barang as $item)
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
        <!--end produk-->            @empty
            <div class="container p-auto mt-5 pt-5">
              <p class="text-center mx-auto mb-3 text-white bg-warning" style="font-size: 40px; width: 70px;
              border: 1px solid gray; border-radius: 50%; box-shadow:  4px 4px 8px rgba(0,0,0,0.9);">!</p>
              <p class="text-center" style="font-size: 18px; font-weight: 400;">Maaf Produk Yang <br> Anda Cari Tidak Ada!!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>




@endsection
