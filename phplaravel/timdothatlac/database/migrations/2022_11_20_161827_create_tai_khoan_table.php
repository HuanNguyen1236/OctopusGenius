<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('sdt');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->date('ngay_sinh');
            $table->string('dia_chi');
            $table->string('trang_thai')->default(1);
            $table->string('quyen')->default('user');
            $table->string('anh_dai_dien')->nullable();
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
        Schema::dropIfExists('tai_khoan');
    }
}
