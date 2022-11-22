<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("email");
            $table->string("password");
            $table->string("CPF");
            $table->boolean('admin')->default(0);
            $table->timestamps();
        });

        DB::table('usuarios')->insert([
            ['nome' => 'joao', 'email' => 'joao.jao@gmail.com', 'password' => Hash::make('joaojaojoao'), 'CPF' => "00000000000", 'admin' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
