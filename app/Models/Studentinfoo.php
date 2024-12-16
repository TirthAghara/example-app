<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentinfoo extends Model
{
    public $timestamps = false;
    protected $table = 'studentinfoos';
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'enrollno',
        'branch',
    ];
}
