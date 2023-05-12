@extends('pages.master')

@section('content')
    <section class="tentang">
        <h2 class="text-center header-page mt-3 container">TENTANG KAMI</h2>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between profil">
                    <div class="col-sm-5 align-self-center">
                        <h4>Profil</h4>
                        <p>
                            Kami memberikan solusi sayur sehat masyarakat dengan jargon Fresh from the Table di 20 Kabupaten/kota dengan mereplikasi bisnis ini di setiap mitra binaan. Sayur sehat fresh berkualitas dari kebun langsung ke meja makan konsumen.
                        </p>
                        <p>
                            CV Hidro Sinergi Utama adalah Perusahaan ketahanan pangan mandiri dengan konsep Holding Company. Memiliki kebun produksi, kebun binaan dan kebun edukasi yang dikenal dengan nama Greenfills Hidroponik yang terletak di Jalan Pasar 1 Tembung Tambak Rejo, kelurahan Medan Amplas, Kecamatan Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara.
                        </p>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <img src="{{ asset('assets/images/profil.png') }}" alt="profil" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5 d-flex justify-content-between visimisi">
                    <div class="col-sm-5 align-self-center">
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-start">
                                <img src="{{ asset('assets/images/visimisi.png') }}" alt="visimisi" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Visi Misi</h4>
                                <p>Visi: Menjadi Perusahaan Ketahanan Pangan mandiri dengan Konsep Ekonomi Kerakyatan</p>
                                <p>
                                    Misi: Sebagai Perusahaan Pertanian Modern Yang Mempelopori Ekonomi Kerakyatan untuk Pembangunan Ekonomi</p>
                            </div>
                            <div class="col-sm-12">
                                <h4>Partner</h4>
                                <p>1. Instansi Pemerintahan (Kementerian , BUMN , Dinas, Pemerintah Kota, Desa, dll )</p>
                                <p>2. Petani Sayur Hidroponik/Plasma</p>
                                <p>3. Pengepul</p>
                                <p>4. UMKM Produksi Olahan Sayur</p>
                                <p>5. Super Market</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pencapaian mt-5 py-5 pb-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="text-white mb-5">Achievement</h4>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">FIRST WINNER</h5>
                                            <p class="card-text text-center">Petani Pakar Bank Indonesia
                                                Program Pemberdayaan Pasantren 
                                                (Hebitren , komunitas Bisnis Pasantren)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">FIRST WINNER</h5>
                                            <p class="card-text text-center">Fesyar Festival Syariah 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">RUNNER UP</h5>
                                            <p class="card-text text-center">Wirausaha Muda Mandiri 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">BEST MENTOR</h5>
                                            <p class="card-text text-center">Mandiri Taspen & PT Taspen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP FINALIS</h5>
                                            <p class="card-text text-center">Kemenparekraf 2021
                                                Program Pemberdayaan Pasantren 
                                                (Desa Agrowista Hidro 2021)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP INOVASI SOCIAL PROGRAM </h5>
                                            <p class="card-text text-center">Kemitraan BUMN
                                                Rumah BUMN 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">TOP 10</h5>
                                            <p class="card-text text-center">Mentor Hidroponik BNSP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3">
                                <div class="card box-pencapaian">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div>
                                            <h5 class="card-title text-center">PENDIRI HIDROPONIK</h5>
                                            <p class="card-text text-center">Pada 20 Kabupaten kota di Sumatera Utara dengan Total Member komunitas 7000 dan +/- 500 Petani Plasma Profesional Binaan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="founder mt-5 py-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="mb-5">FOUNDER</h4>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/founder.png') }}" alt="founder" class="w-0">
                        </div>
                        <div class="col-sm-7">
                            <p class="nama-founder">Muhammad Nazri Syahputra</p>
                            <div class="row">
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Komunitas Hidroponik Sumut 2015 – Sekarang</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Vendor & Petani Pakar Hidroponik KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Department wirausaha MTI Sumut</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Ketua Asosiasi Pengusaha Hidroponik</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Wirausaha Unggulan Bank Indonesia KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Direktur Cv Hidro Sinergi Utama (GreenFills Hidroponik)</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Vendor & Petani Pakar Hidroponik KPW BI SUMUT</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Sekretaris Wilayah IIBF (Indonesian Islamic Bussiness Forum)</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Mentor MANTAP ( Mandiri Taspen )</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Perintis Edukasi & Pengenalan Hidroponik di 20 Kab/kota di Sumut</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Pendiri Gerakan Muda Bertani dengan Binaan 5300 Se–Sumatera Utara</p>
                                </div>
                                <div class="col-sm-12 d-flex">
                                    <div class="list">
                                        <img src="{{ asset('assets/images/list-icon.png') }}" alt="list-icon" class="w-0">
                                    </div>
                                    <p class="ml-3">Pelatih Hidroponik Indonesia dengan Angkatan Se-Indonesia ( 135 Angkatan ) 
                                        dari 2016 sd sekarang dengan Alumni +/- 800 an di luar Purna Bhakti dan Charity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection