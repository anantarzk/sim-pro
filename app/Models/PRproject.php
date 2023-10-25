<?php

namespace App\Models;

use App\Models\CONTROLPROJECT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PRproject extends Model
{
    use HasFactory;
    // mengkonekkan ke table
    protected $table = '3_01_pr_project';
    protected $fillable = [
        'id_pr_01_3 ',

        'status_purchasing',
        'status_purchasing_date',

        'status_pr_01',
        'status_pr_01_date',
        'approval_by',
        'approval_date',

        'pr_parts_1',
        'up_by_parts_pr_1',
        'mny_parts_pr_1',
        'date_pr_parts_1',

        'pr_parts_2',
        'mny_parts_pr_2',
        'up_by_parts_pr_2',
        'date_pr_parts_2',

        'pr_parts_3',
        'mny_parts_pr_3',
        'up_by_parts_pr_3',
        'date_pr_parts_3',

        'pr_parts_4',
        'mny_parts_pr_4',
        'up_by_parts_pr_4',
        'date_pr_parts_4',

        'pr_parts_5',
        'mny_parts_pr_5',
        'up_by_parts_pr_5',
        'date_pr_parts_5',

        'pr_parts_6',
        'mny_parts_pr_6',
        'up_by_parts_pr_6',
        'date_pr_parts_6',

        'pr_parts_7',
        'mny_parts_pr_7',
        'up_by_parts_pr_7',
        'date_pr_parts_7',

        'pr_parts_8',
        'mny_parts_pr_8',
        'up_by_parts_pr_8',
        'date_pr_parts_8',

        'pr_parts_9',
        'mny_parts_pr_9',
        'up_by_parts_pr_9',
        'date_pr_parts_9',

        'pr_parts_10',
        'mny_parts_pr_10',
        'up_by_parts_pr_10',
        'date_pr_parts_10',

        'pr_parts_11',
        'mny_parts_pr_11',
        'up_by_parts_pr_11',
        'date_pr_parts_11',

        'pr_parts_12',
        'mny_parts_pr_12',
        'up_by_parts_pr_12',
        'date_pr_parts_12',

        'pr_parts_13',
        'mny_parts_pr_13',
        'up_by_parts_pr_13',
        'date_pr_parts_13',

        'pr_parts_14',
        'mny_parts_pr_14',
        'up_by_parts_pr_14',
        'date_pr_parts_14',

        'pr_parts_15',
        'mny_parts_pr_15',
        'up_by_parts_pr_15',
        'date_pr_parts_15',

        'pr_parts_16',
        'mny_parts_pr_16',
        'up_by_parts_pr_16',
        'date_pr_parts_16',

        'pr_parts_17',
        'mny_parts_pr_17',
        'up_by_parts_pr_17',
        'date_pr_parts_17',

        'pr_parts_18',
        'mny_parts_pr_18',
        'up_by_parts_pr_18',
        'date_pr_parts_18',

        'pr_parts_19',
        'mny_parts_pr_19',
        'up_by_parts_pr_19',
        'date_pr_parts_19',

        'pr_parts_20',
        'mny_parts_pr_20',
        'up_by_parts_pr_20',
        'date_pr_parts_20',

        'pr_parts_21',
        'mny_parts_pr_21',
        'up_by_parts_pr_21',
        'date_pr_parts_21',

        'pr_parts_22',
        'mny_parts_pr_22',
        'up_by_parts_pr_22',
        'date_pr_parts_22',

        'pr_parts_23',
        'mny_parts_pr_23',
        'up_by_parts_pr_23',
        'date_pr_parts_23',

        'pr_parts_24',
        'mny_parts_pr_24',
        'up_by_parts_pr_24',
        'date_pr_parts_24',

        'pr_parts_25',
        'mny_parts_pr_25',
        'up_by_parts_pr_25',
        'date_pr_parts_25',

        'pr_parts_26',
        'mny_parts_pr_26',
        'up_by_parts_pr_26',
        'date_pr_parts_26',

        'pr_parts_27',
        'mny_parts_pr_27',
        'up_by_parts_pr_27',
        'date_pr_parts_27',

        'pr_parts_28',
        'mny_parts_pr_28',
        'up_by_parts_pr_28',
        'date_pr_parts_28',

        'pr_parts_29',
        'mny_parts_pr_29',
        'up_by_parts_pr_29',
        'date_pr_parts_29',

        'pr_parts_30',
        'mny_parts_pr_30',
        'up_by_parts_pr_30',
        'date_pr_parts_30',

        'pr_parts_31',
        'mny_parts_pr_31',
        'up_by_parts_pr_31',
        'date_pr_parts_31',

        'pr_parts_32',
        'mny_parts_pr_32',
        'up_by_parts_pr_32',
        'date_pr_parts_32',

        'pr_parts_33',
        'mny_parts_pr_33',
        'up_by_parts_pr_33',
        'date_pr_parts_33',

        'pr_parts_34',
        'mny_parts_pr_34',
        'up_by_parts_pr_34',
        'date_pr_parts_34',

        'pr_parts_35',
        'mny_parts_pr_35',
        'up_by_parts_pr_35',
        'date_pr_parts_35',

        'pr_parts_36',
        'mny_parts_pr_36',
        'up_by_parts_pr_36',
        'date_pr_parts_36',

        'pr_parts_37',
        'mny_parts_pr_37',
        'up_by_parts_pr_37',
        'date_pr_parts_37',

        'pr_parts_38',
        'mny_parts_pr_38',
        'up_by_parts_pr_38',
        'date_pr_parts_38',

        'pr_parts_39',
        'mny_parts_pr_39',
        'up_by_parts_pr_39',
        'date_pr_parts_39',

        'pr_parts_40',
        'mny_parts_pr_40',
        'up_by_parts_pr_40',
        'date_pr_parts_40',

        'pr_parts_41',
        'mny_parts_pr_41',
        'up_by_parts_pr_41',
        'date_pr_parts_41',

        'pr_parts_42',
        'mny_parts_pr_42',
        'up_by_parts_pr_42',
        'date_pr_parts_42',

        'pr_parts_43',
        'mny_parts_pr_43',
        'up_by_parts_pr_43',
        'date_pr_parts_43',

        'pr_parts_44',
        'mny_parts_pr_44',
        'up_by_parts_pr_44',
        'date_pr_parts_44',

        'pr_parts_45',
        'mny_parts_pr_45',
        'up_by_parts_pr_45',
        'date_pr_parts_45',

        'pr_parts_46',
        'mny_parts_pr_46',
        'up_by_parts_pr_46',
        'date_pr_parts_46',

        'pr_parts_47',
        'mny_parts_pr_47',
        'up_by_parts_pr_47',
        'date_pr_parts_47',

        'pr_parts_48',
        'mny_parts_pr_48',
        'up_by_parts_pr_48',
        'date_pr_parts_48',

        'pr_parts_49',
        'mny_parts_pr_49',
        'up_by_parts_pr_49',
        'date_pr_parts_49',

        'pr_parts_50',
        'mny_parts_pr_50',
        'up_by_parts_pr_50',
        'date_pr_parts_50',

        // jasa
        'pr_jasa_1',
        'up_by_jasa_pr_1',
        'mny_jasa_pr_1',
        'date_pr_jasa_1',

        'pr_jasa_2',
        'mny_jasa_pr_2',
        'up_by_jasa_pr_2',
        'date_pr_jasa_2',

        'pr_jasa_3',
        'mny_jasa_pr_3',
        'up_by_jasa_pr_3',
        'date_pr_jasa_3',

        'pr_jasa_4',
        'mny_jasa_pr_4',
        'up_by_jasa_pr_4',
        'date_pr_jasa_4',

        'pr_jasa_5',
        'up_by_jasa_pr_5',
        'mny_jasa_pr_5',
        'date_pr_jasa_5',

        'pr_jasa_6',
        'mny_jasa_pr_6',
        'up_by_jasa_pr_6',
        'date_pr_jasa_6',

        'pr_jasa_7',
        'mny_jasa_pr_7',
        'up_by_jasa_pr_7',
        'date_pr_jasa_7',

        'pr_jasa_8',
        'mny_jasa_pr_8',
        'up_by_jasa_pr_8',
        'date_pr_jasa_8',

        'pr_jasa_9',
        'mny_jasa_pr_9',
        'up_by_jasa_pr_9',
        'date_pr_jasa_9',

        'pr_jasa_10',
        'mny_jasa_pr_10',
        'up_by_jasa_pr_10',
        'date_pr_jasa_10',

        'pr_jasa_11',
        'up_by_jasa_pr_11',
        'mny_jasa_pr_11',
        'date_pr_jasa_11',

        'pr_jasa_12',
        'mny_jasa_pr_12',
        'up_by_jasa_pr_12',
        'date_pr_jasa_12',

        'pr_jasa_13',
        'mny_jasa_pr_13',
        'up_by_jasa_pr_13',
        'date_pr_jasa_13',

        'pr_jasa_14',
        'mny_jasa_pr_14',
        'up_by_jasa_pr_14',
        'date_pr_jasa_14',

        'pr_jasa_15',
        'up_by_jasa_pr_15',
        'mny_jasa_pr_15',
        'date_pr_jasa_15',

        'pr_jasa_16',
        'mny_jasa_pr_16',
        'up_by_jasa_pr_16',
        'date_pr_jasa_16',

        'pr_jasa_17',
        'mny_jasa_pr_17',
        'up_by_jasa_pr_17',
        'date_pr_jasa_17',

        'pr_jasa_18',
        'mny_jasa_pr_18',
        'up_by_jasa_pr_18',
        'date_pr_jasa_18',

        'pr_jasa_19',
        'mny_jasa_pr_19',
        'up_by_jasa_pr_19',
        'date_pr_jasa_19',

        'pr_jasa_20',
        'mny_jasa_pr_20',
        'up_by_jasa_pr_20',
        'date_pr_jasa_20',

        'pr_jasa_21',
        'up_by_jasa_pr_21',
        'mny_jasa_pr_21',
        'date_pr_jasa_21',

        'pr_jasa_22',
        'mny_jasa_pr_22',
        'up_by_jasa_pr_22',
        'date_pr_jasa_22',

        'pr_jasa_23',
        'mny_jasa_pr_23',
        'up_by_jasa_pr_23',
        'date_pr_jasa_23',

        'pr_jasa_24',
        'mny_jasa_pr_24',
        'up_by_jasa_pr_24',
        'date_pr_jasa_24',

        'pr_jasa_25',
        'up_by_jasa_pr_25',
        'mny_jasa_pr_25',
        'date_pr_jasa_25',

        'pr_jasa_26',
        'mny_jasa_pr_26',
        'up_by_jasa_pr_26',
        'date_pr_jasa_26',

        'pr_jasa_27',
        'mny_jasa_pr_27',
        'up_by_jasa_pr_27',
        'date_pr_jasa_27',

        'pr_jasa_28',
        'mny_jasa_pr_28',
        'up_by_jasa_pr_28',
        'date_pr_jasa_28',

        'pr_jasa_29',
        'mny_jasa_pr_29',
        'up_by_jasa_pr_29',
        'date_pr_jasa_29',

        'pr_jasa_30',
        'mny_jasa_pr_30',
        'up_by_jasa_pr_30',
        'date_pr_jasa_30',
        // manufaktur

        'pr_mnftr_1',
        'up_by_mnftr_pr_1',
        'mny_mnftr_pr_1',
        'date_pr_mnftr_1',

        'pr_mnftr_2',
        'mny_mnftr_pr_2',
        'up_by_mnftr_pr_2',
        'date_pr_mnftr_2',

        'pr_mnftr_3',
        'mny_mnftr_pr_3',
        'up_by_mnftr_pr_3',
        'date_pr_mnftr_3',

        'pr_mnftr_4',
        'mny_mnftr_pr_4',
        'up_by_mnftr_pr_4',
        'date_pr_mnftr_4',

        'pr_mnftr_5',
        'up_by_mnftr_pr_5',
        'mny_mnftr_pr_5',
        'date_pr_mnftr_5',

        'pr_mnftr_6',
        'mny_mnftr_pr_6',
        'up_by_mnftr_pr_6',
        'date_pr_mnftr_6',

        'pr_mnftr_7',
        'mny_mnftr_pr_7',
        'up_by_mnftr_pr_7',
        'date_pr_mnftr_7',

        'pr_mnftr_8',
        'mny_mnftr_pr_8',
        'up_by_mnftr_pr_8',
        'date_pr_mnftr_8',

        'pr_mnftr_9',
        'mny_mnftr_pr_9',
        'up_by_mnftr_pr_9',
        'date_pr_mnftr_9',

        'pr_mnftr_10',
        'mny_mnftr_pr_10',
        'up_by_mnftr_pr_10',
        'date_pr_mnftr_10',

        // rfq

        'pr_rfq_1',
        'up_by_rfq_pr_1',
        'mny_rfq_pr_1',
        'date_pr_rfq_1',

        'pr_rfq_2',
        'mny_rfq_pr_2',
        'up_by_rfq_pr_2',
        'date_pr_rfq_2',

        'pr_rfq_3',
        'mny_rfq_pr_3',
        'up_by_rfq_pr_3',
        'date_pr_rfq_3',

        'pr_rfq_4',
        'mny_rfq_pr_4',
        'up_by_rfq_pr_4',
        'date_pr_rfq_4',

        'pr_rfq_5',
        'mny_rfq_pr_5',
        'up_by_rfq_pr_5',
        'date_pr_rfq_5',

        // buat riwayaat simpan data
        'archive_at',
        'created_at',
        'updated_at',
    ];
    public function pr01keproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
