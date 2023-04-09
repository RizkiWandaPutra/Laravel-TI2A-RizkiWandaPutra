<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMahasiswaTi2aSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_ti2a', function (Blueprint $table) {
            $table->renameColumn('Nama', 'Nama_Lengkap');
            $table->dropColumn('ipk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_ti2a', function (Blueprint $table) {
            $table->renameColumn('Nama_Lengkap', 'Nama');
            $table->decimal('ipk', 3, 2)->default(1.00);
        });
    }
}
