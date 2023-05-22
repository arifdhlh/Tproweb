@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
                    <p class="mb-4">Konfigurasi untuk membuat, mengedit, menghapus dan melihat data obat</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Obat</h6>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/dashboard/obat/create" class="btn btn-success mb-3">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Obat</th>
                                            <th>Stok Obat</th>
                                            <th>Satuan Obat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($obat_obat as $tampil_obat_obat)
                                        <tr>
                                            <th>{{ $loop->iteration }}
                                            <td>{{ $tampil_obat_obat->namaobat }}</td>
                                            <td>{{ $tampil_obat_obat->stok }}</td>
                                            <td>{{ $tampil_obat_obat->satuan }}</td>
                                            <td>
                                                <a href="/dashboard/obat/{{ $tampil_obat_obat->id }}/edit" class="badge bg-primary"><i class="fa fa-marker" style="color:white"></i></a>
                                                <form action="/dashboard/obat/{{ $tampil_obat_obat->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus?')"><i class="fa fa-trash" style="color:white"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                    

@endsection