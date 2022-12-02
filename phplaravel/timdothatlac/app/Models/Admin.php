<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'tai_khoan_admin';
    protected $fillable=[
        'email',
        'sdt',
        'ten_dang_nhap',
        'mat_khau',
        'ngay_sinh',
        'dia_chi',
        'trang_thai',    
        'quyen',
        'loai_admin_id',
        'anh_dai_dien',
    ];
    public function getPasswordAttribute(){
        return $this->mat_khau;
    }
}
