@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengurus UKS</h1>
                    <p class="mb-4">Konfigurasi untuk membuat, mengedit, menghapus dan melihat data pengurus UKS</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengurus</h6>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/dashboard/urus/create" class="btn btn-success mb-3">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pengurus</th>
                                            <th>Kelas</th>
                                            <th>Link IG</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($urusan as $tampil_urus)
                                        <tr>
                                            <th>{{ $loop->iteration }}
                                            <td>{{ $tampil_urus->nama }}</td>
                                            <td>{{ $tampil_urus->kelas }}</td>
                                            <td>{{ $tampil_urus->linkig }}</td>
                                            <td>
                                                <div style="max-height:350px;overflow:auto;">
                                                    <img src="{{ asset('storage/'. $tampil_urus->image) }}">
                                            </td>
                                            
                                            <td>
                                                <a href="/dashboard/urus/{{ $tampil_urus->id }}/edit" class="badge bg-primary"><i class="fa fa-marker" style="color:white"></i></a>
                                                <form action="/dashboard/urus/{{ $tampil_urus->id }}" method="post" class="d-inline">
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