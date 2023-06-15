@extends('frontend.component.index2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-5">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Tanaman Endemik</h2>
                    <p>Temukan informasi tentang tanaman endemik di daerah Anda. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li>Tanaman</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="card-tanaman" class="card-tanaman">
        <div class="container">

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($tanaman as $tanaman)
                    <a href="{{ route('detail', $tanaman->id) }}" class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="tanaman-wrap">
                            <img src="{{ asset('storage/' . $tanaman->gambar) }}" class="img-fluid" alt="">
                            <div class="tanaman-info">
                                <h4>{{ $tanaman->nama_tanaman }}</h4>
                                <p>{{ $tanaman->daerah_endemis }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
