<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietBaiDangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_bai_dang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tai_khoan');
            $table->date('thoi_gian')->nullable();
            $table->string('tieu_de');
            $table->string('dia_chi');
            $table->string('mo_ta');
            $table->string('hinh_anh');
            $table->string('trang_thai')->default(1);
            $table->integer('id_loai_bai_dang');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_bai_dang');
    }
}
