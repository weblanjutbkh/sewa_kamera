<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table='penyewa';
    protected $primaryKey='id_penyewa';
    protected $fillable=['nama_penyewa','nik','alamat','no_hp','foto'];
}