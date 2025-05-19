<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'username', 'password', 'role'];

    protected $hidden = ['password'];

    public function riwayatMedis()
    {
        return $this->hasMany(RiwayatMedis::class, 'dokter_id');
    }
}
