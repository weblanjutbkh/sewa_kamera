@extends('layout.admin')
@section('content')
<div class="panel panel-default" style="padding: 70px 15px 15px 240px;">
<div class="panel-heading">
    <ol class="breadcrumb mb-4">
        <h4><b>Input Data Pembayaran :</b></h4>
    </ol>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('bayar') }}" method="POST" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <div class="form-group">
                <label>Rekening :</label>
                <input class="form-control" name="rekening"/>
            </div>
            <div class="form-group">
                <label>Jumlah :</label>
                <input class="form-control" name="jumlah"/>
            </div>
            <div class="form-group">
                <label>Tanggal Bayar :</label>
                <input type="date" class="form-control" name="tgl_bayar" />
            </div>
            <div>
                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
            </div>
        </div>
        </form>
    </div>
</div>