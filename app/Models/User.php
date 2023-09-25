<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Illuminate\Foundation\Auth\User as Authenticateble;

class User extends Authenticateble
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primarykey = 'user_id';

    protected $fillable = ['nama', 'username', 'password'];
}





