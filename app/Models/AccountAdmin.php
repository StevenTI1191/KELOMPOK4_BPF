<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AccountAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = 'AccountAdmin';  // Pastikan model ini merujuk ke tabel AccountAdmin

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
