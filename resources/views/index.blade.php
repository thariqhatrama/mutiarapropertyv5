@extends('laymas')
@extends('wa')
@section('content')

    <style>
    
#artikel {
    display: flex;
    flex-direction: column; /* Menjaga jarak dengan bagian sebelumnya */
}
    .navbar{
        position: relative;
    }
    .card-img-pilihan {
    width: 220px;
    height: 150px;
}

.card-img-top-pilihan {
    width: 300px;
    height: 221px;
    border-radius: 15px;
}

.card-pilihan:hover {
    transform: scale(1.05);
    background-color: #cac2c2;
}
.keunggulan-wrapper {
    padding-top: 55px;
    padding-bottom: 55px;
    background-color: rgba(234, 234, 234, 0.7);
}

.color-overlay-keunggulan {
    position: relative;
    justify-content: center; /* Akan terpusat secara horizontal */
    align-items: center; /* Akan terpusat secara vertikal */
        top: 0; /* Menempel pada bagian atas parent */
    left: 0; /* Menempel pada bagian kiri parent */
    right: 0; /* Menempel pada bagian kanan parent */
    bottom: 0;
    display: flex;
    background-color: transparent;
}

.centered-text-box {
    color: #FFA500;
}

.centered-text-box h5 {
    color: #2173C0;
}

.centered-text-box p, .centered-text-box p {
    color: #8C8B8B;
}

.text-box-keunggulan {
    background-color: white;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    width: auto;
}

/* CSS Revisi untuk tampilan mobile */
@media (max-width: 768px) {
  .color-overlay-keunggulan {
    flex-direction: column; /* Elemen akan ditumpuk secara vertikal */
  }

  .img-keunggulan, .deskripsi-keunggulan {
    /* Tidak ada margin tambahan pada sisi kiri atau kanan */
    margin-left: 0;
    margin-right: 0;
  }

  .centered-text-box {
    /* Tidak perlu max-width pada tampilan mobile jika ingin konten terisi penuh */
  }
}



/* Contoh Media Query yang tidak nested */
@media (max-width: 768px) {
    .judul-type-rumah h2 {
        font-size: 18px;
    }

    .card {
        width: 100%;
        margin-bottom: 20px;
    }

    .judul-type-rumah h2,
    .keunggulan h3,
    .pilihan .judul-pilihan p {
        font-size: 16px;
    }

    .card-body p,
    .judul-lokasi h6,
    .text-card p {
        font-size: 12px;
    }

    .container-fasilitas {
        background-image: url('img/Rawa Kopi/rawakopi-3.jpg');
        height: 120vh;
    }

    .konten-fasilitas {
        padding: 2rem;
    }

    .judul-type-rumah p {
        font-size: 14px;
    }

    .judul-type-rumah {
        border-left: 15px solid rgb(255, 165, 0);
    }
        .fasilitas-item img {
        width: 50%; /* Mengurangi lebar gambar menjadi 50% dari kontainer-nya */
        margin-bottom: 10px; /* Menambahkan sedikit ruang di bawah gambar */
    }

    .container-fasilitas {
        background-size: cover; /* Menjaga rasio aspek background */
        background-position: center; /* Memastikan bagian tengah gambar tetap terlihat */
    }
}


.carousel-inner {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px; /* Menambahkan border radius */
    overflow: hidden; /* Menjaga konten agar tetap dalam border yang dibuat */
}
.carousel-item img {
    width: 100%; /* Memastikan gambar mengisi lebar penuh dari container carousel */
    height: 250px; /* Tinggi gambar yang tetap, sesuaikan sesuai dengan kebutuhan Anda */
    object-fit: cover; /* Memastikan gambar menutupi area yang tersedia tanpa mengubah rasio aspeknya */
}
    </style>

<section class="d-block d-md-none">
    <img src="{{ asset('img/portrait.png') }}" alt="Mutiara Residence Mobile" class="img-fluid">
  </section>

  <!-- Section for Desktop Image -->
  <section class="d-none d-md-block">
    <img src="{{ asset('img/header 2.png') }}" alt="Mutiara Residence Desktop" class="img-fluid">
  </section>
    {{-- <section id="utama">
        
    </section>
    <div class="img-responsive" style="background-image: url('/img/1024x576.png');">
        <!-- Ini akan menampilkan gambar latar belakang yang responsif -->
      </div> --}}

    
        <section id="fasilitas">
            <div class="container-fasilitas container-fluid" style="background-image: url('./img/Rawa Kopi/rawakopi-2.jpg');">
                <div class="color-overlay-fasilitas container-fluid">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/fasilitas-text.png') }}" class="img-fluid w-100 mb-3" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-cctv.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">CCTV</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-taman.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">Taman Anak</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 d-flex justify-content-center align-items-center">
                            <div class="fasilitas-item">
                                <img src="{{ asset('img/icon-security.png') }}" class="img-fluid w-100" alt="">
                                <p class="d-flex justify-content-center">Keamanan 24 Jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <section id="type-rumah">
        <div class="container-fluid" style="background-color: #092947">
            <div class="row mb-2">
                <div class="judul-type-rumah p-2">
                    <div class="row">
                        <h2>MUTIARA RESIDENCE</h2>
                    </div>
                    <div class="row">
                        <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
                    </div>
                </div>
            </div>

            <div class="box-card p-3">
                <div class="row">
                    <div class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators1"
                                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Lantai 1.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Living Room.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Backyard.png') }}" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Bath Room.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 1/Bedroom.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe 1 Lantai</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (48 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-2 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <img src="{{ asset('img/harga1m.png') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="col-lg-5 p-2 d-flex justify-content-lg-center justify-content-center align-items-lg-center">
                        <div class="card" style="width: 20rem;">
                            {{-- <img src="{{ asset('img/home-1.jpg') }}" class="card-img-top" alt=""> --}}
                            <div class="card-img-top">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators2"
                                            data-bs-slide-to="6" aria-label="Slide 7"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Lantai 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bath Room.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Backyard 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Kitchen.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 1.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 2.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('img/Pondok Cabe/Lantai 2/Bedroom 3.png') }}" class="d-block w-100"
                                                alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body" style="background-color: #eaeaea">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="box-type">
                                            <h4 class="p-1" style="font-size: 12px">Tipe Lantai 2</h4>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <p><b>Luas Bangunan (70 m2)</b></p>
                                        <p><b>Luas Tanah (84 m2)</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="keunggulan-wrapper">
        <section id="keunggulan" class="container">
          <div class="row color-overlay-keunggulan">
            <div class="img-keunggulan col-12 col-lg-6 mx-auto my-3">
              <img src="img/img-keunggulan.png" class="img-fluid" alt="Keunggulan">
            </div>
            <div class="deskripsi-keunggulan col-12 col-lg-6 d-flex justify-content-center align-items-center">
              <div class="centered-text-box text-center text-lg-start">
                <h3><b>Keunggulan</b></h3>
                <h5>Pelayanan yang Kami Berikan untuk Anda</h5>
                <p class="mb-3">Kami selalu siap membantu dengan memberikan layanan terbaik untuk Anda.</p>
                <!-- Repeated for each feature -->
                <div class="text-box-keunggulan mb-2">
                  <div class="row align-items-center">
                    <div class="col-2">
                      <img src="/img/icon-keunggulan.png" class="icon-keunggulan img-fluid" alt="Penawaran dan Pelayanan Terbaik">
                    </div>
                    <div class="col-10">
                      <p>Penawaran dan Pelayanan Terbaik</p>
                    </div>
                  </div>
                </div>
                <div class="text-box-keunggulan mb-2">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="/img/icon-keamanan.png" class="icon-keunggulan img-fluid" alt="Keamanan 24 Jam">
                        </div>
                        <div class="col-9 col-md-10">
                            <p>Keamanan 24 Jam</p>
                        </div>
                    </div>
                </div>
                <div class="text-box-keunggulan">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="/img/icon-3.png" class="icon-keunggulan img-fluid" alt="Harga Terbaik">
                        </div>
                        <div class="col-9 col-md-10">
                            <p>Harga terbaik di pasaran</p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

    <section id="artikel">
        <div class="pt-3" style="background-color: #092947;">
            <div class="container">
                <h4 class="text-white text-center mb-4">Artikel</h4>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/perumahan-elit') }}">
                                    <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residence!</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/perumahan-elit') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/masih-ragu') }}">
                                    <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/masih-ragu') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
                        <div class="card" style="background-color: transparent; width: auto;">
                            <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="{{ url('/artikel/inspirasi-cat') }}">
                                    <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                                </a>
                                <p class="card-text" style="color: #eaeaea">09 Maret 2024</p>
                                <a href="{{ url('/artikel/inspirasi-cat') }}" class="btn btn-primary">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container-fluid p-2 d-flex justify-content-center" style="background-color: #092947;">
            <style>
                .embed-responsive {
                    position: relative;
                    width: 100%; /* Setengah dari lebar viewport */
                    padding-top:35%; /* Memperbarui ini untuk mempertahankan rasio aspek */
                    margin: auto; /* Memusatkan iframe secara horizontal */
                }
    
                .embed-responsive iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    width: 100%;
                    height: 100%;
                    border: none;
                    border-radius: 10px;
                }
            </style>
    
            <div class="embed-responsive">
                <iframe src="https://www.youtube.com/embed/93frsSIUNeU" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section id="pilihan" style="background-color: #eaeaea;">
        <div class="container-fluid">
            <div class="p-3">
                <h4 style="color: #FFA500;">Pilihan Terbaik</h4>
                <h5 style="color: black;">Residence Populer</h5>
            </div>
            <div class="row justify-content-center">
                <!-- Column setup for responsive behavior -->
                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Brawijaya/bwj-2.jpg') }}" class="card-img-top-pilihan"
                            alt="Brawijaya" onclick="location.href='/portfolio#brawijaya';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Brawijaya</b></h5>
                            <p class="card-text" style="color: black;">Jl. Brawijaya No.11, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Kemang/kmg-1.jpg') }}" class="card-img-top-pilihan"
                            alt="Brawijaya" onclick="location.href='/portfolio#kemang';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Kemang</b></h5>
                            <p class="card-text" style="color: black;">Jl. Kemang Timur No.11, Kemang, Kec. Pejaten, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Matoa 1/matoa1-1.jpg') }}" class="card-img-top-pilihan"
                            alt="Matoa 1" onclick="location.href='/portfolio#matoa1';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 1</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Matoa 2/Matoa2-1.png') }}" class="card-img-top-pilihan"
                            alt="Matoa 2" onclick="location.href='/portfolio#matoa2';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Matoa 2</b></h5>
                            <p class="card-text" style="color: black;">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Jagakarsa/jagakarsa-1.jpg') }}" class="card-img-top-pilihan"
                            alt="Jagakarsa" onclick="location.href='/portfolio#jagakarsa';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Jagakarsa</b></h5>
                            <p class="card-text" style="color: black;">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota
                                Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Rawa Kopi/rawakopi-1.jpg') }}" class="card-img-top-pilihan"
                            alt="Rawa Kopi" onclick="location.href='/portfolio#rawa-kopi';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Rawa Kopi</b></h5>
                            <p class="card-text" style="color: black;">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City,
                                West Java</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-3">
                    <div class="card-pilihan card w-100">
                        <img src="{{ asset('img/Pondok Cabe/pondokcabe-5.png') }}" class="card-img-top-pilihan"
                            alt="Pondok Cabe" onclick="location.href='/portfolio#pondok-cabe';">
                        <div class="card-body">
                            <h5 class="card-title"><b>Pondok Cabe</b></h5>
                            <p class="card-text" style="color: black;">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang,
                                Kota Tangerang Selatan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi-fasilitas">
        <div class="container-fluid" style="background-color: #092947">
            <div class="box-fasilitas py-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-6 mb-sm-3">
                        <div class="judul-lokasi mb-3">
                            <h3>Lokasi dan Fasilitas Terdekat</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-hospital fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Rs: Hermina, Mitra Keluarga, Brawijaya,
                                        Sari Asih, Puri Cinere.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-cart fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Supermarket: Superindo, Tiptop,
                                        Indogrosir</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bag fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Mall: The Park Sawangan, Cinere
                                        Mall</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-backpack fa-2x"></i>
                                    <span class="ms-2" style="font-size: 14px;">Sekolah: UT, UnPam,
                                        UPN, Kharisma Bangsa, Harapan Bangsa, SMUN 8, SMPN 2 Dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bus-front fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Terminal Pondok Cabe</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-house-door fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Tempat ibadah: Mesjid, Gereja,
                                        Vihara</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-airplane fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Lapangan Terbang pondok cabe</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-bicycle fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Sport: lapangan golf pondok cabe, lap
                                        Tenis, Gor Badminton.</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-egg-fried fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Restaurant: Mc'D, KFC, Solaria, Burger
                                        King dll</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-shop fa-2x"></i>
                                    <span class="ms-2" style="font-size: 15px;">Pasar Tradisional: Ps Ciputat, Ps
                                        Parung, Ps.Pondok Labu</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="300" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=mutiara%20residence%20pondok%20cabe&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <footer
    class="text-center text-lg-start text-white"
    style="background-color: #0f1925;"
    >
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
  <!--Grid row-->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">
        Mutiara Residence
      </h6>
      <p>
        Tempat Impian Hidup Bermakna, 
        di Mana Setiap Sudut Mencerminkan 
        Elegansi dan Kehangatan Rumah Anda.
      </p>
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p><i class="fas fa-home mr-3"></i> Jl. Kunir No.48A, Pd. Cabe Udik</p>
        <p><i class="fas fa-envelope mr-3"></i> mutiararesidence.id@gmail.com</p>
        <p><i class="fas fa-phone mr-3"></i> (+62) 812 1333 4441</p>
    </div>
        <!-- Grid column -->
    </div>
    <!--Grid row-->
</section>
<!-- Section: Links -->

<hr class="my-3">

<!-- Section: Copyright -->
<section class="p-3 pt-0">
  <div class="row d-flex align-items-center">
    <!-- Grid column -->
    <div class="col-md-7 col-lg-8 text-center text-md-start">
      <!-- Copyright -->
      <div class="p-3">
        © 2024 Copyright:
        <a class="text-white" href="/"
           >Mutiara Property</a
          >
      </div>
      <!-- Copyright -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
        <style>
            .btn-floating {
        width: 40px; /* Atur lebar */
        height: 40px; /* Atur tinggi */
        line-height: 40px; /* Atur line-height agar icon terpusat */
        padding: 0; /* Hilangkan padding default */
        text-align: center; /* Teks/icon terpusat */
        }
        </style>
      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://fb.watch/qY2ik0avOQ/"

         ><i class="fab fa-facebook-f"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.youtube.com/@mutiararesidence-je4hq"
         ><i class="fab fa-youtube"></i
        ></a>

      <a
         class="btn btn-outline-light btn-floating m-1 rounded-circle"
         class="text-white"
         role="button"
         href="https://www.instagram.com/mutiararesidence.id?igsh=ZDlvZzFybnpvdXlt"
         ><i class="fab fa-instagram"></i
        ></a>
    </div>
    <!-- Grid column -->
  </div>
</section>
<!-- Section: Copyright -->
</div>
<!-- Grid container -->
</footer>
@endsection
