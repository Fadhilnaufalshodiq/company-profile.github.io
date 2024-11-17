@extends('layout')

@section('content')
<div class="contact-page">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center mb-5">
            <h1 class="display-4">Kontak Saya</h1>
            <p class="lead">Jika Anda ingin menghubungi saya, berikut adalah beberapa cara yang bisa Anda pilih:</p>
        </div>

        <!-- Contact Info Card -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <h4>Email</h4>
                    <p><a href="mailto:fadhil@example.com">fadhil@example.com</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-card">
                    <h4>Telepon</h4>
                    <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
                </div>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="social-links text-center mt-5">
            <p class="lead">Ikuti saya di media sosial:</p>
            <div class="social-icons">
                <a href="https://github.com/username" target="_blank" class="social-icon github">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://instagram.com/username" target="_blank" class="social-icon instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://facebook.com/username" target="_blank" class="social-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection