@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Pengunjung</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit data pengunjung</p>
                    
                    <div>
                        <form method="post" action="/dashboard/kunjungan/{{ $tamu->id }}">
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="nama">Nama</label>
                                <input type="text" value="{{ old('nama', $tamu->nama) }}" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap">
                                @error ('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label for="kelas">Kelas</label>
                                <input type="text" value="{{ old('kelas', $tamu->kelas) }}" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="Kelas Siswa">
                                @error ('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keperluan">Keperluan</label>
                                <input type="text" value="{{ old('keperluan', $tamu->keperluan) }}" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" placeholder="Alasan ke UKS">
                                @error ('keperluan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="masuk">Jam Masuk UKS</label>
                                <div class="form-group">
                                <input type="datetime-local" value="{{ old('masuk', date ('Y-m-d\TH:i', strtotime($tamu->masuk))) }}" class="form-control @error('masuk') is-invalid @enderror" id="masuk" name="masuk" placeholder="Tanggal dan jam datang ke UKS">
                                @error ('masuk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluar">Jam Keluar UKS</label>
                                <div class="form-group">
                                <input type="datetime-local" value="{{ old('keluar', date ('Y-m-d\TH:i', strtotime($tamu->keluar))) }}" class="form-control" id="keluar" name="keluar" placeholder="Tanggal dan jam saat keluar UKS">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Perbarui Data Pengguna</button>
                        </form>
                    </div>
                </div>

@endsection