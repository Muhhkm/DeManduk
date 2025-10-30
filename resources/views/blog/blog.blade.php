@extends('layout.layout')

@push('css')
    <link rel="stylesheet" href="{{ asset('tmplt/css/blog.css') }}">
@endpush

@section('content')
<!-- Blog Area -->
<div class="blog-area">
    <div class="container">
        <!-- Header -->
        <div class="blog-header text-center mb-4">
            <h2>Berita & Kegiatan</h2>
            <p>Informasi terkini seputar kegiatan dan perkembangan Desa Manduk</p>
        </div>

        <!-- Blog Grid -->
        <div class="row g-3">
            <!-- Blog Item -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog">
                        <span class="category">Kegiatan</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Program Pemberdayaan Masyarakat</h3>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 29 Oct 2025</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Item -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog">
                        <span class="category">Pembangunan</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Pembangunan Infrastruktur Desa</h3>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 28 Oct 2025</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Item -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog">
                        <span class="category">Budaya</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Festival Budaya Tradisional</h3>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 27 Oct 2025</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Blog Item -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <article class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog">
                        <span class="category">Pengumuman</span>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Jadwal Pelayanan Desa Terbaru</h3>
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 26 Oct 2025</span>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog Image">
                        <div class="blog-category">Pengumuman</div>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 26 Oct 2025</span>
                            <span><i class="fa fa-user"></i> Admin</span>
                        </div>
                        <h3 class="blog-title">Vaksinasi Covid-19 Tahap 2</h3>
                        <p class="blog-excerpt">
                            Jadwal dan informasi pelaksanaan vaksinasi Covid-19 untuk warga Desa Manduk.
                        </p>
                        <a href="#" class="blog-read-more">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog Image">
                        <div class="blog-category">Kegiatan Desa</div>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 25 Oct 2025</span>
                            <span><i class="fa fa-user"></i> Admin</span>
                        </div>
                        <h3 class="blog-title">Pelatihan Digital Marketing</h3>
                        <p class="blog-excerpt">
                            Workshop pemasaran digital untuk pelaku UMKM desa dalam rangka pengembangan bisnis online.
                        </p>
                        <a href="#" class="blog-read-more">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card">
                    <div class="blog-card-image">
                        <img src="{{ asset('tmplt/img/slider3.jpg') }}" alt="Blog Image">
                        <div class="blog-category">Pembangunan</div>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-meta">
                            <span><i class="fa fa-calendar"></i> 24 Oct 2025</span>
                            <span><i class="fa fa-user"></i> Admin</span>
                        </div>
                        <h3 class="blog-title">Renovasi Balai Desa</h3>
                        <p class="blog-excerpt">
                            Proses renovasi dan perluasan balai desa untuk meningkatkan pelayanan kepada masyarakat.
                        </p>
                        <a href="#" class="blog-read-more">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection