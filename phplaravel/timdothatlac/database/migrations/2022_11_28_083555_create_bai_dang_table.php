<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang', function (Blueprint $table) {
            $table->id();
            $table->integer('tai_khoan_id');
            $table->date('thoi_gian')->nullable();
            $table->string('tieu_de');
            $table->string('dia_chi');
            $table->string('mo_ta');
            $table->string('hinh_anh');
            $table->string('trang_thai')->default(2);
            $table->integer('loai_bai_dang_id');
            $table->integer('loai_do_vat_id');
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
        Schema::dropIfExists('bai_dang');
    }
}
