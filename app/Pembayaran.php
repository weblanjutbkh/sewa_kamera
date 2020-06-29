<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table='pembayaran';
    protected $fillable=['rekening','jumlah','tgl_bayar'];
}
