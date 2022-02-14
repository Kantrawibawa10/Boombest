<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <meta property="og:image" itemprop="image"  content="{{asset('assets/img/logoshare.jpeg')}}">

    <meta property="og:title" content="Boombest"/>
    <meta property="og:description" content="Marketplace yang dapat digunakan oleh membernya untuk bertransaksi perdagangan, tanpa harus susah-susah buka toko,"/>    <title>BOOMBEST.net</title>
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

      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="900">
                <img src="/mobile/img/slide1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="900">
                <img src="/mobile/img/slide2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="900">
                <img src="/mobile/img/slide3.png" class="d-block w-100" alt="...">
            </div>
        </div>
      </div>



      <div class="m-auto mt-3 container">
        <!--div class="d-flex justify-content-between">
          <div class="mt-4 mx-2">
            <span class="text-white" style="font-size: 25px;">Gabung Sekarang</span>
            <div class="d-flex">
              <div style="background: white; width: 65px; height: 5px;"></div>
              <div class="bg-warning" style="width: 65px; height: 5px;"></div>
              <div class="bg-danger" style="width: 65px; height: 5px;"></div>
            </div>
          </div>
        </div-->
	@guest
        <marquee width="100%" class="text-center text-white"><h4>Silahkan Login di Sini!!</h4></marquee>
	@endguest

	@auth
	<marquee width="100%" class="text-center text-white"><h4>Selamat Datang di BOOMBEST.net!!</h4></marquee>
	@endauth
     <style>
         .btn-hover-1{
            background: green;
            border-radius: 10px;
            box-shadow: inset -8px -10px 20px -8px rgba(0,0,0,0.4);
            transition: 0.5s;
         }

         .btn-hover-1:hover{
            color: #000000;
            background: rgb(57, 224, 57);
            border-radius: 10px;
            box-shadow:  0 0 0 0;
         }

         .btn-hover-2{
            background: rgb(0, 118, 187);
            border-radius: 10px;
            box-shadow: inset -8px -10px 20px -8px rgba(0,0,0,0.4);
            transition: 0.5s;
         }

         .btn-hover-2:hover{
            color: #000000;
            background: rgb(30, 147, 214);
            border-radius: 10px;
            box-shadow:  0 0 0 0;
         }

         .btn-hover-3{
            background: rgb(255, 194, 63);
            border-radius: 10px;
            box-shadow: inset -8px -10px 20px -8px rgba(0,0,0,0.4);
            transition: 0.5s;
         }

         .btn-hover-3:hover{
            color: #000000;
            background: rgb(248, 199, 93);
            border-radius: 10px;
            box-shadow:  0 0 0 0;
         }

         .btn-hover-4{
            background: rgb(255, 36, 36);
            border-radius: 10px;
            box-shadow: inset -8px -10px 20px -8px rgba(0,0,0,0.4);
            transition: 0.5s;
         }

         .btn-hover-4:hover{
            color: #000000;
            background: rgb(255, 85, 85);
            border-radius: 10px;
            box-shadow:  0 0 0 0;
         }
     </style>
     <!------------------------------------------------tombol login dan daftar------------------------------------------------------------->
      @guest
      <div class="">
        <div class="container py-1 btn-hover-1">
          <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <a href="{{ route('login') }}" class="navbar-brand d-flex">
                <!--i class="fas fa-sign-in-alt text-warning mt-2" style="font-size: 35px;"></i-->
                <span class="text-white text-center" style="font-size: 18px; font-weight: 500;">LOGIN</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-3">
        <div class="container py-1 btn-hover-2">
          <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <a href="http://member.boombest.net?referal={{app('request')->input('referal')}}" class="navbar-brand d-flex">
                <!--i class="fas fa-users text-primary mt-2" style="font-size: 35px;"></i-->
                <span class="text-white text-center" style="font-size: 18px; font-weight: 500;">DAFTAR</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endguest
      <!------------------------------------------------tombol login dan daftar------------------------------------------------------------->

      <!------------------------------------------------tombol marketplace------------------------------------------------------------->
        @guest
        @if(auth()->guest())
        <div class="mt-3">
            <div class="container py-1 btn-hover-3">
              <div class="col-md-12">
                <div class="d-flex justify-content-center">
                  <a href="{{ route('home') }}" class="navbar-brand d-flex">
                    <!--img src="/mobile/img/logo.png" alt="" width="70" height="60"-->
                    <span class="text-dark px-5" style="font-size: 18px; font-weight: 500;">MARKETPLACE</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
        @endif
        @endguest

    @auth
        @if(auth()->user()->role=="member")
        <div class="mt-3">
          <div class="container py-1 btn-hover-3">
            <div class="col-md-12">
              <div class="d-flex justify-content-center">
                <a href="{{ route('home') }}" class="navbar-brand d-flex">
                  <!--img src="/mobile/img/logo.png" alt="" width="70" height="60"-->
                  <span class="text-dark px-5" style="font-size: 18px; font-weight: 500;">MARKETPLACE</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        @if($Exist_toko)
        <div class="mt-3">
            <div class="container py-1 btn-hover-2">
                <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('dashboardMember') }}" class="navbar-brand d-flex">
                    <!--img src="/mobile/img/logo.png" alt="" width="70" height="60"-->
                    <span class="text-white px-5" style="font-size: 18px; font-weight: 500;">KELOLA TOKO	</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        @else
        <div class="mt-3">
            <div class="container py-1 btn-hover-2">
                <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('buattoko') }}" class="navbar-brand d-flex">
                    <!--img src="/mobile/img/logo.png" alt="" width="70" height="60"-->
                    <span class="text-white px-5" style="font-size: 18px; font-weight: 500;">BUAT TOKO	</span>
                    </a>
                </div>
                </div>
            </div>
            </div>
        @endif
        @endif



    @endauth
        <!------------------------------------------------tombol marketplace------------------------------------------------------------->

        <div class="mt-3 mb-4">
            <div class="container py-1 btn-hover-4">
              <div class="col-md-12">
                <div class="d-flex justify-content-center">
                  <a href="https://www.youtube.com/channel/UCc9XSp8GSiP9-JTTH6Y2VoQ" class="navbar-brand d-flex">
                    <span class="text-white px-5" style="font-size: 18px; font-weight: 500;">YOUTUBE</span>
                  </a>
                </div>
              </div>
            </div>
	    <span class="text-white text-center" style="font-size: 15px;"><p>*Tonton Youtube kami untuk info lebih lengkap seputar Boombest.net!!!</p></span>
        </div>

       <!--<div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px;">Tentang Kami</span>
          <div class="d-flex">
            <div style="background: white; width: 50px; height: 5px;"></div>
            <div class="bg-warning" style="width: 50px; height: 5px;"></div>
            <div class="bg-danger" style="width: 50px; height: 5px;"></div>
          </div>
        </div>
      </div>


	<div class="container mt-4">
	   <p class="text-white" style="text-align: justify;">BOOMBEST merupakan produk dari PT. CITRAMARTA BOOMBEST ARISTAMA. Perusahaan yang bergerak dibidang Portal Web Dan/Atau Platform Digital Dengan Tujuan Komersial ( Kode KBLI 63122 ) Dengan Nomor Induk Berusaha ( NIB ) : 2610210015577.
		yang secara resmi sudah terdaftar di Kementrian Hukum dan Hak Azasi Manusia, dengan badan hukum NOMOR AHU-0065301.AH.01.01.TAHUN 2021. Yang beralamatkan di Jalan Siulan Nomor 63A. Banjar/Lingkungan BUAJI, Kelurahan Penatih Dangin Puri, Kecamatan Denpasar Timur, Kota Denpasar, Provinsi Bali. Kode Pos 80238.
		BOOMBEST adalah Web APP Marketplace yang dapat digunakan oleh membernya untuk bertransaksi perdagangan, tanpa harus susah-susah buka toko, yang akan banyak membutuhkan dana untuk sewa tempat dan pengadaan barang dagangan. Dan dalam ruang ini juga terdapat Program Arisan Investasi Bersama yang berbasis digital,
		BOOMBEST adalah Web App dengan terobosan dan inovasi baru,  yang mana Web App ini akan sangat membantu member dalam memperoleh penghasilan,  Tanpa harus mengganggu aktifitas anda sehari-hari.
		BOOMBEST hadir untuk memenuhi segala kebutuhan masyarakat di era digital masakini, dengan mencermati situasi dan perkembangan dunia digital saat ini, Dan masyarakat yang nantinya bergabung sebagai member BOOMBEST, bisa mendapatkan penghasilan kapanpun, dimanapun, dan dalam kondisi/situasi apapun, bahkan saat ditempat tidur sekalipun.
	   </p>
	</div>

       <div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px;">Cara Pendaftaran</span>
          <div class="d-flex">
            <div style="background: white; width: 63px; height: 5px;"></div>
            <div class="bg-warning" style="width: 63px; height: 5px;"></div>
            <div class="bg-danger" style="width: 63px; height: 5px;"></div>
          </div>
        </div>
      </div>


	<div class="container mt-4">
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Klik Link Web App boombest yang sudah dikirimkan oleh teman anda melalui media social, atau bisa log in langsung melalui Google Chrome dengan mengetik www.boombest.net</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Untuk yang langsung log in melalui Google Chrome harus memasukkan ulang kode nomer reveral  yang sudah di share oleh teman anda,</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Apabila yang masuk melalui Link yang dishare oleh teman anda melaui media social, maka nomor reveral sudah akan langsung terisi secara otomatis</p></span>
           <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Kemudian tekan daftar dan lakukan pengisian data diri.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Silahkan isi semua form pendaftaran  sesuai yang diminta oleh system, kemudian kirim</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Berikutnya anda akan dapat balasan no virtual account kemudian silahkan lakukan pembayaran melalui transfer atm, m banking, internet banking dll</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Tunggu verifikasi pembayaran anda dari system perbankan max. 1 x 24jam</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Aplikasi marketplace sudah bisa dibuka, disana anda sudah mendapatkan 1 toko, dan anda sudah dapat mengisi nama toko dan dll, dan anda sudah bisa mulai berjualan</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Sistem akan mengirimkan member dan nomor reveral anda,  Kemudian nomor reveral anda tersebut sudah bisa dibagikan ke seluruh teman melaui media sosial anda,</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Lakukan pembukaan rekening di bank BNI, selajutnya masukkan no rekening Bank BNI anda. Pada profil / toko anda, untuk memudahkan system penggajian dan transaksi di toko anda.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Sistem akan mengirimkan Penghasilan point anda setiap bulan, melalui rekening Bank BNI anda.</p></span>
	</div>

	<div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px; line-height: 20px;">Keunggulan Marketplace <br> Boombest</span>
          <div class="d-flex">
            <div style="background: white; width: 92px; height: 5px;"></div>
            <div class="bg-warning" style="width: 92px; height: 5px;"></div>
            <div class="bg-danger" style="width: 92px; height: 5px;"></div>
          </div>
        </div>
      </div>


	<div class="container mt-4">
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Keamanan transaksi akan lebih terjamin karena semua konsumen adalah members BOOMBEST, yang sudah terecord semua identitas dirinya saat melakukan pendaftaran.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Jika terjadi penipuan antara pembeli dan penjual, Pihak BOOMBEST akan membantu melacak identitas member tersebut, Jika pihak korban sudah melakukan pelaporan kepihak berwajib.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Saat member mengupload produk baru di tokonya, member akan ternotifikasi, ini tentunya akan diketahui oleh semua member, dan pastinya akan sangat mempercepat produk kita untuk diketahui.</p></span>
           <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Toko member bisa dikendalikan dari ponsel, dan setiap saat dapat melakukan update produk ataupun update harga, sesuai dengan keinginan para member.</p></span>
	</div>

	<div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px; line-height: 20px;">Keunggulan & Ketentuan <br> Arisan Investasi Bersama</span>
          <div class="d-flex">
            <div style="background: white; width: 92px; height: 5px;"></div>
            <div class="bg-warning" style="width: 92px; height: 5px;"></div>
            <div class="bg-danger" style="width: 92px; height: 5px;"></div>
          </div>
        </div>
      </div>


	<div class="container mt-4">
	   <span class="d-flex text-white"><p class="px-2">1.</p> <p class="text-white" style="text-align: justify;">Biaya pendaftaran member yang terjangkau, hanya Rp.250.000 selama menjadi member.</p></span>
	   <span class="d-flex text-white"><p class="px-2">2.</p> <p class="text-white" style="text-align: justify;">Fee point dari member yang baru bergabung ( downline anda ) sampai 4 level kebawah.</p></span>
	   <span class="d-flex text-white"><p class="px-2">3.</p> <p class="text-white" style="text-align: justify;">Tidak ada Batasan member untuk kesamping, karena BOOMBEST menggunakan system matahari.</p></span>
           <span class="d-flex text-white"><p class="px-2">4.</p> <p class="text-white" style="text-align: justify;">Penghasilan anda akan di transfer melalui bank BNI setiap bulannya.</p></span>
	   <span class="d-flex text-white"><p class="px-2">5.</p> <p class="text-white" style="text-align: justify;">Point  anda akan mengendap pada member sejumlah 25 point atau senilai Rp.500.000.</p></span>
	   <span class="d-flex text-white"><p class="px-2">6.</p> <p class="text-white" style="text-align: justify;">Member akan expired dalam 750 hari ( -+ 2,2 th ) dan akan dikenakan biaya pembaharuan member sebesar Rp.250.000 yg dipotong secara otomatis dari dana pengendapan pada point member anda. dengan meminta persetujuan terlebih dahulu kepada member tersebut melalui notifikasi di profil member.</p></span>
	   <span class="d-flex text-white"><p class="px-2">7.</p> <p class="text-white" style="text-align: justify;">Jika member tidak menyetujui perpanjangan sebagai member, maka account akan ditutup secara otomatis dan dana yg mengalir dari downline akan dibekukan oleh sistem.</p></span>
	   <span class="d-flex text-white"><p class="px-2">8.</p> <p class="text-white" style="text-align: justify;">Adanya Perputaran posisi member yang diawal sebagai upline, akan Kembali menjadi downline  ketika member tersebut expired.</p></span>
	   <span class="d-flex text-white"><p class="px-2">9.</p> <p class="text-white" style="text-align: justify;">Member yang expired sebelumnya. pointnya masih tetap mengalir sampai point tersebut akan habis dengan sendirinya, dan seterusnya.</p></span>
	   <span class="d-flex text-white"><p class="px-2">10.</p> <p class="text-white" style="text-align: justify;">Member yang tutup usia,  tidak dapat diperpanjang lagi.</p></span>
	   <span class="d-flex text-white"><p class="px-2">11.</p> <p class="text-white" style="text-align: justify;">Dengan Investasi hanya Rp 250,000. hanya sekali. dapatkan berjuta manfaat dari program ini.</p></span>
	   <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Program ini adalah murni system digital, tidak ada yang bisa diatur secara manual, apalagi manipulasi data ataupun manipulasi system.</p></span>
	   <div>
		<p class="text-white" style="text-align: justify;">Kesimpulannya semakin aktif kita ngobrolin boombest dengan teman-teman, semakin besar peluang teman untuk ikut menjadi member, maka semakin besar peluang untuk mendapatkan point.
		Ingat 1 teman sejuta point. dan satu lagi, siapa cepat dia yang mendapat point padat.</p>
		<p class="text-white" style="text-align: justify;">Mari bersama2 kita jaga program ini, agar dapat lebih berkembang, sehingga kita semua bisa mendapatkan hasil tanpa ada yang dirugikan.</p>
		<p class="text-white" style="text-align: justify;">Terimakasih,<br>Salam Dahsyat....!!!</p>
           </div>
	</div>-->


    </div>

    <style>
        .btn-1{
            background: white;
            transition: 0.5s;
        }

        .btn-1:hover{
            color: white;
            background-color: blue;
        }

        .btn-2{
            background: white;
            transition: 0.5s;
            color: #2DAD29;
        }

        .btn-2:hover{
            color: white;
            background-color: #12800e;
        }

        .btn-3{
            background: white;
            transition: 0.5s;
            color: red;
        }

        .btn-3:hover{
            color: white;
            background-color: red;
        }

        .btn-4{
            background: white;
            transition: 0.5s;
            color: rgb(238, 95, 95);
        }

        .btn-4:hover{
            color: white;
            background-color: rgb(238, 95, 95);
        }

        .btn-5{
            background: white;
            transition: 0.5s;
            color: black;
        }

        .btn-5:hover{
            color: white;
            background-color: black;
        }

        .btn-6{
            background: white;
            transition: 0.5s;
            color: black;
        }

        .btn-6:hover{
            color: white;
            background-color: black;
        }
    </style>


    <div class="container" style="z-index: 1; background: #2DAD29;
    border-top-left-radius: 10px; border-top-right-radius: 10px; height: auto; box-shadow: 0 -30px 20px -30px rgba(0,0,0,0.4);">
        <!---------------------------------------------------------------social media---------------------------------------------------------->
        <div class="container d-flex justify-content-center pt-3">
            <a href="https://www.facebook.com/www.boombest.net" class="p-2 mx-1 d-flex btn-1" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <i class="fab fa-facebook-square p-1"></i>Facebook
            </a>

            <a href="https://api.whatsapp.com/send?phone=6282144559035" class="px-2 py-2 mx-1 d-flex btn-2" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <i class="fab fa-whatsapp p-1"></i>WhatsApp
            </a>

            <a href="https://www.youtube.com/channel/UCc9XSp8GSiP9-JTTH6Y2VoQ" class="px-2 py-2 mx-1 d-flex btn-3" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <i class="fab fa-youtube p-1"></i>Youtube
            </a>
        </div>

        <div class="container d-flex justify-content-center mt-2">
            <a href="https://www.instagram.com/boombestnet/" class="p-2 mx-1 d-flex btn-4" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <i class="fab fa-instagram p-1"></i>Instagram
            </a>

            <a href="https://vt.tiktok.com/ZSejYCWFk/" class="px-2 py-2 mx-1 d-flex p-1 btn-5" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <img src="/mobile/icon/tiktok.png" alt="" width="20" height="20">Tik Tok
            </a>

        </div>

        <div class="container d-flex justify-content-center mt-2 mb-5">
            <a href="mailto:info@boombest.net" class="px-3 py-1 mx-1 d-flex btn-6" style="font-size: 15px; text-decoration: none; border-radius: 5px;">
                <div><img src="/mobile/icon/gmail.png" alt="" width="15" height="10"></div><span class="p-1">Gmail</span>
            </a>
        </div>
        <!---------------------------------------------------------------social media---------------------------------------------------------->


        <!------------------------------------------------tombol logout------------------------------------------------------------->
        @auth
        <div class="container mt-4 mb-5">
            <div class="container py-1 btn-hover-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                <a type="submit" class="navbar-brand d-flex">
                    <!--i class="fas fa-sign-in-alt text-danger mt-2" style="font-size: 35px;"></i-->
                    <button type="button" class="text-white mx-3 bg-transparent"
                    data-toggle="modal" data-target="#batal" style="font-size: 18px; border:none; font-weight: 500;">LOG OUT</button>
                </a>
                </div>
            </div>
            </div>
        </div>
        @endauth
        <!------------------------------------------------tombol logout------------------------------------------------------------->
        <div class="mb-3">
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



    @auth
    <!--pop up batal-->
    <div class="modal fade" id="batal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Yakin Ingin Kembali Keluar, {{ auth()->user()->username }}?</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="btn btn-success text-white">Iya</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--pop up batal-->
    @endauth




    <!-- plugins:js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/member/vendors/base/vendor.bundle.base.js"></script>
    <script>
        $('.carousel').carousel({
         interval: 1000
        });
       </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>
