@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Layanan</h1>
                    <p class="mb-4">Konfigurasi untuk membuat, mengedit, menghapus dan melihat data layanan yang ditampilkan pada landing page</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Layanan</h6>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/dashboard/layanan/create" class="btn btn-success mb-3">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Jenis Layanan</th>
                                            <th>Deskripsi Layanan</th>                        
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($layanan_layanan as $tampil_layanan)
                                        <tr>
                                            <th>{{ $loop->iteration }}                                            
                                            <td>{{ $tampil_layanan->jenis }}</td>
                                            <td>{{ $tampil_layanan->deskripsi }}</td>
                                            <td>
                                                <a href="/dashboard/layanan/{{ $tampil_layanan->id }}/edit" class="badge bg-primary"><i class="fa fa-marker" style="color:white"></i></a>
                                                <form action="/dashboard/layanan/{{ $tampil_layanan->id }}" method="post" class="d-inline">
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