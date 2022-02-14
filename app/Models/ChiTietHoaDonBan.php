<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBan extends Model
{
    use HasFactory;
    protected $table='chitiethoadonban';
    protected $fillable = [
        'id',
        'IdSach',
        'IdHoaDB',
        'SoLuong',
        'GiaBan',

    ];
}