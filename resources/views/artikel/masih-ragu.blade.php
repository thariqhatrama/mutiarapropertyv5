@extends('navbar')
@section('content')
<style>
    body {
        padding-top: 100px; /* Atur sesuai dengan tinggi navbar Anda */
    }

    .container {
        max-width: 1200px; /* Atur lebar maksimum kontainer sesuai kebutuhan */
        margin: auto; /* Menengahkan kontainer */
    }

    .article-title {
        color: #F56700;
        text-align: left;
        margin-top: 20px;
        margin-bottom: 50px;
        font-size: 28px;
    }

    .image-box {
        width: 100%; /* Kontainer gambar akan mengambil lebar penuh dari kontainer induknya */
        height: 400px; /* Tinggi kontainer gambar */
        margin: 20px 0; /* Memberikan margin atas dan bawah */
        overflow: hidden; /* Pastikan gambar yang melebihi batas kontainer akan dipotong */
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Gambar akan menutupi area yang tersedia, dipotong jika perlu */
    }

    .article-content {
        font-size: 16px;
        line-height: 1.6;
        margin: 30px 0;
    }
    .promo-banner img {
            max-width: 90%;
            /* Menyesuaikan lebar maksimum untuk layar besar */
            height: auto;
            /* Menjaga aspek rasio gambar */
        }

        @media (max-width: 768px) {
            .promo-banner img {
                max-width: 80%;
                /* Mengurangi lebar gambar untuk layar kecil */
                margin: 0 auto;
                /* Sentralisasi gambar */
            }
        }
</style>

<div class="container">
    <h1 class="article-title">Artikel</h1>
    
    <div class="image-box">
        <img src="{{ asset('img/artikel-2.png') }}" alt="Deskripsi Gambar">
    </div>
    
    <h2 class="article-heading">MASIH RAGU? INI KEUNTUNGAN MEMILIKI RUMAH CLUSTER</h2>
    
    <p class="publish-date">Sabtu, 8 Maret 2024</p>
    
    <div class="article-content">
        <p>Menentukan tipe hunian memang sangat tricky untuk dilakukan. Pasalnya, banyak sekali jenis hunian dengan beragam fasilitas serta harga yang berbeda. Ada salah satu jenis hunian yang direkomendasikan bagi Anda yang suka akan desain minimalis dan konsep yang modern, yaitu rumah cluster. Rumah cluster sendiri adalah rumah perumahan yang terdiri dari beberapa unit dengan desain rumah yang sama. Namun, banyak keuntungan yang diperoleh untuk Anda yang ingin tinggal di rumah cluster, apalagi untuk Anda yang baru pertama kali memiliki rumah baik untuk sendiri atau keluarga. Harga rumah cluster memang lebih tinggi dari jenis hunian lainnya. Namun, banyak keuntungan yang diperoleh untuk Anda yang ingin tinggal di rumah cluster, apalagi untuk Anda yang baru pertama kali memiliki rumah baik untuk sendiri atau keluarga.</p>

        <h3>Lingkungan yang aman dan nyaman</h3>
        <p>Perumahan cluster menggunakan One Gate System yang berarti hanya memiliki satu akses pintu masuk dan keluar. Pada gerbang utama ini petugas keamanan umumnya selalu diperketat dengan penjagaan satpam dan CCTV 24 jam, Hal ini memberikan rasa aman dan ketenangan bagi penghuninya.</p>

        <h3>Fasilitas yang memadai</h3>
        <p>Perumahan cluster sering kali menawarkan fasilitas-fasilitas yang teratur, seperti taman bermain, area hijau, atau mungkin kolam renang bersama. Selain itu, kompleks rumah cluster biasanya dirancang dengan tata letak yang baik, jalan yang luas, dan area yang tertata rapi. Hal ini menciptakan lingkungan yang nyaman dan indah untuk ditinggali.</p>

        <h3>Pilihan yang tepat untuk investasi</h3>
        <p>Rumah cluster biasanya akan memiliki nilai investasi yang tinggi apalagi jika fasilitas yang diberikan sesuai dengan yang dijanjikan. Selain itu, tingginya nilai investasi ini juga biasanya disebabkan oleh lokasi rumah cluster. Diawal launching, harga rumah cluster biasanya lebih rendah karena lingkungan yang masih belum ramai. Semakin ramai dan lengkap fasilitas yang diberikan, nilai investasinya pun akan meningkat.</p>
    </div>
</div>
<div class="promo-banner" style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
    <a href="https://wa.me/6281213334441?text=Halo%20saya%20tertarik%20dengan%20promo%20dari%20Mutiara%20Residence"
        target="_blank">
        <img src="{{ asset('img/promo.png') }}" alt="Promo Banner" class="img-fluid">
    </a>
</div>
@endsection
