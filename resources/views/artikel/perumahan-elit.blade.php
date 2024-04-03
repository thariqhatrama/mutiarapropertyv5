@extends('navbar')
@section('content')
    <style>
        body {
            padding-top: 100px;
            /* Atur sesuai dengan tinggi navbar Anda */
        }

        .container {
            max-width: 1200px;
            /* Atur lebar maksimum kontainer sesuai kebutuhan */
            margin: auto;
            /* Menengahkan kontainer */
        }

        .article-title {
            color: #F56700;
            text-align: left;
            margin-top: 20px;
            margin-bottom: 50px;
            font-size: 28px;
        }

        .image-box {
            width: 100%;
            /* Kontainer gambar akan mengambil lebar penuh dari kontainer induknya */
            height: 400px;
            /* Tinggi kontainer gambar */
            margin: 20px 0;
            /* Memberikan margin atas dan bawah */
            overflow: hidden;
            /* Pastikan gambar yang melebihi batas kontainer akan dipotong */
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Gambar akan menutupi area yang tersedia, dipotong jika perlu */
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
            <img src="{{ asset('img/artikel-1.png') }}" alt="Deskripsi Gambar">
        </div>

        <h2 class="article-heading">PERUMAHAN ELITE TERJANGKAU JAKARTA, MUTIARA RESIDENCE!</h2>

        <p class="publish-date">Jumat, 8 Maret 2024</p>

        <div class="article-content">
            <p>Hunian yang nyaman merupakan impian semua orang untuk menghabiskan waktunya bersama keluarga. Mencari sebuah
                perumahan Jakarta untuk sekarang ini merupakan hal yang harus dilakukan dengan cermat.</p>
            <p>Hal pertama yang perlu Anda lakukan adalah perhatikan adalah harganya, Karena pastinya sudah menjadi rahasia
                umum kalau harga di properti khususnya di wilayah DKI Jakarta melambung sangat tinggi.</p>
            <p>Namun, jangan khawatir! Masih ada perumahan nyaman elit dan nyaman Jakarta dengan fasilitas yang lengkap, dan
                tentunya harga yang cukup terjangkau yaitu di Mutiara Residence Pondok Cabe.</p>

            <h3>Apa itu Mutiara Residence?</h3>
            <p>Mutiara Residence merupakan sebuah perumahan asri yang terletak diberbagai daerah Jakarta Selatan. Mengusung
                konsep hunian yang menggabungkan antara tema hijau modern minimalis dengan memperhatikan kenyamanan para
                penghuninya.</p>

            <h3>Mutiara Residence Cluster</h3>
            <p>Terdapat sangat banyak pilihan cluster yang ada di Mutiara Residence, diantaranya adalah:</p>
            <ul>
                <li>Mutiara Residence @Matoa 1</li>
                <li>Mutiara Residence @Matoa 2</li>
                <li>Mutiara Residence @Rawa Kopi</li>
                <li>Mutiara Residence @Pondok Cabe</li>
            </ul>
            <p>Setiap cluster juga punya keunggulannya masing masing yang bisa Anda sesuaikan dengan kebutuhan Anda dan juga
                keluarga.</p>

            <h3>Fasilitas</h3>
            <p>Mutiara Residence juga melengkapi huniannya dengan fasilitas modern yang lengkap dan memudahkan penghuninya
                melaksanakan aktivitas, seperti:</p>
            <ul>
                <li>Playground atau taman bermain</li>
                <li>Ruang terbuka hijau</li>
                <li>Area parkir</li>
            </ul>
            <p>Dengan segala fasilitas dan keunggulan yang dimilikinya, Mutiara Residence patut Anda pertimbangkan sebagai
                salah satu perumahan elit Jakarta yang sangat layak untuk dijadikan pilihan hunian. Dari segi lokasi yang
                strategis, keamanan yang terjaga, hingga fasilitas yang lengkap, semuanya tersedia di perumahan ini.</p>
        </div>
    </div>
    <div class="promo-banner" style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
        <a href="https://wa.me/6281213334441?text=Halo%20saya%20tertarik%20dengan%20promo%20dari%20Mutiara%20Residence"
            target="_blank">
            <img src="{{ asset('img/promo.png') }}" alt="Promo Banner" class="img-fluid">
        </a>
    </div>
@endsection
