@extends('layout.layout')

@push('css')
    <link rel="stylesheet" href="{{ asset('tmplt/css/detail.css') }}">
@endpush

@section('content')
<!-- Start Blog Detail Area -->
<section class="blog-detail-area">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Blog Header -->
                <div class="blog-detail-header">
                    <div class="blog-detail-category">Kegiatan Desa</div>
                    <h1 class="blog-detail-title">Program Pemberdayaan Masyarakat Melalui Pelatihan Digital Marketing di Desa Manduk</h1>
                    <div class="blog-detail-meta">
                        <span><i class="fa fa-calendar"></i> 29 Oktober 2025</span>
                        <span><i class="fa fa-user"></i> Admin Desa</span>
                        <span><i class="fa fa-eye"></i> 234 Views</span>
                    </div>
                </div>

                <!-- Featured Image -->
                <img src="{{ asset('tmplt/img/berita/berita1.jpg') }}" alt="Blog Detail Image" class="blog-detail-image">

                <!-- Blog Content -->
                <div class="blog-detail-content">
                    <p>
                        Dalam upaya meningkatkan perekonomian masyarakat desa di era digital, Pemerintah Desa Manduk mengadakan program pelatihan Digital Marketing bagi pelaku UMKM. Program yang berlangsung selama dua hari ini dihadiri oleh 50 peserta yang terdiri dari pelaku usaha mikro, kecil, dan menengah di wilayah Desa Manduk.
                    </p>

                    <h2>Latar Belakang Program</h2>
                    <p>
                        Era digital telah membawa perubahan signifikan dalam cara berbisnis. Banyak pelaku UMKM yang masih menggunakan cara konvensional dalam memasarkan produknya, sehingga sulit bersaing di pasar yang semakin kompetitif. Program ini dirancang untuk membantu para pelaku UMKM memahami dan memanfaatkan platform digital untuk pengembangan usaha mereka.
                    </p>

                    <img src="{{ asset('tmplt/img/berita/pelatihan1.jpg') }}" alt="Suasana Pelatihan">

                    <h2>Materi Pelatihan</h2>
                    <p>
                        Pelatihan ini mencakup berbagai topik penting dalam digital marketing, antara lain:
                    </p>
                    <ul>
                        <li>Pengenalan platform media sosial untuk bisnis</li>
                        <li>Strategi konten marketing yang efektif</li>
                        <li>Teknik fotografi produk menggunakan smartphone</li>
                        <li>Optimasi SEO untuk marketplace</li>
                        <li>Manajemen hubungan pelanggan online</li>
                    </ul>

                    <h2>Hasil dan Dampak</h2>
                    <p>
                        Setelah mengikuti pelatihan, peserta memiliki pemahaman yang lebih baik tentang pemasaran digital dan dapat langsung mempraktikkan ilmu yang didapat. Beberapa peserta bahkan telah mulai mengembangkan presence online mereka dan melaporkan peningkatan penjualan dalam minggu pertama penerapan strategi digital marketing.
                    </p>

                    <!-- Share Buttons -->
                    <div class="share-buttons">
                        <h4>Bagikan artikel ini:</h4>
                        <a href="#" class="share-button share-facebook">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a href="#" class="share-button share-twitter">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a href="#" class="share-button share-whatsapp">
                            <i class="fa fa-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="blog-detail-sidebar">
                    <!-- Recent Posts -->
                    <div class="sidebar-section">
                        <h3 class="sidebar-title">Artikel Terbaru</h3>
                        <ul class="recent-posts">
                            <li class="recent-post-item">
                                <img src="{{ asset('tmplt/img/berita/berita2.jpg') }}" alt="Recent Post" class="recent-post-img">
                                <div class="recent-post-info">
                                    <h5><a href="#">Pembangunan Infrastruktur Jalan Desa</a></h5>
                                    <span><i class="fa fa-calendar"></i> 28 Oktober 2025</span>
                                </div>
                            </li>
                            <li class="recent-post-item">
                                <img src="{{ asset('tmplt/img/berita/berita3.jpg') }}" alt="Recent Post" class="recent-post-img">
                                <div class="recent-post-info">
                                    <h5><a href="#">Festival Budaya Tradisional</a></h5>
                                    <span><i class="fa fa-calendar"></i> 27 Oktober 2025</span>
                                </div>
                            </li>
                            <li class="recent-post-item">
                                <img src="{{ asset('tmplt/img/berita/berita4.jpg') }}" alt="Recent Post" class="recent-post-img">
                                <div class="recent-post-info">
                                    <h5><a href="#">Vaksinasi Covid-19 Tahap 2</a></h5>
                                    <span><i class="fa fa-calendar"></i> 26 Oktober 2025</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-section mt-4">
                        <h3 class="sidebar-title">Kategori</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kegiatan Desa
                                <span class="badge bg-primary rounded-pill">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pembangunan
                                <span class="badge bg-primary rounded-pill">8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pengumuman
                                <span class="badge bg-primary rounded-pill">5</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Budaya
                                <span class="badge bg-primary rounded-pill">7</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Detail Area -->
@endsection