@extends('frontend.component.index2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-5">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Hasil Pencarian</h2>
                    <p>Berikut hasil pencarian anda terkait '{{ request()->get('search') }}'</p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{route('home')}}">Beranda</a></li>
                <li>Tanaman</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
        <div class="row">
                    <div class="col-md-12">
                        <div class="search-box">
                            <form action="{{ url('search')}}" method="GET" data-aos="fade-up">
                                <input type="text" style="width: 100%" name="search" value="{{ request()->get('search') }}"
                                    placeholder="Cari tanaman endemik...">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($searchTanaman as $key => $tnmn)
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/' . $tnmn->gambar) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $tnmn->nama_tanaman }}</h4>
                                <p>{{ $tnmn->daerah_endemis }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('storage/' . $tnmn->gambar) }}" style="font-size: 20px" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="{{$tnmn->nama_tanaman}}"><i class="bx bx-fullscreen"></i></a>
                                    <a href="{{ route('tanamandetail', [$tnmn->id, $tnmn->habitat_id, $tnmn->ancaman_id]) }}" style="font-size: 18px;" title="More Details">See details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
