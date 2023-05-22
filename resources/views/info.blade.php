@extends('main')

@section('container')

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Informasi Pengunjung</strong></h3>
              <p>
                Dari tampilan ini, para siswa dapat mengetahui status dan keperluan siswa yang sedang berada di UKS dan yang baru saja pergi dari UKS.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <?php
                $divID = 0;
                global $divID;
                ?>
                <h4><strong>Saat Ini</strong></h4>
                @foreach ($tamu as $tampil_tamu)
                  @if ($tampil_tamu->keluar == null)
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo ++$divID; ?>"><span>{{ $tampil_tamu->nama }}</span>{{ $tampil_tamu->created_at->diffForHumans() }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-<?php echo $divID; ?>" class="collapse" data-bs-parent=".accordion-list">
                        
                      <table class="table">
                          <br>
                          <tbody>
                            <tr>
                              <th>Kelas</th>
                              <td style="width: 50%">{{ $tampil_tamu->kelas }}</td>
                            </tr>
                            <tr>
                              <th>Keperluan</th>
                              <td style="width: 50%">{{ $tampil_tamu->keperluan }}</td>
                            </tr>
                            <tr>
                              <th>Jam Masuk UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->masuk }}</td>
                            </tr>
                            <tr>
                              <th>Jam Keluar UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->keluar }}</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </li>
                  @endif
                @endforeach
                <br><h4><strong>Riwayat</strong></h4>
                @foreach ($tamu as $tampil_tamu)
                  @if ($tampil_tamu->keluar != null)
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-<?php echo ++$divID; ?>"><span>{{ $tampil_tamu->nama }}</span>{{ $tampil_tamu->created_at->diffForHumans() }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-<?php echo $divID; ?>" class="collapse" data-bs-parent=".accordion-list">
                        
                      <table class="table">
                          <br>
                          <tbody>
                            <tr>
                              <th>Kelas</th>
                              <td style="width: 50%">{{ $tampil_tamu->kelas }}</td>
                            </tr>
                            <tr>
                              <th>Keperluan</th>
                              <td style="width: 50%">{{ $tampil_tamu->keperluan }}</td>
                            </tr>
                            <tr>
                              <th>Jam Masuk UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->masuk }}</td>
                            </tr>
                            <tr>
                              <th>Jam Keluar UKS</th>
                              <td style="width: 50%">{{ $tampil_tamu->keluar }}</td>
                            </tr>
                          </tbody>
                        </table>

                      </div>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("style/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

@endsection
