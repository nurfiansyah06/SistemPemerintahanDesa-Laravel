<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('nik');
            $table->string('password');
            $table->string('name');
            $table->integer('no_kk');
            $table->integer('no_aktalahir');
            $table->integer('no_aktakematian');
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->string('agama');
            $table->string('jns_kelamin');
            $table->string('jns_pekerjaan');
            $table->string('status_kawin');
            $table->string('status_migrasi');

            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
