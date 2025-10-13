<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('insurance', function (Blueprint $table) {
            $table->id();
            $table->string('nama_debitur');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('mulai_asuransi');
            $table->integer('jangka_waktu');
            $table->decimal('plafon_kredit', 22, 2);
            $table->decimal('premi', 22, 2);
            $table->integer('usia');
            $table->date('akhir_asuransi');
            $table->decimal('rate', 22, 2);
            $table->timestamps();
            $table->softDeletes(); // Adds the "deleted_at" column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance');
    }
};
