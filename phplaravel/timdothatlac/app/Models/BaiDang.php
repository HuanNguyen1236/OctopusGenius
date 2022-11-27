<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoaiBaiDang;
use App\Models\NguoiDung;

class BaiDang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_bai_dang';
    protected $fillable=[
        'tieu_de',
        'id_loai_bai_dang',
        'dia_chi',
        'mo_ta',
        'hinh_anh'
    ];
    public function nguoiDung(){
        return $this->belongsTo(NguoiDung::class);
    }
    public function loaiBaiDang(){
        return $this->belongsTo(LoaiBaiDang::class);
    }
    
}
