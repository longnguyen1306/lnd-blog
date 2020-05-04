<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{

    protected $fillable = [
        'tendanhmuc', 'mota', 'trangthai',
    ];
}
