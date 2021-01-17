<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'matricno','studname','email','address','nophone','equipment','codeequipment','rentalprice',

    ];
}
