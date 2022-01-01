<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasiltanam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_rangkaian',
        'jumlah_panen',
        'id_pegawai',
        'tgl_panen'
    ];
}
