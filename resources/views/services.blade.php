@extends('main')

@section('container')

   <!-- ======= Services Section ======= -->
   <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Kami</h2>
        
        </div>

        <div class="row">
        @foreach ($services as $kotak)
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              
              <h4><a href="">{{ $kotak->jenis }}</a></h4>
              <p>{{ $kotak->deskripsi }}</p>
            </div>
          </div>
        @endforeach
                   
        </div>
      </div>
    </section><!-- End Services Section -->

@endsection
