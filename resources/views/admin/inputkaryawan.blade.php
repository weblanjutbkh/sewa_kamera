@extends('layout.admin')
@section('content')
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <form action="{{(isset($karyawan))?route('karyawan.update',$karyawan-> id):route('karyawan.store')}}" method="POST">
            @csrf
            @if(isset($karyawan))?@method('PUT')@endif
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-lg-4">ID </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($karyawan))?$karyawan->id:old('id')}}" name="id" class="form-control">
                        @error('id')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Nama Karyawan</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($karyawan))?$karyawan->nama_karyawan:old('nama_karyawan')}}" name="nama_karyawan" class="form-control">
                        @error('nama_karyawan')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Alamat</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($karyawan))?$karyawan->alamat:old('alamat')}}" name="alamat" class="form-control">
                        @error('alamat')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">No.Hp</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($karyawan))?$karyawan->no_hp:old('no_hp')}}"  name="no_hp" class="form-control">
                        @error('no_hp')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </div>
        </form>
        

    </div>

</div>

@endsection