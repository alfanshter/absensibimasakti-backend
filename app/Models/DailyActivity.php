<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyActivity extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function pic_before() {
        return $this->hasMany(DailyPicBefore::class,'id_photo','id');
    }

    function pic_onprogress() {
        return $this->hasMany(DailyOnProgress::class,'id_photo','id');
    }

    function pic_picbefore() {
        return $this->hasMany(DailyPicBefore::class,'id_photo','id');
    }
}
