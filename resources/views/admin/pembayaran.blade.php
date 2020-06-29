@extends('layout.admin')
@section('content')
<div class="content" style="padding: 50px 10px 10px 230px;">
    <div class="col-lg-12">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-1 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nama</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Krisna Parta
                                </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    NIM</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1815051069</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Program Studi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Pendidikan Teknik
                                    Informatika</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-person-booth fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-1 mt-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Judul Studi Kasus</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sistem Penyewaan
                                    Kamera Online</div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Deskripsi Singkat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sistem ini
                                    memungkinkan pengguna untuk menyewa kamera secara online</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-business-time fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Pembayaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('pembayaran.create')}}">Input Pembayaran</a></li>
            </ol>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Pembayaran</div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <div class="row">
                            <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select></label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter" style="padding: 0px 0px 0px 300px;">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                        </div>
                        </div>
                        </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Rekening</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=0; @endphp
                                        @foreach($pembayaran as $input)
                                        @php $no++; @endphp
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{ $input->rekening}}</td>
                                            <td>{{ $input->jumlah}}</td>
                                            <td>{{ $input->tgl_bayar}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>