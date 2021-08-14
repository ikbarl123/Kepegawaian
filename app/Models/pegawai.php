<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pegawai";
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
    'nama_pegawai',
    'tanggal_masuk',
    'id_jabatan'
    ];
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,'id_jabatan','id_jabatan');
    }
       public function absensi() 
    {   
    return $this->hasMany(absensi::class,'id_pegawai');
    }

}
