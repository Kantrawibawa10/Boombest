<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/mobile/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/boombest.jpg">

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
            <img src="/mobile/img/bg-info.png" class="d-block w-100"  alt="...">
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
                <img src="/mobile/img/logo.png" alt="" width="80" height="80">
                <span class="text-dark mx-3 mt-1" style="font-size: 25px; padding: 10px 0 0 0; position: absolute;">BOOMBEST.net<br><p style="font-size: 15px;"><em>Salam Dahsyat....!!!</em><p></span>
              </a>
            </div>
          </div>
        </div>
      </div>
   </div>
	<div class="container mt-5">
		<div id="player" class="col-lg-12 container"></div>
	    	<script>
      // 1. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 2. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '300vh',
          width: '100%',
          playerVars: {
                    autoplay: 1,
                    loop: 1,
                    controls: 0,
                    showinfo: 0,
                    autohide: 1,
                    modestbranding: 1,
                    vq: 'hd1080'},
          videoId: '3QyvYFOoZSs',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 3. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      var done = false;
      function onPlayerStateChange(event) {

      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
	</div>



      <div class="m-auto mt-3 container">



       <div class="d-flex justify-content-between">
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
		BOOMBEST adalah Web App dengan terobosan dan inovasi baru, yang mana Web App ini akan sangat membantu member dalam memperoleh penghasilan,  Tanpa harus mengganggu aktifitas anda sehari-hari.
		BOOMBEST hadir untuk memenuhi segala kebutuhan masyarakat di era digital masakini, dengan mencermati situasi dan perkembangan dunia digital saat ini, Dan masyarakat yang nantinya bergabung sebagai member BOOMBEST, bisa mendapatkan penghasilan kapanpun, dimanapun, dan dalam kondisi/situasi apapun, bahkan saat ditempat tidur sekalipun.<div id="pendaftaran"></div><div><br></div>

	    </p>
	</div>


       <div class="d-flex justify-content-between">
        <div class="mx-2">
          <span class="text-white" style="font-size: 25px;">Cara Pendaftaran</span>
          <div class="d-flex">
            <div style="background: white; width: 63px; height: 5px;"></div>
            <div class="bg-warning" style="width: 63px; height: 5px;"></div>
            <div class="bg-danger" style="width: 63px; height: 5px;"></div>
          </div>
        </div>
      </div>


	<div class="container mt-4">
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Klik Link Web app boombest yang  sudah dikirimkan oleh teman melalui media social atau bisa LOGIN langsung pada google crome dengan WWW.BOOMBEST.NET.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">DAFTAR.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Masukkan Nomor Induk KTP ( NIK ).</p></span>
           <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Check NIK.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Isi form pendaftaran sesuai ketentuan kemudian REGISTRASI.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Muncul No VIRTUAL ACCOUNT Bisa melakukan pembayaran melalui ATM,INTERNET BANKING , M BANKING dll.  dari bank manapun dengan cara transfer biasa ( bukan transfer melalui virtual account ).</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Pembayaran akan ditunggu 1 x 24jam.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Apabila dalam waktu tersebut pembayaran belum dilakukan maka member akan expired.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Pembayaran berhasil dilakukan.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">BACK TO LOGIN.</p></span>
	   <div id="keunggulan"></div>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Masukkan user name dan password kemudian LOGIN.</p></span>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Anda sudah bisa mengaktifkan TOKO anda dengan memulai mengelola TOKO anda sendiri.</p></span>
           <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Untuk membagikan no Referral klik profile kemudian share.</p></span>
           <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Klik pada photo profile untuk merubah profil anda ikuti sesuai kolom ketentuan.</p></span>
	</div>


	{{--<div class="d-flex justify-content-between">
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
           <div id="ketentuan"></div>
	   <span class="d-flex"><i class="fas fa-circle text-white mt-2 px-2" style="font-size: 10px;"></i><p class="text-white" style="text-align: justify;">Toko member bisa dikendalikan dari ponsel, dan setiap saat dapat melakukan update produk ataupun update harga, sesuai dengan keinginan para member.</p></span>
	</div>--}}

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
	   <span class="d-flex text-white"><p class="px-2">1.</p> <p class="text-white" style="text-align: justify;">Biaya pendaftaran member yang terjangkau hanya Rp. 250.000 selama menjadi member.</p></span>
	   <span class="d-flex text-white"><p class="px-2">2.</p> <p class="text-white" style="text-align: justify;">Fee point  dari member yang baru bergabung ( downline )mencapai 4 level kebawah.</p></span>
	   <span class="d-flex text-white"><p class="px-2">3.</p> <p class="text-white" style="text-align: justify;">Tidak ada Batasan member untuk kesamping karena BOOMBEST menggunakan system jaringan matahari.</p></span>
           <span class="d-flex text-white"><p class="px-2">4.</p> <p class="text-white" style="text-align: justify;">1 member sama dengan 1 point dan  nilai 1 point sebesar 25.000 dipotong pajak.</p></span>
	   <span class="d-flex text-white"><p class="px-2">5.</p> <p class="text-white" style="text-align: justify;">Point pertama akan diendapkan sebesar 20 point pada member atau senilai Rp. 500.000.</p></span>
	   <span class="d-flex text-white"><p class="px-2">6.</p> <p class="text-white" style="text-align: justify;">Member akan expired dalam 750 hari ( -+ 2,2 tahun ) dan akan dilakukan pemotongan dana yg diendapkan pada member sebesar Rp.250.000 apabila disetujui untuk perpanjangan member apabila member tidak diperpanjang lagi maka dana yang mengendap  tersebut akan dikembalikan.</p></span>
	   <span class="d-flex text-white"><p class="px-2">7.</p> <p class="text-white" style="text-align: justify;">Setelah melakukan perpanjangan, pada pembayaran point dibulan pertama akan diendapkan lagi sebesar 10 point atau sebesar Rp 250.000 untuk menggantikan point yg dipakai perpanjangan member sebelumnya ini akan dilakukan setiap member tersebut expired.</p></span>
	   <span class="d-flex text-white"><p class="px-2">8.</p> <p class="text-white" style="text-align: justify;">Adanya Perputaran posisi member yang diawal sebagai upline, akan Kembali menjadi downline  ketika member tersebut expired.</p></span>
	   <span class="d-flex text-white"><p class="px-2">9.</p> <p class="text-white" style="text-align: justify;">Member yang expired sebelumnya. pointnya masih tetap mengalir sampai point tersebut akan habis dengan sendirinya, dan seterusnya.</p></span>
	   <span class="d-flex text-white"><p class="px-2">10.</p> <p class="text-white" style="text-align: justify;">Jika member tidak melakukan perpanjangan waktu ,maka account akan ditutup dan otomatis dana yg mengalir dari downline sebelumnya akan diputus.</p></span>
	   <span class="d-flex text-white"><p class="px-2">11.</p> <p class="text-white" style="text-align: justify;">Apabila member di perpanjang maka kita akan dapat no referral baru yg akan kita bagikan lagi dengan jaringan point yang sebelumnya masih tetap aktif.</p></span>
	   <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Referral baru kita akan diatur oleh system secara acak menjadi downline dari member yang sudah ikut sebelumnya dengan jumlah point paling sedikit.</p></span>
	   <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Perputaran system ini berlaku untuk semua member secara systematis.</p></span>
	   <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Member yang tutup usia tidak dapat diperpanjang lagi.</p></span>
           <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Dengan investasi hanya Rp 250.000 hanya sekali dapatkan berjuta manfaat dari program ini.</p></span>
           <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Produk boombest akan terus dikembangkan kedepannya sesuai trend yg berkembang didunia digital sehingga banyak keuntungan yang didapat dari member BOOMBEST.</p></span>
           <span class="d-flex text-white"><p class="px-2">12.</p> <p class="text-white" style="text-align: justify;">Program ini adalah murni system digital tidak ada yang manual sehingga tidak ada yang bisa memanipulasi system.</p></span>

	</div>

      <div class="d-flex justify-content-between">
        <div class="mt-4 mx-2">
          <span class="text-white" style="font-size: 25px; line-height: 20px;">Simulasi Arisan Investasi Bersama ( Aristama )Arisan investasi Bersama</span>
          <div class="d-flex">
            <div style="background: white; width: 63px; height: 5px;"></div>
            <div class="bg-warning" style="width: 63px; height: 5px;"></div>
            <div class="bg-danger" style="width: 63px; height: 5px;"></div>
          </div>
        </div>
      </div>

      <div class="container mt-4 mb-5">
	  <span class="d-flex text-white"><p class="text-white" style="text-align: justify;">System Matahari 4 Level Simulasi Sebagai Berikut :</p></span>
          <span class="d-flex text-white"><p class="px-2">1.</p> <p class="text-white" style="text-align: justify;">Ketika tergabung  kita mendapatkan <span class="text-warning">50 member</span>  di level pertama. </p></span>
          <span class="d-flex text-white"><p class="px-2">2.</p> <p class="text-white" style="text-align: justify;">Masing – masing yang tergabung tadi tentunya akan bergerak juga mencari member. </p></span>
          <span style="line-height: 15px;">
	     <span class="d-flex text-white"><p class="px-2">3.</p> <p class="text-white" style="text-align: justify;">Katakanlah masing – masing mendapat <span class="text-warning">20 member</span></p></span>
             <span class="d-flex text-white"><p class="px-2"> <p class="text-white mx-2 px-1" style="text-align: justify;">member kita masuk ke level ke 2 menjadi <span class="text-warning">50 x 20 = 1000 member</span>.</p></span>
             <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;"><span class="text-warning">dari 1000 member</span> ini akan bergerak lagi diambil rata-rata dapat <span class="text-warning">10 member</span>,</p></span>
	     <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">member kita masuk ke level ke 3, <span class="text-warning">1000 x 10 = 10.000</span></p></span>
	     <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">dari <span class="text-warning">10.000 member</span> ini bergerak lagi mendapat rata-rata 5 member</p></span>
             <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">member kita masuk ke level ke 4 atau level terakhir <span class="text-warning">10.000 x 5 = 50.000</span></p></span>
             <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">total dalam 4 level kita mencapai <span class="text-warning">50.000 point</span></p></span>
             <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">maka kalau ditukar pointnya ke rupiah yang 1 point nilainya <span class="text-warning">Rp. 25.000</span></p></span>
             <span class="d-flex text-white"><p class="px-2"><p class="text-white mx-2 px-1" style="text-align: justify;">maka <span class="text-warning">50.000  x 25.000 = Rp. 1. 250.000.000</span></p></span>
	  </span>
	  <span class="d-flex text-white"><p class="text-white" style="text-align: justify;">jumlah ini tidak akan kita sadari karena kita hanya  mendapat <span class="text-warning">50 member</span> saja yg selanjutnya masing – masing downline member kita bekerja mencari jaringan dengan sendirinya</p></span>

	    <div>
		<p class="text-white" style="text-align: justify;">Kesimpulannya semakin aktif kita membahas boombest dengan teman – teman ,semakin besar peluang teman untuk ikut menjadi member maka semakin besar peluang untuk mendapatkan point.</p>
		<p class="text-white" style="text-align: justify;">ingat 1 teman sejuta point dan satu lagi siapa cepat dia yang mendapat point padat.</p>
		<p class="text-white" style="text-align: justify;">Terimakasih<br>Salam Dahsyat....!!!</p>
           </div>
	</div>

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
	<div class="mb-3"><br></div>
        <!---------------------------------------------------------------social media---------------------------------------------------------->




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
