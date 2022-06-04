<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonBan extends Model
{
    use HasFactory;
    protected $table='hoadonban';
    protected $fillable = [
        'id',
        'IdKH',
        'NgayLap',
        'DiaChiGH',
        'SDT',
        'TongTien',
        'PhuongTTT',
        'TrangThai',

    ];
}
