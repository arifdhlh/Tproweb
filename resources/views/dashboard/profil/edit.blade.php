@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Profil UKS</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit profil UKS</p>
                    
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <div>
                        <form method="post" action="/dashboard/profil/{{ $isi->id }}">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi UKS</label>
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $isi->deskripsi) }}" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi dari UKS">
                                <trix-editor input="deskripsi"></trix-editor>
                                @error ('')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi UKS</label>
                                <input id="visi" type="hidden" name="visi" value="{{ old('visi', $isi->visi) }}" class="form-control @error('visi') is-invalid @enderror" name="visi" placeholder="Visi dari UKS">
                                <trix-editor input="visi"></trix-editor>
                                @error ('visi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi UKS</label>
                                <input id="misi" type="hidden" name="misi" value="{{ old('misi', $isi->misi) }}" class="form-control @error('misi') is-invalid @enderror" name="misi" placeholder="Misi dari UKS">
                                <trix-editor input="misi"></trix-editor>
                                @error ('misi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Perbarui Profil UKS</button>
                        </form>
                        <a href="/dashboard/profil/" class="mt-3 btn btn-danger">Batal</a>
                    </div>
                </div>

@endsection