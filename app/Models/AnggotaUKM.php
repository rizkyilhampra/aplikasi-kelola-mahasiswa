<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaUKM extends Model
{
    use HasFactory;

    protected $table = 'anggota_ukm';

    protected $fillable = [
        'ukm_id',
        'mahasiswa_id',
    ];

    public function ukm()
    {
        return $this->belongsTo(UnitKegiatanMahasiswa::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
