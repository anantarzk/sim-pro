<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forms extends Model
{
    use HasFactory, SoftDeletes;

    // mengkonekkan ke table
    protected $table = 'standar_forms';
    protected $fillable = [
        'name_form',
        'file_form_excel',
        'uploaded_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
