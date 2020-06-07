@extends('layout.admin')
@section('content')

<div class="content">
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Gede Budi Setiawan
                                </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    NIM</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1815051083</div>
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

    <div class="col-lg-12">
        <div class="card-shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Karyawan</h6>
            </div>
        </div>
        <div class="card-body">
            <a href="{{route('karyawan.create')}}">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Karyawan</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($karyawan ?? '' as $in=> $val)
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->nama_karyawan}}</td>
                            <td>{{$val->alamat}}</td>
                            <td>{{$val->no_hp}}</td>
                            <td>
                                <a href="{{route('karyawan.edit',$val->id)}}">
                                    <button type="submit" class="btn btn-outline-info"> Update</button></a>
                                <form action="{{route('karyawan.destroy',$val->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$karyawan ?? ''->links()}}
            </div>
        </div>
    </div>
</div>
@endsection