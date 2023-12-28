<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    //connect to table
    protected $table = 'roles';

    //mengambil data dari table user lewat variable $fillable
    protected $fillable = [
        'name'
    ];
}
