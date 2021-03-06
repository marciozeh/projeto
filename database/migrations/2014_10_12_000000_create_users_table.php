<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('foto');
            $table->string('graduacao');
            $table->string('nomeGuerra');
            $table->string('secao');
            $table->float('idtMil')->unique();
            $table->float('cpf')->unique();
            $table->float('rg');
            $table->string('dataNasc');
            $table->string('dataPraca');
            $table->string('escolaridade');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('email')->unique();
            $table->string('password');
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
