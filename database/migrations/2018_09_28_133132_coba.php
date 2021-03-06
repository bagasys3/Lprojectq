<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->date('tanggal');
            $table->string('ruangan');
            $table->timestamp('jam_mulai')->useCurrent();
            $table->timestamp('jam_berakhir')->useCurrent();
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('jadwal');
    }
}
