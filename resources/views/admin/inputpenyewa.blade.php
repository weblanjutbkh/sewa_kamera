@extends('layout.admin')
@section('content')
<div class="panel panel-default" style="padding: 70px 15px 15px 240px;">
<div class="panel-heading">
    <ol class="breadcrumb mb-4">
        <h4><b>Input Data Penyewa :</b></h4>
    </ol>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('upfoto') }}" method="POST" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <div class="form-group">
                <label>Nama Penyewa :</label>
                <input type="text" class="form-control" name="nama_penyewa"/>
            </div>
            <div class="form-group">
                <label>NIK :</label>
                <input type="text" class="form-control" name="nik"/>
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" class="form-control" name="alamat" />
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" class="form-control" name="no_hp"/>
            </div>
            <div class="form-group">
                <label>Foto :</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto"/>
                    <label class="custom-file-label"></label>
                </div>
            </div>
            <div>
                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
            </div>
        </div>
        </form>
    </div>
</div>
