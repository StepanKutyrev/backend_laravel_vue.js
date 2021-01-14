<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    protected $table = 'messages';
    use SoftDeletes, HasFactory;
    protected $fillable = [
        'user_id',
        'to_user_id',
        'message',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
