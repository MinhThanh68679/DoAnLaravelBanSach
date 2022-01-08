<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table='binhluan';
    protected $fillable = [
        'id',
        'IdSach',
        'IdKH',
        'NoiDung',
        'Ngay',
        'TrangThai',

    ];
}
