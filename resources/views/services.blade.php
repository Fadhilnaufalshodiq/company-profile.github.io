@extends('layout')

@section('content')
<div class="services-page">
    <!-- Title Section -->
    <div class="section-header text-center mb-5">
        <h1 class="display-4">Layanan Kami</h1>
        <p class="lead">Berikut adalah layanan yang saya tawarkan untuk membantu bisnis Anda berkembang.</p>
    </div>

    <!-- Services List Section -->
    <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="{{ asset('images/1.jpg') }}" class="card-img-top" alt="IT Support">
                <div class="card-body">
                    <h5 class="card-title">IT Support dan Troubleshooting</h5>
                    <p class="card-text">Menangani masalah teknis dan menyediakan solusi cepat untuk setiap gangguan
                        sistem atau perangkat keras.</p>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="{{ asset('images/2.jpg') }}" class="card-img-top" alt="Pengelolaan Infrastruktur IT">
                <div class="card-body">
                    <h5 class="card-title">Pengelolaan Infrastruktur IT</h5>
                    <p class="card-text">Menyediakan pengelolaan dan pemeliharaan sistem infrastruktur IT yang handal
                        untuk menjaga kelancaran operasi bisnis.</p>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="{{ asset('images/3.jpg') }}" class="card-img-top" alt="Solusi Telemarketing">
                <div class="card-body">
                    <h5 class="card-title">Penyediaan Solusi IT untuk Proyek Telemarketing</h5>
                    <p class="card-text">Menyediakan dukungan teknis dan solusi IT untuk proyek-proyek telemarketing,
                        termasuk integrasi sistem dan perangkat.</p>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-4 mb-4">
            <div class="card service-card">
                <img src="{{ asset('images/4.jpg') }}" class="card-img-top" alt="Pelatihan Penggunaan Sistem IT">
                <div class="card-body">
                    <h5 class="card-title">Pelatihan Penggunaan Sistem IT</h5>
                    <p class="card-text">Memberikan pelatihan praktis kepada tim Anda untuk menggunakan sistem IT secara
                        efisien dan produktif.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Button -->
    <div class="text-center mt-5">
        <a href="/contact" class="btn btn-primary btn-lg">Hubungi Kami</a>
    </div>
</div>
@endsection
