@extends('layouts.app')

@section('content')
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

<section class="slider-section mt-5 mb-3 d-none d-lg-block" style="padding-top: 11.5em;">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded">
                          @foreach($dataIklanCategory as $key => $row)
                          @if($row->level == 'Category')
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

<section class="slider-section mt-5 mb-3 d-md-none d-lg-none d-xl-none" style="padding-top: 6.5em;">
    <div class="container">
        <div class="">
            <div class="">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

                        <div class="carousel-inner shadow-sm rounded">
                          @foreach($dataIklanCategory as $key => $row)
                          @if($row->level == 'Category')
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
    <!--kategori-->
    <section class="products-grid">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-8 col-12 mt-3">
                  <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="products-top" style="background: #37B629;">
                                <div class="products-top-inner">
                                    <div class="products-found">
                                        <p class="text-white"><span>Semua Kategori</span></p>
                                    </div>
                                    <div class="products-sort">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center d-none">
                            @foreach($kategori as $item)
                            <div class="bg-white mt-5 mr-4 p-2 mx-auto" style="width: 8rem;">

                                <a class="py-5" href="{{route('detailkategori', $item->kategori)}}">

                                        <img src="{{ url('foto_kategori/'. $item->img_kategori) }}" class="card-img-top img-fluid my-3 mx-2" alt="#"
                                        style="background-size: cover; background-position: center; height: auto; width: 90px;">
                                        <div class="mt-3">
                                          <h6 class="hnya card-title text-center">{{ $item->nama }}</h6>
                                        </div>

                                </a>

                            </div>
                            @endforeach


                    </div>

		    <div class="row d-flex justify-content-center d-md-none d-lg-none d-xl-none mb-5">
                            @foreach($kategori as $item)
                            <div class="bg-white mt-5 mr-4 p-2 mx-auto mb-5" style="width: 8rem;">

                                <a class="py-5" href="{{route('detailkategori', $item->kategori)}}">

                                        <img src="{{ url('foto_kategori/'. $item->img_kategori) }}" class="card-img-top img-fluid my-3 mx-2" alt="#"
                                        style="background-size: cover; background-position: center; height: auto; width: 90px;">
                                        <div class="mt-3">
                                          <h6 class="hnya card-title text-center">{{ $item->nama }}</h6>
                                        </div>

                                </a>

                            </div>
                            @endforeach


                    </div>

                  </div>
                </div>
            </div>
        </div>
    </section>

</section>

@endsection
