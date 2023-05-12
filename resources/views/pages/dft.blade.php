@extends('pages.master')

@section('content')
    <section class="dft">
        <h2 class="text-center header-page mt-3 container">DEEP FLOW TECHNIQUE</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between">
                    <div class="col-sm-5 align-self-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Deep Flow Technique (DFT) adalah salah satu metode hidroponik dengan sistem aliran tertutup dimana larutan nutrisi disirkulasikan pada rangkaian tertutup secara berulang selama 24 jam. Sistem ini cukup mudah dalam pembuatannya karena sangat hemat dalam penggunaan air dan listrik, serta memiliki sehingga cukup populer di kalangan pencinta hidroponik.</p>
                            </div>
                            <div class="col-sm-12 mt-5 mb-5">
                                <div class="header-dft">
                                    <p>Kelebihan sistem DFT : </p>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/dft-icon1.png') }}" alt="dft-icon1" class="w-0">
                                    </div>
                                    <div class="col-sm-10">
                                        <p>Apabila listrik mati, tanaman tidak akan layu karena ketersediaan nutrisi di dalam pipa.</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/dft-icon2.png') }}" alt="dft-icon2" class="w-0">
                                    </div>
                                    <div class="col-sm-10">
                                        <p>Pertumbuhan tanaman lebih seragam karena supply nutrisi yang merata.</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-2">
                                        <img src="{{ asset('assets/images/dft-icon3.png') }}" alt="dft-icon3" class="w-0">
                                    </div>
                                    <div class="col-sm-10">
                                        <p>Hidroponik dengan sistem ini terlihat lebih menarik dan menambah estetika pekarangan anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/dft.png') }}" alt="dft" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection