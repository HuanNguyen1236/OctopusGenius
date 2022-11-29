<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;
    protected $table = 'bai_dang';
    protected $fillable=[
        'tieu_de',
        'loai_bai_dang_id',
        'loai_do_vat_id',
        'dia_chi',
        'mo_ta',
        'hinh_anh',
        'tai_khoan_id'
    ];
    public function nguoiDung(){
        return $this->belongsTo(NguoiDung::class);
    }
    
    public function loaiDoVat(){
        return $this->belongsTo(loaiDoVat::class);
    }

    public function loaiBaiDang(){
        return $this->belongsTo(loaiBaiDang::class);
    }
    public function taiKhoan(){
        return $this->belongsTo(nguoiDung::class);
    }
    
}
