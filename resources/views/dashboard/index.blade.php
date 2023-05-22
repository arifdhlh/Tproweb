@extends('dashboard.layout.main')

@section('container')

<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat datang lagi, {{ auth()->user()->name }}</h1>
                    </div>

                    <!-- Content Row -->
                    <div >

                    <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Petunjuk Singkat</h6>
                                </div>
                                <div class="card-body">
                                    Pada tampilan dashboard ini, anda sebagai Admin dapat melihat, menambahkan, mengedit, dan menghapus data yang ada pada database.
                                </div>
                            </div>
                        
                    </div>                  
                </div>

@endsection