<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kegiatan',
        'tanggal',
        'jam',
        'keterangan',
        'id_rangkaian',
        'status'
    ];
}
