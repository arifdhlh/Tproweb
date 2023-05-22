@extends('main')

@section('container')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>APA ITU UKS?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              @foreach ($isi as $isinya)
                {!! $isinya->deskripsi !!}
              @endforeach
            </p>
                      </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              @foreach ($isi as $isinya)
                {!! $isinya->visi !!}
              @endforeach
            </p>
            <p>
              @foreach ($isi as $isinya)
                {!! $isinya->misi !!}
              @endforeach
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

@endsection
