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
    'jumlah_anak',
    'id_jabatan'
    ];
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,'id_jabatan','id_jabatan');
    }
            public function gaji() 
    {   
    return $this->hasMany(penggajian::class);
    }
       public function absensi() 
    {   
    return $this->hasMany(absensi::class);
    }

}
