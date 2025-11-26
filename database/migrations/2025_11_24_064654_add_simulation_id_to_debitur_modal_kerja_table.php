<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('debitur_modal_kerja', function (Blueprint $table) {
            $table->foreignId('simulation_id')->nullable()->after('id')->constrained('simulations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('debitur_modal_kerja', function (Blueprint $table) {
            $table->dropForeign(['simulation_id']);
            $table->dropColumn('simulation_id');
        });
    }
};
