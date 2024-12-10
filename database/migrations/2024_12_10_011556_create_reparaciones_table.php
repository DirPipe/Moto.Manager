<?php

// database/migrations/YYYY_MM_DD_create_reparaciones_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionesTable extends Migration
{
    public function up()
    {
        Schema::create('reparacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('moto_id')->constrained()->onDelete('cascade');
            $table->foreignId('mecanico_id')->constrained('users')->onDelete('cascade');
            $table->text('descripcion');
            $table->date('fecha');
            $table->decimal('costo', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reparaciones');
    }
}
