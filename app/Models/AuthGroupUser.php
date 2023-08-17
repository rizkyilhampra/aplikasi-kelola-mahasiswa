<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthGroupUser extends Model
{
    use HasFactory;

    protected $table = 'auth_group_users';

    protected $fillable = [
        'auth_group_id',
        'user_id',
    ];

    public function authGroup()
    {
        return $this->belongsTo(AuthGroup::class, 'auth_group_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
