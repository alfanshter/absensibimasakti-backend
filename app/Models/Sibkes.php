<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sibkes extends Model
{
    use SoftDeletes;
	
	protected $fillable = ['sib_id','no1','no2','no3','no4','no5','aktivitas1','aktivitas2','aktivitas3','aktivitas4','aktivitas5','potensi1','potensi2','potensi3','potensi4','potensi5','langkah1','langkah2','langkah3','langkah4','langkah5'];
    
    protected $table = 'sib_keselamatan';
}
