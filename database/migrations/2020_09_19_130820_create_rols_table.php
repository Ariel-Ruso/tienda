<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id()->unique();
            $table->String('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
