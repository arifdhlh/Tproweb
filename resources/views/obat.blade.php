@extends('main')

@section('container')

<section id="obat" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Stok Obat</h2>
        </div>

        <div class="row">
        @foreach ($obat_obat as $kotak)
          <div class="cube" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h5>{{ $kotak->satuan }}</h5>
              <h4><a href="">{{ $kotak->namaobat }}</a></h4>
              <p>Jumlah stok : {{ $kotak->stok }} </p>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section><!-- End Services Section -->

@endsection