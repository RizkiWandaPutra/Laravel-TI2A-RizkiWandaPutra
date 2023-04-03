<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTi2aSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_ti2a', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('NIM');
            $table->string('Nama');
            $table->string('Alamat');
            $table->decimal('ipk',3,2)->default(1.00);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_ti2a');
    }
}
