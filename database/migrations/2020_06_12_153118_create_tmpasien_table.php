<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmpasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmpasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',50);
            $table->enum('jk',['L','P']);
            $table->string('alamat',50);
            $table->string('no_telp',50);
            $table->string('rtrw',50);
            $table->string('kelurahan',50);
            $table->text('keluhan');
            $table->string('tgl_lahir',50);
            $table->enum('jk',['L','P']);
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
        Schema::dropIfExists('tmpasien');
    }
}
