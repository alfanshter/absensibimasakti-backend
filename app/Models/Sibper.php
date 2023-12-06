<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sibper extends Model
{
    use SoftDeletes;
	
	protected $fillable = ['sib_id','peralatan1','peralatan2','peralatan3','peralatan4','peralatan5','peralatan6','peralatan7','peralatan8','peralatan9','peralatan10','jumlah1','jumlah2','jumlah3','jumlah4','jumlah5','jumlah6','jumlah7','jumlah8','jumlah9','jumlah10','material1','material2','material3','material4','material5','material6','material7','material8','material9','material10','jumlaha1','jumlaha2','jumlaha3','jumlaha4','jumlaha5','jumlaha6','jumlaha7','jumlaha8','jumlaha9','jumlaha10','keterangan1','keterangan2','keterangan3','keterangan4','keterangan5','keterangan6','keterangan7','keterangan8','keterangan9','keterangan10'];
    
    protected $table = 'sib_perlengkapan';
    
}
