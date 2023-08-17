<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthGroup extends Model
{
    use HasFactory;

    protected $table = 'auth_groups';

    protected $fillable = [
        'name',
        'description',
    ];
}
