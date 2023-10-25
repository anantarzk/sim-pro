<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAproject extends Model
{
    use HasFactory;

    // mengkonekkan ke table
    protected $table = '3_02_pa_project';
    protected $fillable = [
        'id_pa_02_3  ',

        'status_pa_02',
        'status_pa_02_date',
        'approval_by',
        'approval_date',

        'pa_parts_1',
        'up_by_parts_pa_1',
        'mny_parts_pa_1',
        'date_pa_parts_1',

        'pa_parts_2',
        'mny_parts_pa_2',
        'up_by_parts_pa_2',
        'date_pa_parts_2',

        'pa_parts_3',
        'mny_parts_pa_3',
        'up_by_parts_pa_3',
        'date_pa_parts_3',

        'pa_parts_4',
        'mny_parts_pa_4',
        'up_by_parts_pa_4',
        'date_pa_parts_4',

        'pa_parts_5',
        'mny_parts_pa_5',
        'up_by_parts_pa_5',
        'date_pa_parts_5',

        'pa_parts_6',
        'mny_parts_pa_6',
        'up_by_parts_pa_6',
        'date_pa_parts_6',

        'pa_parts_7',
        'mny_parts_pa_7',
        'up_by_parts_pa_7',
        'date_pa_parts_7',

        'pa_parts_8',
        'mny_parts_pa_8',
        'up_by_parts_pa_8',
        'date_pa_parts_8',

        'pa_parts_9',
        'mny_parts_pa_9',
        'up_by_parts_pa_9',
        'date_pa_parts_9',

        'pa_parts_10',
        'mny_parts_pa_10',
        'up_by_parts_pa_10',
        'date_pa_parts_10',

        'pa_parts_11',
        'mny_parts_pa_11',
        'up_by_parts_pa_11',
        'date_pa_parts_11',

        'pa_parts_12',
        'mny_parts_pa_12',
        'up_by_parts_pa_12',
        'date_pa_parts_12',

        'pa_parts_13',
        'mny_parts_pa_13',
        'up_by_parts_pa_13',
        'date_pa_parts_13',

        'pa_parts_14',
        'mny_parts_pa_14',
        'up_by_parts_pa_14',
        'date_pa_parts_14',

        'pa_parts_15',
        'mny_parts_pa_15',
        'up_by_parts_pa_15',
        'date_pa_parts_15',

        'pa_parts_16',
        'mny_parts_pa_16',
        'up_by_parts_pa_16',
        'date_pa_parts_16',

        'pa_parts_17',
        'mny_parts_pa_17',
        'up_by_parts_pa_17',
        'date_pa_parts_17',

        'pa_parts_18',
        'mny_parts_pa_18',
        'up_by_parts_pa_18',
        'date_pa_parts_18',

        'pa_parts_19',
        'mny_parts_pa_19',
        'up_by_parts_pa_19',
        'date_pa_parts_19',

        'pa_parts_20',
        'mny_parts_pa_20',
        'up_by_parts_pa_20',
        'date_pa_parts_20',

        'pa_parts_21',
        'mny_parts_pa_21',
        'up_by_parts_pa_21',
        'date_pa_parts_21',

        'pa_parts_22',
        'mny_parts_pa_22',
        'up_by_parts_pa_22',
        'date_pa_parts_22',

        'pa_parts_23',
        'mny_parts_pa_23',
        'up_by_parts_pa_23',
        'date_pa_parts_23',

        'pa_parts_24',
        'mny_parts_pa_24',
        'up_by_parts_pa_24',
        'date_pa_parts_24',

        'pa_parts_25',
        'mny_parts_pa_25',
        'up_by_parts_pa_25',
        'date_pa_parts_25',

        'pa_parts_26',
        'mny_parts_pa_26',
        'up_by_parts_pa_26',
        'date_pa_parts_26',

        'pa_parts_27',
        'mny_parts_pa_27',
        'up_by_parts_pa_27',
        'date_pa_parts_27',

        'pa_parts_28',
        'mny_parts_pa_28',
        'up_by_parts_pa_28',
        'date_pa_parts_28',

        'pa_parts_29',
        'mny_parts_pa_29',
        'up_by_parts_pa_29',
        'date_pa_parts_29',

        'pa_parts_30',
        'mny_parts_pa_30',
        'up_by_parts_pa_30',
        'date_pa_parts_30',

        'pa_parts_31',
        'mny_parts_pa_31',
        'up_by_parts_pa_31',
        'date_pa_parts_31',

        'pa_parts_32',
        'mny_parts_pa_32',
        'up_by_parts_pa_32',
        'date_pa_parts_32',

        'pa_parts_33',
        'mny_parts_pa_33',
        'up_by_parts_pa_33',
        'date_pa_parts_33',

        'pa_parts_34',
        'mny_parts_pa_34',
        'up_by_parts_pa_34',
        'date_pa_parts_34',

        'pa_parts_35',
        'mny_parts_pa_35',
        'up_by_parts_pa_35',
        'date_pa_parts_35',

        'pa_parts_36',
        'mny_parts_pa_36',
        'up_by_parts_pa_36',
        'date_pa_parts_36',

        'pa_parts_37',
        'mny_parts_pa_37',
        'up_by_parts_pa_37',
        'date_pa_parts_37',

        'pa_parts_38',
        'mny_parts_pa_38',
        'up_by_parts_pa_38',
        'date_pa_parts_38',

        'pa_parts_39',
        'mny_parts_pa_39',
        'up_by_parts_pa_39',
        'date_pa_parts_39',

        'pa_parts_40',
        'mny_parts_pa_40',
        'up_by_parts_pa_40',
        'date_pa_parts_40',

        'pa_parts_41',
        'mny_parts_pa_41',
        'up_by_parts_pa_41',
        'date_pa_parts_41',

        'pa_parts_42',
        'mny_parts_pa_42',
        'up_by_parts_pa_42',
        'date_pa_parts_42',

        'pa_parts_43',
        'mny_parts_pa_43',
        'up_by_parts_pa_43',
        'date_pa_parts_43',

        'pa_parts_44',
        'mny_parts_pa_44',
        'up_by_parts_pa_44',
        'date_pa_parts_44',

        'pa_parts_45',
        'mny_parts_pa_45',
        'up_by_parts_pa_45',
        'date_pa_parts_45',

        'pa_parts_46',
        'mny_parts_pa_46',
        'up_by_parts_pa_46',
        'date_pa_parts_46',

        'pa_parts_47',
        'mny_parts_pa_47',
        'up_by_parts_pa_47',
        'date_pa_parts_47',

        'pa_parts_48',
        'mny_parts_pa_48',
        'up_by_parts_pa_48',
        'date_pa_parts_48',

        'pa_parts_49',
        'mny_parts_pa_49',
        'up_by_parts_pa_49',
        'date_pa_parts_49',

        'pa_parts_50',
        'mny_parts_pa_50',
        'up_by_parts_pa_50',
        'date_pa_parts_50',

        // jasa
        'pa_jasa_1',
        'up_by_jasa_pa_1',
        'mny_jasa_pa_1',
        'date_pa_jasa_1',

        'pa_jasa_2',
        'mny_jasa_pa_2',
        'up_by_jasa_pa_2',
        'date_pa_jasa_2',

        'pa_jasa_3',
        'mny_jasa_pa_3',
        'up_by_jasa_pa_3',
        'date_pa_jasa_3',

        'pa_jasa_4',
        'mny_jasa_pa_4',
        'up_by_jasa_pa_4',
        'date_pa_jasa_4',

        'pa_jasa_5',
        'up_by_jasa_pa_5',
        'mny_jasa_pa_5',
        'date_pa_jasa_5',

        'pa_jasa_6',
        'mny_jasa_pa_6',
        'up_by_jasa_pa_6',
        'date_pa_jasa_6',

        'pa_jasa_7',
        'mny_jasa_pa_7',
        'up_by_jasa_pa_7',
        'date_pa_jasa_7',

        'pa_jasa_8',
        'mny_jasa_pa_8',
        'up_by_jasa_pa_8',
        'date_pa_jasa_8',

        'pa_jasa_9',
        'mny_jasa_pa_9',
        'up_by_jasa_pa_9',
        'date_pa_jasa_9',

        'pa_jasa_10',
        'mny_jasa_pa_10',
        'up_by_jasa_pa_10',
        'date_pa_jasa_10',

        'pa_jasa_11',
        'up_by_jasa_pa_11',
        'mny_jasa_pa_11',
        'date_pa_jasa_11',

        'pa_jasa_12',
        'mny_jasa_pa_12',
        'up_by_jasa_pa_12',
        'date_pa_jasa_12',

        'pa_jasa_13',
        'mny_jasa_pa_13',
        'up_by_jasa_pa_13',
        'date_pa_jasa_13',

        'pa_jasa_14',
        'mny_jasa_pa_14',
        'up_by_jasa_pa_14',
        'date_pa_jasa_14',

        'pa_jasa_15',
        'up_by_jasa_pa_15',
        'mny_jasa_pa_15',
        'date_pa_jasa_15',

        'pa_jasa_16',
        'mny_jasa_pa_16',
        'up_by_jasa_pa_16',
        'date_pa_jasa_16',

        'pa_jasa_17',
        'mny_jasa_pa_17',
        'up_by_jasa_pa_17',
        'date_pa_jasa_17',

        'pa_jasa_18',
        'mny_jasa_pa_18',
        'up_by_jasa_pa_18',
        'date_pa_jasa_18',

        'pa_jasa_19',
        'mny_jasa_pa_19',
        'up_by_jasa_pa_19',
        'date_pa_jasa_19',

        'pa_jasa_20',
        'mny_jasa_pa_20',
        'up_by_jasa_pa_20',
        'date_pa_jasa_20',

        'pa_jasa_21',
        'up_by_jasa_pa_21',
        'mny_jasa_pa_21',
        'date_pa_jasa_21',

        'pa_jasa_22',
        'mny_jasa_pa_22',
        'up_by_jasa_pa_22',
        'date_pa_jasa_22',

        'pa_jasa_23',
        'mny_jasa_pa_23',
        'up_by_jasa_pa_23',
        'date_pa_jasa_23',

        'pa_jasa_24',
        'mny_jasa_pa_24',
        'up_by_jasa_pa_24',
        'date_pa_jasa_24',

        'pa_jasa_25',
        'up_by_jasa_pa_25',
        'mny_jasa_pa_25',
        'date_pa_jasa_25',

        'pa_jasa_26',
        'mny_jasa_pa_26',
        'up_by_jasa_pa_26',
        'date_pa_jasa_26',

        'pa_jasa_27',
        'mny_jasa_pa_27',
        'up_by_jasa_pa_27',
        'date_pa_jasa_27',

        'pa_jasa_28',
        'mny_jasa_pa_28',
        'up_by_jasa_pa_28',
        'date_pa_jasa_28',

        'pa_jasa_29',
        'mny_jasa_pa_29',
        'up_by_jasa_pa_29',
        'date_pa_jasa_29',

        'pa_jasa_30',
        'mny_jasa_pa_30',
        'up_by_jasa_pa_30',
        'date_pa_jasa_30',
        // manufaktur

        'pa_mnftr_1',
        'up_by_mnftr_pa_1',
        'mny_mnftr_pa_1',
        'date_pa_mnftr_1',

        'pa_mnftr_2',
        'mny_mnftr_pa_2',
        'up_by_mnftr_pa_2',
        'date_pa_mnftr_2',

        'pa_mnftr_3',
        'mny_mnftr_pa_3',
        'up_by_mnftr_pa_3',
        'date_pa_mnftr_3',

        'pa_mnftr_4',
        'mny_mnftr_pa_4',
        'up_by_mnftr_pa_4',
        'date_pa_mnftr_4',

        'pa_mnftr_5',
        'up_by_mnftr_pa_5',
        'mny_mnftr_pa_5',
        'date_pa_mnftr_5',

        'pa_mnftr_6',
        'mny_mnftr_pa_6',
        'up_by_mnftr_pa_6',
        'date_pa_mnftr_6',

        'pa_mnftr_7',
        'mny_mnftr_pa_7',
        'up_by_mnftr_pa_7',
        'date_pa_mnftr_7',

        'pa_mnftr_8',
        'mny_mnftr_pa_8',
        'up_by_mnftr_pa_8',
        'date_pa_mnftr_8',

        'pa_mnftr_9',
        'mny_mnftr_pa_9',
        'up_by_mnftr_pa_9',
        'date_pa_mnftr_9',

        'pa_mnftr_10',
        'mny_mnftr_pa_10',
        'up_by_mnftr_pa_10',
        'date_pa_mnftr_10',

        // epq

        'pa_epq_1',
        'up_by_epq_pa_1',
        'mny_epq_pa_1',
        'date_pa_epq_1',

        'pa_epq_2',
        'mny_epq_pa_2',
        'up_by_epq_pa_2',
        'date_pa_epq_2',

        'pa_epq_3',
        'mny_epq_pa_3',
        'up_by_epq_pa_3',
        'date_pa_epq_3',

        'pa_epq_4',
        'mny_epq_pa_4',
        'up_by_epq_pa_4',
        'date_pa_epq_4',

        'pa_epq_5',
        'mny_epq_pa_5',
        'up_by_epq_pa_5',
        'date_pa_epq_5',

        // buat riwayaat simpan data
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function pr02keproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
