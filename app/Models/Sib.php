<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sib extends Model
{
    use SoftDeletes;
	
	protected $fillable = ['ruangterbatas','kerjalistrik','ketinggian','perpipaan','kerjapanas','pekerjaan','lokasi','area','plant','namapemohon','perusahaanpemohon','pengawas','teknisi','helper','welder','mat1','mat2','mat3','mat4','apd1','apd2','apd3','apd4','apd5','apd6','apd7','apd8','apd9','check1','check2','check3','check4','komit_nama','komit_tgl','henti_alasan','henti_tgl','penerima_nama','penerima_tgl','pemberi_nama','pemberi_tgl','alasan_dihentikan','tgl_dihentikan','penerima_komitmen','tgl_komitmen','penerima_st','tgl_penerima_st','pemberi_st','tgl_pemberi_st'];
    
    protected $table = 'sib';
    
}
