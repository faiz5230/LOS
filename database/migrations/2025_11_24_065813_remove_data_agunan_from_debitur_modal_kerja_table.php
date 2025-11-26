<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('debitur_modal_kerja', function (Blueprint $table) {
            $table->dropColumn('data_agunan');
        });
    }

    public function down()
    {
        Schema::table('debitur_modal_kerja', function (Blueprint $table) {
            $table->string('data_agunan')->nullable()->after('no_telp_perusahaan');
        });
    }
};
