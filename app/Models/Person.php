<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = [
            'name',
            'phone',
            'email',
            'age',
            'created_at',
            'updated_at',
        ];

        use HasFactory;
}
