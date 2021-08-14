<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $table = "absensi";
    protected $fillable = [
    'id_pegawai',
    'tanggal',
    'gaji_bersih'];
}
