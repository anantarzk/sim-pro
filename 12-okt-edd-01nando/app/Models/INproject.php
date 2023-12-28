<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class INproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '5_in_project';
    protected $fillable = [
        'id',
        'id_in_5',
        'status_in',
        'status_in_date',
        'approval_by',
        'approval_date',

        // Tempat simpan file
        'in_ipo_1',
        'up_by_ipo_in_1',
        'date_in_ipo_1',

        'in_ipo_2',
        'up_by_ipo_in_2',
        'date_in_ipo_2',

        'in_ipo_3',
        'up_by_ipo_in_3',
        'date_in_ipo_3',
        //
        'in_ecr_1',
        'up_by_ecr_in_1',
        'date_in_ecr_1',

        'in_ecr_2',
        'up_by_ecr_in_2',
        'date_in_ecr_2',

        'in_ecr_3',
        'up_by_ecr_in_3',
        'date_in_ecr_3',

        'in_ecr_4',
        'up_by_ecr_in_4',
        'date_in_ecr_4',
        //
        'in_sc_1',
        'up_by_sc_in_1',
        'date_in_sc_1',

        'in_sc_2',
        'up_by_sc_in_2',
        'date_in_sc_2',
        //
        'in_sccs_1',
        'up_by_sccs_in_1',
        'date_in_sccs_1',

        'in_sccs_2',
        'up_by_sccs_in_2',
        'date_in_sccs_2',

        'in_sccs_3',
        'up_by_sccs_in_3',
        'date_in_sccs_3',
        //
        'in_ir_1',
        'up_by_ir_in_1',
        'date_in_ir_1',

        'in_ir_2',
        'up_by_ir_in_2',
        'date_in_ir_2',
        //riwayat simpan
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function inkeproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
