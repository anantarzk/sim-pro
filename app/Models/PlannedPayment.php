<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlannedPayment extends Model
{
    use HasFactory;
    protected $table = 'planned_payment';
    protected $fillable = [
        'year',
        'planned_1',
        'date_planned_1',
        'planned_2',
        'date_planned_2',
        'planned_3',
        'date_planned_3',
        'planned_4',
        'date_planned_4',
        'planned_5',
        'date_planned_5',
        'planned_6',
        'date_planned_6',
        'planned_7',
        'date_planned_7',
        'planned_8',
        'date_planned_8',
        'planned_9',
        'date_planned_9',
        'planned_10',
        'date_planned_10',
        'planned_11',
        'date_planned_11',
        'planned_12',
        'date_planned_12',
    ];
}
