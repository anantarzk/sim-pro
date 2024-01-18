<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PAYproject extends Model
{
    use HasFactory;

    // mengkonekkan ke table
    protected $table = '3_04_pay_project';
    protected $fillable = [
        'id_pay_04_3  ',

        'status_pay_04',
        'status_pay_04_date',
        'approval_by',
        'approval_date',

        'pay_parts_1',
        'up_by_parts_pay_1',
        'mny_parts_pay_1',
        'date_pay_parts_1',

        'pay_parts_2',
        'mny_parts_pay_2',
        'up_by_parts_pay_2',
        'date_pay_parts_2',

        'pay_parts_3',
        'mny_parts_pay_3',
        'up_by_parts_pay_3',
        'date_pay_parts_3',

        'pay_parts_4',
        'mny_parts_pay_4',
        'up_by_parts_pay_4',
        'date_pay_parts_4',

        'pay_parts_5',
        'mny_parts_pay_5',
        'up_by_parts_pay_5',
        'date_pay_parts_5',

        'pay_parts_6',
        'mny_parts_pay_6',
        'up_by_parts_pay_6',
        'date_pay_parts_6',

        'pay_parts_7',
        'mny_parts_pay_7',
        'up_by_parts_pay_7',
        'date_pay_parts_7',

        'pay_parts_8',
        'mny_parts_pay_8',
        'up_by_parts_pay_8',
        'date_pay_parts_8',

        'pay_parts_9',
        'mny_parts_pay_9',
        'up_by_parts_pay_9',
        'date_pay_parts_9',

        'pay_parts_10',
        'mny_parts_pay_10',
        'up_by_parts_pay_10',
        'date_pay_parts_10',

        'pay_parts_11',
        'mny_parts_pay_11',
        'up_by_parts_pay_11',
        'date_pay_parts_11',

        'pay_parts_12',
        'mny_parts_pay_12',
        'up_by_parts_pay_12',
        'date_pay_parts_12',

        'pay_parts_13',
        'mny_parts_pay_13',
        'up_by_parts_pay_13',
        'date_pay_parts_13',

        'pay_parts_14',
        'mny_parts_pay_14',
        'up_by_parts_pay_14',
        'date_pay_parts_14',

        'pay_parts_15',
        'mny_parts_pay_15',
        'up_by_parts_pay_15',
        'date_pay_parts_15',

        'pay_parts_16',
        'mny_parts_pay_16',
        'up_by_parts_pay_16',
        'date_pay_parts_16',

        'pay_parts_17',
        'mny_parts_pay_17',
        'up_by_parts_pay_17',
        'date_pay_parts_17',

        'pay_parts_18',
        'mny_parts_pay_18',
        'up_by_parts_pay_18',
        'date_pay_parts_18',

        'pay_parts_19',
        'mny_parts_pay_19',
        'up_by_parts_pay_19',
        'date_pay_parts_19',

        'pay_parts_20',
        'mny_parts_pay_20',
        'up_by_parts_pay_20',
        'date_pay_parts_20',

        'pay_parts_21',
        'mny_parts_pay_21',
        'up_by_parts_pay_21',
        'date_pay_parts_21',

        'pay_parts_22',
        'mny_parts_pay_22',
        'up_by_parts_pay_22',
        'date_pay_parts_22',

        'pay_parts_23',
        'mny_parts_pay_23',
        'up_by_parts_pay_23',
        'date_pay_parts_23',

        'pay_parts_24',
        'mny_parts_pay_24',
        'up_by_parts_pay_24',
        'date_pay_parts_24',

        'pay_parts_25',
        'mny_parts_pay_25',
        'up_by_parts_pay_25',
        'date_pay_parts_25',

        'pay_parts_26',
        'mny_parts_pay_26',
        'up_by_parts_pay_26',
        'date_pay_parts_26',

        'pay_parts_27',
        'mny_parts_pay_27',
        'up_by_parts_pay_27',
        'date_pay_parts_27',

        'pay_parts_28',
        'mny_parts_pay_28',
        'up_by_parts_pay_28',
        'date_pay_parts_28',

        'pay_parts_29',
        'mny_parts_pay_29',
        'up_by_parts_pay_29',
        'date_pay_parts_29',

        'pay_parts_30',
        'mny_parts_pay_30',
        'up_by_parts_pay_30',
        'date_pay_parts_30',

        'pay_parts_31',
        'mny_parts_pay_31',
        'up_by_parts_pay_31',
        'date_pay_parts_31',

        'pay_parts_32',
        'mny_parts_pay_32',
        'up_by_parts_pay_32',
        'date_pay_parts_32',

        'pay_parts_33',
        'mny_parts_pay_33',
        'up_by_parts_pay_33',
        'date_pay_parts_33',

        'pay_parts_34',
        'mny_parts_pay_34',
        'up_by_parts_pay_34',
        'date_pay_parts_34',

        'pay_parts_35',
        'mny_parts_pay_35',
        'up_by_parts_pay_35',
        'date_pay_parts_35',

        'pay_parts_36',
        'mny_parts_pay_36',
        'up_by_parts_pay_36',
        'date_pay_parts_36',

        'pay_parts_37',
        'mny_parts_pay_37',
        'up_by_parts_pay_37',
        'date_pay_parts_37',

        'pay_parts_38',
        'mny_parts_pay_38',
        'up_by_parts_pay_38',
        'date_pay_parts_38',

        'pay_parts_39',
        'mny_parts_pay_39',
        'up_by_parts_pay_39',
        'date_pay_parts_39',

        'pay_parts_40',
        'mny_parts_pay_40',
        'up_by_parts_pay_40',
        'date_pay_parts_40',

        'pay_parts_41',
        'mny_parts_pay_41',
        'up_by_parts_pay_41',
        'date_pay_parts_41',

        'pay_parts_42',
        'mny_parts_pay_42',
        'up_by_parts_pay_42',
        'date_pay_parts_42',

        'pay_parts_43',
        'mny_parts_pay_43',
        'up_by_parts_pay_43',
        'date_pay_parts_43',

        'pay_parts_44',
        'mny_parts_pay_44',
        'up_by_parts_pay_44',
        'date_pay_parts_44',

        'pay_parts_45',
        'mny_parts_pay_45',
        'up_by_parts_pay_45',
        'date_pay_parts_45',

        // jasa
        'pay_jasa_1',
        'up_by_jasa_pay_1',
        'mny_jasa_pay_1',
        'date_pay_jasa_1',

        'pay_jasa_2',
        'mny_jasa_pay_2',
        'up_by_jasa_pay_2',
        'date_pay_jasa_2',

        'pay_jasa_3',
        'mny_jasa_pay_3',
        'up_by_jasa_pay_3',
        'date_pay_jasa_3',

        'pay_jasa_4',
        'mny_jasa_pay_4',
        'up_by_jasa_pay_4',
        'date_pay_jasa_4',

        'pay_jasa_5',
        'up_by_jasa_pay_5',
        'mny_jasa_pay_5',
        'date_pay_jasa_5',

        'pay_jasa_6',
        'mny_jasa_pay_6',
        'up_by_jasa_pay_6',
        'date_pay_jasa_6',

        'pay_jasa_7',
        'mny_jasa_pay_7',
        'up_by_jasa_pay_7',
        'date_pay_jasa_7',

        'pay_jasa_8',
        'mny_jasa_pay_8',
        'up_by_jasa_pay_8',
        'date_pay_jasa_8',

        'pay_jasa_9',
        'mny_jasa_pay_9',
        'up_by_jasa_pay_9',
        'date_pay_jasa_9',

        'pay_jasa_10',
        'mny_jasa_pay_10',
        'up_by_jasa_pay_10',
        'date_pay_jasa_10',

        'pay_jasa_11',
        'up_by_jasa_pay_11',
        'mny_jasa_pay_11',
        'date_pay_jasa_11',

        'pay_jasa_12',
        'mny_jasa_pay_12',
        'up_by_jasa_pay_12',
        'date_pay_jasa_12',

        'pay_jasa_13',
        'mny_jasa_pay_13',
        'up_by_jasa_pay_13',
        'date_pay_jasa_13',

        'pay_jasa_14',
        'mny_jasa_pay_14',
        'up_by_jasa_pay_14',
        'date_pay_jasa_14',

        'pay_jasa_15',
        'up_by_jasa_pay_15',
        'mny_jasa_pay_15',
        'date_pay_jasa_15',

        'pay_jasa_16',
        'mny_jasa_pay_16',
        'up_by_jasa_pay_16',
        'date_pay_jasa_16',

        'pay_jasa_17',
        'mny_jasa_pay_17',
        'up_by_jasa_pay_17',
        'date_pay_jasa_17',

        'pay_jasa_18',
        'mny_jasa_pay_18',
        'up_by_jasa_pay_18',
        'date_pay_jasa_18',

        'pay_jasa_19',
        'mny_jasa_pay_19',
        'up_by_jasa_pay_19',
        'date_pay_jasa_19',

        'pay_jasa_20',
        'mny_jasa_pay_20',
        'up_by_jasa_pay_20',
        'date_pay_jasa_20',

        'pay_jasa_21',
        'up_by_jasa_pay_21',
        'mny_jasa_pay_21',
        'date_pay_jasa_21',

        'pay_jasa_22',
        'mny_jasa_pay_22',
        'up_by_jasa_pay_22',
        'date_pay_jasa_22',

        'pay_jasa_23',
        'mny_jasa_pay_23',
        'up_by_jasa_pay_23',
        'date_pay_jasa_23',

        'pay_jasa_24',
        'mny_jasa_pay_24',
        'up_by_jasa_pay_24',
        'date_pay_jasa_24',

        'pay_jasa_25',
        'up_by_jasa_pay_25',
        'mny_jasa_pay_25',
        'date_pay_jasa_25',

        'pay_jasa_26',
        'mny_jasa_pay_26',
        'up_by_jasa_pay_26',
        'date_pay_jasa_26',

        'pay_jasa_27',
        'mny_jasa_pay_27',
        'up_by_jasa_pay_27',
        'date_pay_jasa_27',

        'pay_jasa_28',
        'mny_jasa_pay_28',
        'up_by_jasa_pay_28',
        'date_pay_jasa_28',

        'pay_jasa_29',
        'mny_jasa_pay_29',
        'up_by_jasa_pay_29',
        'date_pay_jasa_29',

        'pay_jasa_30',
        'mny_jasa_pay_30',
        'up_by_jasa_pay_30',
        'date_pay_jasa_30',
        // manufaktur

        'pay_mnftr_1',
        'up_by_mnftr_pay_1',
        'mny_mnftr_pay_1',
        'date_pay_mnftr_1',

        'pay_mnftr_2',
        'mny_mnftr_pay_2',
        'up_by_mnftr_pay_2',
        'date_pay_mnftr_2',

        'pay_mnftr_3',
        'mny_mnftr_pay_3',
        'up_by_mnftr_pay_3',
        'date_pay_mnftr_3',

        'pay_mnftr_4',
        'mny_mnftr_pay_4',
        'up_by_mnftr_pay_4',
        'date_pay_mnftr_4',

        'pay_mnftr_5',
        'up_by_mnftr_pay_5',
        'mny_mnftr_pay_5',
        'date_pay_mnftr_5',

        'pay_mnftr_6',
        'mny_mnftr_pay_6',
        'up_by_mnftr_pay_6',
        'date_pay_mnftr_6',

        'pay_mnftr_7',
        'mny_mnftr_pay_7',
        'up_by_mnftr_pay_7',
        'date_pay_mnftr_7',

        'pay_mnftr_8',
        'mny_mnftr_pay_8',
        'up_by_mnftr_pay_8',
        'date_pay_mnftr_8',

        'pay_mnftr_9',
        'mny_mnftr_pay_9',
        'up_by_mnftr_pay_9',
        'date_pay_mnftr_9',

        'pay_mnftr_10',
        'mny_mnftr_pay_10',
        'up_by_mnftr_pay_10',
        'date_pay_mnftr_10',

        // impor

        'pay_da_1',
        'up_by_da_pay_1',
        'mny_da_pay_1',
        'date_pay_da_1',

        'pay_da_2',
        'mny_da_pay_2',
        'up_by_da_pay_2',
        'date_pay_da_2',

        'pay_da_3',
        'mny_da_pay_3',
        'up_by_da_pay_3',
        'date_pay_da_3',

        'pay_da_4',
        'mny_da_pay_4',
        'up_by_da_pay_4',
        'date_pay_da_4',

        'pay_da_5',
        'mny_da_pay_5',
        'up_by_da_pay_5',
        'date_pay_da_5',

        // buat riwayaat simpan data
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function pr04keproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
