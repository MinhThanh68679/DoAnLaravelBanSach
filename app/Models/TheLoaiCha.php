<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiCha extends Model
{
    use HasFactory;
    protected $table='theloaicha';
    protected $fillable = [
        'TenTLCha',
        'IdTheLoai',

    ];
   
    public function TheLoai(){
        return $this->belongsTo('App\Models\TheLoai', 'IdTheLoai', 'id');
    }
}
