<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'tk_admin';
    protected $fillable=[
        'email',
        'sdt',
        'ten_dang_nhap',
        'mat_khau',
        'ngay_sinh',
        'dia_chi',
        'trang_thai',    
        'quyen',
        'anh_dai_dien',
    ];
    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
    public function loaiAdmin(){
        return $this->belongsTo(loaiAdmin::class);
    }
}
