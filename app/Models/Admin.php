<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//25. database seeder - insert dummy data

class Admin extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'username',
        'email'
    ];
}
