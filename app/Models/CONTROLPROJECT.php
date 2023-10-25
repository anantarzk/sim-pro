<?php

namespace App\Models;

use App\Models\ARproject;
use App\Models\CLproject;
use App\Models\FRproject;
use App\Models\INproject;
use App\Models\MNproject;
use App\Models\PRproject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CONTROLPROJECT extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = 'project';
    protected $fillable = [
        'id',
        'check',
        'project_name',
        'io_number',
        'budget_amount',
        'status_project',
        'section',
        'cost_dept',
        'remarks',
        'ob_year',
        'progress',
        'last_update_name',
        'last_update_date',
        'pic_1_me',
        'pic_2_el',
        'pic_3_mit',
        'date_start',
        'date_end',
        'archive_at',
    ];

    public function koneksikefr()
    {
        return $this->belongsTo(FRproject::class, 'id', 'id_fr_1');
    }

    public function koneksikear()
    {
        return $this->belongsTo(ARproject::class, 'id', 'id_ar_2');
    }
    public function koneksikepr01()
    {
        return $this->belongsTo(PRproject::class, 'id', 'id_pr_01_3');
    }
    public function koneksikepa02()
    {
        return $this->belongsTo(PAproject::class, 'id', 'id_pa_02_3');
    }
    public function koneksikepo03()
    {
        return $this->belongsTo(POproject::class, 'id', 'id_po_03_3');
    }
    public function koneksikepay04()
    {
        return $this->belongsTo(PAYproject::class, 'id', 'id_pay_04_3');
    }
    public function koneksikemn()
    {
        return $this->belongsTo(MNproject::class, 'id', 'id_mn_4');
    }
    public function koneksikein()
    {
        return $this->belongsTo(INproject::class, 'id', 'id_in_5');
    }
    public function koneksikecl()
    {
        return $this->belongsTo(CLproject::class, 'id', 'id_cl_6');
    }
}
