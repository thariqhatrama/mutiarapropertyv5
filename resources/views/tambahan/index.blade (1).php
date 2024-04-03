@extends('wa')
@extends('laymas')
@section('content')

<style>
  #carousel1 .carousel-control-prev,
#carousel1 .carousel-control-next {
    align-items: center; /* Vertically center the carousel controls */
}

#carousel1 .carousel-inner img {
    margin: auto; /* Center the images within the carousel */
}

#carousel2 .carousel-control-prev,
#carousel2 .carousel-control-next {
    align-items: center; /* Vertically center the carousel controls */
}

#carousel2 .carousel-inner img {
    margin: auto; /* Center the images within the carousel */
}
</style>
    <section id="utama">
      <div class="hero container-fluid" style="background-image: url('img/banner.png')">
            <div class="info-banner">
              <div class="color-overlay-banner">
                  <div class="container-banner">
                    <div class="centered-text-box">
                      <p class="mb-3" style="text-align: center"><b> Kenyamanan dan Kualitas Hidup yang Dijamin </b></p>
                      <span class="text-banner">Fasilitas modern termasuk taman bermain anak dan keamanan 24 jam. 
                        Hubungi kami untuk informasi lebih lanjut dan jadwal kunjungan ke lokasi. 
                        Segera wujudkan hunian impian Anda bersama Mutiara Residence!</span>
                        <div class="mt-3 d-flex justify-content-center">
                          <a href="">
                            <button type="button" class="btn btn-outline-warning">Info Lebih Lanjut</button>
                          </a>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="fasilitas">
      <div class="container-fasilitas container-fluid" style="background-image: url('./Assets/img/home-content.svg');">
        <div class="color-overlay-fasilitas container-fluid py-3">
            <div class="row">
                <div class="fasilitas-text p-3 d-flex justify-content-center align-items-center">
                    <h2><b>FASILITAS</b></h2> 
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                    <div class="fasilitas-item">
                        <img class="img-fasilitas" src="/img/call.png" alt="">
                        <br>
                        <h5>Telepon</h5>
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                    <div class="fasilitas-item">
                        <img class="img-fasilitas" src="/img/bed.png" alt="">
                        <br>
                        <h5>Kamar</h5> 
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                    <div class="fasilitas-item">
                        <img class="img-fasilitas" src="/img/cctv.png" alt="">
                        <br>
                        <h5>CCTV</h5> 
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                    <div class="fasilitas-item">
                        <img class="img-fasilitas" src="/img/taman.png" alt="">
                        <br>
                        <h5>Taman Anak</h5> 
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                    <div class="fasilitas-item">
                        <img class="img-fasilitas" src="/img/security.png" alt="">
                        <br>
                        <h5>Keamanan 24 Jam</h5> 
                    </div>
                </div>
            </div>
        </div>
    </div>    
    </section>

    <section id="type-rumah" style="padding-top: 2rem;">
      <div class="container-fluid py-4" style="background-color: #c2c9c3;">
        <div class="row mb-4">
          <div class="col-12 text-center">
            <h2>MUTIARA RESIDENCE</h2>
            <p>Jalan Kunir Raya No. 48A Kel. Pondok Cabe Udik, Kec. Pamulang, Tangerang Selatan</p>
          </div>
        </div>
        <div class="row p-2 mb-3">
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div id="carousel1" class="carousel slide w-100" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="/img/home-1.jpg" class="d-block w-100" width="440" height="200" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="/img/home-1a.jpeg" class="d-block w-100" width="440" height="200" alt="">
                </div>
                <div class="carousel-item">
                  <img src="/img/home-1.jpg" class="d-block w-100" width="440" height="200" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div class="deskripsi-type">
              <div class="container-type">
                <div class="centered-text-box-type">
                  <p class="mb-3"><b> TYPE 1 LANTAI </b></p>
                  <span class="">Luas Bangunan (48 m2)</span> <br>
                  <span>Luas Tanah (84 m2)</span> <br>
                  <span>Harga Mulai dari <b>1 M</b></span>
                  <div class="mt-2">
                    <div onclick="location.href='https://wa.me/6285813076036?text=Halo%20Saya%20tertarik%20dengan%20rumah%20anda%20saya%20ingin%20tanya%20lebih%20lanjut!';" 
                    style="display: inline-block; padding: 0.5rem 1rem; background-color: #198754; color: white; text-align: center; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.2s, transform 0.2s;"
                    onmouseover="this.style.backgroundColor='#157347'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='#198754'; this.style.transform='scale(1)';"
                    role="button">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami</div>               
                    <div 
                    onclick="alert('Place your info or link here.');" 
                    style="display: inline-block; padding: 0.5rem 1rem; background-color: #007bff; color: #ffffff; text-align: center; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.2s, transform 0.1s; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.backgroundColor='#0056b3'; this.style.transform='scale(1.02)';"
                    onmouseout="this.style.backgroundColor='#007bff'; this.style.transform='scale(1)';"
                    role="button"
                  >
                    Info Lebih Lanjut
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row p-2 mb-3">
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div id="carousel2" class="carousel slide w-100" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="/img/home-1.jpg" class="d-block w-100" width="440" height="200" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="/img/home-1a.jpeg" class="d-block w-100" width="440" height="200" alt="">
                </div>
                <div class="carousel-item">
                  <img src="/img/home-1.jpg" class="d-block w-100" width="440" height="200" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div class="deskripsi-type">
              <div class="container-type">
                <div class="centered-text-box-type">
                  <p class="mb-3"><b> TYPE 2 LANTAI </b></p>
                  <span class="">Luas Bangunan (70 m2)</span> <br>
                  <span>Luas Tanah (84 m2)</span> <br>
                  <span>Harga Mulai dari <b>1 M</b></span>
                  <div class="mt-2">
                    <div onclick="location.href='https://wa.me/6285813076036?text=Halo%20Saya%20tertarik%20dengan%20rumah%20anda%20saya%20ingin%20tanya%20lebih%20lanjut!';" 
                    style="display: inline-block; padding: 0.5rem 1rem; background-color: #198754; color: white; text-align: center; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.2s, transform 0.2s;"
                    onmouseover="this.style.backgroundColor='#157347'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='#198754'; this.style.transform='scale(1)';"
                    role="button"><i class="bi bi-whatsapp"></i> Hubungi Kami</div>               
                    <div 
                    onclick="alert('Place your info or link here.');" 
                    style="display: inline-block; padding: 0.5rem 1rem; background-color: #007bff; color: #ffffff; text-align: center; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.2s, transform 0.1s; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"
                    onmouseover="this.style.backgroundColor='#0056b3'; this.style.transform='scale(1.02)';"
                    onmouseout="this.style.backgroundColor='#007bff'; this.style.transform='scale(1)';"
                    role="button"
                  >
                    Info Lebih Lanjut
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="keunggulan">
      <div class="keunggulan">
        <div class="color-overlay-keunggulan d-flex flex-column flex-md-row">
          <!-- Image Section -->
          <div class="img-keunggulan col-12 col-md-6 d-flex justify-content-center align-items-center">
            <img src="img/img-keunggulan.png" class="img-fluid" alt="" style="max-width: 350px; max-height: 400px;">
          </div>
    
          <!-- Description Section -->
          <div class="deskripsi-keunggulan col-12 col-md-6 d-flex justify-content-center align-items-center">
            <div class="centered-text-box">
              <h3 style="color: #FFA500"><b>Keunggulan</b></h3>
              <h5 style="color: #2173C0">Pelayanan yang Kami Berikan untuk Anda</h5>
              <p class="mb-3" style="color: #333433">Kami selalu siap membantu dengan memberikan layanan terbaik untuk Anda.</p>
    
              <!-- Feature List -->
              <div class="text-box-keunggulan">
                <div class="row d-flex align-items-center">
                  <div class="col-3 col-md-2">
                    <img src="/img/icon-keunggulan.png" class="icon-keunggulan img-fluid" alt="">
                  </div>
                  <div class="col-9 col-md-10">
                    <p>Penawaran dan Pelayanan Terbaik</p>
                  </div>
                </div>
              </div>
    
              <div class="text-box-keunggulan">
                <div class="row d-flex align-items-center">
                  <div class="col-3 col-md-2">
                    <img src="/img/icon-keamanan.png" class="icon-keunggulan img-fluid" alt="">
                  </div>
                  <div class="col-9 col-md-10">
                    <p>Keamanan 24 Jam</p>
                  </div>
                </div>
              </div>
    
              <div class="text-box-keunggulan">
                <div class="row d-flex align-items-center">
                  <div class="col-3 col-md-2">
                    <img src="/img/icon-3.png" class="icon-keunggulan img-fluid" alt="">
                  </div>
                  <div class="col-9 col-md-10">
                    <p>Harga terbaik di pasaran</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <section id="artikel">
      <div class="pt-3" style="background-color: #092947;">
        <div class="container">
          <h4 class="text-white text-center mb-4">Artikel</h4>
          <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
              <div class="card" style="width: auto;">
                <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residance!</h5>
                  <p class="card-text">09 Maret 2024</p>
                  <a href="#" class="btn btn-primary">Selanjutnya</a>
                </div>
              </div>
            </div>
    
            <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
              <div class="card" style="width: auto;">
                <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                  <p class="card-text">09 Maret 2024</p>
                  <a href="#" class="btn btn-primary">Selanjutnya</a>
                </div>
              </div>
            </div>
    
            <div class="col-12 col-sm-8 col-md-4 mb-3 d-flex justify-content-center">
              <div class="card" style="width: auto;">
                <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                  <p class="card-text">09 Maret 2024</p>
                  <a href="#" class="btn btn-primary">Selanjutnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section id="portfolio">
      <div class="container-fluid p-2" style="background-color: #092947;">
        <style>
          .embed-responsive {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
          }
      
          .embed-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none; /* Optional: Removes the default iframe border */
            border-radius: 10px; /* Optional: Adds rounded corners to the iframe */
          }
        </style>
      
        <div class="embed-responsive">
          <iframe 
            src="https://www.youtube.com/embed/7aQrYNcpJDs" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>         
    </section>

    <section id="pilihan" style="background-color: #092947;">
      <div class="container">
        <div class="text-center p-3">
          <h4 style="color: #FFA500;">Pilihan Terbaik</h4>
          <h5 style="color: white;">Residence Populer</h5>
        </div>
        <div class="row justify-content-center">
          <!-- Column setup for responsive behavior -->
          <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
            <div class="card w-100">
              <img src="{{ asset('img/pilihan-1.png') }}" class="card-img-top img-fluid" alt="Matoa 1">
              <div class="card-body">
                <h5 class="card-title"><b>Matoa 1</b></h5>
                <p class="card-text" style="color: #8C8B8B;">Jl. Aselih No.85, Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan</p>
              </div>
            </div>
          </div>
    
          <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
            <div class="card w-100">
              <img src="{{ asset('img/pilihan-2.png') }}" class="card-img-top img-fluid" alt="Matoa 2">
              <div class="card-body">
                <h5 class="card-title"><b>Matoa 2</b></h5>
                <p class="card-text" style="color: #8C8B8B;">Jl. Aselih No.111, Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan</p>
              </div>
            </div>
          </div>
    
          <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
            <div class="card w-100">
              <img src="{{ asset('img/pilihan-3.png') }}" class="card-img-top img-fluid" alt="Jagakarsa">
              <div class="card-body">
                <h5 class="card-title"><b>Jagakarsa</b></h5>
                <p class="card-text" style="color: #8C8B8B;">Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan</p>
              </div>
            </div>
          </div>
    
          <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
            <div class="card w-100">
              <img src="{{ asset('img/pilihan-4.png') }}" class="card-img-top img-fluid" alt="Rawa Kopi">
              <div class="card-body">
                <h5 class="card-title"><b>Rawa Kopi</b></h5>
                <p class="card-text" style="color: #8C8B8B;">Jl. Rw. Kopi, Pangkalan Jati, Cinere, Depok City, West Java</p>
              </div>
            </div>
          </div>
    
          <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-3">
            <div class="card w-100">
              <img src="{{ asset('img/pilihan-5.png') }}" class="card-img-top img-fluid" alt="Pondok Cabe">
              <div class="card-body">
                <h5 class="card-title"><b>Pondok Cabe</b></h5>
                <p class="card-text" style="color: #8C8B8B;">Jl. Kunir No.48A, Pd. Cabe Udik, Kec. Pamulang, Kota Tangerang Selatan</p>
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
            <div class="col-12 col-lg-6">
              <div class="judul-lokasi mb-3">
                <h5>Lokasi dan Fasilitas Terdekat</h5>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-hospital"></i>
                        <span class="ms-2" style="font-size: 10px;">Rs: Hermina, Mitra Keluarga, Brawijaya, Sari Asih, Puri Cinere.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-cart"></i>
                        <span class="ms-2" style="font-size: 10px;">Supermarket: Superindo, Tiptop, Indogrosir</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-bag"></i>
                        <span class="ms-2" style="font-size: 10px;">Mall: The Park Sawangan, Cinere Mall</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-backpack"></i>
                        <span class="ms-2" style="font-size: 10px;">Sekolah: Universitas Terbuka, UnPam, UPN, Kharisma Bangsa, Harapan Bangsa, MumTaza, SMUN 8, SMPN 2 Dll</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-bus-front"></i>
                        <span class="ms-2" style="font-size: 10px;">Terminal Pondok Cabe</span>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-house-door"></i>
                        <span class="ms-2" style="font-size: 10px;">Tempat ibadah: Mesjid, Gereja, Vihara</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-airplane"></i>
                        <span class="ms-2" style="font-size: 10px;">Lapangan Terbang pondok cabe</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-bicycle"></i>
                        <span class="ms-2" style="font-size: 10px;">Sport: lapangan golf pondok cabe, lap Tenis, Gor Badminton.</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-egg-fried"></i>
                        <span class="ms-2" style="font-size: 10px;">Restaurant: Mc'D, KFC, Solaria, Burger King dll</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <i class="bi bi-shop"></i>  
                        <span class="ms-2" style="font-size: 10px;">Pasar Tradisional: Ps Ciputat, Ps Parung, Ps.Pondok Labu</span>
                    </div>
                </div>
            </div>
            
            </div>
            <div class="col-12 col-lg-6">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=mutiara%20residence%20pondok%20cabe&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
          </div>
        </div>
      </div>
    </section>
<<<<<<< HEAD

    <section id="footer" style="color: white; background-color: #0f1925;">
      <div class="container">
        <div class="row">
          <!-- Logo and Description -->
          <div class="col-12 col-md-4 mt-4">
            <img src="{{ asset('img/main-logo.png') }}" alt="Main Logo" class="mb-3 img-fluid">
            <p>There is nothing more important than a good, safe, secure place to get back to.</p>
          </div>
    
          <!-- Contact Information -->
          <div class="col-12 col-md-4 mt-4">
            <h3>Contact</h3>
            <p><i class="fa-solid fa-phone mb-4 me-2"></i> (+62) 812 1333 4441</p>
            <p><i class="fa-solid fa-envelope mb-4 me-2"></i> mutiara@property.com</p>
            <p><i class="fa-solid fa-location-dot mb-4 me-2"></i>Jl. Panjang No.24 Cipedak, Kec. Jagakarsa, Kota Jakarta Selatan</p>
          </div>
    
          <!-- Footer Image -->
          <div class="col-12 col-md-4 mt-4">
            <img src="Assets/img/image-footer.svg" alt="Footer Image" class="img-fluid">
          </div>
    
          <!-- Copyright -->
          <div class="col-12 mt-3 mb-3">
            <h5 class="text-center">Copyright ©2024 All rights reserved</h5>
          </div>
        </div>
      </div>
    </section>
    
=======
>>>>>>> eef31d5db87863bbd0d9f121f24b6f01fbde9407
@endsection