<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CLproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '6_cl_project';
    protected $fillable = [
        'id',
        'id_cl_6',
        'status_cl',
        'status_cl_date',
        'approval_by',
        'approval_date',
        // Tempat simpan file
        'cl_i_periksa_m_1',
        'up_by_i_periksa_m_cl_1',
        'date_cl_i_periksa_m_1',

        'cl_i_periksa_m_2',
        'up_by_i_periksa_m_cl_2',
        'date_cl_i_periksa_m_2',

        'cl_i_periksa_m_3',
        'up_by_i_periksa_m_cl_3',
        'date_cl_i_periksa_m_3',
        //
        'cl_qas_1',
        'up_by_qas_cl_1',
        'date_cl_qas_1',

        'cl_qas_2',
        'up_by_qas_cl_2',
        'date_cl_qas_2',
        //
        'cl_i_pakai_m_1',
        'up_by_i_pakai_m_cl_1',
        'date_cl_i_pakai_m_1',

        'cl_i_pakai_m_2',
        'up_by_i_pakai_m_cl_2',
        'date_cl_i_pakai_m_2',
        //
        'cl_training_1',
        'up_by_training_cl_1',
        'date_cl_training_1',

        'cl_training_2',
        'up_by_training_cl_2',
        'date_cl_training_2',

        'cl_training_3',
        'up_by_training_cl_3',
        'date_cl_training_3',

        'cl_training_4',
        'up_by_training_cl_4',
        'date_cl_training_4',

        'cl_training_5',
        'up_by_training_cl_5',
        'date_cl_training_5',
        //
        'cl_l_trouble_1',
        'up_by_l_trouble_cl_1',
        'date_cl_l_trouble_1',

        'cl_l_trouble_2',
        'up_by_l_trouble_cl_2',
        'date_cl_l_trouble_2',
        //
        'cl_camb_1',
        'up_by_camb_cl_1',
        'date_cl_camb_1',

        'cl_camb_2',
        'up_by_camb_cl_2',
        'date_cl_camb_2',
        //
        'cl_im_1',
        'up_by_im_cl_1',
        'date_cl_im_1',

        'cl_im_2',
        'up_by_im_cl_2',
        'date_cl_im_2',

        'cl_im_3',
        'up_by_im_cl_3',
        'date_cl_im_3',

        'cl_im_4',
        'up_by_im_cl_4',
        'date_cl_im_4',

        'cl_im_5',
        'up_by_im_cl_5',
        'date_cl_im_5',
        //
        'cl_chor_1',
        'up_by_chor_cl_1',
        'date_cl_chor_1',

        'cl_chor_2',
        'up_by_chor_cl_2',
        'date_cl_chor_2',
        //riwayat simpan
        'archive_at',
        'created_at',
        'updated_at',
    ];
    public function clkeproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
