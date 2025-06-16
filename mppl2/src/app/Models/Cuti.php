<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_id', 'tanggal_mulai', 'tanggal_selesai', 'alasan', 'status',
    ];

    public function data_pegawai()
    {
        return $this->belongsTo(DataPegawai::class);
    }
}
