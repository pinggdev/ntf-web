@extends('pages.master')

@section('content')
    <section class="layanan">
        <h2 class="text-center header-page mt-3 container">LAYANAN</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-sm-5 align-self-center">
                        <div class="row">
                            <div class="col-sm-12 mb-5 py-5">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/produk-layanan.png') }}" alt="produk-layanan" class="w-100">
                                    </div>
                                    <div class="col-sm-10 icon-text align-self-center">
                                        <p>Penjualan Produk Sayur, Olahan sayur (Mie Sehat), Perlengkapan & Alat Hidroponik.</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/jasa-layanan.png') }}" alt="jasa-layanan" class="w-100">
                                    </div>
                                    <div class="col-sm-10 icon-text align-self-center">
                                        <p>Penjualan Produk Sayur, Olahan sayur (Mie Sehat), Perlengkapan & Alat Hidroponik.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-5">
                                <img src="{{ asset('assets/images/layanan1.png') }}" alt="layanan1" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/layanan2.png') }}" alt="layanan2" class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection