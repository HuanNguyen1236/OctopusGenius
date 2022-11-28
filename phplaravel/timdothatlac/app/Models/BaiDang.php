<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_bai_dang';
    protected $fillable=[
        'tieu_de',
        'id_loai_bai_dang',
        'id_loai_do_vat',
        'dia_chi',
        'mo_ta',
        'hinh_anh'
    ];
    public function nguoiDung(){
        return $this->belongsTo(NguoiDung::class);
    }
    
    
}
