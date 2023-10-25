<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FRproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '1_fr_project';
    protected $fillable = [
        'id',
        'id_fr_1',
        'status_fr',
        'status_fr_date',
        'approval_by',
        'approval_date',
        // Tempat simpan file
        'atribut_1',
        'up_by_1',
        'date_atribut_1',

        'atribut_2',
        'up_by_2',
        'date_atribut_2',

        'atribut_3',
        'up_by_3',
        'date_atribut_3',

        'atribut_4',
        'up_by_4',
        'date_atribut_4',

        'atribut_5',
        'up_by_5',
        'date_atribut_5',

        // riwayat tanggal simpan file
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function frkeproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
