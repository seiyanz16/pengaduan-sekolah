<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'iduser',
        'judul',
        'isi',
        'tgl_pengaduan',
        'status',
        'kategori',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'id', 'pengaduan');
    }
}