<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = "tbl_user";
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_fullname',
        'user_username',
        'user_email',
        'user_password',
    ];
}
