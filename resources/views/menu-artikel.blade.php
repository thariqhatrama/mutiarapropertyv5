@extends('navbar')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-5">Menu Artikel</h1>
    
    <div class="row">
        <!-- Artikel 1 -->
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="{{ asset('img/artikel-1.png') }}" class="card-img-top" alt="Perumahan Elite Terjangkau Jakarta">
                <div class="card-body">
                    <h5 class="card-title">Perumahan Elite Terjangkau Jakarta, Mutiara Residence!</h5>
                    <p class="card-text">Hunian nyaman elit dan terjangkau di Jakarta dengan fasilitas lengkap di Mutiara Residence Pondok Cabe.</p>
                    <a href="{{ url('/artikel/perumahan-elit') }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="{{ asset('img/artikel-2.png') }}" class="card-img-top" alt="Keuntungan Memiliki Rumah Cluster">
                <div class="card-body">
                    <h5 class="card-title">Masih Ragu? Ini Keuntungan Memiliki Rumah Cluster</h5>
                    <p class="card-text">Temukan keuntungan memiliki rumah cluster, desain minimalis modern yang ideal untuk hunian pertama.</p>
                    <a href="{{ url('/artikel/masih-ragu') }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mb-4">
                <img src="{{ asset('img/artikel-3.png') }}" class="card-img-top" alt="Inspirasi Warna Cat Rumah">
                <div class="card-body">
                    <h5 class="card-title">Inspirasi Warna Cat Rumah yang Cantik nan Populer</h5>
                    <p class="card-text">Dapatkan inspirasi warna cat rumah yang cantik dan populer untuk membuat rumah Anda tampak lebih hidup.</p>
                    <a href="{{ url('/artikel/inspirasi-cat') }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
