<?php

// database/migrations/YYYY_MM_DD_create_estado_motos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoMotosTable extends Migration
{
    public function up()
    {
        Schema::create('estado_motos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('moto_id')->constrained()->onDelete('cascade');
            $table->foreignId('mecanico_id')->constrained('users')->onDelete('cascade');
            $table->text('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_motos');
    }
}
