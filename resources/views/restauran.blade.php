@extends('layouts.main')
@section('container')
</div>
<div class="jumbotron-restauran">
<div class="container">
<div class="row">
    <div class="col-md-6 offset-1">
        <img src="/img/iconjumbo.png" style="width:400px; margin-top:200px;" alt="">
    </div>
    <div class="col-md-4">
        <h2 style="font-weight: bold; color:white; margin-top:300px;">FITUR MANAGEMENT RESTAURANT</h2>
    </div>
</div>
</div>
</div>

<div class="container">
    <div class="row mt-5 mb-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="col-md-6 mb-3">
            <h1 class="fw-bold primary">Scan Barcode Pengunjung</h1>
            <p>Pengunjung dapat memindai barcode yang tersedia untuk melihat menu</p>
        </div>
        <div class="col-md-6">
            <img src="img/scan.jpeg"  style="width: 300px;" alt="">
        </div>
    </div>

    <div class="row mt-5 mb-5" data-aos="fade-left" data-aos-duration="1000">
        <div class="col-md-6">
            <img src="img/menu.png"  style="width: 500px;" alt="">
        </div>
        <div class="col-md-6 mt-5">
            <h1 class="fw-bold primary">Menu Makanan dan Minuman</h1>
            <p>Pengunjung dapat melihat menu yang tersedia langsung lewat smartphone tanpa harus mengunduh aplikasi setelah memindai barcode. Pengunjung dapat langsung memesan menu lewat smartphone</p>
        </div>
    </div>

      <div class="row mt-5 mb-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="col-md-6 mt-5">
          <h1 class="fw-bold primary">Form Pengunjung</h1>
          <p>Pengunjung dapat mengisi data nama, no handpone, dan nomor meja untuk melakukan pemesanan</p>
        </div>
        <div class="col-md-6 justify-content-end">
            <img src="img/form.png"  style="width: 200px;" alt="">
        </div>
    </div>

    <div class="row mt-5 mb-5" data-aos="fade-left" data-aos-duration="1000">
      <div class="col-md-6">
        <img src="img/dashboard.png"  style="width: 500px;" alt="">
    </div>
      <div class="col-md-6 mt-5" data-aos="fade-left" data-aos-duration="1000">
        <h1 class="fw-bold primary">Dashboard Statistik Pengunjung</h1>
        <p>Bisnis anda dapat dipantau secara real time, seperti data pengunjung harian atau bulanan. Dan juga data disajikan dalam bentuk chart.</p>
      </div>
  </div>
  <div class="row mt-5 mb-5" data-aos="fade-right" data-aos-duration="1000">
    <div class="col-md-6 mt-5">
      <h1 class="fw-bold primary">Management Pesanan</h1>
      <p>Kasir dapat mengecek pesanan dari tiap pengunjung yang telah memesan, dan memproses pesanan.</p>
    </div>
    <div class="col-md-6">
        <img src="img/pesanan.png"  style="width: 500px;" alt="">
    </div>
  </div>

  <div class="row mt-5 mb-5" data-aos="fade-left" data-aos-duration="1000">
    <div class="col-md-6">
      <img src="img/pengunjung.png"  style="width: 500px;" alt="">
  </div>
    <div class="col-md-6 mt-5">
      <h1 class="fw-bold primary">Management Data Pengunjung</h1>
      <p>Anda dapat memantau daftar pengunjung anda, dan melihat berapa kali pengunjung tersebut datang memesan. Sehingga anda dapat memfilter pelanggan setia anda.</p>
    </div>
</div>

  <div class="row mt-5 mb-5" data-aos="fade-right" data-aos-duration="1000">
    <div class="col-md-6 mt-5">
      <h1 class="fw-bold primary">Management Menu</h1>
      <p>Anda dapat menambahkan kategori dan list menu makanan dan minuman, serta mengupdate harga sesuai dengan kebutuhan anda.</p>
    </div>
    <div class="col-md-6">
        <img src="img/datamenu.png"  style="width: 500px;" alt="">
    </div>
  </div>

  <div class="row mt-5 mb-5" data-aos="fade-left" data-aos-duration="1000">
    <div class="col-md-6">
      <img src="img/user.png"  style="width: 500px;" alt="">
  </div>
    <div class="col-md-6 mt-5">
      <h1 class="fw-bold primary">Management Data User</h1>
      <p>Anda dapat mengatur autentikasi user pengguna platform anda. Sehingga tidak terjadi penyalahgunaan.</p>
    </div>
</div>

</div>

@endsection