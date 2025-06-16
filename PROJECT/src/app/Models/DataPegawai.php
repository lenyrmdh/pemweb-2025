<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip', 'nama', 'email', 'password', 'role',
        'jenis_kelamin', 'tanggal_lahir', 'alamat', 'no_hp',
        'jabatan_id', 'divisi_id',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }

    public function cutis()
    {
        return $this->hasMany(Cuti::class);
    }

    public function lemburs()
    {
        return $this->hasMany(Lembur::class);
    }

    public function gajis()
    {
        return $this->hasMany(Gaji::class);
    }
}
