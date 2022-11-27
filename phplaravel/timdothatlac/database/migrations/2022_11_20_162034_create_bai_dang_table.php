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
            $table->string('tieu_de');
            $table->integer('id_tai_khoan');
            $table->integer('id_loai_do_vat');
            $table->integer('id_loai_bai_dang');
            $table->string('hinh_anh');
            $table->string('trang_thai')->default(1);
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
