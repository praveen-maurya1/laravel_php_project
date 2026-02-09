<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Swastik_users extends Model
{
    protected $table = 'swastik_users';

    // 🔴 YAHI SABSE IMPORTANT LINE HAI
    protected $primaryKey = 'user_id';
    // ⬆️ apni table ka REAL primary key yahan likho

    public $incrementing = true;   // agar int auto increment hai
    protected $keyType = 'int';    // agar integer hai

    protected $fillable = [
        'name',
        'email',
        'role',
    ];
}
