<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKegiatanMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'unit_kegiatan_mahasiswa';

    protected $fillable = [
        'name',
        'description',
    ];

    public function anggotaUkm()
    {
        return $this->hasMany(AnggotaUKM::class, 'ukm_id', 'id');
    }
}
