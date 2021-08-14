<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
        public $timestamps = false;
    protected $table = "absensi";
    protected $fillable = [
    'id_pegawai',
    'bulan',
    'tahun',
    'sakit',
    'tanpa_keterangan'
    ];
        public function pegawai()
    {
        return $this->belongsTo(pegawai::class,'id_pegawai','id_pegawai');
    }
}
