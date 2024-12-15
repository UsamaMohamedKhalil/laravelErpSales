<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    // تعريف الجدول المرتبط بالموديل
    protected $table = 'admins';

    // السماح للحقول التالية بالتعبئة (Mass Assignable)
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'created_at',
        'updated_at',
        'added_by',
        'updated_by',
        'com_code',
    ];
}
