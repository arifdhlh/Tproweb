@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Obat</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit data obat yang tersedia</p>
                    
                    <div>
                        <form method="post" action="/dashboard/obat/{{ $obat->id }}">
                            @method('put')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="namaobat">Nama Obat</label>
                                <input type="text" value="{{ old('namaobat', $obat->namaobat) }}" class="form-control @error('namaobat') is-invalid @enderror" id="namaobat" name="namaobat" placeholder="Nama atau jenis obat">
                                @error ('namaobat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label for="stok">Stok Obat</label>
                                <input type="number" value="{{ old('stok', $obat->stok) }}" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Jumlah obat">
                                @error ('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan Obat</label>
                                <input type="text" value="{{ old('satuan', $obat->satuan) }}" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" placeholder="Satuan jumlah obat">
                                @error ('satuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Perbarui Data Obat</button>
                        </form>
                    </div>
                </div>

@endsection