@extends('navbar')

@section('content')
<style>
    body {
        padding-top: 100px;
    }

    .container {
        max-width: 1200px;
        margin: auto;
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
        height: 400px;
        margin: 20px 0;
        overflow: hidden;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
    <h1 class="article-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h1>
    
    <div class="image-box">
        <img src="{{ asset('img/artikel-3.png') }}" alt="Inspirasi Warna Cat Rumah">
    </div>
    
    <h2 class="article-heading">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h2>
    
    <p class="publish-date">Sabtu, 9 Maret 2024</p>
    
    <div class="article-content">
        <p>Pemilihan warna cat memiliki peranan penting dalam sebuah rumah. Tidak hanya terkait soal tampilan atau estetika, melainkan juga kenyamanan saat menghuninya. Itu sebabnya dibutuhkan konsep dan pemikiran yang matang sebelum mengaplikasikan. Trend warna cat rumah sendiri terbilang sangat dinamis dan cepat berubah dari waktu ke waktu. Hal itulah yang membuat pilihan warna cat rumah kian beragam dan seringkali membuat orang bingung menentukan. Nah, bagi Anda yang masih menimbang-nimbang warna apa yang pas untuk hunian, Anda bisa cek dulu warna-warna cat rumah yang sedang menjadi trend</p>
        <h3>Warna Netral yang Timeless</h3>
        <p>Warna netral seperti putih, abu-abu, dan beige adalah pilihan yang selalu menjadi favorit. Warna-warna ini memberikan kesan minimalis, bersih, dan elegan pada rumah Anda. Jika Anda ingin menambahkan sedikit aksen warna pada rumah Anda, Anda bisa mencoba menggunakan warna-warna pastel seperti soft pink, lavender, atau baby blue untuk memberikan kesan yang lembut dan feminin.</p>
        <h3>Warna Cat Putih yang Bersih dan Cerah</h3>
        <p>Inspirasi warna cat rumah selanjutnya datang dari warna putih yang populer dan banyak digunakan pada rumah. Anda bisa menggunakan warna putih untuk seluruh dinding atau digunakan sebagai aksen pada bagian tertentu pada rumah Anda. Warna putih juga mudah dipadukan dengan warna lainnya sehingga Anda bisa memadukannya dengan warna-warna favorit Anda.</p>
        <h3>Warna Cat Abu-abu yang Modern</h3>
        <p>Warna abu-abu menjadi pilihan yang populer untuk memberikan kesan modern pada rumah Anda. Warna abu-abu memiliki banyak variasi, mulai dari warna abu-abu muda hingga abu-abu gelap.</p>
        <h3>Warna Cat Biru yang Damai</h3>
        <p>Inspirasi warna cat rumah yang terakhir adalah warna biru sangat cocok digunakan pada ruangan-ruangan yang membutuhkan ketenangan, seperti kamar tidur atau ruang keluarga. Selain memberikan kesan ketenangan, warna biru juga dapat memberikan kesan kreativitas dan ketenangan pikiran. Penggunaan warna biru pada ruangan kerja atau ruang belajar dapat membantu meningkatkan kreativitas dan konsentrasi. Itu tadi adalah beberapa inspirasi warna cat rumah yang bisa Anda jadikan pilihan. Namun, jangan lupa untuk memilih warna cat yang sesuai dengan selera dan gaya rumah Anda. Selamat mencoba dan semoga berhasil!</p>
        <p>Itu tadi adalah beberapa inspirasi warna cat rumah yang bisa Anda jadikan pilihan. Namun, jangan lupa untuk memilih warna cat yang sesuai dengan selera dan gaya rumah Anda. Selamat mencoba dan semoga berhasil!</p>
    </div>
</div>

<div class="promo-banner" style="margin-top: 20px; margin-bottom: 20px; text-align: center;">
    <a href="https://wa.me/6281213334441?text=Halo%20saya%20tertarik%20dengan%20promo%20dari%20Mutiara%20Residence"
        target="_blank">
        <img src="{{ asset('img/promo.png') }}" alt="Promo Banner" class="img-fluid">
    </a>
</div>

@endsection
