@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Layanan</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit data layanan yang sudah ada</p>
                    
                    <div>
                        <form method="post" action="/dashboard/layanan/{{ $layanan->id }}">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="jenis">Jenis Layanan</label>
                                <input type="text" value="{{ old('jenis', $layanan->jenis) }}" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" placeholder="Sebutkan layanan">
                                @error ('jenis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Layanan</label>
                                <input type="text" value="{{ old('deskripsi', $layanan->deskripsi) }}" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Deskripsi layanan">
                                @error ('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Perbarui Data Layanan</button>
                        </form>
                    </div>
                </div>

@endsection