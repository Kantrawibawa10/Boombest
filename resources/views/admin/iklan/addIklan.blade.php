@extends('layouts.admin')

@section('navbar')
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="/tabel/style.css">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center bg-success">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="img-fluid" style="width: 50px; height: 50px;"></a>
                <p class="navbar-brand brand-logo text-white" style="line-height: 16px; font-size: 15px; font-weight: 500; padding-right: 35px; padding-top: 20px;">{{ auth()->user()->role }}
                    <br><span style="font-weight: 200; font-size: 13px;">BOOMBEST.net</span></p>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant text-white"></span>
                </button>
            </div>
        </div>        
	<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-success">

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <section class="products-grid ">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-md-8 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="products-top bg-success">
                                            <div class="products-top-inner">
                                                <div class="products-found">
                                                    <p><span class="text-white">Tambah Iklan</span></p>
                                                </div>
                                                <div class="products-sort">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="justify-content-start p-2">

                                    <form action="{{ route('postIklan') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!--img upload--->
                                      <div>

                                          
					    <section class="slider-section mb-3">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-12 w-auto mx-auto rounded ">
                                                            <div id="carouselExampleIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
                                                                <div id="carouselatur1" class="carousel-inner shadow-sm rounded">
                                                                    <div class="itemlah carousel-item active ">

                                                                        <img class="d-block w-100 img-fluid position-absolute" src="" alt="" id="gambar_nodin">
                                                                        <div class="btn-input position-absolute m-3 ">
                                                                            <input class="d-none" type="file" accept="image/svg+xml, image/png, image/jpeg" name="iklanpict" id="preview_gambar">
                                                                            <label for="preview_gambar" class="btn btn-light shadow w-auto">1149.75 x 653</label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- End Slider IKLAN -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>



                                      </div>


                                        <!--img upload--->

                                        <div class="mb-3 col-md-3">
                                            <label for="level" class="form-label">Level</label>
                                            <select type="text" id="level" name="level" class="form-control dropdown-toggle">
                                                <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Level</option>


                                                    @if (count($dataIklan1) >= 10)
                                                        <option value="Home1" disabled class="dropdown-item">Halaman Home Level 1 (Full)</option>
                                                    @else
                                                        <option value="Home1" class="dropdown-item">Halaman Home Level 1</option>
                                                    @endif


                                                    @if (count($dataIklan2) >= 10)
                                                        <option value="Home2" disabled class="dropdown-item">Halaman Home Level 2 (Full)</option>
                                                    @else
                                                        <option value="Home2" class="dropdown-item">Halaman Home Level 2</option>
                                                    @endif


                                                    @if (count($dataIklan3) >= 10)
                                                        <option value="Home3" disabled class="dropdown-item">Halaman Home Level 3 (Full)</option>
                                                    @else
                                                        <option value="Home3" class="dropdown-item">Halaman Home Level 3</option>
                                                    @endif


                                                    @if (count($dataIklan4) >= 10)
                                                        <option value="Home4" disabled class="dropdown-item">Halaman Home Level 4 (Full)</option>
                                                    @else
                                                        <option value="Home4" class="dropdown-item">Halaman Home Level 4</option>
                                                    @endif


                                                    @if (count($dataIklanNew) >= 10)
                                                        <option value="New" disabled class="dropdown-item">Halaman Terbaru (Full)</option>
                                                    @else
                                                    <option value="New" class="dropdown-item">Halaman Terbaru</option>
                                                    @endif


                                                    @if (count($dataIklanCategory) >= 10)
                                                        <option value="Category" disabled class="dropdown-item">Halaman Kategori (Full)</option>
                                                    @else
                                                        <option value="Category" class="dropdown-item">Halaman Kategori</option>
                                                    @endif

                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="link" class="form-label">Link Tujuan</label>
                                            <input type="text" class="form-control" name="link" id="link" placeholder="https://.....">
                                        </div>


                                        <div class="form-floating mb-3 col-md-6">
                                            <label for="description">Deskripsi</label>
                                            <textarea class="form-control" placeholder="Deskripsi Atau Catatan Singkat Mengenai Iklan" name="description" id="description" style="height: 100px"></textarea>
                                        </div>

                                        <div class="form-floating mb-3 col-md-6 ">
                                            <label for="date_add" >Tanggal Tambah</label>
                                            <input class="form-control " type="date" value='<?php echo date('d m Y'); ?>' name="date_add" id="date_add" required>
                                        </div>

                                        <div class="mb-3 col-md-3">
                                            <label for="date_end" class="form-label">Lama Iklan Terpasang</label>
                                            <select type="date" id="date_end" name="date_end" class="form-control dropdown-toggle">
                                                <?php

                                                $tgl_tambah = date("d-m-Y");

                                                // 1 hari
                                                $berakhir1hari = strtotime("+2 day", strtotime($tgl_tambah));
                                                $berakhir1hari = date('Y-m-d', $berakhir1hari);

                                                // 5 hari
                                                $berakhir5hari = strtotime("+6 day", strtotime($tgl_tambah));
                                                $berakhir5hari = date('Y-m-d', $berakhir5hari);

                                                // 10 hari
                                                $berakhir10hari = strtotime("+11 day", strtotime($tgl_tambah));
                                                $berakhir10hari = date('Y-m-d', $berakhir10hari);

                                                // 30 hari
                                                $berakhir30hari = strtotime("+31 day", strtotime($tgl_tambah));
                                                $berakhir30hari = date('Y-m-d', $berakhir30hari);

                                                ?>
                                                <option selected disabled value=" " class="dropdown-menu" aria-labelledby="dropdownMenuButton1">Pilih Lama Iklan Terpasang!</option>
                                                <option value="<?php echo $berakhir1hari ?>" class="dropdown-item">1 Hari</option>
                                                <option value="<?php echo $berakhir5hari ?>" class="dropdown-item">5 hari</option>
                                                <option value="<?php echo $berakhir10hari ?>" class="dropdown-item">10 hari</option>
                                                <option value="<?php echo $berakhir30hari ?>" class="dropdown-item">30 hari</option>


                                            </select>
                                        </div>


                                        <hr class="mt-5 bg-success">
                                        <div class="d-flex mt-5">
                                            <button type="submit" class="btn btn-success col-md-3 mr-3">Simpan</button>
                                            <a href="{{route('tableIklan')}}" class="btn btn-danger col-md-3">Batal</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-2"></div>
@endsection
