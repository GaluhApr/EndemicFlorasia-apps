@extends('frontend.component.index2')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Selamat Datang di Endemic Florasia</h1>
            <h2>Temukan Keindahan Flora Endemik Di Asia</h2>
            <a href="#services" class="btn-get-started scrollto">Lihat Tanaman</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 p-5 content">
                        <h3>Apa itu tanaman endemik?</h3>
                        <p>
                            Tanaman endemik adalah jenis tanaman yang hanya ditemukan secara alami di daerah atau wilayah
                            geografis tertentu dan tidak ditemukan di tempat lain di dunia. Mereka merupakan bagian dari
                            keanekaragaman hayati lokal dan sering kali memiliki nilai ekologis, budaya, dan ekonomi yang
                            tinggi.
                        </p>
                        <h3>
                            Lalu, apa itu Endemic Florasia?
                        </h3>
                        <p>
                            Endemic Florasia adalah sebuah inovasi untuk menjelajahi dan mempelajari tanaman endemik yang
                            khas dari benua Asia. Dengan akses ke berbagai informasi tentang tanaman endemik Asia, aplikasi
                            ini menawarkan wawasan mendalam tentang keajaiban alam dan keanekaragaman hayati yang luar biasa
                            di wilayah tersebut.
                        </p>
                        <h3>
                            Fitur-fitur
                        </h3>
                        <ul>
                            <li><i class="bx bx-check"></i>Database Keanekaragaman Tanaman: Aplikasi ini memiliki database
                                yang kaya akan informasi tentang tanaman endemik Asia.</li>
                            <li><i class="bx bx-check"></i>Edukasi dan Keterlibatan Masyarakat: Aplikasi ini berfungsi
                                sebagai sumber pembelajaran yang interaktif dan mengedukasi pengguna tentang pentingnya
                                pelestarian tanaman endemik.</li>
                            <li><i class="bx bx-check"></i>Koneksi dengan Ahli dan Peneliti: Aplikasi ini memfasilitasi
                                kolaborasi antara pengguna dan para ahli di bidang botani dan konservasi.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="fade-in">

                <div class="text-center">
                    <h3>Hubungi Ahli Botani</h3>
                    <p> Jika Anda memiliki pertanyaan atau butuh bantuan terkait tanaman endemik, silakan hubungi ahli
                        botani kami.</p>
                    <a class="cta-btn" href="#footer">Kontak</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title pt-5" data-aos="fade-up">
                    <h2>Daftar Tanaman Endemik</h2>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="search-box">
                            <form action="#" method="GET" data-aos="fade-up">
                                <input type="text" style="width: 100%" name="search"
                                    placeholder="Cari tanaman endemik...">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/indonesia.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Indonesia" srcset="">
                            </div>
                            <h4 class="title"><a href="">indonesia</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/malaysia.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Malaysia" srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Malaysia</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/vietnam.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Vietnam" srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Vietnam</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/thailand.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Thailand" srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Thailand</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/cambodia.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Cambodia" srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Cambodia</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/laos.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Laos"
                                    srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Laos</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/philippines.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Philippines"
                                    srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Philippines</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><img src="{{ asset('frontend/assets/img/flag/singapore.png') }}"
                                    style="width: 10%; margin-left: 50px; float: left;" alt="Singapore"
                                    srcset=""></i>
                            </div>
                            <h4 class="title"><a href="">Singapore</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->
@endsection
