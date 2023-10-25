<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POproject extends Model
{
    use HasFactory;

    // mengkonekkan ke table
    protected $table = '3_03_po_project';
    protected $fillable = [
        'id_po_03_3',

        'status_po_03',
        'status_po_03_date',
        'approval_by',
        'approval_date',

        //parts
        'po_parts_1',
        'up_by_parts_po_1',
        'mny_parts_po_1',
        'date_po_parts_1',

        'po_parts_2',
        'mny_parts_po_2',
        'up_by_parts_po_2',
        'date_po_parts_2',

        'po_parts_3',
        'mny_parts_po_3',
        'up_by_parts_po_3',
        'date_po_parts_3',

        'po_parts_4',
        'mny_parts_po_4',
        'up_by_parts_po_4',
        'date_po_parts_4',

        'po_parts_5',
        'mny_parts_po_5',
        'up_by_parts_po_5',
        'date_po_parts_5',

        'po_parts_6',
        'mny_parts_po_6',
        'up_by_parts_po_6',
        'date_po_parts_6',

        'po_parts_7',
        'mny_parts_po_7',
        'up_by_parts_po_7',
        'date_po_parts_7',

        'po_parts_8',
        'mny_parts_po_8',
        'up_by_parts_po_8',
        'date_po_parts_8',

        'po_parts_9',
        'mny_parts_po_9',
        'up_by_parts_po_9',
        'date_po_parts_9',

        'po_parts_10',
        'mny_parts_po_10',
        'up_by_parts_po_10',
        'date_po_parts_10',

        'po_parts_11',
        'mny_parts_po_11',
        'up_by_parts_po_11',
        'date_po_parts_11',

        'po_parts_12',
        'mny_parts_po_12',
        'up_by_parts_po_12',
        'date_po_parts_12',

        'po_parts_13',
        'mny_parts_po_13',
        'up_by_parts_po_13',
        'date_po_parts_13',

        'po_parts_14',
        'mny_parts_po_14',
        'up_by_parts_po_14',
        'date_po_parts_14',

        'po_parts_15',
        'mny_parts_po_15',
        'up_by_parts_po_15',
        'date_po_parts_15',

        'po_parts_16',
        'mny_parts_po_16',
        'up_by_parts_po_16',
        'date_po_parts_16',

        'po_parts_17',
        'mny_parts_po_17',
        'up_by_parts_po_17',
        'date_po_parts_17',

        'po_parts_18',
        'mny_parts_po_18',
        'up_by_parts_po_18',
        'date_po_parts_18',

        'po_parts_19',
        'mny_parts_po_19',
        'up_by_parts_po_19',
        'date_po_parts_19',

        'po_parts_20',
        'mny_parts_po_20',
        'up_by_parts_po_20',
        'date_po_parts_20',

        'po_parts_21',
        'mny_parts_po_21',
        'up_by_parts_po_21',
        'date_po_parts_21',

        'po_parts_22',
        'mny_parts_po_22',
        'up_by_parts_po_22',
        'date_po_parts_22',

        'po_parts_23',
        'mny_parts_po_23',
        'up_by_parts_po_23',
        'date_po_parts_23',

        'po_parts_24',
        'mny_parts_po_24',
        'up_by_parts_po_24',
        'date_po_parts_24',

        'po_parts_25',
        'mny_parts_po_25',
        'up_by_parts_po_25',
        'date_po_parts_25',

        'po_parts_26',
        'mny_parts_po_26',
        'up_by_parts_po_26',
        'date_po_parts_26',

        'po_parts_27',
        'mny_parts_po_27',
        'up_by_parts_po_27',
        'date_po_parts_27',

        'po_parts_28',
        'mny_parts_po_28',
        'up_by_parts_po_28',
        'date_po_parts_28',

        'po_parts_29',
        'mny_parts_po_29',
        'up_by_parts_po_29',
        'date_po_parts_29',

        'po_parts_30',
        'mny_parts_po_30',
        'up_by_parts_po_30',
        'date_po_parts_30',

        'po_parts_31',
        'mny_parts_po_31',
        'up_by_parts_po_31',
        'date_po_parts_31',

        'po_parts_32',
        'mny_parts_po_32',
        'up_by_parts_po_32',
        'date_po_parts_32',

        'po_parts_33',
        'mny_parts_po_33',
        'up_by_parts_po_33',
        'date_po_parts_33',

        'po_parts_34',
        'mny_parts_po_34',
        'up_by_parts_po_34',
        'date_po_parts_34',

        'po_parts_35',
        'mny_parts_po_35',
        'up_by_parts_po_35',
        'date_po_parts_35',

        'po_parts_36',
        'mny_parts_po_36',
        'up_by_parts_po_36',
        'date_po_parts_36',

        'po_parts_37',
        'mny_parts_po_37',
        'up_by_parts_po_37',
        'date_po_parts_37',

        'po_parts_38',
        'mny_parts_po_38',
        'up_by_parts_po_38',
        'date_po_parts_38',

        'po_parts_39',
        'mny_parts_po_39',
        'up_by_parts_po_39',
        'date_po_parts_39',

        'po_parts_40',
        'mny_parts_po_40',
        'up_by_parts_po_40',
        'date_po_parts_40',

        'po_parts_41',
        'mny_parts_po_41',
        'up_by_parts_po_41',
        'date_po_parts_41',

        'po_parts_42',
        'mny_parts_po_42',
        'up_by_parts_po_42',
        'date_po_parts_42',

        'po_parts_43',
        'mny_parts_po_43',
        'up_by_parts_po_43',
        'date_po_parts_43',

        'po_parts_44',
        'mny_parts_po_44',
        'up_by_parts_po_44',
        'date_po_parts_44',

        'po_parts_45',
        'mny_parts_po_45',
        'up_by_parts_po_45',
        'date_po_parts_45',

        'po_parts_46',
        'mny_parts_po_46',
        'up_by_parts_po_46',
        'date_po_parts_46',

        'po_parts_47',
        'mny_parts_po_47',
        'up_by_parts_po_47',
        'date_po_parts_47',

        'po_parts_48',
        'mny_parts_po_48',
        'up_by_parts_po_48',
        'date_po_parts_48',

        'po_parts_49',
        'mny_parts_po_49',
        'up_by_parts_po_49',
        'date_po_parts_49',

        'po_parts_50',
        'mny_parts_po_50',
        'up_by_parts_po_50',
        'date_po_parts_50',

        // jasa
        'po_jasa_1',
        'up_by_jasa_po_1',
        'mny_jasa_po_1',
        'date_po_jasa_1',

        'po_jasa_2',
        'mny_jasa_po_2',
        'up_by_jasa_po_2',
        'date_po_jasa_2',

        'po_jasa_3',
        'mny_jasa_po_3',
        'up_by_jasa_po_3',
        'date_po_jasa_3',

        'po_jasa_4',
        'mny_jasa_po_4',
        'up_by_jasa_po_4',
        'date_po_jasa_4',

        'po_jasa_5',
        'up_by_jasa_po_5',
        'mny_jasa_po_5',
        'date_po_jasa_5',

        'po_jasa_6',
        'mny_jasa_po_6',
        'up_by_jasa_po_6',
        'date_po_jasa_6',

        'po_jasa_7',
        'mny_jasa_po_7',
        'up_by_jasa_po_7',
        'date_po_jasa_7',

        'po_jasa_8',
        'mny_jasa_po_8',
        'up_by_jasa_po_8',
        'date_po_jasa_8',

        'po_jasa_9',
        'mny_jasa_po_9',
        'up_by_jasa_po_9',
        'date_po_jasa_9',

        'po_jasa_10',
        'mny_jasa_po_10',
        'up_by_jasa_po_10',
        'date_po_jasa_10',

        'po_jasa_11',
        'up_by_jasa_po_11',
        'mny_jasa_po_11',
        'date_po_jasa_11',

        'po_jasa_12',
        'mny_jasa_po_12',
        'up_by_jasa_po_12',
        'date_po_jasa_12',

        'po_jasa_13',
        'mny_jasa_po_13',
        'up_by_jasa_po_13',
        'date_po_jasa_13',

        'po_jasa_14',
        'mny_jasa_po_14',
        'up_by_jasa_po_14',
        'date_po_jasa_14',

        'po_jasa_15',
        'up_by_jasa_po_15',
        'mny_jasa_po_15',
        'date_po_jasa_15',

        'po_jasa_16',
        'mny_jasa_po_16',
        'up_by_jasa_po_16',
        'date_po_jasa_16',

        'po_jasa_17',
        'mny_jasa_po_17',
        'up_by_jasa_po_17',
        'date_po_jasa_17',

        'po_jasa_18',
        'mny_jasa_po_18',
        'up_by_jasa_po_18',
        'date_po_jasa_18',

        'po_jasa_19',
        'mny_jasa_po_19',
        'up_by_jasa_po_19',
        'date_po_jasa_19',

        'po_jasa_20',
        'mny_jasa_po_20',
        'up_by_jasa_po_20',
        'date_po_jasa_20',

        'po_jasa_21',
        'up_by_jasa_po_21',
        'mny_jasa_po_21',
        'date_po_jasa_21',

        'po_jasa_22',
        'mny_jasa_po_22',
        'up_by_jasa_po_22',
        'date_po_jasa_22',

        'po_jasa_23',
        'mny_jasa_po_23',
        'up_by_jasa_po_23',
        'date_po_jasa_23',

        'po_jasa_24',
        'mny_jasa_po_24',
        'up_by_jasa_po_24',
        'date_po_jasa_24',

        'po_jasa_25',
        'up_by_jasa_po_25',
        'mny_jasa_po_25',
        'date_po_jasa_25',

        'po_jasa_26',
        'mny_jasa_po_26',
        'up_by_jasa_po_26',
        'date_po_jasa_26',

        'po_jasa_27',
        'mny_jasa_po_27',
        'up_by_jasa_po_27',
        'date_po_jasa_27',

        'po_jasa_28',
        'mny_jasa_po_28',
        'up_by_jasa_po_28',
        'date_po_jasa_28',

        'po_jasa_29',
        'mny_jasa_po_29',
        'up_by_jasa_po_29',
        'date_po_jasa_29',

        'po_jasa_30',
        'mny_jasa_po_30',
        'up_by_jasa_po_30',
        'date_po_jasa_30',
        // manufaktur

        'po_mnftr_1',
        'up_by_mnftr_po_1',
        'mny_mnftr_po_1',
        'date_po_mnftr_1',

        'po_mnftr_2',
        'mny_mnftr_po_2',
        'up_by_mnftr_po_2',
        'date_po_mnftr_2',

        'po_mnftr_3',
        'mny_mnftr_po_3',
        'up_by_mnftr_po_3',
        'date_po_mnftr_3',

        'po_mnftr_4',
        'mny_mnftr_po_4',
        'up_by_mnftr_po_4',
        'date_po_mnftr_4',

        'po_mnftr_5',
        'up_by_mnftr_po_5',
        'mny_mnftr_po_5',
        'date_po_mnftr_5',

        'po_mnftr_6',
        'mny_mnftr_po_6',
        'up_by_mnftr_po_6',
        'date_po_mnftr_6',

        'po_mnftr_7',
        'mny_mnftr_po_7',
        'up_by_mnftr_po_7',
        'date_po_mnftr_7',

        'po_mnftr_8',
        'mny_mnftr_po_8',
        'up_by_mnftr_po_8',
        'date_po_mnftr_8',

        'po_mnftr_9',
        'mny_mnftr_po_9',
        'up_by_mnftr_po_9',
        'date_po_mnftr_9',

        'po_mnftr_10',
        'mny_mnftr_po_10',
        'up_by_mnftr_po_10',
        'date_po_mnftr_10',

        // impor
        'po_capo_1',
        'up_by_capo_po_1',
        'mny_capo_po_1',
        'date_po_capo_1',

        'po_capo_2',
        'mny_capo_po_2',
        'up_by_capo_po_2',
        'date_po_capo_2',

        'po_capo_3',
        'mny_capo_po_3',
        'up_by_capo_po_3',
        'date_po_capo_3',

        'po_capo_4',
        'mny_capo_po_4',
        'up_by_capo_po_4',
        'date_po_capo_4',

        'po_capo_5',
        'mny_capo_po_5',
        'up_by_capo_po_5',
        'date_po_capo_5',

        // buat riwayaat simpan data
         'archive_at',
        'created_at',
        'updated_at',
    ];
    public function pr03keproject()
    {
        return $this->belongsTo(CONTROLPROJECT::class);
    }
}
