<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    //
    protected $table = 'alats';
    protected $fillable = [
        'nama_alat',
        'tahun_pembelian',
        'merek',
        'tipe',
        'no_seri',
        'kondisi_alat',
        'lokasi',
    ];
}
