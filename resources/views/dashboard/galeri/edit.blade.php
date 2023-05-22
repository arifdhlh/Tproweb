@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Galeri</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit galeri yang sudah ada</p>
                    
                    <div>
                        <form method="post" action="/dashboard/galeri/{{ $galeri->id }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul Foto</label>
                                <input type="text" value="{{ old('title', $galeri->title) }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukkan judul foto">
                                @error ('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Gambar</label>
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                @error ('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Perbarui Data Galeri</button>
                        </form>
                    </div>
                </div>

@endsection