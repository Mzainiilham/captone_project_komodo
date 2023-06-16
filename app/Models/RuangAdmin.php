<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangAdmin extends Model
{
    use HasFactory;

    protected $table = 'ruang_admins';
    protected $fillable = [
        'pemasukan',
        'pengeluaran',
        'tanggal_dibuat',
        'tanggal_diubah',
    ];

}