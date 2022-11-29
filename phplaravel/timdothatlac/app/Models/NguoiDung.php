<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class NguoiDung extends Authenticatable
{
    use HasFactory;
    protected $table = 'tai_khoan';
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

   
}
