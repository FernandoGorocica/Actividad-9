<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividad9Table extends Migration
{
    public function up()
    {
        Schema::create('actividad9', function (Blueprint $table) { // ← Nombre exacto
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('foto');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actividad9');
    }
}