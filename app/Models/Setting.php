<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'keywords',
        'logo',
        'description',
        'favicon',
        'background',
        'active',
        'history',
        'only_win',
        'limit',
        'day_mission',
        'week_top',
        'note',
        'ads',
        'gift_day',
        'gift_week',
        'hu',
        'content',
        'content_day',
        'content_week',
        'ratioCL',
        'ratioCL2',
        'ratioTX',
        'ratioTX2',
        'ratio1P3',
        'ratioG3',
        'ratioH3',
        'ratioLO',
        'color',
        'level_day',
        'title',
        'top_phone',
        'top_amount',
        'status',
        'time_muster',
        'muster_turn',
        'content_muster',
        'limit_refund',
        'content_refund',
        'refund',
        'ratioHu',
        'amount_hu',
        'content_hu',
        'muster',
        'amount_muster',
        'giftcode',
        'content_giftcode',
        'type_check',
        'day_top',
        'ratioXien',
        'ratioXSMB',
        'total_muster',
        'contentCL',
        'contentCL2',
        'contentTX',
        'contentTX2',
        'content1P3',
        'contentG3',
        'contentH3',
        'contentLO',
        'contentXien',
        'contentXSMB',
    ];
}