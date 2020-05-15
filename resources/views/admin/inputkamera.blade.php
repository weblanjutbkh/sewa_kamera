@extends('layout.admin')
@section('content')
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <form action="{{(isset($kamera))?route('kamera.update',$kamera-> id):route('kamera.store')}}" method="POST">
            @csrf
            @if(isset($kamera))?@method('PUT')@endif
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-lg-4">ID </label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($kamera))?$kamera->id:old('id')}}" name="id" class="form-control">
                        @error('id')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Nama Kamera / Aksesoris</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($kamera))?$kamera->nama_kamera:old('nama_kamera')}}" name="nama_kamera" class="form-control">
                        @error('nama_kamera')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Seri Kamera</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($kamera))?$kamera->seri_kamera:old('seri_kamera')}}" name="seri_kamera" class="form-control">
                        @error('seri kamera')<small style="color:red">{{$message}}</small>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-4">Harga Sewa</label>
                    <div class="col-lg-6">
                        <input type="text" value="{{(isset($kamera))?$kamera->harga_sewa:old('harga_sewa')}}"  name="harga_sewa" class="form-control">
                        @error('harga_sewa')<small style="color:red">{{$message}}</small>@enderror
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