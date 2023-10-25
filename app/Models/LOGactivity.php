<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LOGactivity extends Model
{
    use HasFactory;

    // mengkonekkan ke table
    protected $table = 'log_activity';
    protected $fillable = [
        'id',
        'aktivitas',
        'waktu',
        'created_at',
        'updated_at',
    ];
}
