@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambahkan Data Obat</h1>
                    <p class="mb-4">Konfigurasi untuk membuat data obat baru</p>
                    
                    <div>
                        <form method="post" action="/dashboard/obat">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="namaobat">Nama Obat</label>
                                <input type="text" class="form-control @error('namaobat') is-invalid @enderror" id="namaobat" name="namaobat" placeholder="Nama atau jenis obat">
                                @error ('namaobat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                <label for="stok">Stok Obat</label>
                                <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Jumlah obat">
                                @error ('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="satuan">Satuan Obat</label>
                                <input type="text" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" placeholder="Satuan jumlah obat">
                                @error ('satuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Tambahkan Data Obat</button>
                        </form>
                    </div>
                </div>

@endsection