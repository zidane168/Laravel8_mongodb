<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'students';
    protected $fillable = [
        'first_name', 'last_name', 'address',
    ];
}
