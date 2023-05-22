@extends('dashboard.layout.main')

@section('container')

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Profil UKS</h1>
                    <p class="mb-4">Konfigurasi untuk mengedit profil UKS</p>

                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-4">
                            <a href="/dashboard/profil/1/edit" class="btn btn-success">Edit Profil UKS</a>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <h3>Deskripsi UKS</h3>
                                @foreach ($isi as $isinya)
                                    {!! $isinya->deskripsi !!}
                                @endforeach

                                <h3 class="mt-3">Visi UKS</h3>
                                @foreach ($isi as $isinya)
                                    {!! $isinya->visi !!}
                                @endforeach

                                <h3 class="mt-3">Misi UKS</h3>
                                @foreach ($isi as $isinya)
                                    {!! $isinya->misi !!}
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

@endsection