<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIM',
        'name',
        'date_of_birth',
        'address',
    ];

    protected $table = "mahasiswa";

    public function anggotaUkm()
    {
        return $this->hasMany(AnggotaUkm::class, 'mahasiswa_id', 'id');
    }
}
