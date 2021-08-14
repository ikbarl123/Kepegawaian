<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $table = "jabatan";
    protected $primaryKey = 'id_jabatan';
    protected $fillable = [
    'id_jabatan',
    'nama_jabatan',
    'gaji_pokok'
    ];

       public function pegawai() 
 {   
   return $this->hasMany(pegawai::class);
}
}
