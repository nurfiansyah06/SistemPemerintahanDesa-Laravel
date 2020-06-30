<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deads', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('name');
            $table->integer('no_kk');
            $table->integer('no_aktakematian');
            $table->date('tgl_lahir');
            $table->date('tgl_kematian');

            $table->softDeletes();
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
        Schema::dropIfExists('deads');
    }
}
