@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambahkan Data Pengurus</h1>
                    <p class="mb-4">Konfigurasi untuk membuat data pengurus baru</p>
                    
                    <div>
                        <form method="post" action="/dashboard/urus" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="nama">Nama Pengurus</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama pengurus UKS">
                                @error ('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label for="kelas">Kelas</label>
                                <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" placeholder="Kelas pengurus UKS">
                                @error ('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="linkig">Link IG</label>
                                <input type="text" class="form-control @error('linkig') is-invalid @enderror" id="linkig" name="linkig" placeholder="https://www.instagram.com/username/">
                                @error ('linkig')
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
                            <button type="submit" class="btn btn-primary mt-4">Tambahkan Data Pengurus</button>
                        </form>
                    </div>
                </div>

@endsection