<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Disable timestamps (if your table doesn't have `created_at` and `updated_at` columns)
    public $timestamps = false;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'firstname',
        'lastname',
        'age',
    ];

    // Optionally define the primary key (if it's not the default `id`)
    protected $primaryKey = 'id';

    // Specify the data type of the primary key
    protected $keyType = 'string';

    // Disable auto-increment if the primary key is not an integer
    public $incrementing = false;
}
