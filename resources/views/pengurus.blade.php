@extends('main')

@section('container')

   <!-- ======= Team Section ======= -->
   <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pengurus Harian</h2>
          <p>Berikut adalah pengurus dari UKS di sekolah ini.</p>
        </div>

        <div class="row">

        @foreach ($urusan as $foto)
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('storage/'. $foto->image) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4 class="mt-4">{{ $foto->nama }}</h4>
                <span>Kelas {{ $foto->kelas }}</span>
                <div class="social">
                  <a href="{{ $foto->linkig }}"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach



        </div>

      </div>
    </section><!-- End Team Section -->

@endsection
