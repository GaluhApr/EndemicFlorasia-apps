@extends('frontend.component.index2')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="fade-up">
    <h1>Selamat Datang di Endemic Florasia</h1>
    <h2>Temukan Keindahan Flora Endemik</h2>
    <a href="#services" class="btn-get-started scrollto">Lihat Tanaman</a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row justify-content-end">
        <div class="col-lg-11">
          <div class="row justify-content-end">

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box py-5">
                <i class="bi bi-tree"></i>
                <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                <p>Tanaman Endemik</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box py-5">
                <i class="bi bi-house"></i>
                <span data-purecounter-start="0" data-purecounter-end="85" class="purecounter">0</span>
                <p>Habitat</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box pb-5 pt-0 pt-lg-5">
                <i class="bi bi-palette"></i>
                <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                <p>Keanekaragaman</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box pb-5 pt-0 pt-lg-5">
                <i class="bi bi-bug"></i>
                <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                <p>Ancaman</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-6 video-box align-self-baseline position-relative">
          <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content">
          <h3>Temukan Tanaman Endemik yang Menakjubkan</h3>
          <p class="fst-italic">
            Menjelajahi keindahan flora endemik yang langka dan unik di Asia Tenggara.
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i> Menawarkan tanaman endemik yang hanya ditemukan di wilayah tertentu.</li>
            <li><i class="bx bx-check-double"></i> Menyediakan informasi tentang habitat, keanekaragaman, dan ancaman yang dihadapi.</li>
            <li><i class="bx bx-check-double"></i> Mengedukasi dan mempromosikan kepedulian terhadap keanekaragaman hayati.</li>
            <li><i class="bx bx-check-double"></i> Memfasilitasi penelusuran tanaman endemik berdasarkan keanekaragaman.</li>
          </ul>
          <p>
            Jelajahi situs kami dan temukan tanaman endemik yang menakjubkan serta informasi lengkap tentang keunikan dan pentingnya
            menjaga kelestariannya. Bergabunglah dengan kami dalam upaya melestarikan flora endemik untuk generasi mendatang.
          </p>
        </div>

      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="fade-in">

      <div class="text-center">
        <h3>Hubungi Ahli Botani</h3>
        <p> Jika Anda memiliki pertanyaan atau butuh bantuan terkait tanaman endemik, silakan hubungi ahli botani kami.</p>
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
            <input type="text" name="search" placeholder="Cari tanaman endemik...">
            <button type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi bi-tree" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="">Tanaman 1</a></h4>
          <p class="description">Deskripsi tanaman endemik 1.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi bi-tree" style="color: #e9bf06;"></i></div>
          <h4 class="title"><a href="">Tanaman 2</a></h4>
          <p class="description">Deskripsi tanaman endemik 2.</p>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-tree" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="">Tanaman 3</a></h4>
          <p class="description">Deskripsi tanaman endemik 3.</p>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-tree" style="color:#41cf2e;"></i></div>
          <h4 class="title"><a href="">Tanaman 4</a></h4>
          <p class="description">Deskripsi tanaman endemik 4.</p>
        </div>
      </div>

      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-tree" style="color: #d6ff22;"></i></div>
          <h4 class="title"><a href="">Tanaman 5</a></h4>
          <p class="description">Deskripsi tanaman endemik 5.</p>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-tree" style="color: #4680ff;"></i></div>
          <h4 class="title"><a href="">Tanaman 6</a></h4>
          <p class="description">Deskripsi tanaman endemik 6.</p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->


</main><!-- End #main -->
@endsection