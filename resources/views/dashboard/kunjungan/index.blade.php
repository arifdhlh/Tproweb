@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengunjung</h1>
                    <p class="mb-4">Konfigurasi untuk membuat, mengedit, menghapus dan melihat data pengunjung</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Pengunjung</h6>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <a href="/dashboard/kunjungan/create" class="btn btn-success mb-3">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Keperluan</th>
                                            <th>Jam Masuk UKS</th>
                                            <th>Jam Keluar UKS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($tamu as $tampil_tamu)
                                        <tr>
                                            <th>{{ $loop->iteration }}
                                            <td>{{ $tampil_tamu->nama }}</td>
                                            <td>{{ $tampil_tamu->kelas }}</td>
                                            <td>{{ $tampil_tamu->keperluan }}</td>
                                            <td>{{ $tampil_tamu->masuk }}</td>
                                            <td>{{ $tampil_tamu->keluar }}</td>
                                            <td>
                                                <a href="/dashboard/kunjungan/{{ $tampil_tamu->id }}/edit" class="badge bg-primary"><i class="fa fa-marker" style="color:white"></i></a>
                                                <form action="/dashboard/kunjungan/{{ $tampil_tamu->id }}" method="post" class="d-inline">
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