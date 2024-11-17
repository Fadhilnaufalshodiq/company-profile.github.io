@extends('layout')

@section('content')
<div class="home-page">
    <!-- Profile Image Section -->
    <div class="profile-image-wrapper">
        <img src="{{ asset('images/fadil.jpg') }}" alt="Fadhil's Photo" class="img-fluid">
    </div>

    <!-- Title and Description Section -->
    <div class="text-left">
        <h1>Selamat Datang di Portfolio Saya</h1>
        <p class="text-left-a">Nama saya Fadhil Naufal Shodiq, seorang IT Support dengan pengalaman lebih dari 4 tahun
            di berbagai industri.
        </p>


        <!-- Learn More Button -->
        <a href="/about" class="btn btn-primary btn-lg">Learn More About Us</a>
    </div>
</div>


@endsection
