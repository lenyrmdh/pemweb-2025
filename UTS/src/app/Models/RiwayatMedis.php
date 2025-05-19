<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatMedis extends Model
{
    use HasFactory;

    protected $fillable = ['kunjungan_id', 'dokter_id', 'diagnosa', 'resep', 'saran'];

    public function kunjungan()
    {
        return $this->belongsTo(Kunjungan::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Pengguna::class, 'dokter_id');
    }
}
