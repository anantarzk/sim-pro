<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MNproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '4_mn_project';
    protected $fillable = [
        'id',
        'id_mn_4',
        'status_mn',
        'status_mn_date',
        'approval_by',
        'approval_date',
        // Tempat simpan file
        'mn_atribut_1',
        'up_by_atribut_mn_1',
        'date_mn_atribut_1',

        'mn_atribut_2',
        'up_by_atribut_mn_2',
        'date_mn_atribut_2',

        'mn_atribut_3',
        'up_by_atribut_mn_3',
        'date_mn_atribut_3',

        'mn_atribut_4',
        'up_by_atribut_mn_4',
        'date_mn_atribut_4',

        'mn_atribut_5',
        'up_by_atribut_mn_5',
        'date_mn_atribut_5',

        'mn_atribut_6',
        'up_by_atribut_mn_6',
        'date_mn_atribut_6',

        'mn_atribut_7',
        'up_by_atribut_mn_7',
        'date_mn_atribut_7',

        'mn_atribut_8',
        'up_by_atribut_mn_8',
        'date_mn_atribut_8',

        'mn_atribut_9',
        'up_by_atribut_mn_9',
        'date_mn_atribut_9',

        'mn_atribut_10',
        'up_by_atribut_mn_10',
        'date_mn_atribut_10',

        // riwayat file
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function mnkeproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
