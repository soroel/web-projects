<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullname',
        'emailaddress',
        'phonenumber',
        'password',
        'confirm_password',
    ];
}
