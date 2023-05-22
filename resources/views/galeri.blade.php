@extends('main')

@section('container')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Foto</h2>
          
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($pajangan as $gambar)
          <div class="col-lg-4 col-md-6 portfolio-item filter">
            <div class="portfolio-img"><img src="{{ asset('storage/'. $gambar->image) }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $gambar->title }}</h4>
              <a href="{{ asset('storage/'. $gambar->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

@endsection
