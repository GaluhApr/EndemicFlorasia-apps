@extends('frontend.component.index2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-5">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Tanaman Endemik</h2>
                    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas
                        sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Portolio</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach ($tanaman as $key => $tnmn)
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/' . $tnmn->gambar) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $tnmn->nama_tanaman }}</h4>
                                <p>{{ $tnmn->daerah_endemis }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
