@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')

    {{-- Mengisi Body pada about Page --}}
    <!-- Services Section Start -->
    <section id="services" class="section">
        <div class="container">
            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="business-item-img">
                            <img src="img/electroo.png" class="img-fluid" alt="">
                        </div>
                        <h4>Electronic </h4>
                        <p>Produk yang menggunakan teknologi manipulasi arus listrik atau sinyal elektronik untuk
                            melakukan tugas-tugas tertentu,
                            seperti Mesin Cuci, Kulkas, Smartphone, Laptop, Televisi dll. elektronik mencakup berbagai
                            produk yang menjadi bagian integral dari kehidupan sehari-hari.
                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="business-item-img">
                            <img src="img/Pashion.png" class="img-fluid" alt="">
                        </div>
                        <h4>Fashion</h4>
                        <p>Produk yang terkait dengan industri pakaian dan gaya, mencakup berbagai jenis barang yang
                            digunakan untuk mengekspresikan gaya, selera, dan tren mode.
                            Seperti Pakaian, Aksesoris, Kosmetik, Tas, Dompet dll. fashion selalu berkembang mengikuti
                            perubahan tren dan selera konsumen.

                        </p>
                    </div>
                </div>
                <!-- End Col -->

                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="services-item text-center">
                        <div class="business-item-img">
                            <img src="img/otomotif.png" class="img-fluid" alt="">
                        </div>
                        <div class="">
                        </div>
                        <h4>Automotive</h4>
                        <p> Produk yang terkait dengan industri kendaraan baik itu mobil, sepeda motor, truk, atau
                            kendaraan komersial lainnya.
                            Mencakup berbagai suku cadang seperti Oli, Ban, Velg, Pelumas dll.
                            Aspek otomotif suku cadang ini juga berfungsi sebagai merawat, dan meningkatkan kualitas
                            kendaraan.
                        </p>
                    </div>
                </div>
                <!-- End Col -->

            </div>
        </div>
    </section>
    <!-- Services Section End -->



    <!-- Business Plan Section Start -->
    <section id="business-plan">
        <div class="container">

            <div class="row">
                <!-- Start Col -->
                <div class="col-lg-6 col-md-12 pl-0 pt-100 pr-5">
                    <div class="business-item-img">
                        <img src="img/work1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-6 col-md-12 pl-4">
                    <div class="business-item-info">
                        <h3>Yellobox.ID Ecommerce</h3>
                        {{-- <h2> Ecommerce</h2> --}}
                        <p>Yellobox.id adalah perusahaan e-commerce terkemuka yang didirikan pada tahun 2022. Dimulai
                            sebagai toko online yang berfokus pada penjualan otomotif, tetapi seiring waktu berjalan
                            Yellobox
                            berkembang pesat dan diversifikasi ke berbagai kategori produk termasuk elektronik,
                            pakaian, peralatan rumah tangga, dan banyak lagi.</p>

                        <a class="btn btn-warning text-white" href="#">Produk Kami</a>
                    </div>
                </div>
                <!-- End Col -->
                < </div>
            </div>
    </section>
@endsection
