@extends('layout')

@section('content')
<div class="about-page">
    <!-- Profile Section -->
    <div class="about-profile">
        <img src="{{ asset('images/fadil.jpg') }}" alt="Fadhil's Photo" class="profile-img">
        <h1>Tentang Saya</h1>
        <p>Saya memiliki pengalaman kerja di bidang IT support, termasuk bekerja di Pizza Hut, PT Prima Raya Solusindo,
            dan saat ini bekerja di PT GOS Indoraya.</p>
    </div>

    <!-- Experience Section -->
    <div class="experience-section">
        <p><strong>Pengalaman Kerja:</strong></p>
        <ul class="experience-list">
            <li>4 tahun di Pizza Hut</li>
            <li>3 tahun di PT Prima Raya Solusindo, menangani proyek Telemarketing untuk BNI sebagai IT Support</li>
            <li>9 bulan sebagai PIC proyek Telemarketing BNI</li>
            <li>2024 - sekarang: IT Support di PT GOS Indoraya</li>
        </ul>
    </div>

    <!-- Services Button -->
    <div class="services-button">
        <a href="/services" class="btn btn-primary">Our Services</a>
    </div>
</div>
@endsection